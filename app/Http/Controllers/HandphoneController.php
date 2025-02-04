<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use Illuminate\Http\Request;

class HandphoneController
{
    public function nyalakan()
    {
        $hp = new Handphone();
        return $hp->nyalakan();
    }

    public function matikan()
    {
        $hp = new Handphone();
        return $hp->matikan();
    }

    public function panggil($nomor)
    {
        $hp = new Handphone();
        return $hp->panggil_nomor($nomor);
    }

    public function sms($pesan)
    {
        $hp = new Handphone();
        return $hp->kirim_pesan(($pesan));
    }
}
