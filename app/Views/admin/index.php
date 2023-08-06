<?= $this->extend('/main-template/index') ?>
<?= $this->section('content') ?>

<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30 social_media_card">
                <div class="white_card_header">
                    <div class="row">
                        <div class="col-12">
                            <div class="media_card_body">
                                <div class="media_card_list">
                                    <div class="single_media_card">
                                        <span><b><u>Jumlah Properti Aktiv</u></b></span>
                                        <h3><?php echo $jumlahBarangGudang; ?></h3>
                                    </div>
                                    <div class="single_media_card">
                                        <span><b><u>Jumlah Mitra Aktiv</u></b></span>
                                        <h3><?php echo $jumlahMitra; ?></h3>
                                    </div>
                                    <div class="single_media_card">
                                        <span><b><u>Jumlah Permintaan</u></b></span>
                                        <h3><?php echo $jumlahPermintaan; ?></h3>
                                    </div>
                                    <div class="single_media_card">
                                        <span><b><u>Jumlah Account</u></b></span>
                                        <h3><?php echo "5"; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>