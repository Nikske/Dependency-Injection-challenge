<?php

namespace App\Controller;

use App\Entity\Capitalise;
use App\Entity\Dashes;
use App\Entity\Logger;
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
        $capitalMessage = $capitals->transform($_POST['capitaliser'] ?? "");
        $dashMessage = $dashes->transform($_POST['dasher'] ?? "");

        $logger = new Logger();
        $logger->log($capitalMessage);
        $logger->log($dashMessage);

        return $this->render('injection/index.html.twig', [
            'controller_name' => 'InjectionController',
            'outputCapitals' => $capitalMessage,
            'outputDashes' => $dashMessage
        ]);
    }
}
