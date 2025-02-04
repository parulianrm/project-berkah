<?php

namespace App\Http\Controllers;

use App\Models\Kalkulator;
use Illuminate\Http\Request;

class KalkulatorController
{
    public function penjumlahan($a, $b)
    {
        $calc = new Kalkulator();
        return $calc->penjumlahan($a, $b);
    }
    public function pengurangan($a, $b)
    {
        $calc = new Kalkulator();
        return $calc->pengurangan($a, $b);
    }
    public function perkalian($a, $b)
    {
        $calc = new Kalkulator();
        return $calc->perkalian($a, $b);
    }
    public function pembagian($a, $b)
    {
        $calc = new Kalkulator();
        return $calc->pembagian($a, $b);
    }
}
