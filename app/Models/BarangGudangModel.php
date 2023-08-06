<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangGudangModel extends Model
{

    protected $table = 'barang_gudang';
    protected $primaryKey = 'kd_brg';
    protected $allowedFields = ['kd_brg', 'nama_brg', 'kategori', 'stok', 'stok_gudang', 'unit', 'status'];

}