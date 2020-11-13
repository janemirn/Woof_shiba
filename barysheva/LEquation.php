<?php

namespace barysheva;


class LEquation
{
    protected $X;

    public function l_solve($a, $b)
    {
        if ($a == 0) {
            return null;
        }

        return $this->X =array( -$b / $a);
    }
}
