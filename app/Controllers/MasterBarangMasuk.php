<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangMasukModel;
use App\Models\BarangGudangModel;
use App\Models\PermintaanModel;
use App\Models\MitraModel;

class MasterBarangMasuk extends BaseController
{
    protected BarangMasukModel $barangMasuk;
    protected BarangGudangModel $barang;
    protected MitraModel $mitra;
    public function __construct()
    {

        $this->barangMasuk = new BarangMasukModel;
        $this->barang = new BarangGudangModel;
        $this->mitra = new MitraModel;
    }
    public function index()
    {
        $barangMasuk = new BarangMasukModel();
        $mitra = new MitraModel();
        $barang = new BarangGudangModel();
        $data = [];
        foreach ($barangMasuk->findAll() as $barangMasuk) {
            $data[] = [
                'kd_tr' => $barangMasuk['kd_tr'],
                'kd_brg' => $barangMasuk['kd_brg'],
                'kd_mitra' => $barangMasuk['kd_mitra'],
                'jumlah_masuk' => $barangMasuk['jumlah_masuk'],
                'unit' => $barangMasuk['unit'],
                'tanggal_masuk' => $barangMasuk['tanggal_masuk'],
                'jenis_tr' => $barangMasuk['jenis_tr'],
                'status' => $barangMasuk['status'],
                'nama_brg' => $barang->find($barangMasuk['kd_brg'])['nama_brg'],
                'nama_mitra' => $mitra->find($barangMasuk['kd_mitra'])['nama_mitra']
            ];
        }
        $data = [
            'tampildata' => $data
        ];
        return view('admin/master/m_barangMasuk', $data);
    }

    public function create()
    {
        $permintaan = new PermintaanModel();

        $builder = $permintaan->select('tr_permintaan.kd_pr, tr_permintaan.kd_brg, tr_permintaan.kd_mitra, tr_permintaan.jumlah_diminta, tr_permintaan.tanggal_diminta, tr_permintaan.nama_penyewa, tr_permintaan.status, barang_gudang.nama_brg, mitra.nama_mitra, SUM(tr_permintaan.jumlah_diminta) as total_jumlah')
            ->join('barang_gudang', 'barang_gudang.kd_brg = tr_permintaan.kd_brg')
            ->join('mitra', 'mitra.kd_mitra = tr_permintaan.kd_mitra')
            ->where('tr_permintaan.status', 'Belum Selesai')
            ->groupBy('tr_permintaan.kd_mitra');

        $results = $builder->get()->getResult();

        $data = [
            'barang_gudang' => $this->barang->findAll(),
            'mitra' => $this->mitra->findAll(),
            'results' => $results
        ];
        return view('admin/form/form_barangMasuk', $data);
    }

    public function save()
    {

        $jumlahBarangMasuk = $this->request->getPost('jumlah_masuk');
        $mitraId = $this->request->getPost('kd_mitra');
        $namaMitra = $this->mitra->find($mitraId)['nama_mitra'];

        $db = \Config\Database::connect();
        $stokMitra = $db->table('mitra')->where('kd_mitra', $mitraId)->get()->getRowArray()['stok'];

        $kdMitraTertentu = 1;

        if ($mitraId != $kdMitraTertentu && $jumlahBarangMasuk > $stokMitra) {

            return redirect()->back()->withInput()->with('error', 'Transaksi Gagal !  <b>' . $namaMitra . '</b> Tidak Mencukupi Jumlah Stok Yang Diminta');

        } else {

            $this->barangMasuk->save([
                'kd_brg' => $this->request->getVar('kd_brg'),
                'kd_mitra' => $this->request->getVar('kd_mitra'),
                'jumlah_masuk' => $this->request->getVar('jumlah_masuk'),
                'unit' => $this->request->getVar('unit'),
                'tanggal_masuk' => $this->request->getVar('tanggal_masuk'),
                'jenis_tr' => $this->request->getVar('jenis_tr'),
                'status' => $this->request->getVar('status'),
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

            return redirect()->to('/m_barangMasuk');
        }
    }
}