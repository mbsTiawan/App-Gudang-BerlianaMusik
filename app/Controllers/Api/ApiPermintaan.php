<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Controllers\Permintaan;
use App\Models\PermintaanModel;

class ApiPermintaan extends BaseController
{
    protected PermintaanModel $permintaanModel;
    public function __construct()
    {
        $this->permintaanModel = new PermintaanModel();
    }
    public function index()
    {
        $id = $this->request->getVar('id');
        $permintaan = $this->permintaanModel->find($id);
        $status = $permintaan['status'];
        if ($status === "Belum Selesai") {
            $this->permintaanModel->update($id, ['status' => 'Pending']);
        } else if ($status === "Pending") {
            $this->permintaanModel->update($id, ['status' => 'Selesai']);
        } else {
            // $this->permintaanModel->update($id, ['status' => 'Belum Selesai']);
            return redirect()->back();
        }
        $permintaan_update = $this->permintaanModel->find($id);
        return $permintaan_update['status'];
    }
}