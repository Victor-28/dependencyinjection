<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TransformController extends AbstractController
{
    /**
     * @Route("/transform", name="transform")
     */
    public function index()
    {
        return $this->render('transform/index.html.twig', [
            'controller_name' => 'TransformController',
        ]);
    }
}
