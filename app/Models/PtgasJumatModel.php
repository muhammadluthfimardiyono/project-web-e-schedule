<?php

namespace App\Models;

use CodeIgniter\Model;

class PtgasJumatModel extends Model
{
    protected $table            = 'petugas_jumat';
    protected $primaryKey       = 'id_petugas';
    protected $returnType       = 'object';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['tanggal', 'nama_khotib', 'nama_imam', 'nama_bilal', 'nama_muazin'];
}
