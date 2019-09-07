<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    public function index()
    {
        return $this->render('default/index.html.twig', [
                'controller_name' => 'DefaultController',
        ]);
    }

    public function test()
    {
        return $this->render('default/test.html.twig', [
                'controller_name' => 'tet',
        ]);
    }
}
