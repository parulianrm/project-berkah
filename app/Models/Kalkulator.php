<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kalkulator extends Model
{
    public function penjumlahan($a, $b)
    {
        $hasil = $a + $b;
        echo "Hasil dari $a + $b = $hasil";
    }

    public function pengurangan($a, $b)
    {
        $hasil = $a - $b;
        echo "Hasil dari $a - $b = $hasil";
    }

    public function perkalian($a, $b)
    {
        $hasil = $a * $b;
        echo "Hasil dari $a * $b = $hasil";
    }

    public function pembagian($a, $b)
    {
        $hasil = $a / $b;
        echo "Hasil dari $a / $b = $hasil";
    }
}
