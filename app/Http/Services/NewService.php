<?php

namespace App\Http\Services;

class NewService
{
    public function __construct()
    {
    }

    public function sum($a, $b)
    {
        //echo $c;
        return $a + $b;
    }
}