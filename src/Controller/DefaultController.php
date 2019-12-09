<?php

namespace App\Controller;

use App\Form\ApplyType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    public $session;

    public function __construct(SessionInterface $session)
    {
        $session->start();
        $this->session = $session;
    }

    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $form = $this->createForm(ApplyType::class);

        return $this->render('default/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
