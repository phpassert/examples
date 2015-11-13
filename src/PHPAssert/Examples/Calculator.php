<?php
namespace PHPAssert\Examples;


class Calculator
{
    function add(...$numbers)
    {
        return array_sum($numbers);
    }
}
