<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert text-white bg-danger d-flex align-items-center justify-content-between"
        role="alert">
        <div class="alert-text">
            <p class="text-white"><?= session()->getFlashdata('error') ?></p> 
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close">
        </button>
    </div>
<?php endif; ?>

<div class="container-fluid p-0 sm_padding_15px">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30" style="background-color:#F3F6F9">

                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title"">
                            <h3 class="m-0"">Lakukan Transaksi</h3>
                        </div>
                    </div>
                </div>

                <div class="white_card_body">
                    <form action="/MasterBarangKeluar/save" method="post">

                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="kd_pr" class="form-label">Transaksi</label>

                                <select name="kd_pr" id="kd_pr" class="form-control">
                                    <option selected values="" align="center">=Pilih Transaksi=</option>
                                    <?php foreach ($permintaan as $pr): ?>
                                        <?php if ($pr['status'] === 'Belum Selesai' || $pr['kd_pr'] === '00000'): ?>
                                            <option value="<?= $pr['kd_pr'] ?>"><?= $pr['kd_pr'] ?></option>
                                        <?php endif; ?>         
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
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
                            <div class="mb-3">
                                <label for="jumlah_keluar" class="form-label">Jumlah Barang Keluar</label>
                                <input type="number" class="form-control" id="jumlah_keluar" aria-describedby="emailHelp" name="jumlah_keluar">
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
                                <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                                <input type="text" class="form-control" id="tanggal_keluar" aria-describedby="emailHelp" name="tanggal_keluar" readonly>
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
    let transaksi = <?= json_encode($permintaan) ?>;
    let jumlah_barang_keluar = document.querySelector('#jumlah_keluar');
    let kd_barang = document.querySelector('#kd_brg');
    let status = document.querySelector('#status');

    document.querySelector('#kd_pr').addEventListener('change', function() {
        let kd_pr = this.value;
        let data = transaksi.find(function(item) {
            return item.kd_pr == kd_pr;
        });
        if (!data) {
            jumlah_barang_keluar.value = '';
            kd_barang.value = '';
            status.value = '';
        }else{
            jumlah_barang_keluar.value = data.jumlah_diminta;
            kd_barang.value = data.kd_brg;
            status.value = data.status;
        }

    });

    let tanggal = document.querySelector('#tanggal_keluar');
    let today = new Date();
    let dd = today.getDate();
    let mm = today.getMonth()+1;
    let yyyy = today.getFullYear();
    
    if(dd<10) {
        dd='0'+dd;
    } 
    if(mm<10) {
        mm='0'+mm;
    }
    today = yyyy+'-'+mm+'-'+dd;
    tanggal.value = today;
    console.log(today);
</script>
<?= $this->endSection() ?>