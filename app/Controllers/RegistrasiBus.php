<?php

namespace App\Controllers;

class RegistrasiBus extends BaseController
{

    public function __construct()
    {
        $this->bus = new \App\Models\BusModel();
    }

    public function regisbus()
    {

        $alldata2 = ['datas2' => $this->bus->getLatestID()];
        if ($alldata2['datas2'] == NULL) {
            $alldata2['datas2'] = ['id_bus' => 'BUS_00000'];
        }
        // dd(array_merge($alldata, $alldata2));
        return view('admin/registrasi_bus', $alldata2);
    }

    public function tambahbus()
    {
        // dd($this->request->getVar('id_bus'));
        $this->bus->save([
            'id_bus' => $this->request->getVar('id_bus'),
            'nama_bus' => $this->request->getVar('nama_bus'),
            'jam_berangkat' => $this->request->getVar('jam_berangkat'),
            'jam_tiba' => $this->request->getVar('jam_tiba'),
            'dari' => $this->request->getVar('dari'),
            'ke' => $this->request->getVar('ke'),
            'harga_tiket' => $this->request->getVar('harga_tiket'),
            'jumlah_kursi' => $this->request->getVar('jumlah_kursi'),
        ]);
        return redirect()->to('/admin/daftar_bus');
    }
}
