<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>


<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30" style="background-color:#F3F6F9">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Data Mitra</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4></h4>
                            <div class="box_right d-flex lms_block">
                                <div class="add_button ms-2">
                                    <a href="/Mitra/create" class="btn_1">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table mb_30">

                            <table class="table table_responsive" border="solid" id="table-mitra">

                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Mitra</th>
                                        <th scope="col">Barang</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($tampildata as $mt) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $mt['nama_mitra'] ?></td>
                                            <td><?= $mt['nama_brg'] ?></td>
                                            <td><?= $mt['stok'] ?></td>
                                            <td>
                                                <?php if ($mt['status'] == 'Active') : ?>
                                                    <a href="#" class="status_btn"><?= $mt['status'] ?></a>
                                                <?php else : ?>
                                                    <a href="#" class="status_btn_red"><?= $mt['status'] ?></a>
                                                <?php endif ?>
                                            </td>
                                            <td>
                                                <div class="action_btns d-flex">
                                                    <a href="/Mitra/edit/<?= $mt['kd_mitra'] ?>" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                    <a href="/Mitra/delete/<?= $mt['kd_mitra'] ?>" class="action_btn"> <i class="fas fa-trash"></i> </a>
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