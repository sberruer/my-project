<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogApiController extends Controller
{
    /**
     * @Route("/blog/api", name="blog_api", methods={"GET", "HEAD"})
     */
    public function index()
    {
        return $this->json(["message" => "coucou"]);
    }
    
    /**
     * @Route("/blog/api/{id}", methods={"GET", "HEAD"})
     */
    public function get($id)
    {
        return $this->json(["id" => $id]);
    }
    
    /**
     * @Route("/blog/api/{id}", methods={"PUT"})
     */
    public function edit($id)
    {
        return $this->json(["id" => $id, "edited" => true]);
    }
}
