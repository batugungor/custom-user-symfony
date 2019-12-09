<?php

namespace App\Controller;

use App\Entity\TblCompaniesServicesContracts;
use App\Repository\TblCompaniesRepository;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class PdfController extends AbstractController
{
    public $session;

    public function __construct(SessionInterface $session)
    {
        $session->start();
        $this->session = $session;
    }

    /**
     * @Route("/dashboard", name="pdf_dashboard")
     */
    public function index()
    {
        //todo add some cool data

        return $this->render('pdf/index.html.twig', [
            'controller_name' => 'PdfController',
        ]);
    }

    /**
     * @Route("/contracts", name="pdf_contracts")
     * @param TblCompaniesRepository $companyRepository
     * @return RedirectResponse|Response
     * @throws NonUniqueResultException
     */
    public function contracts(TblCompaniesRepository $companyRepository)
    {
        if (empty($user = $this->session->get('user'))) {
            return $this->redirectToRoute('security_login');
        }

        $company = $companyRepository->getActiveServicesById($user->getCompany()->getTblCompaniesId());

        return $this->render('pdf/contracts.html.twig', [
            'company' => $company,
        ]);
    }

    /**
     * @Route("/contracts/{service}", name="pdf_serivces")
     * @param TblCompaniesRepository $companyRepository
     * @param string $service
     * @return RedirectResponse|Response
     * @throws NonUniqueResultException
     */
    public function serviceContracts(TblCompaniesRepository $companyRepository, string $service)
    {
        if (empty($user = $this->session->get('user'))) {
            return $this->redirectToRoute('security_login');
        }

        $company = $companyRepository->getServicesById($user->getCompany()->getTblCompaniesId(), $service);

        return $this->render('pdf/pdfs.html.twig', [
            'service' => $company->getServices()[0],
        ]);
    }

    /**
     * @Route("/pdf/{contractOrdernr}", name="pdf_serve")
     * @param TblCompaniesRepository $companyRepository
     * @param TblCompaniesServicesContracts $contract
     * @return BinaryFileResponse
     * @throws NonUniqueResultException
     */
    public function pdf(TblCompaniesServicesContracts $contract, TblCompaniesRepository $companyRepository) {
        if (empty($user = $this->session->get('user'))) {
            return $this->redirectToRoute('security_login');
        }

        $company = $companyRepository->getCompanyByOrdernr($user->getCompany()->getTblCompaniesId(), $contract->getTblCompaniesServicesContractsId());
        $pathToFile = '../pdf/' . $contract->getService()->getCompany()->getCompanyName() . '/' . $contract->getService()->getServiceName() . '/' . $contract->getContractMd5() . '.pdf';

        if (empty($company) || !file_exists($pathToFile)) {
            return $this->redirectToRoute('pdf_serivces', ['service' => $contract->getService()->getServiceId()]);
        }

        return new BinaryFileResponse($pathToFile);
    }
}
