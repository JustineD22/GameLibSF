<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/index', name: 'index')]
    public function index(): Response
    {

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/contact', name: 'contact')]
    public function contact() : Response
    {
        return $this->render('default/contact.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/displaygames', name: 'displaygames')]
    public function displaygames() : Response
    {
        return $this->render('default/displaygames.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


}
