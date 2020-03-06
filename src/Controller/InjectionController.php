<?php

namespace App\Controller;

use App\Entity\Capitalise;
use App\Entity\Dashes;
use App\Entity\DoNothing;
use App\Entity\Logger;
use App\Entity\Master;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class InjectionController extends AbstractController
{
    /**
     * @Route("/", name="injection")
     */
    public function index() {
        if (!isset($_POST['dropdown'])) {
            $master = new Master(new DoNothing());
        } elseif ($_POST['dropdown'] === 'capitaliser') {
            $master = new Master(new Capitalise());
        } elseif ($_POST['dropdown'] === 'dasher') {
            $master = new Master(new Dashes());
        }

        $logger = new Logger();
        $logger->log($master->mightyMorphingTransformer($_POST['input'] ?? ""));

        return $this->render('injection/index.html.twig', [
            'controller_name' => 'InjectionController',
            'output' => $master->mightyMorphingTransformer($_POST['input'] ?? "")
        ]);
    }
}
