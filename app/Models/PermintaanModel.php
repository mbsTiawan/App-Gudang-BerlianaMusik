<?php

namespace App\Models;

use CodeIgniter\Model;

class PermintaanModel extends Model
{

    protected $table = 'tr_permintaan';
    protected $primaryKey = 'kd_pr';
    protected $allowedFields = ['kd_pr', 'kd_brg', 'kd_mitra', 'jumlah_diminta', 'nama_penyewa', 'tanggal_diminta', 'status'];

    //disini ada relasi join dari table transaksi permintaan yang dikirim oleh bagian penyewaan
    public function tampildata()
    {

        return $this->table('tr_permintaan')->join('barang_gudang', 'kd_brg=kd_brg')->get();
        return $this->table('tr_permintaan')->join('mitra', 'kd_mitra=kd_mitra')->get();
    }

}