<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SessionApiController extends Controller
{
    /**
     * @Route("/session/api", name="session_api, methods = {GET}")
     */
    public function index(SessionInterface $session)
    {
        $data = $session->all();
        
        return $this->json($data);
    }
    
    /**
     * @Route("/session/api/{paramName}/{paramValue}", name="session_api, methods = {POST}")
     */
    public function create($paramName, $paramValue, SessionInterface $session)
    {
        $data = $session->set($paramName, $paramValue);
        
        return $this->json($data);
    }
    
    /**
     * @Route("/session/api/{paramName}", name="session_api, methods = {DELETE}")
     */
    public function delete($paramName, SessionInterface $session)
    {
        if ($session->has($paramName)) {
            $data = $session->remove($paramName);
        }
        
        return $this->json($data);
    }
}
