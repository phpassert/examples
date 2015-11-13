<?php
namespace tests\PHPAssert\Examples;

use PHPAssert\Examples\Calculator;

class TestCalculator
{
    function testAddWithNoArgs()
    {
        $calc = new Calculator();
        assert(0 === $calc->add());
    }

    function testAddWithOneArg()
    {
        $calc = new Calculator();
        assert(1 === $calc->add(1));
    }

    function testAdd()
    {
        $calc = new Calculator();
        assert(3 === $calc->add(1, 2));
    }
}
