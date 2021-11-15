<?php

namespace App\Controllers;

use Myth\Auth\Password;
use SebastianBergmann\CodeUnit\FunctionUnit;

class MasterData extends BaseController
{

    public function __construct()
    {
        $this->bus = new \App\Models\BusModel();
        $this->tiket = new \App\Models\TiketModel();
        $this->penumpang = new \App\Models\PenumpangModel();
        $this->bayar = new \App\Models\UserBayarModel();
        $this->pesan = new \App\Models\UserPesanModel();
    }

    public function daftarbus()
    {
        $alldata = ['datas' => $this->bus->getData()];

        return view('admin/daftar_bus', $alldata);
    }

    public function daftartiket()
    {
        $alldata = ['datas' => $this->tiket->getData()];

        return view('admin/daftar_tiket', $alldata);
    }

    public function daftarpenumpang()
    {
        $alldata = ['datas' => $this->penumpang->getData()];

        return view('admin/daftar_penumpang', $alldata);
    }

    public function daftarbayar()
    {
        $alldata = ['datas' => $this->bayar->getData()];

        return view('admin/daftar_pembayaran', $alldata);
    }

    public function daftarpesan()
    {
        $alldata = ['datas' => $this->pesan->getData()];

        return view('admin/daftar_pemesanan', $alldata);
    }
}
