<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Controllers\MasterBarangMasuk;
use App\Models\BarangMasukModel;

class ApiBarangMasuk extends BaseController
{
    protected BarangMasukModel $barangMasukModel;
    public function __construct()
    {
        $this->barangMasukModel = new BarangMasukModel();
    }
    public function index()
    {
        $id = $this->request->getVar('id');
        $barang_masuk = $this->barangMasukModel->find($id);
        $status = $barang_masuk['status'];
        if ($status === "Belum Selesai") {
            $this->barangMasukModel->update($id, ['status' => 'Selesai']);
        }
        $barang_masuk_update = $this->barangMasukModel->find($id);
        return $barang_masuk_update['status'];
    }
}