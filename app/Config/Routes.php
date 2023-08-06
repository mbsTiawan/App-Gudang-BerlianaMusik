<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/m_barang', 'BarangGudang::index');
$routes->get('/m_mitra', 'Mitra::index');
$routes->get('m_barangMasuk', 'MasterBarangMasuk::index');
$routes->get('m_barangKeluar', 'MasterBarangKeluar::index');
$routes->get('m_permintaan', 'Permintaan::index');
$routes->get('form_barangMasuk', 'MasterBarangMasuk::create');
$routes->get('form_barangKeluar', 'MasterBarangKeluar::create');
$routes->post('/Api/BarangMasuk/status', 'Api\ApiBarangMasuk::index');
$routes->post('/Api/BarangKeluar/status', 'Api\ApiBarangKeluar::index');
$routes->post('/Api/Permintaan/status', 'Api\ApiPermintaan::index');
$routes->get('/ApiTransaksiKeluar', 'ApiTransaksiKeluar::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}