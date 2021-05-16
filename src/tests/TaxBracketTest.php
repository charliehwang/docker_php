<?php
// phpunit --filter TaxBracketTest::testCalculationOfTaxes

// namespace UnitTestFiles\Test;
use PHPUnit\Framework\TestCase;
include_once __DIR__.'/../TaxBracket.php';
// use TaxBracket\calculateTaxes;

class TaxBracketTest extends TestCase 
{
  public function testCalculationOfTaxes()
  {
    define("TAX_BRACKETS",  [[5000, 0], [10000, .1], [20000, .2], [10000, .3], [null, .4]]);
 
    //5,000  0.0  5,000 : 0
    //10,000 0.1 15,000 : 1000
    //20,000 0.2 35,000 : 4000
    //10,000 0.3 45,000 : 3000
    //null   0.4 55,000 : 10k * 0.4 = 4000
    //total tax = 1000 + 4000 + 3000 + 4000 = 12,000
    $this->assertEquals(TaxBracket\calculateTaxes(TAX_BRACKETS,5000),0);
 
    
  }
}

