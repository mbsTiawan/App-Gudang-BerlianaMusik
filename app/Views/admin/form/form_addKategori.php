<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>

<div class="container-fluid p-0 sm_padding_15px">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">

            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title"">
                                        <h3 class="m-0"">Input Kategori</h3>
                                    </div>
                                </div>
            </div>

            <div class="white_card_body">
            <form action="/MasterKategori/save" method="post">
                <div class="mb-3">
                    <label for="nama_kat" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kat" aria-describedby="emailHelp" name="nama_kat">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>