<?php

namespace App\Controllers;

use App\Models\BarangGudangModel;

class BarangGudang extends BaseController
{
    protected BarangGudangModel $barang;
    public function __construct()
    {

        $this->barang = new BarangGudangModel();
    }
    public function index()
    {
        $data = [
            'tampildata' => $this->barang->findAll()
        ];
        return view('admin/master/m_barang', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Barang',
        ];
        return view('admin/form/form_addBarang', $data);
    }

    public function save()
    {


        $this->barang->save([
            'nama_brg' => $this->request->getVar('nama_brg'),
            'kategori' => $this->request->getVar('kategori'),
            'stok' => $this->request->getVar('stok'),
            'stok_pinjam' => $this->request->getVar('stok_pinjam'),
            'unit' => $this->request->getVar('unit'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->to('/m_barang');
    }

    public function delete($kd_brg)
    {

        $this->barang->delete($kd_brg);
        return redirect()->to('/m_barang');
    }

    public function edit($kd_brg)
    {
        $data = [
            'title' => 'Form Edit Barang',
            'barang' => $this->barang->find($kd_brg),
        ];
        return view('admin/form/form_editBarang', $data);
    }
    public function update($kd_brg)
    {

        $this->barang->update($kd_brg, [
            'nama_brg' => $this->request->getVar('nama_brg'),
            'kategori' => $this->request->getVar('kategori'),
            'stok' => $this->request->getVar('stok'),
            'stok_pinjam' => $this->request->getVar('stok_pinjam'),
            'unit' => $this->request->getVar('unit'),
            'status' => $this->request->getVar('status')
        ]);

        return redirect()->to('/m_barang');
    }
}
