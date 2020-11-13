<?php
namespace barysheva;
use core\EquationInterface;

class QuEquation extends LEquation implements EquationInterface
{


    public function solve($a, $b, $c)
    {
        if ($a == 0) {
            return [$this->l_solve($b, $c)];
        }

        $D = $this->discriminant($a, $b, $c);

        if ($D > 0) {
            $X1 = (-$b + sqrt($D)) / (2 * $a);
            $X2 = (-$b - sqrt($D) )/ (2 * $a);
            return $this->X = array($X1, $X2);
        }
        if ($D == 0) {
            return $this->X  = [(-$b / 2 * $a)];
        }

        return 0;

    }

    protected function discriminant($a, $b, $c)
    {
        return ($b *$b) -4 * $a * $c;
    }
}
