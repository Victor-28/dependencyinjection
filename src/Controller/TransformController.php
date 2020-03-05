<?php

namespace App\Controller;

use App\Services\Capitalise;
use App\Services\SpaceToDash;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TransformController extends AbstractController
{
    /**
     * @Route("/transform", name="transform")
     */
    public function index()
    {
        if (!isset($_POST['firstname'])){
            $_POST['firstname'] =  "";
        }
        $capital = new Capitalise();
        $dash = new SpaceToDash();
        return $this->render('transform/index.html.twig', [
            'controller_name' => 'TransformController',
            'result' => $capital->transform($_POST['firstname']),
            'dashresult' => $dash->transform($_POST['firstname'])
        ]);
    }
}
