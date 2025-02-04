<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MesinCuci extends Model
{
    public function turnOn()
    {
        echo "Mesin cuci dinyalakan";
    }

    public function addDetergen()
    {
        echo "Detergen ditambahkan";
    }

    public function startWash()
    {
        echo "Mencuci dimulai";
    }

    public function dry()
    {
        echo "Pakaian sedang dikeringkan";
    }
}
