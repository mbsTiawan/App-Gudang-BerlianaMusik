<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert text-white bg-success d-flex align-items-center justify-content-between"
        role="alert">
        <div class="alert-text">
            <p class="text-white"><?= session()->getFlashdata('pesan') ?></p> 
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close">
        </button>
    </div>
<?php endif; ?>

<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30" style="background-color:#F3F6F9">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Transaksi Barang Keluar</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4></h4>
                            <div class="box_right d-flex lms_block">
                                <div class="add_button ms-2">
                                    <a href="/MasterBarangKeluar/create" class="btn_1">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table table-responsive" border="solid" id="table-barangKeluar">

                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Transaksi</th>
                                        <th scope="col">Jumlah Keluar</th>
                                        <th scope="col">Unit </th>
                                        <th scope="col">Tanggal Keluar</th>
                                        <th scope="col">Jenis Transaksi</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampildata as $mbk) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $mbk['nama_brg'] ?></td>
                                            <td><?= $mbk['kd_pr'] ?></td>
                                            <td><?= $mbk['jumlah_keluar'] ?></td>
                                            <td><?= $mbk['unit'] ?></td>
                                            <td><?= $mbk['tanggal_keluar'] ?></td>
                                            <td><?= $mbk['jenis_tr'] ?></td>
                                            <td>
                                                <a href="#" data-id="<?= $mbk['kd_tr'] ?>" id="BTN_STATUS_UPDATE" class="btn <?= $mbk['status'] == 'Belum Selesai' ? 'status_btn_red' : 'status_btn' ?>">
                                                    <?= $mbk['status'] ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(document).on("click", "#BTN_STATUS_UPDATE", async function(e) {
        e.preventDefault()
        const id = $(this).data('id')
        try {
            const response = await $.post("<?= base_url('/Api/BarangKeluar/status') ?>", {
                id
            });
            if (response === "Belum Selesai") {
                $(this).addClass('status_btn_red')
                $(this).removeClass('status_btn')
                $(this).text(response)
            } else {
                $(this).addClass('status_btn')
                $(this).removeClass('status_btn_red')
                $(this).text(response)
            }
        } catch (err) {
            console.log(err)
        }
    })
</script>
<?= $this->endSection() ?>