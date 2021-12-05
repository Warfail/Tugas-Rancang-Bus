<?php

namespace App\Models;

use CodeIgniter\Model;

class UserPesanModel extends Model
{
    //nama tabelnya
    protected $table      = 'pemesanan';

    //nama PK nya
    protected $primaryKey = 'id_pemesanan';

    //ngasih tau field mana yang boleh di isi di table
    protected $allowedFields = [
        'id_pemesanan',
        'waktu_reservasi',
        'jumlah',
        'id_bus',
        'username',
    ];

    public function getLatestID()
    {
        $data = $this->select('id_pemesanan')->orderBy('id_pemesanan', 'desc')->limit(1)->first();
        if (!is_null($data)) {
            return $data;
        }
        return null;
    }

    //untuk dapetin data pemesanan
    public function getData($pk = false)
    {
        //ngembaliin semua data
        if ($pk == false) {
            return $this->findAll();
        }

        //ngembaliin data khusus
        return $this->where(['id_pemesanan' => $pk])->first();
    }

    public function getDataPesan($pk = false, $id = false)
    {
        //ngembaliin semua data
        if ($pk == false) {
            $data = $this
                ->select('*')
                ->findAll();
            if (!is_null($data)) {
                return $data;
            }
            return null;
        }

        //ngembaliin data khusus
        $data = $this
            ->select('*')
            ->where(['pemesanan.username' => $pk])
            ->findAll();
        if (!is_null($data)) {
            return $data;
        }
        return null;
    }
}
