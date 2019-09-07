<?php

namespace App\Controller;

use App\Entity\Anket;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnketController extends AbstractController
{
    /**
     * @Route("/anket", name="anket")
     */
    public function index()
    {
        return $this->render('anket/index.html.twig', [
                'controller_name' => 'AnketController',
        ]);
    }


    /**
     * @Route("/anket", name="anket")
     */
    public function create()
    {
        return $this->render('anket/create.html.twig', [
                'controller_name' => 'AnketController',
        ]);
    }


    /**
     * @Route("/anket", name="anket")
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $entityManager = $this->getDoctrine()->getManager();
            $anket = new Anket();
            dump($request);// die();
            $anket->setName($request->get('name'));
            $anket->setAge($request->get('age'));
            $anket->setDescription($request->get('description'));
            $entityManager->persist($anket);
            $entityManager->flush();
        }
        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/anket", name="anket")
     */
    public function list(Request $request)
    {
        return $this->render('anket/index.html.twig', [
                'controller_name' => 'AnketController',
        ]);
    }
}
