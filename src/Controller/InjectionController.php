<?php

namespace App\Controller;

use App\Entity\Capitalise;
use App\Entity\Dashes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class InjectionController extends AbstractController
{
    /**
     * @Route("/", name="injection")
     */
    public function index() {
        $capitals = new Capitalise();
        $dashes = new Dashes();

        return $this->render('injection/index.html.twig', [
            'controller_name' => 'InjectionController',
            'outputCapitals' => $capitals->transform($_POST['capitaliser'] ?? ""),
            'outputDashes' => $dashes->transform($_POST['dasher'] ?? "")
        ]);
    }
}
