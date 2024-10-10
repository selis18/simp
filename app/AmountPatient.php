<?php

namespace App;

class AmountPatient
{
    static public int $amountPatient = 0;
    static public function count() : int
    {
        self::$amountPatient++;
        return self::$amountPatient;
    }
}