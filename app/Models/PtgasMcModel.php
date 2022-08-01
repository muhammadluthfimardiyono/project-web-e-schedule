<?php

namespace App\Models;

use CodeIgniter\Model;

class PtgasMcModel extends Model
{
    protected $table            = 'mc_jumat';
    protected $primaryKey       = 'id_mc';
    protected $returnType       = 'object';
    protected $useTimestamps    = true;
    protected $allowedFields    = ['tanggal', 'nama_mc'];

}
