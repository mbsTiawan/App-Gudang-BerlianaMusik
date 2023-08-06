<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangKeluarModel extends Model
{
    protected $table = 'barang_keluar';
    protected $primaryKey = 'kd_tr';
    protected $allowedFields = ['kd_tr', 'kd_brg', 'kd_pr', 'jumlah_keluar', 'unit', 'tanggal_keluar', 'jenis_tr', 'status'];

    public function tampildata()
    {
        return $this->table('barang_keluar')->join('barang_gudang', 'barang_gudang.kd_brg= barang_keluar.kd_brg')->join('tr_permintaan', 'tr_permintaan.kd_pr= barang_keluar.kd_pr')->get()->getResultArray();
    }

    public function getStokBarang($barangId)
    {
        // Mengambil stok barang berdasarkan ID barang
        $barang = $this->find($barangId);

        if (!$barang) {
            // Jika barang tidak ditemukan, return nilai default
            return 0;
        }

        return $barang['stok'];
    }
}