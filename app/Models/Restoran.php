<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restoran extends Model
{
    public function tambah_menu(string $menu)
    {
        echo "Menu $menu ditambahkan";
    }

    public function tampilkan_menu()
    {
        echo "Menampilkan semua menu";
    }

    public function ambil_pesanan(string $menu)
    {
        echo "pesanan $menu telah diambil";
    }

    public function hitung_total_harga(int $harga)
    {
        echo "Total harga: Rp. $harga";
    }
}
