<?php

namespace App\Controllers;

use App\Models\PermintaanModel;
use Dompdf\Dompdf;
use App\Models\BarangGudangModel;
use App\Models\MitraModel;

class Permintaan extends BaseController
{
    public function index()
    {

        $permintaan = new PermintaanModel();

        if ($this->request->getVar('start_date') == '' && $this->request->getVar('end_date') == '') {

            $count = $permintaan->select('tr_permintaan.kd_pr, tr_permintaan.kd_brg, tr_permintaan.kd_mitra, tr_permintaan.jumlah_diminta, tr_permintaan.tanggal_diminta, tr_permintaan.nama_penyewa, tr_permintaan.status, barang_gudang.nama_brg, mitra.nama_mitra, SUM(tr_permintaan.jumlah_diminta) as total_jumlah')
                ->join('barang_gudang', 'barang_gudang.kd_brg = tr_permintaan.kd_brg')
                ->join('mitra', 'mitra.kd_mitra = tr_permintaan.kd_mitra')
                ->where('tr_permintaan.status', 'Belum Selesai')
                ->groupBy('tr_permintaan.kd_mitra')->get()->getResultArray();

            $builder = $permintaan->select('tr_permintaan.kd_pr, tr_permintaan.kd_brg, tr_permintaan.kd_mitra, tr_permintaan.jumlah_diminta, tr_permintaan.tanggal_diminta, tr_permintaan.nama_penyewa, tr_permintaan.status, barang_gudang.nama_brg, mitra.nama_mitra, SUM(tr_permintaan.jumlah_diminta) as total_jumlah')
                ->join('barang_gudang', 'barang_gudang.kd_brg = tr_permintaan.kd_brg')
                ->join('mitra', 'mitra.kd_mitra = tr_permintaan.kd_mitra')
                ->groupBy('tr_permintaan.kd_pr');

            $results = $builder->get()->getResultArray();


        } else {
            $startDate = $this->request->getVar('start_date');
            $endDate = $this->request->getVar('end_date');
            if (strtotime($startDate) > strtotime($endDate)) {
                return redirect()->to('/permintaan');
            }

            $count = $permintaan->select('tr_permintaan.kd_pr, tr_permintaan.kd_brg, tr_permintaan.kd_mitra, tr_permintaan.jumlah_diminta, tr_permintaan.tanggal_diminta, tr_permintaan.nama_penyewa, tr_permintaan.status, barang_gudang.nama_brg, mitra.nama_mitra, SUM(tr_permintaan.jumlah_diminta) as total_jumlah')
                ->join('barang_gudang', 'barang_gudang.kd_brg = tr_permintaan.kd_brg')
                ->join('mitra', 'mitra.kd_mitra = tr_permintaan.kd_mitra')
                ->where('tr_permintaan.status', 'Belum Selesai')
                ->where('tr_permintaan.tanggal_diminta >=', $startDate)
                ->where('tr_permintaan.tanggal_diminta <=', $endDate)
                ->groupBy('tr_permintaan.kd_mitra')->get()->getResultArray();

            $builder = $permintaan->select('tr_permintaan.kd_pr, tr_permintaan.kd_brg, tr_permintaan.kd_mitra, tr_permintaan.jumlah_diminta, tr_permintaan.tanggal_diminta, tr_permintaan.nama_penyewa, tr_permintaan.status, barang_gudang.nama_brg, mitra.nama_mitra, SUM(tr_permintaan.jumlah_diminta) as total_jumlah')
                ->join('barang_gudang', 'barang_gudang.kd_brg = tr_permintaan.kd_brg')
                ->join('mitra', 'mitra.kd_mitra = tr_permintaan.kd_mitra')
                ->where('tr_permintaan.tanggal_diminta >=', $startDate)
                ->where('tr_permintaan.tanggal_diminta <=', $endDate)
                ->groupBy('tr_permintaan.kd_pr');

            $results = $builder->get()->getResultArray();
        }


        $data = [
            // 'tampildata' => $data,
            'results' => $results,
            'count' => $count,
            // 'tampildata' => $filtereData,
            'start_date' => $startDate ?? null,
            'end_date' => $endDate ?? null,
        ];
        return view('admin/master/m_permintaan', $data);
    }
    public function permintaan_pdf()
    {
        $dompdf = new Dompdf();
        $permintaan = new PermintaanModel();
        $validate = $this->validate([
            'start_date' => 'required',
            'end_date' => 'required',
        ]);


        if ($validate == FALSE) {
            $count = $permintaan->select('tr_permintaan.kd_pr, tr_permintaan.kd_brg, tr_permintaan.kd_mitra, tr_permintaan.jumlah_diminta, tr_permintaan.tanggal_diminta, tr_permintaan.nama_penyewa, tr_permintaan.status, barang_gudang.nama_brg, mitra.nama_mitra, SUM(tr_permintaan.jumlah_diminta) as total_jumlah')
                ->join('barang_gudang', 'barang_gudang.kd_brg = tr_permintaan.kd_brg')
                ->join('mitra', 'mitra.kd_mitra = tr_permintaan.kd_mitra')
                ->groupBy('tr_permintaan.kd_pr')->get()->getResultArray();
        } else {
            $startDate = $this->request->getVar('start_date');
            $endDate = $this->request->getVar('end_date');
            if (strtotime($startDate) > strtotime($endDate)) {
                return redirect()->to('/permintaan');
            }
            $count = $permintaan->select('tr_permintaan.kd_pr, tr_permintaan.kd_brg, tr_permintaan.kd_mitra, tr_permintaan.jumlah_diminta, tr_permintaan.tanggal_diminta, tr_permintaan.nama_penyewa, tr_permintaan.status, barang_gudang.nama_brg, mitra.nama_mitra, SUM(tr_permintaan.jumlah_diminta) as total_jumlah')
                ->join('barang_gudang', 'barang_gudang.kd_brg = tr_permintaan.kd_brg')
                ->join('mitra', 'mitra.kd_mitra = tr_permintaan.kd_mitra')
                ->where('tanggal_diminta >=', $startDate)
                ->where('tanggal_diminta <=', $endDate)
                ->groupBy('tr_permintaan.kd_pr')->get()->getResultArray();
        }

        $filename = 'Laporan Permintaan " . date("d-m-Y") . ".pdf';
        $dompdf->loadHtml(view('admin/master/pdf_permintaan', ['count' => $count]));
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream($filename, ['Attachment' => false]);
    }
}