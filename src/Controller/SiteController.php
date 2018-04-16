<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Service\SiteUpdateManager;

class SiteController extends Controller
{
    /**
     * @Route("/site", name="site")
     */
    public function index(SiteUpdateManager $siteUpdateManager)
    {
        $siteUpdateManager->notifyOfSiteUpdate();
        
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }
}
