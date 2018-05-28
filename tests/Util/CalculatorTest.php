<?php
namespace App\Tests\Util;

use PHPUnit\Framework\TestCase;
use App\Util\Calculator;
use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\Validator\Tests\Fixtures\ConstraintA;
use Symfony\Component\Validator\Constraints\EqualToValidator;

class CalculatorTest extends TestCase
{
    
    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);
        
        
        $this->assertEquals($result, 42, 'Erreur dans l\'addition');
    }
    
    public function testMaFonction() {
        $this->assertTrue(true);
    }
    
    public function testAddFluently() {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);
        
        $this->assertThat($result, new EqualToValidator(42));
    }
}

