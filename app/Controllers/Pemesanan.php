<?php

namespace App\Controllers;

class Pemesanan extends BaseController
{

    public function __construct()
    {
        $this->pesan = new \App\Models\UserPesanModel();
        $this->bayar = new \App\Models\UserBayarModel();
    }

    public function prosespesan()
    {
        // dd($this->request->getVar('id_pemesanan'));
        $this->pesan->save([
            'id_pemesanan' => $this->request->getVar('id_pemesanan'),
            'waktu_reservasi' => $this->request->getVar('waktu_reservasi'),
            'jumlah' => $this->request->getVar('jumlah'),
            'id_bus' => $this->request->getVar('id_bus'),
        ]);

        $alldata2 = ['datas2' => $this->bayar->getLatestID()];
        if ($alldata2['datas2'] == NULL) {
            $alldata2['datas2'] = ['id_pembayaran' => 'BYR0000'];
        }
        // dd($alldata2['datas2']['id_pembayaran']);

        $idbayar = substr($alldata2['datas2']['id_pembayaran'], 0, 3) . str_pad((int)substr($alldata2['datas2']['id_pembayaran'], 3) + 1, 4, '0', STR_PAD_LEFT);
        // dd($idbayar);

        $this->bayar->save([
            'id_pembayaran' => $idbayar,
            'total' => $this->request->getVar('total_bayar'),
            'status' => 'Pending',
            'id_pemesanan' => $this->request->getVar('id_pemesanan'),
        ]);
    }
}
