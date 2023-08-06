<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>BM-Inventaris</title>
    <link rel="icon" href="<?= base_url() ?>assets/img/mini_logo.png" type="image/png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/morris/morris.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/metisMenu.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style1.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/colors/default.css" id="colorSkinCSS">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatable/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatable/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatable/css/responsive.dataTables.min.css">


    <style>
        div.dataTables_filter,
        div.dataTables_length {
            padding: 20px 0;
        }
    </style>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> -->



</head>

<body class="crm_body_bg">

    <!-- template-sidebar -->

    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="/"><img src="<?= base_url() ?>assets/img/bm2.png" alt="" align="center"></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li>
                <a href="/" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?= base_url() ?>assets/img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <h4 class="menu-text"><span>FITUR</span> <i class="fas fa-ellipsis-h"></i> </h4>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?= base_url() ?>assets/img/menu-icon/2.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Data Master </span>
                    </div>
                </a>
                <ul>
                    <li><a href="<?= base_url('m_barang') ?>">Master Barang</a></li>
                </ul>

                <ul>
                    <li><a href="<?= base_url('m_mitra') ?>">Master Mitra</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?= base_url() ?>assets/img/menu-icon/5.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Form Transaksi</span>
                    </div>
                </a>
                <ul>
                    <li><a href="<?= base_url('form_barangMasuk') ?>">Form Brg Masuk</a></li>
                </ul>
                <ul>
                    <li><a href="<?= base_url('form_barangKeluar') ?>">Form Brg Keluar</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?= base_url() ?>assets/img/menu-icon/6.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Cetak Transaksi</span>
                    </div>
                </a>
                <ul>
                    <li><a href="<?= base_url('m_barangMasuk') ?>"">Transaksi Barang Masuk</a></li>
                </ul>
                <ul>
                    <li><a href=" <?= base_url('m_barangKeluar') ?>"">Transaksi Barang Keluar</a></li>
                </ul>
                <ul>
                    <li><a href="<?= base_url('m_permintaan') ?>"">Transaksi Permintaan</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?= base_url() ?>assets/img/menu-icon/15.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Account</span>
                    </div>
                </a>
            </li>
    </nav>

    <section class=" main_content dashboard_part large_header_bg">

                            <div class="container-fluid g-0">
                                <div class="row">
                                    <div class="col-lg-12 p-0 ">
                                        <div class="header_iner d-flex justify-content-between align-items-center">
                                            <div class="sidebar_icon d-lg-none">
                                                <i class="ti-menu"></i>
                                            </div>
                                            <label class="form-label switch_toggle d-none d-lg-block" for="checkbox">
                                                <input type="checkbox" id="checkbox">
                                                <div class="slider round open_miniSide"></div>
                                            </label>
                                            <div class="profile_info">
                                                <img src="<?= base_url() ?>assets/img/client_img.png" alt="#">
                                                <div class="profile_info_iner">
                                                    <div class="profile_author_name">
                                                        <p>Neurologist </p>
                                                        <h5>Dr. Robar Smith</h5>
                                                    </div>

                                                    <div class="profile_info_details">
                                                        <a href="#">My Profile </a>
                                                        <a href="#">Settings</a>
                                                        <a href="<?= base_url('logout') ?>">Log Out </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <!-- isi content -->

                            <div class="main_content_iner overly_inner ">
                                <?= $this->renderSection('content') ?>
                            </div>

                            <div class="footer_part">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="footer_iner text-center">
                                                <p>2020 © Influence - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#">
                                                        DashboardPack</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </section>

                            <div id="back-top" style="display: none;">
                                <a title="Go to Top" href="#">
                                    <i class="ti-angle-up"></i>
                                </a>
                            </div>

                            <script src="<?= base_url() ?>assets/js/jquery1-3.4.1.min.js"></script>

                            <script src="<?= base_url() ?>assets/js/popper1.min.js"></script>

                            <script src="<?= base_url() ?>assets/js/bootstrap1.min.js"></script>

                            <script src="<?= base_url() ?>assets/js/metisMenu.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/count_up/jquery.waypoints.min.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/chartlist/Chart.min.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/count_up/jquery.counterup.min.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/niceselect/js/jquery.nice-select.min.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/owl_carousel/js/owl.carousel.min.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/datatable/js/jquery.dataTables.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/dataTables.responsive.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/dataTables.buttons.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/buttons.flash.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/jszip.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/pdfmake.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/vfs_fonts.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/buttons.html5.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/buttons.print.min.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/datepicker/datepicker.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datepicker/datepicker.en.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datepicker/datepicker.custom.js"></script>
                            <script src="<?= base_url() ?>assets/js/chart.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/chartjs/roundedBar.min.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/progressbar/jquery.barfiller.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/tagsinput/tagsinput.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/text_editor/summernote-bs4.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/am_chart/amcharts.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/scroll/perfect-scrollbar.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/scroll/scrollable-custom.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/vectormap-home/vectormap-world-mill-en.js"></script>

                            <script src="<?= base_url() ?>assets/vendors/apex_chart/apex-chart2.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/apex_chart/apex_dashboard.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/echart/echarts.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/chart_am/core.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/chart_am/charts.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/chart_am/animated.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/chart_am/kelly.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/chart_am/chart-custom.js"></script>

                            <script src="<?= base_url() ?>assets/js/dashboard_init.js"></script>
                            <script src="<?= base_url() ?>assets/js/custom.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/jquery.dataTables.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/dataTables.responsive.min.js"></script>
                            <script src="<?= base_url() ?>assets/vendors/datatable/js/dataTables.buttons.min.js"></script>

                            <?= $this->renderSection('script') ?>
</body>


</html>