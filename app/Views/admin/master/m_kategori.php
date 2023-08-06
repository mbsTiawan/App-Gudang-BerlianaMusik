<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>

<div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Master Kategori</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4></h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form Active="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Cari data kategori disini...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="add_button ms-2">
                                                <a href="/MasterKategori/create"
                                                    class="btn_1">Tambah Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active " border="solid">
                                            
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Nama Kategori</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <?php 
                                                $no= 1;
                                                foreach($tampildata as $mk) : 
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $mk['nama_kat'] ?></td>
                                                    <td>
                                                            <div class="action_btns d-flex">
                                                                <a href="/MasterKategori/edit/<?= $mk['id_kat'] ?>" class="action_btn mr_10"> <i
                                                                        class="far fa-edit"></i> </a>
                                                                <a href="/MasterKategori/delete/<?= $mk['id_kat'] ?>" class="action_btn"> <i
                                                                        class="fas fa-trash"></i> </a>
                                                            </div>
                                                        </td>
                                                </tr>
                                            </tbody>
                                            <?php endforeach; ?>
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