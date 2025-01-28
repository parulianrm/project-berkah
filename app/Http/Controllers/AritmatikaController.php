<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AritmatikaController
{
    public function penambahan($angka1, $angka2)
    {
        $hasil = $angka1 + $angka2;
        return "hasil dari $angka1 + $angka2 adalah $hasil";
    }
}
