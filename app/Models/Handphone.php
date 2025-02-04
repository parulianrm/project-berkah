<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Handphone extends Model
{
    public $guarded = [];

    public function nyalakan()
    {
        echo "Handphone dinyalakan";
    }

    public function matikan()
    {
        echo "Handphone dimatikan";
    }

    public function panggil_nomor(string $nomor)
    {
        echo "Handphone sedang menghubungi nomor $nomor";
    }

    public function kirim_pesan(string $pesan)
    {
        echo "pesan $pesan telah terkirim";
    }
};
