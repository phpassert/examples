<?php
namespace PHPAssert\Examples;


class Calculator
{
    function add(...$numbers)
    {
        return array_sum($numbers);
    }

    function subtract(...$numbers)
    {
        $initial = array_shift($numbers);
        return array_reduce($numbers, function($prev, $cur) {
            return $prev - $cur;
        }, $initial) ?? 0;
    }
}
