<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FailController extends Controller
{
    /**
     * @Route("/fail", name="fail")
     */
    public function index()
    {
        throw $this->createNotFoundException("Exemple d'exception");
        
        return $this->render('fail/index.html.twig', [
            'controller_name' => 'FailController',
        ]);
    }
}
