<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Controllers\MasterBarangKeluar;
use App\Models\BarangKeluarModel;

class ApiBarangKeluar extends BaseController
{
    protected BarangKeluarModel $barangKeluarModel;
    public function __construct()
    {
        $this->barangKeluarModel = new BarangKeluarModel();
    }
    public function index()
    {
        $id = $this->request->getVar('id');
        $barang_keluar = $this->barangKeluarModel->find($id);
        $status = $barang_keluar['status'];
        if ($status === "Belum Selesai") {
            $this->barangKeluarModel->update($id, ['status' => 'Selesai']);
        }
        $barang_keluar_update = $this->barangKeluarModel->find($id);
        return $barang_keluar_update['status'];
    }
}