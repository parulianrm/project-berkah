<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $guarded = [];

    public function maju(int $jarak)
    {
        $this->posisi += $jarak;
    }

    public function mundur()
    {
        $this->distarter();
        $this->gigiMundur();
        $this->remTangan();
        $this->pedalGas();
    }

    public function stop()
    {
        $this->pedalRem();
        $this->gigiNetral();
        $this->remTangan();
    }

    public function distarter()
    {
        echo "Menghidupkan mesin";
    }
    public function pedalGas()
    {
        echo "Menginjak pedal gas";
    }

    public function pedalRem()
    {
        echo "Menginjak pedal rem";
    }

    public function gigiNetral()
    {
        echo "Mengatur gigi menjadi netral";
    }

    public function gigiMaju()
    {
        echo "Menginjak gigi maju";
    }

    public function gigiMundur()
    {
        echo "Menginjak gigi mundur";
    }

    public function remTangan()
    {
        echo "Tarik / turunkan rem tangan";
    }

    public function percepat()
    {
        echo "kendaraan dipercepat";
    }


    public function rem()
    {
        echo "Menginjak pedal rem";
    }

    public function isi_bahan_bakar(string $jumlah)
    {
        echo "Isi bahan bakar sebanyak $jumlah liter";
    }

    public function cek_status_bahan_bakar()
    {
        echo "status bahan bakar dicek";
    }
}
