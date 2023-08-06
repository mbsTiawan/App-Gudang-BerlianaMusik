<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>

<div class="container-fluid p-0 sm_padding_15px">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">

                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title"">
                                        <h3 class=" m-0"">Edit Data Barang</h3>
                        </div>
                    </div>
                </div>

                <div class="white_card_body">
                    <form action="/BarangGudang/update/<?= $barang['kd_brg'] ?>" method="post">
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="nama_brg" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_brg" aria-describedby="emailHelp" name="nama_brg" value="<?= $barang['nama_brg'] ?>">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Pilih Kategori</label>
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option selected values="" align="center">=Pilih Kategori=</option>
                                        <option value="Properti">Properti</option>
                                        <option value="Jasa">Jasa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="unit" class="form-label">Pilih Kategori</label>
                                    <select name="unit" id="unit" class="form-control">
                                        <option selected values="" align="center">=Pilih Kategori=</option>
                                        <option value="Satuan">Satuan</option>
                                        <option value="Paket">Paket</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok Barang</label>
                                    <input type="number" class="form-control" id="stok" aria-describedby="emailHelp" name="stok" value="<?= $barang['stok'] ?>">
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="stok_pinjam" class="form-label">Stok Pinjam</label>
                                    <input type="number" class="form-control" id="stok_pinjam" aria-describedby="emailHelp" name="stok_pinjam" value="<?= $barang['stok_pinjam'] ?>" readonly>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status Barang</label>
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