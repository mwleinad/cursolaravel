<?php

namespace App\Http\Services;

class HelperService
{
    public function sumArray($a = [])
    {
        $sum = 0;
        foreach($a  as $key => $value)
        {
            $sum += $value;
        }

        return $sum;
    }
}