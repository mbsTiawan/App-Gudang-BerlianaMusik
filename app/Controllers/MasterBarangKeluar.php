<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangKeluarModel;
use App\Models\BarangGudangModel;
use App\Models\PermintaanModel;

class MasterBarangKeluar extends BaseController
{
    protected BarangKeluarModel $barangKeluar;
    protected BarangGudangModel $barang;
    protected PermintaanModel $permintaan;

    public function __construct()
    {

        $this->barangKeluar = new BarangKeluarModel;
        $this->barang = new BarangGudangModel;
        $this->permintaan = new PermintaanModel;
    }
    public function index()
    {
        $barangKeluar = new BarangKeluarModel();
        $permintaan = new PermintaanModel();
        $barang = new BarangGudangModel();
        $data = [];
        foreach ($barangKeluar->findAll() as $barangKeluar) {
            $data[] = [
                'kd_tr' => $barangKeluar['kd_tr'],
                'kd_brg' => $barangKeluar['kd_brg'],
                'kd_pr' => $barangKeluar['kd_pr'],
                'jumlah_keluar' => $barangKeluar['jumlah_keluar'],
                'unit' => $barangKeluar['unit'],
                'tanggal_keluar' => $barangKeluar['tanggal_keluar'],
                'jenis_tr' => $barangKeluar['jenis_tr'],
                'status' => $barangKeluar['status'],
                'nama_brg' => $barang->find($barangKeluar['kd_brg'])['nama_brg'],
            ];
        }
        $data = [
            'tampildata' => $data
        ];
        return view('admin/master/m_barangKeluar', $data);
    }

    public function create()
    {
        $data = [
            'barang_gudang' => $this->barang->findAll(),
            'permintaan' => $this->permintaan->findAll(),
        ];
        return view('admin/form/form_barangKeluar', $data);
    }

    public function save()
    {
        $jenisTr = $this->request->getPost('jenis_tr');
        $jumlahBarangKeluar = $this->request->getPost('jumlah_keluar');
        $barangId = $this->request->getPost('kd_brg');
        $namaBarang = $this->barang->find($barangId)['nama_brg'];

        $db = \Config\Database::connect();

        $stokBarang = '';

        if ($jenisTr === 'Stok') {
            $stokBarang = $db->table('barang_gudang')->where('kd_brg', $barangId)->get()->getRowArray()['stok'];
        } elseif ($jenisTr === 'Stok Pinjam') {
            $stokBarang = $db->table('barang_gudang')->where('kd_brg', $barangId)->get()->getRowArray()['stok_pinjam'];
        }

        if ($jumlahBarangKeluar > $stokBarang) {

            return redirect()->back()->withInput()->with('error', 'Transaksi Gagal !  <b>Stok ' . $namaBarang . '</b> Tidak Mencukupi Jumlah Barang Keluar');
        }


        $this->barangKeluar->save([
            'kd_brg' => $this->request->getVar('kd_brg'),
            'kd_pr' => $this->request->getVar('kd_pr'),
            'jumlah_keluar' => $this->request->getVar('jumlah_keluar'),
            'unit' => $this->request->getVar('unit'),
            'tanggal_keluar' => $this->request->getVar('tanggal_keluar'),
            'jenis_tr' => $this->request->getVar('jenis_tr'),
            'status' => $this->request->getVar('status'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/m_barangKeluar');
    }
}