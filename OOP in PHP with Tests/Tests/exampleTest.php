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
    function testFunctionCanAddTwoNumbers() {
        $sum = add(1, 2);
        $this->assertEquals(3, $sum);
    }
}
