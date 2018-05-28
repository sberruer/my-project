<?php
namespace App\Tests\Controller;

use PHPUnit\Framework\WarningTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    
    public function testShowPost() {
        $client = static::createClient();
        
        $client->request('GET', '/lucky/number');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
}

