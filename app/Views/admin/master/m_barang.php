<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>


<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30" style="background-color:#F3F6F9">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Stok Barang</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4></h4>
                            
                            <div class="box_right d-flex lms_block">
                                <div class="add_button ms-2">
                                    <a href="/BarangGudang/create" class="btn_1">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table table-responsive" id="table-barangGudang">

                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Stok Pinjam</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampildata as $bg): ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $bg['nama_brg'] ?></td>
                                            <td><?= $bg['kategori'] ?></td>
                                            <td><?= $bg['stok'] ?></td>
                                            <td><?= $bg['stok_pinjam'] ?></td>
                                            <td><?= $bg['unit'] ?></td>
                                            <td>
                                                <?php if ($bg['status'] == 'Active'): ?>
                                                    <a href="#" class="status_btn"><?= $bg['status'] ?></a>
                                                <?php else: ?>
                                                    <a href="#" class="status_btn_red"><?= $bg['status'] ?></a>
                                                <?php endif ?>
                                            </td>

                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="/BarangGudang/edit/<?= $bg['kd_brg'] ?>" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                    <a href="/BarangGudang/delete/<?= $bg['kd_brg'] ?>" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                                </div>
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