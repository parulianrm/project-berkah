<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    public function tambah_buku(string $judul)
    {
        echo "buku $judul ditambahkan";
    }

    public function hapus_buku(string $judul)
    {
        echo "buku $judul dihapus";
    }

    public function pinjam_buku(string $judul)
    {
        echo "buku $judul telah di pinjam";
    }

    public function kembalikan_buku(string $judul)
    {
        echo "buku $judul telah dikembalikan";
    }
}
