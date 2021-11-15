<?php

namespace App\Models;

use CodeIgniter\Model;

class UserBayarModel extends Model
{
    //nama tabelnya
    protected $table      = 'pembayaran';

    //nama PK nya
    protected $primaryKey = 'id_pembayaran';

    //ngasih tau field mana yang boleh di isi di table
    protected $allowedFields = [
        'id_pembayaran',
        'tanggal_pembayaran',
        'total',
        'status',
        'id_pemesanan',
    ];

    public function getLatestID()
    {
        $data = $this->select('id_pembayaran')->orderBy('id_pembayaran', 'desc')->limit(1)->first();
        if (!is_null($data)) {
            return $data;
        }
        return null;
    }

    //untuk dapetin data bus
    public function getData($pk = false)
    {
        //ngembaliin semua data
        if ($pk == false) {
            return $this->findAll();
        }

        //ngembaliin data khusus
        return $this->where(['id_pembayaran' => $pk])->first();
    }
}
