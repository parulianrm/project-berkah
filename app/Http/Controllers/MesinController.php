<?php

namespace App\Http\Controllers;

use App\Models\MesinCuci;
use Illuminate\Http\Request;

class MesinController
{
    public function nyalakan()
    {
        $mesin = new MesinCuci();
        return $mesin->turnOn();
    }

    public function tambahDetergen()
    {
        $mesin = new MesinCuci();
        return $mesin->addDetergen();
    }

    public function mulaiCuci()
    {
        $mesin = new MesinCuci();
        return $mesin->startWash();
    }

    public function keringin()
    {
        $mesin = new MesinCuci();
        return $mesin->dry();
    }
}
