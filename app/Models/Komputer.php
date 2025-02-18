<?php

namespace App\Models;

// buatkan flow text untuk menjelaskan proses ouput dari sebuah class construct

class Komputer
{

    public $monitor;
    public $keyboard;
    public $cpu;
    public $mouse;
    public $namaKomputer;
    public $status;


    // public function __construct($namaKomputer = null, $ram, $status = 0)
    // {
    //     $this->namaKomputer = $namaKomputer;
    //     $this->status = $status;
    // }

    // public function tampilkanNamaCpu()
    // {

    //     $this->cpu = 'A';
    // }

    // public function nyalakanKompter()
    // {

    //     // tekan tombol on CPU

    //     // $this->cpu->powerOn();

    //     // echo '1. Nyalain CPU';
    //     // echo '2. Nyalain Monitor';

    //     // nyalakan monitor

    //     echo $this->namaKomputer;
    //     $this->status = 1;
    //     echo 'dinyalakan';
    // }

    // public function matikanKomputer()
    // {
    //     echo 'Matikan Komputer';
    //     $this->status = 0;
    // }

    // parameter ( adalah sebuah nilai yang dikirimkan pada fungsi ) type
    // parameter type ( tipe yang digunakan kepada sebuah parameter )
    // cara pemanggilan class untuk menentukan parameter type ( bisa gunakan path namespace model )
    public function __construct(\App\Models\Mouse $mouse)
    {
        // setter nama parameter dengan property
        $this->mouse = $mouse;
    }
}
