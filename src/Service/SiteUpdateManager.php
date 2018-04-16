<?php
namespace App\Service;

use Psr\Log\LoggerInterface;

class SiteUpdateManager
{
    private $adminEmail;
    private $logger;
    
    public function __construct($adminEmail, LoggerInterface $logger) {
        $this->adminEmail = $adminEmail;
        $this->logger = $logger;
    }
    
    public function notifyOfSiteUpdate() {
        $this->logger->info("Notify to {email}", ["email" => $this->adminEmail]);
    }
    
}

