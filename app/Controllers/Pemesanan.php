<?php

namespace App\Controllers;

class Pemesanan extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->pesan = new \App\Models\UserPesanModel();
        $this->bayar = new \App\Models\UserBayarModel();
        $this->db = \Config\Database::connect();
    }
    public function getKey()
    {
        //return kode toko
        $this->db->reconnect();
        $query = $this->db->query("SELECT username AS kunci FROM users WHERE id='" . user_id() . "'");
        return '' . $query->getResultArray()[0]['kunci'];
    }
    public function prosespesan()
    {
        // dd($this->request->getVar('id_pemesanan'));
        $this->pesan->save([
            'id_pemesanan' => $this->request->getVar('id_pemesanan'),
            'waktu_reservasi' => $this->request->getVar('waktu_reservasi'),
            'jumlah' => $this->request->getVar('jumlah'),
            'id_bus' => $this->request->getVar('id_bus'),
            'username' => $this->request->getVar('username'),
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
            'username' => $this->request->getVar('username'),
        ]);

        $this->db->reconnect();
        $query = $this->db->query("SELECT username as usr FROM pemesanan where username = '" . user_id() . "'");
        $usr = $query->getResultArray()[0]['usr'];
        $allData = ['datas' => $this->pesan->getDataPesan($usr, $this->getKey())];
        return view('user/daftar_pesanan', $allData);
    }

    public function userpemesanan()
    {
        $this->db->reconnect();
        $query = $this->db->query("SELECT username as usr FROM pemesanan where username = '" . user_id() . "'");
        $usr = $query->getResultArray()[0]['usr'];
        // dd(user_id());
        // echo $data;
        $allData = ['datas' => $this->pesan->getDataPesan($usr, $this->getKey())];
        // dd($allData);
        // dd($usr);
        // dd($this->getKey());
        return view('user/daftar_pesanan', $allData);
    }
}
