<?php

namespace App\Models;

use CodeIgniter\Model;

class PtgasTerawehModel extends Model
{
    protected $table            = 'petugas_terawih';
    protected $primaryKey       = 'id_petugas';
    protected $returnType       = 'object';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['tanggal', 'nama_imam', 'bilal_kamilin', 'nama_kultum'];

}
