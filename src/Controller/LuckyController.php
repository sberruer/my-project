<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Psr\Log\LoggerInterface;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function number() {
        $number = mt_rand(0, 100);
        
        return $this->render("lucky/number.html.twig", ['number' => $number]);
    }
    
    /**
     * @Route("/lucky/number/{max}")
     */
    public function numberWithMax($max, LoggerInterface $logger) {
        $number = mt_rand(0, $max);
        
        $logger->info("We are logging");
        
        return $this->render("lucky/number.html.twig", ['number' => $number]);
    }
}

