<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class InjectionController extends AbstractController
{
    /**
     * @Route("/injection", name="injection")
     */
    public function index()
    {
        return $this->render('injection/index.html.twig', [
            'controller_name' => 'InjectionController',
        ]);
    }
}
