<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CssController extends Controller
{
    /**
     * @Route("/css", name="css")
     */
    public function index(Request $request)
    {
        $page = $request->query->get('page');
        $name = $request->request->get('name');
        
        $cookie = $request->cookies->get("PHPSESSID");
        
        $hostname = $request->headers->get("host");
        
//         return $this->render('css/index.html.twig', [
//             'controller_name' => 'CssController',
//             'page_number' => $page,
//             'name' => $name,
//             'cookie_content' => $cookie,
//             'hostname' => $hostname
//         ]);
        
        $response = new Response('<style>...</style>');
        $response->headers->set("content-type", "text/css");
        return $response;
    }
}
