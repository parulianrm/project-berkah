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
}
