<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function __construct()
    {
        $this->bus = new \App\Models\BusModel();
        $this->pesan = new \App\Models\UserPesanModel();
    }

    public function formpesan($id)
    {
        $alldata = ['datas' => $this->bus->getData($id)];
        $alldata2 = ['datas2' => $this->pesan->getLatestID()];
        if ($alldata2['datas2'] == NULL) {
            $alldata2['datas2'] = ['id_pemesanan' => 'R000000'];
        }
        // dd(array_merge($alldata, $alldata2));
        return view('user/daftar_pesanan', array_merge($alldata, $alldata2));
    }

    public function userpesan()
    {
        $alldata = ['datas' => $this->bus->getData()];

        return view('user/pesan_bus', $alldata);
    }
}
