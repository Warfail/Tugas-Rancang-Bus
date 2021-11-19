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
}
