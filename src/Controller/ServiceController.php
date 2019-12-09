<?php

namespace App\Controller;

use App\Entity\Contract;
use App\Entity\Pdf;
use App\Entity\TblCompanies;
use App\Entity\TblCompaniesCustomers;
use App\Entity\TblCompaniesServicesContracts;
use App\Form\ApplyType;
use App\Repository\TblCompaniesRepository;
use DateTime;
use Doctrine\ORM\NonUniqueResultException;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    public $request;

    public function __construct(RequestStack $requestStack)
    {
        $this->request = $requestStack->getCurrentRequest();
    }

    /**
     * @Route("/{slug}/services", name="service")
     * @param TblCompaniesRepository $companyRepository
     * @param string $slug
     * @return Response
     * @throws NonUniqueResultException
     */
    public function index(TblCompaniesRepository $companyRepository, string $slug)
    {
        //$company = $companyRepository->findOneBy(['companyName' => ucwords(str_replace('-', ' ', $slug))]);


        //TODO find a way to not show the duplicate record
        $company = $companyRepository->getActiveServices('verenigingen/' . $slug);

        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
            'company' => $company
        ]);
    }

    /**
     * @Route("/{slug}/{service}", name="service_register")
     * @param TblCompaniesRepository $companyRepository
     * @param string $slug
     * @param string $service
     * @return Response
     * @throws NonUniqueResultException
     */
    public function serviceRegister(TblCompaniesRepository $companyRepository, string $slug, string $service)
    {
        //TODO find a way to not show the duplicate record
        $company = $companyRepository->getByServices('verenigingen/' . $slug, $service);

        $form = $this->createForm(ApplyType::class);
        $form->handleRequest($this->request);

        //dd($this->request->request);
        //$birthday = $this->request->request->get('apply')['date_of_birth'];
        //dd([(new \DateTime())->setDate($birthday['day'], $birthday['month'], $birthday['year']), $birthday]);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $serviceData = $company->getServices()[0];

            $customer = new TblCompaniesCustomers();
            $customer->setTblCompaniesId($company->getTblCompaniesId());
            $customer->setCustomersId(''); //TODO generate customer_id
            $customer->setCustomerServiceCode($serviceData->getServiceId());
            $customer->setCustomerGroupCode(''); //TODO get customer_group_code
            $customer->setCustomerDateofbirth($data['date_of_birth']);

            $customer->setCustomerGender($data['gender'] != 'v' ? 'm' : 'v');
            $customer->setCustomerFirstname($data['firstname']);
            $customer->setCustomerLastname($data['lastname']); //TODO check if it doesn't have to be reversed
            $customer->setCustomerAddress($data['address']);
            $customer->setCustomerHousenr($data['house_number']);
            $customer->setCustomerZipcode($data['postal_code']);
            $customer->setCustomerCity($data['residence']);

            $customer->setCustomerPhonenr($data['phone_number']);
            $customer->setCustomerMobilenr($data['mobile_number']);
            $customer->setCustomerEmail($data['email']);

            $customer->setCustomerImportAmount($serviceData->getServiceStartupAmount()); //TODO check if this is the correct data

            $customer->setCustomerNewsletter(false);
            $customer->setCustomerNewsletters(false);
            $customer->setCustomerSepa(false);

            $customer->setCustomerIban($data['iban']);
            $customer->setCustomerIbanName($data['lastname']);
            $customer->setCustomerDateStart(new DateTime());

            $customer->setCustomerApproved(true);
            $customer->setCustomerActive(true);
            //TODO save

            //---------------------------------------

            $contract = new TblCompaniesServicesContracts();
            $contract->setTblCompaniesServicesId($serviceData->getTblCompaniesServicesId());
            $contract->setTblCompaniesId($company->getTblCompaniesId());
            //$contract->setTblCompaniesCustomersId($customer->getCustomersId()); //TODO set customer id
            $contract->setTblCompaniesCustomersId(1); // temp

            $contract->setContractOrdernr($this->getDoctrine()->getRepository(TblCompaniesServicesContracts::class)->getNextOrderNr());
            $contract->setContractDate(new DateTime()); //TODO check if this is the correct data
            $contract->setContractPrice($serviceData->getServicePrice());
            $contract->setContractPricetax(($serviceData->getServicePrice() / 100) * (100 + $serviceData->getServiceTax()));
            $contract->setContractTax($serviceData->getServiceTax());

            $contract->setContractPayed(false);
            $contract->setContractActive(true);
            $contract->setContractReminder(false);

            $contract->setContractAmountPerPeriod($serviceData->getServiceAmountPerPeriod());
            $contract->setContractPeriodInMonths($serviceData->getServicePeriodInMonths());
            $contract->setContractContractInMonths($serviceData->getServiceContractInMonths());
            $contract->setContractTerminateWithinContract($serviceData->getServiceTerminateWithinContract());
            $contract->setContractNoticePeriodInMonths($serviceData->getServiceNoticePeriodInMonths());
            $contract->setContractExtendInMonths($serviceData->getServiceExtendInMonths());
            $contract->setContractStartupAmount($serviceData->getServiceStartupAmount());
            $contract->setContractPayInOnce($serviceData->getServicePayInOnce());
            $contract->setContractPayInOnceDiscount($serviceData->getServicePayInOnceDiscount());
            $contract->setContractTerminated(false);
            $contract->setContractPaymentDay($serviceData->getServicePaymentDay());

            $contract->setContractEmail($customer->getCustomerEmail());
            $contract->setContractIban($customer->getCustomerIban());
            $contract->setContractIbanName($customer->getCustomerIbanName());
            $contract->setContractCredits(0);
            $contract->setContractApproved(true);

            $contract->setPayproInstallmentId(0); //TODO see what has to happen with the id
            $contract->setContractMd5(md5($contract->getTblCompaniesId() . "-" . $contract->getTblCompaniesCustomersId() . "-" . $contract->getTblCompaniesServicesContractsId() . "-" . $contract->getPayproInstallmentId())); //TODO generate md5
            //TODO save

            $this->pdf($company, $contract);
            exit;

        }

        return $this->render('default/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    //TEMP location
    private function pdf(TblCompanies $company, TblCompaniesServicesContracts $contract)
    {
        set_time_limit(100);

        $pdfOptions = new Options();
        $pdfOptions->setIsRemoteEnabled(true);
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('contract/index.html.twig', ['company' => $company, 'contract' => $contract]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        $output = $dompdf->output();

        if (!file_exists('../pdf')) {
            mkdir('../pdf');
        }

        if (!file_exists('../pdf/' . $company->getCompanyName())) {
            mkdir('../pdf/' . $company->getCompanyName());
        }

        if (!file_exists('../pdf/' . $company->getCompanyName() . '/' . $company->getServices()[0]->getServiceName())) {
            mkdir('../pdf/' . $company->getCompanyName() . '/' . $company->getServices()[0]->getServiceName());
        }

        $duplicate = 1;
        while (file_exists('../pdf/' . $company->getCompanyName() . '/' . $company->getServices()[0]->getServiceName() . '/' . $contract->getContractMd5() . '.pdf')) {
            if (!file_exists('../pdf/' . $company->getCompanyName() . '/' . $company->getServices()[0]->getServiceName() . '/' . $contract->getContractMd5() . '-' . $duplicate . '.pdf')) {
                $contract->setContractMd5($contract->getContractMd5() . '-' . $duplicate);
                //TODO save
            }
            $duplicate++;
        }

        $pathToFile = '../pdf/' . $company->getCompanyName() . '/' . $company->getServices()[0]->getServiceName() . '/' . $contract->getContractMd5() . '.pdf';
        file_put_contents($pathToFile, $output);

        $dompdf->stream("Factuur #" . $contract->getContractOrdernr() . ".pdf", [
            "Attachment" => false
        ]);
    }
}
