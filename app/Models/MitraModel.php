<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraModel extends Model
{

    protected $table = 'mitra';
    protected $primaryKey = 'kd_mitra';
    protected $allowedFields = ['kd_mitra', 'nama_mitra', 'kd_brg', 'stok', 'alamat', 'no_hp', 'pemilik', 'jenis_mitra', 'tgl_kerjasama', 'kontrak', 'status'];

    public function tampildata()
    {

        return $this->table('mitra')->join('barang_gudang', 'kd_brg=kd_brg')->get();
    }
}