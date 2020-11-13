<?php
namespace core;

interface EquationInterface {
    /**
     * должен быть унаследован одним из классов для решения уравнения (самому решить каким).
     * @param float $a
     * @param float $b
     * @param float $c
     *
     * @return array
     */
    public function solve($a, $b, $c);
}