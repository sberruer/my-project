<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class FileController extends Controller
{
    /**
     * @Route("/file", name="file")
     */
    public function index()
    {
        return $this->file(
            "C:\Users\sebastien.berruer\workspaces\workspace-php-symfony4\my-project\src\Controller\FailController.php",
            'mon_fichier.php'
        );
    }
}
