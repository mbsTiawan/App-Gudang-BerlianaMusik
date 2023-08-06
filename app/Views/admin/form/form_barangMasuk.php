<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert text-white bg-danger d-flex align-items-center justify-content-between" role="alert">
        <div class="alert-text">
            <p class="text-white"><?= session()->getFlashdata('error') ?></p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
<?php endif; ?>

<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 social_media_card">
                <div class="white_card_header">
                    <div class="row">
                        <div class="col-12">
                            <div class="media_card_body">
                                <div class="media_card_list">
                                    <?php if (count($results) === 0): ?>
                                        <div class="single_media_card" style="background-color:#FF0060;">
                                            <h6 style="color:#F3F6F9">Tidak Ada Permintaan Terbaru !!</h6>
                                        </div>
                                    <?php else: ?>
                                        <?php foreach ($results as $result): ?>
                                            <div class="single_media_card">
                                                <span><?= $result->nama_mitra ?></span>
                                                <h3><?= $result->total_jumlah ?></h3>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 sm_padding_15px">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30" style="background-color:#F3F6F9">
                
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title"">
                            <h3 class=" m-0"">Lakukan Transaksi</h3>
                        </div>
                    </div>
                </div>

                <div class="white_card_body">
                    <form action="/MasterBarangMasuk/save" method="post">

                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="kd_brg" class="form-label">Nama Barang</label>

                                    <select name="kd_brg" id="kd_brg" class="form-control">
                                        <option selected values="" align="center">=Pilih Barang=</option>
                                        <?php foreach ($barang_gudang as $bg): ?>
                                            <?php if ($bg['status'] == 'Active'): ?>
                                                <option value="<?= $bg['kd_brg'] ?>"><?= $bg['nama_brg'] ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-4">
                                    <label for="kd_mitra" class="form-label">Nama Mitra</label>

                                    <select name="kd_mitra" id="kd_mitra" class="form-control">
                                        <option selected value="" align="center">=Pilih Mitra=</option>
                                        <?php foreach ($mitra as $mt): ?>
                                            <?php if ($mt['status'] == 'Active'): ?>
                                                <option value="<?= $mt['kd_mitra'] ?>"><?= $mt['nama_mitra'] ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-4">
                                    <label for="jumlah_masuk" class="form-label">Jumlah Barang Masuk</label>
                                    <input type="number" class="form-control" id="jumlah_masuk" aria-describedby="emailHelp" name="jumlah_masuk">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="jenis_tr" class="form-label">=Pilih Jenis Transaksi=</label>
                                    <select name="jenis_tr" id="jenis_tr" class="form-control">
                                        <option selected values="" align="center">=Pilih Transaksi=</option>
                                        <option value="Stok">Stok</option>
                                        <option value="Stok Pinjam">Stok Pinjam</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status Transaksi</label>
                                    <select name="status" id="status" class="form-control">
                                        <option selected values="" align="center">=Pilih Status=</option>
                                        <option value="Belum Selesai">Belum Selesai</option>
                                        <option value="Selesai">Selesai</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="unit" class="form-label">=Pilih Unit=</label>
                                    <select name="unit" id="unit" class="form-control">
                                        <option selected values="" align="center">=Pilih Unit=</option>
                                        <option value="Satuan">Satuan</option>
                                        <option value="Paket">Paket</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-3">
                                <div class="mb-3">
                                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                                    <input type="text" class="form-control" id="tanggal_masuk" aria-describedby="emailHelp" name="tanggal_masuk" readonly>
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    let tanggal = document.querySelector('#tanggal_masuk');
    let today = new Date();
    let dd = today.getDate();
    let mm = today.getMonth() + 1;
    let yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    today = yyyy + '-' + mm + '-' + dd;
    tanggal.value = today;
    console.log(today);
</script>
<?= $this->endSection() ?>