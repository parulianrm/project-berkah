<?php

namespace App\Models;


class Motor
{
    //properti yang ada dalam class
    public $merk;
    public $jenis;
    public $warna;
    public $rem;


    public function __construct($merk = null, $jenis = null, $warna = null, $rem = null)
    {
        // setter parameter yang dikirim dengan parameter ( dalam contoh kasus ini, parameter merupakan construct)
        // $this digunakan untuk mengakses class diluar function,
        $this->jenis = $jenis;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->rem = $rem;
    }

    public function remMereun()
    {
        return $this->rem;
    }
}
