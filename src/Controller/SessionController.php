<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionController extends Controller
{
    /**
     * @Route("/session", name="session")
     */
    public function index(SessionInterface $session)
    {
        $session->set("foo", "bar");
        
        $foo = $session->get("foo");
        
        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
            'foo' => $foo
        ]);
    }
}
