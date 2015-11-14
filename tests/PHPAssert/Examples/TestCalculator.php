<?php
namespace tests\PHPAssert\Examples;

use PHPAssert\Core\Error\SkipException;
use PHPAssert\Examples\Calculator;

class TestCalculator
{
    /**
     * @var Calculator
     */
    private $calc;

    function beforeMethod()
    {
        $this->calc = new Calculator();
    }

    function testAddWithNoArgs()
    {
        assert(0 === $this->calc->add());
    }

    function testAddWithOneArg()
    {
        assert(1 === $this->calc->add(1));
    }

    function testAdd()
    {
        assert(3 === $this->calc->add(1, 2));
    }

    function testSubtractWithNoArg()
    {
        assert(0 === $this->calc->subtract());
    }

    function testSubtractWithArg()
    {
        assert(1 === $this->calc->subtract(1));
    }

    function testSubtractWithArgs()
    {
        assert(0 === $this->calc->subtract(3, 2, 1));
    }

    function testNotImplemented()
    {
        throw new SkipException('Not yet implemented :c');
    }
}
