<?php

namespace App\Models;

use CodeIgniter\Model;

class PenumpangModel extends Model
{
    //nama tabelnya
    protected $table      = 'masterdata_penumpang';

    //nama PK nya
    protected $primaryKey = 'id_penumpang';

    //ngasih tau field mana yang boleh di isi di table
    protected $allowedFields = [
        'id_penumpang',
        'nama',
        'no_tlp',
        'jenis_kelamin',
        'id_tiket',
    ];

    //untuk dapetin data bus
    public function getData($pk = false)
    {
        //ngembaliin semua data
        if ($pk == false) {
            return $this->findAll();
        }

        //ngembaliin data khusus
        return $this->where(['id_penumpang' => $pk])->first();
    }
}
