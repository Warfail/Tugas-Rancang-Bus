<?php

namespace App\Models;

use CodeIgniter\Model;

class BusModel extends Model
{
    //nama tabelnya
    protected $table      = 'masterdata_bus';

    //nama PK nya
    protected $primaryKey = 'id_bus';

    //ngasih tau field mana yang boleh di isi di table
    protected $allowedFields = [
        'id_bus',
        'nama_bus',
        'jam_berangkat',
        'jam_tiba',
        'dari',
        'ke',
        'harga_tiket',
        'jumlah_kursi',
    ];

    //untuk dapetin data bus
    public function getData($pk = false)
    {
        //ngembaliin semua data
        if ($pk == false) {
            return $this->findAll();
        }

        //ngembaliin data khusus
        return $this->where(['id_bus' => $pk])->first();
    }
}
