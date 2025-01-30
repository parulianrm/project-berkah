<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController
{
    public function moveForward(string $merk, string $type, string $colors, int $jarak)
    {
        $data = [
            'merk' => $merk,
            'type' => $type,
            'colors' => $colors,
            'posisi' => $jarak
        ];

        $mobil = new Car($data);
        $mobil->maju(10);
        $mobil->maju(20);

        echo "Mobil dengan merk $merk ber type $type dan berwarna telah berjalan selauh " . $mobil->posisi . ' yard';
    }
}
