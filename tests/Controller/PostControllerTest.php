<?php
namespace App\Tests\Controller;

use PHPUnit\Framework\WarningTestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostControllerTest extends WebTestCase
{
    
    public function testShowPost() {
        $client = static::createClient();
        
        $crawler = $client->request('GET', '/lucky/number');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("number")')->count());
    }
    
}

