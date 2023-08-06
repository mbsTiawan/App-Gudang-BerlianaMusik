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
                                    <?php if (count($count) === 0): ?>
                                        <div class="single_media_card" style="background-color:#FF0060;">
                                            <h6 style="color:#F3F6F9">Tidak Ada Permintaan Terbaru !!</h6>
                                        </div>
                                    <?php else: ?>
                                        <?php foreach ($count as $ct): ?>
                                            <div class="single_media_card">
                                                <span><?= $ct['nama_mitra'] ?></span>
                                                <h3><?= $ct['total_jumlah'] ?></h3>
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


<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30" style="background-color:#F3F6F9">
                <div class="white_card_header">

                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Daftar Permintaan</h3>
                        </div>
                        <form action="<?= site_url('permintaan/index') ?>" method="get">
                            <div class="common_date_picker">
                                <div class="row">
                                    <?php $request = \Config\Services::request(); ?>
                                    <!-- datepicker-here  digits -->
                                    <div class="col-5 p-0 pe-2">
                                        <input class="form-control" type="date" data-language="en" placeholder="Input Tanggal Awal" name="start_date" value="<?= $request->getVar('start_date') == '' ? '' : $request->getVar('start_date') ?>">        
                                    </div>
                                    <div class="col-5 p-0 pe-2">
                                        <input class="form-control" type="date" data-language="en" placeholder="Input Tanggal Akhir" name="end_date" value="<?= $request->getVar('end_date') == '' ? '' : $request->getVar('end_date') ?>">        
                                    </div>
                                    <div class="col-2 p-0">
                                        <button class="btn btn-primary" type="submit" style="margin-top: 2px;">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>

                <div class="white_card_body">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4></h4>

                        </div>
                        <div class="QA_table mb_30">

                        <a href="<?= $start_date != null && $end_date != null ? base_url() . 'permintaan/permintaan_pdf?start_date=' . $start_date . '&end_date=' . $end_date . '' : site_url('permintaan/permintaan_pdf') ?>" class="btn btn-primary" style="margin-top: 2px;">Cetak PDF</a>
                            <table class="table table-responsive" border="solid" id="table-permintaan">

                                <thead>
                                    <tr>
                                        <th scope="col">Kode Transaksi</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Nama Mitra</th>
                                        <th scope="col">Jumlah Diminta</th>
                                        <th scope="col">Nama Penyewa</th>
                                        <th scope="col">Tanggal Diminta</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($results as $pr): ?>
                                        <tr>
                                            <td><?= $pr['kd_pr'] ?></td>
                                            <td><?= $pr['nama_brg'] ?></td>
                                            <td><?= $pr['nama_mitra'] ?></td>
                                            <td><?= $pr['jumlah_diminta'] ?></td>
                                            <td><?= $pr['nama_penyewa'] ?></td>
                                            <td><?= $pr['tanggal_diminta'] ?></td>
                                            <td>
                                                <?php
                                                $statusClass = $pr['status'] == "Belum Selesai" ? "status_btn_red" : ($pr['status'] == "Pending" ? "status_btn_yellow" : "status_btn");
                                                ?>
                                                <a data-id="<?= $pr['kd_pr'] ?>" id="BTN_UPDATE_PERMINTAAN" class="btn <?= $statusClass ?>">
                                                    <?= $pr['status'] ?>
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
    $(document).on("click", "#BTN_UPDATE_PERMINTAAN", async function(e) {
        e.preventDefault()
        const id = $(this).data('id')
        try {
            const response = await $.post("<?= base_url('/Api/Permintaan/status') ?>", {
                id
            });
            if (response === "Belum Selesai") {
                $(this).addClass('status_btn_red')
                $(this).removeClass('status_btn')
                $(this).removeClass('status_btn_yellow')
                $(this).text(response)
            } else if(response === "Pending") {
                $(this).addClass('status_btn_yellow')
                $(this).removeClass('status_btn_red')
                $(this).removeClass('status_btn')
                $(this).text(response)
            }else if(response === "Selesai"){
                $(this).addClass('status_btn')
                $(this).removeClass('status_btn_yellow')
                $(this).removeClass('status_btn_red')
                $(this).text(response)
            }
        } catch (err) {
            console.log(err)
        }
    })
</script>
<?= $this->endSection() ?>