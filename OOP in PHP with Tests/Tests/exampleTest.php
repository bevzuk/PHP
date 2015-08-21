<?php

/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 15.08.2015
 * Time: 21:57
 */

require_once '../Source/example.php';

class exampleTest extends PHPUnit_Framework_TestCase
{
    private $calculator;

    protected function setUp() {
        $this->calculator = new Calculator();
    }

    function testItCanAddTwoNumbers() {
        $this->assertEquals(5, $this->calculator->add(2, 3));
    }

    function testCanMultiplyTwoNumbers() {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
    }
}
