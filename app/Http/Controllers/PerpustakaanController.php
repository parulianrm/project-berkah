<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController
{
    public function tambah($judul)
    {
        $perpus = new Perpustakaan();
        return $perpus->tambah_buku($judul);
    }

    public function hapus($judul)
    {
        $perpus = new Perpustakaan();
        return $perpus->hapus_buku($judul);
    }

    public function pinjam($judul)
    {
        $perpus = new Perpustakaan();
        return $perpus->pinjam_buku($judul);
    }

    public function kembali($judul)
    {
        $perpus = new Perpustakaan();
        return $perpus->kembalikan_buku($judul);
    }
}
