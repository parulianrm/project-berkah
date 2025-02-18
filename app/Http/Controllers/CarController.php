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

    public function percepat()
    {
        $mobil = new Car();
        return $mobil->percepat();
    }

    public function rem()
    {
        $mobil = new Car();
        return $mobil->rem();
    }
    public function isiBensin($jumlah)
    {
        $mobil = new Car();
        return $mobil->isi_bahan_bakar($jumlah);
    }


    public function indikator()
    {
        $mobil = new Car();
        return $mobil->cek_status_bahan_bakar();
    }

}
