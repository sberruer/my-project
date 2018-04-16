<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Service\MessageGenerator;

class BlogController extends Controller
{
    /**
     * @Route("/blog/{page}", name="blog", requirements={"page"="\d+"})
     */
    public function index($page)
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'page_number' => $page
        ]);
    }
    
    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug, MessageGenerator $messageGenerator)
    {
        $message = $messageGenerator->getHappyMessage();
        
        $this->addFlash("notice", $message);
        
        return $this->render('blog/detail.html.twig', [
            'controller_name' => 'BlogController',
            'slug' => $slug
        ]);
    }
    
}
