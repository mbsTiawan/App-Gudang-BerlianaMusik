<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>

<div class="container-fluid p-0 sm_padding_15px">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30" style="background-color:#F3F6F9">

            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title"">
                                        <h3 class="m-0"">Tambah Data Mitra</h3>
                                    </div>
                                </div>
            </div>

            <div class="white_card_body">
            <form action="/Mitra/update/<?= $mitra['kd_brg'] ?>" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="nama_mitra" class="form-label">Nama Mitra</label>
                            <input type="text" class="form-control" id="nama_mitra" aria-describedby="emailHelp" name="nama_mitra" value="<?= $mitra['nama_mitra'] ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat" value="<?= $mitra['alamat'] ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="kd_brg" class="form-label">Produksi</label>

                            <select name="kd_brg" id="kd_brg" class="form-control">
                                <option selected values="" align="center">=Pilih Produksi=</option>
                                <?php foreach ($barang_gudang as $bg): ?>
                                    <option value="<?= $bg['kd_brg'] ?>"><?= $bg['nama_brg'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <div class="col-3">
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok Barang</label>
                            <input type="number" class="form-control" id="stok" aria-describedby="emailHelp" name="stok" value="<?= $mitra['stok'] ?>">
                        </div>
                    </div>

                    
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="jenis_mitra" class="form-label">Jenis Perusahaan</label>
                            <select name="jenis_mitra" id="jenis_mitra" class="form-control">
                                <option selected values="" align="center">=Jenis Perusahaan=</option>
                                <option value="Perusahaan">Perusahaan</option>
                                <option value="Perorangan">Perorangan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="mb-3">
                            <label for="pemilik" class="form-label">Owner</label>
                            <input type="text" class="form-control" id="pemilik" aria-describedby="emailHelp" name="pemilik" value="<?= $mitra['pemilik'] ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No. Handphone</label>
                            <input type="text" class="form-control" id="no_hp" aria-describedby="emailHelp" name="no_hp" value="<?= $mitra['no_hp'] ?>">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="mb-3">
                            <label for="kontrak" class="form-label">Kontrak Kerja Sama</label>
                            <input type="number" class="form-control" id="kontrak" aria-describedby="emailHelp" name="kontrak" value="<?= $mitra['kontrak'] ?>">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="mb-3">
                            <label for="tgl_kerjasama" class="form-label">Tanggal Kerja Sama</label>
                            <input type="date" class="form-control" id="tgl_kerjasama" aria-describedby="emailHelp" name="tgl_kerjasama" value="<?= $mitra['tgl_kerjasama'] ?>">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Mitra</label>
                            <select name="status" id="status" class="form-control">
                                <option selected values="" align="center">=Pilih Status=</option>
                                <option value="Active">Active</option>
                                <option value="Nonactive">Nonactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>