<?php

namespace App\Controllers;

use App\Models\MitraModel;
use App\Models\BarangGudangModel;

class Mitra extends BaseController
{
    protected BarangGudangModel $barang;
    protected MitraModel $mitra;
    public function __construct()
    {

        $this->mitra = new MitraModel();
        $this->barang = new BarangGudangModel();
    }
    public function index()
    {
        $mitra = new MitraModel();
        $barang = new BarangGudangModel();
        $data = [];
        foreach ($mitra->findAll() as $mitra) {
            $data[] = [
                'kd_mitra' => $mitra['kd_mitra'],
                'nama_mitra' => $mitra['nama_mitra'],
                'kd_brg' => $mitra['kd_brg'],
                'stok' => $mitra['stok'],
                'alamat' => $mitra['alamat'],
                'no_hp' => $mitra['no_hp'],
                'pemilik' => $mitra['pemilik'],
                'jenis_mitra' => $mitra['jenis_mitra'],
                'tgl_kerjasama' => $mitra['tgl_kerjasama'],
                'kontrak' => $mitra['kontrak'],
                'status' => $mitra['status'],
                'nama_brg' => $barang->find($mitra['kd_brg'])['nama_brg']
            ];
        }
        $data = [
            'tampildata' => $data
        ];
        return view('admin/master/m_mitra', $data);
    }

    public function create()
    {
        $data = [
            'barang_gudang' => $this->barang->findAll()
        ];
        return view('admin/form/form_addMitra', $data);
    }

    public function save()
    {


        $this->mitra->save([
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'kd_brg' => $this->request->getVar('kd_brg'),
            'stok' => $this->request->getVar('stok'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'pemilik' => $this->request->getVar('pemilik'),
            'jenis_mitra' => $this->request->getVar('jenis_mitra'),
            'tgl_kerjasama' => $this->request->getVar('tgl_kerjasama'),
            'kontrak' => $this->request->getVar('kontrak'),
            'status' => $this->request->getVar('status'),
        ]);
        return redirect()->to('/m_mitra');
    }

    public function delete($kd_mitra)
    {

        $this->mitra->delete($kd_mitra);
        return redirect()->to('/m_mitra');
    }

    public function edit($kd_mitra)
    {
        $data = [
            'title' => 'Form Edit Mitra',
            'mitra' => $this->mitra->find($kd_mitra),
            'barang_gudang' => $this->barang->findAll()
        ];
        return view('admin/form/form_editMitra', $data);

    }
    public function update($kd_mitra)
    {

        $this->mitra->update($kd_mitra, [
            'nama_mitra' => $this->request->getVar('nama_mitra'),
            'kd_brg' => $this->request->getVar('kd_brg'),
            'stok' => $this->request->getVar('stok'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'pemilik' => $this->request->getVar('pemilik'),
            'jenis_mitra' => $this->request->getVar('jenis_mitra'),
            'tgl_kerjasama' => $this->request->getVar('tgl_kerjasama'),
            'kontrak' => $this->request->getVar('kontrak'),
            'status' => $this->request->getVar('status'),
        ]);

        return redirect()->to('/m_mitra');
    }

}