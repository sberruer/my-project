<?php
namespace App\Tests\Util;

use PHPUnit\Framework\TestCase;
use App\Util\Calculator;

class CalculatorTest extends TestCase
{
    
    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);
        
        
        $this->assertEquals($result, 42, 'Erreur dans l\'addition');
    }
    
}

