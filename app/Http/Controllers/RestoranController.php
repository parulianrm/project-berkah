<?php

namespace App\Http\Controllers;

use App\Models\Restoran;
use Illuminate\Http\Request;

class RestoranController
{
    public function tambah($menu)
    {
        $resto = new Restoran();
        return $resto->tambah_menu($menu);
    }

    public function tampilkan()
    {
        $resto = new Restoran();
        return $resto->tampilkan_menu();
    }

    public function takeAway($menu)
    {
        $resto = new Restoran();
        return $resto->ambil_pesanan($menu);
    }

    public function payBill($harga)
    {
        $resto = new Restoran();
        return $resto->hitung_total_harga($harga);
    }
}
