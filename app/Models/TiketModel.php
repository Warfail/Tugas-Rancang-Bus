<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    //nama tabelnya
    protected $table      = 'tiket';

    //nama PK nya
    protected $primaryKey = 'id_tiket';

    //ngasih tau field mana yang boleh di isi di table
    protected $allowedFields = [
        'id_tiket',
        'id_pemesanan',
        'status',
        'no_duduk',
    ];

    //untuk dapetin data bus
    public function getData($pk = false)
    {
        //ngembaliin semua data
        if ($pk == false) {
            return $this->findAll();
        }

        //ngembaliin data khusus
        return $this->where(['id_tiket' => $pk])->first();
    }
}
