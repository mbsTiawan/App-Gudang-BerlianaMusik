<?php

namespace App\Controllers;

use App\Models\MitraModel;
use App\Models\BarangGudangModel;
use App\Models\PermintaanModel;

class Home extends BaseController
{
    public function index()
    {
        // Mendapatkan jumlah mitra
        $jumlahMitra = $this->getJumlahMitra();
        $jumlahBarangGudang = $this->getJumlahBarangGudang();
        $jumlahPermintaan = $this->getJumlahPermintaan();

        // Menampilkan halaman dashboard dengan data jumlah mitra
        return view('admin/index', [
            'jumlahMitra' => $jumlahMitra,
            'jumlahBarangGudang' => $jumlahBarangGudang,
            'jumlahPermintaan' => $jumlahPermintaan,
        ]);
    }

    private function getJumlahMitra()
    {
        // Menginisialisasi model MasterMitraModel
        $mitraModel = new MitraModel();

        // Menghitung jumlah mitra
        $jumlahMitra = $mitraModel->where('status', 'Active')->countAllResults();

        return $jumlahMitra;
    }
    private function getJumlahBarangGudang()
    {
        // Menginisialisasi model MasterMitraModel
        $barangGudangModel = new BarangGudangModel();

        // Menghitung jumlah mitra
        $jumlahBarangGudang = $barangGudangModel->where('status', 'Active')->countAllResults();

        return $jumlahBarangGudang;
    }
    private function getJumlahPermintaan()
    {
        // Menginisialisasi model MasterMitraModel
        $permintaanModel = new PermintaanModel();

        // Menghitung jumlah mitra
        $jumlahPermintaan = $permintaanModel->where('status', 'Belum Selesai')->countAllResults();

        return $jumlahPermintaan;
    }
}