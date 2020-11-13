<?php

class A
{
    protected $X;

    public function equation($a, $b)
    {
        return $a == 0 ? "a = 0!" : $this->X = -$b / $a;
    }
}

class B extends A
{
    protected $D;

    protected function discriminant($a, $b, $c)
    {
        return $this->D = ($b *$b) -4 * $a * $c;
    }

    public function qu_equation($a, $b, $c)
    {
        if ($a == 0) {
            return $this->equation($b, $c);
        }

        $D = $this->discriminant($a, $b, $c);

        if ($D > 0) {
            $X1 = (-$b + sqrt($D)) / (2 * $a);
            $X2 = (-$b - sqrt($D) )/ (2 * $a);
            return array($X1, $X2);
        }
        if ($D == 0) {
            return $X1 = (-$b / 2 * $a);
        }