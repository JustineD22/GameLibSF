<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function index(): Response
    {
        $urlHome = $this->generateUrl('default');

        return $this->render('default/index.html.twig', [
            'urlHome' => $urlHome,
            'controller_name' => 'DefaultController',
        ]);
    }
}
