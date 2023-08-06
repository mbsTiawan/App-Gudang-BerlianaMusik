<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangMasukModel extends Model
{
  
    protected $table            = 'barang_masuk';
    protected $primaryKey       = 'kd_tr';
    protected $allowedFields    = ['kd_tr', 'kd_brg', 'kd_mitra', 'jumlah_masuk', 'unit', 'tanggal_masuk', 'jenis_tr', 'status'];

    public function tampildata(){

        return $this->table('barang_masuk')->join('barang_gudang', 'kd_brg=kd_brg')->get();
        return $this->table('barang_masuk')->join('mitra', 'kd_mitra=kd_mitra')->get();
    }

    public function getStokMitra($mitraId)
    {
        // Mengambil stok barang berdasarkan ID barang
        $mitra = $this->find($mitraId);

        if (!$mitra) {
            // Jika barang tidak ditemukan, return nilai default
            return 0;
        }

        return $mitra['stok'];
    }
}
