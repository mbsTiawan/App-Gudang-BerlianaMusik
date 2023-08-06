<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UpdateData;

class Ajax extends BaseController
{
    public function index()
    {
        //
    }
    public function updateStatus()
    {
        // Menerima data dari permintaan AJAX
        $kdTr = $this->request->getPost('kd_tr');
        $newStatus = $this->request->getPost('new_status');

        // Validasi data jika diperlukan

        // Memperbarui status di dalam database
        $updateData = new UpdateData();
        $updateData->update($kdTr, ['status' => $newStatus]);   

        // Mengembalikan respon dalam format JSON
        return $this->response->setJSON(['success' => true]);
    }
}
