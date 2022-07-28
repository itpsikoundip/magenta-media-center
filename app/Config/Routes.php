<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(false);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->group('admin', function ($routes) {
});

$routes->group('staffdosen', function ($routes) {

    $routes->get('/', 'StaffDosen::index');

    $routes->group('survey', ['namespace' => 'App\Controllers\StaffDosen\Survey', 'filter' => 'authStaffDosen'], function ($routes) {
        //Pertanyaan Survey
        $routes->get('surveydosen', 'surveyDosenController::index');
        $routes->post('addsurveydosen', 'surveyDosenController::addSurveyDosen');
        $routes->get('deletesurveydosen/(:any)', 'surveyDosenController::deleteSurveyDosen/$1');

        $routes->get('surveykepend', 'surveyKependController::index');
        $routes->post('addsurveykepend', 'surveyKependController::addSurveyKepend');
        $routes->get('deletesurveykepend/(:any)', 'surveyKependController::deleteSurveyKepend/$1');

        $routes->get('surveylulusan', 'surveyLulusanController::index');
        $routes->post('addsurveylulusan', 'surveyLulusanController::addSurveyLulusan');
        $routes->get('deletesurveylulusan/(:num)', 'surveyLulusanController::deleteSurveyLulusan/$1');

        //Truncate Data
        $routes->get('truncatedosen', 'surveyDosenController::truncateAll');
        $routes->get('truncatekepend', 'surveyKependController::truncateAll');
        $routes->get('truncatelulusan', 'surveyLulusanController::truncateAll');

        //Hasil Survey Individual
        $routes->get('hasilsurveydosen', 'hasilSurveyDosenController::index');
        $routes->get('chartsingledosen/(:num)/(:segment)', 'hasilSurveyDosenController::displayChart/$1/$2');

        $routes->get('hasilsurveykepend', 'hasilSurveyKependController::index');
        $routes->get('chartsinglekepend/(:num)/(:segment)', 'hasilSurveyKependController::displayChart/$1/$2');

        //Grafik Hasil Survey
        $routes->get('grafikdosen', 'grafikDosenController::index');
        $routes->get('grafikkepend', 'grafikKependController::index');
        $routes->get('grafiklulusan', 'grafikLulusanController::index');

        //Export
        $routes->get('exportdosen', 'surveyDosenController::export');
        $routes->get('exportkepend', 'surveyKependController::export');
        $routes->get('exportlulusan', 'surveyLulusanController::export');
    });

    $routes->group('helpdesk', ['namespace' => 'App\Controllers\StaffDosen\Helpdesk', 'filter' => 'authStaffDosen'], function ($routes) {
        $routes->get('/', 'HelpdeskController::index');
        $routes->get('detailtiket/(:num)', 'HelpdeskController::detailTiket/$1');
        $routes->post('jawabtiket/(:num)', 'HelpdeskController::jawabTiket/$1');
        $routes->post('addfaq', 'HelpdeskController::addFAQ');
        $routes->get('deletefaq/(:num)', 'HelpdeskController::deleteFAQ/$1');
    });

    $routes->group('kegiatan', ['namespace' => 'App\Controllers\StaffDosen\Kegiatan', 'filter' => 'authStaffDosen'], function ($routes) {
        $routes->get('/', 'KegiatanController::index');
    });

    $routes->group('sk', ['namespace' => 'App\Controllers\StaffDosen\SK', 'filter' => 'authStaffDosen'], function ($routes) {
        $routes->get('/', 'ControllerSK::index');
        $routes->group('operator', ['filter' => 'authStaffDosen'], function ($routes) {
            $routes->group('dekan', ['namespace' => 'App\Controllers\StaffDosen\SK', 'filter' => 'authStaffDosen'], function ($routes) {
                $routes->get('/', 'ControllerOperatorSKDekan::index');
                $routes->get('add', 'ControllerOperatorSKDekan::add');
                $routes->post('addData', 'ControllerOperatorSKDekan::addData');
                $routes->get('view/(:num)', 'ControllerOperatorSKDekan::view/$1');
                $routes->get('edit/(:num)', 'ControllerOperatorSKDekan::edit/$1');
                $routes->post('editdata/(:num)', 'ControllerOperatorSKDekan::editData/$1');
                $routes->post('editdatafilesk/(:num)', 'ControllerOperatorSKDekan::editDataFileSK/$1');
                $routes->post('konfirmasieditkedekan/(:num)', 'ControllerOperatorSKDekan::konfirmasiEditkeDekan/$1');
                $routes->post('konfirmiaseditkewadeksumda/(:num)', 'ControllerOperatorSKDekan::konfirmasiEditkeWadeksumda/$1');
                $routes->post('konfirmasieditkewadekakem/(:num)', 'ControllerOperatorSKDekan::konfirmasiEditkeWadekakem/$1');
                $routes->post('konfirmasieditketatausaha/(:num)', 'ControllerOperatorSKDekan::konfirmasiEditkeTatausaha/$1');
                $routes->post('konfirmasieditkesumberdaya/(:num)', 'ControllerOperatorSKDekan::konfirmasiEditkeSumberdaya/$1');
                $routes->post('konfirmasieditkeakademik/(:num)', 'ControllerOperatorSKDekan::konfirmasiEditkeAkademik/$1');
            });
        });
        $routes->group('verifikator', ['filter' => 'authStaffDosen'], function ($routes) {
            $routes->group('dekan', ['namespace' => 'App\Controllers\StaffDosen\SK', 'filter' => 'authStaffDosen'], function ($routes) {
                $routes->get('/', 'ControllerVerifikatorSKDekan::index');
                $routes->get('view/(:num)', 'ControllerVerifikatorSKDekan::view/$1');
                $routes->get('edit/(:num)', 'ControllerVerifikatorSKDekan::edit/$1');
                // Catatan Revisi / Perbaikan
                $routes->post('editdatasvakakemcatatan/(:num)', 'ControllerVerifikatorSKDekan::editDataSvAkakemCatatan/$1');
                $routes->post('editdatasvsumdacatatan/(:num)', 'ControllerVerifikatorSKDekan::editDataSvSumdaCatatan/$1');
                $routes->post('editdatamanagertucatatan/(:num)', 'ControllerVerifikatorSKDekan::editDataManagerTUCatatan/$1');
                $routes->post('editdatawadekakakemcatatan/(:num)', 'ControllerVerifikatorSKDekan::editDataWadekAkakemCatatan/$1');
                $routes->post('editdatawadeksumdacatatan/(:num)', 'ControllerVerifikatorSKDekan::editDataWadekSumdaCatatan/$1');
                $routes->post('editdatadekancatatan/(:num)', 'ControllerVerifikatorSKDekan::editDataDekanCatatan/$1');
                // Status Proposal
                $routes->post('editdatasvakakemstatus/(:num)', 'ControllerVerifikatorSKDekan::editDataSvAkakemStatus/$1');
                $routes->post('editdatasvsumdastatus/(:num)', 'ControllerVerifikatorSKDekan::editDataSvSumdaStatus/$1');
                $routes->post('editdatamanagertustatus/(:num)', 'ControllerVerifikatorSKDekan::editDataManagerTUStatus/$1');
                $routes->post('editdatawadekakakemstatus/(:num)', 'ControllerVerifikatorSKDekan::editDataWadekAkakemStatus/$1');
                $routes->post('editdatawadeksumdastatus/(:num)', 'ControllerVerifikatorSKDekan::editDataWadekSumdaStatus/$1');
                $routes->post('editdatadekanstatus/(:num)', 'ControllerVerifikatorSKDekan::editDataDekanStatus/$1');
            });
        });
    });
});

$routes->group('mahasiswa', function ($routes) {

    $routes->group('survey', ['namespace' => 'App\Controllers\Mahasiswa\Survey', 'filter' => 'authMhs'], function ($routes) {
        //Menu Card Landing
        $routes->get('menudisplay/(:num)', 'menuDisplayController::index/$1');

        //Table Select & Input Dosen
        $routes->get('selectdosen', 'selectDosenController::index');
        $routes->get('gotoinputdosen/(:num)/(:segment)', 'selectDosenController::gotoInputDosen/$1/$2');
        $routes->post('inputdosen/(:num)/(:segment)', 'selectDosenController::inputDosen/$1/$2');

        //Table Select & Input Tenaga Kependidikan
        $routes->get('selectkepend', 'selectKependController::index');
        $routes->get('gotoinputkepend/(:num)/(:segment)', 'selectKependController::gotoInputKepend/$1/$2');
        $routes->post('inputkepend/(:num)/(:segment)', 'selectKependController::inputKepend/$1/$2');

        //Survey Lulusan
        $routes->get('inputlulusan', 'inputLulusanController::index');
        $routes->post('inputlulusan/input/(:num)', 'inputLulusanController::inputLulusan/$1');
    });

    $routes->group('helpdesk', ['namespace' => 'App\Controllers\Mahasiswa\Helpdesk', 'filter' => 'authMhs'], function ($routes) {
        $routes->get('/', 'HelpdeskController::index');
        $routes->get('tiket', 'HelpdeskController::tiket');
        $routes->post('tiket/kirim', 'HelpdeskController::kirimTiket');
        $routes->get('hotline', 'HelpdeskController::hotline');
    });
});

$routes->get('/', 'Login::index');

$routes->get('/proposal', 'Proposal::index');
$routes->get('/proposal/pengajuan', 'Proposal::pengajuan');
$routes->get('/proposal/data', 'Proposal::data');
$routes->post('/proposal/proses', 'Proposal::add');
$routes->get('/proposal/detail/(:num)', 'Proposal::detail/$1');
$routes->get('/proposal/edit/(:num)', 'Proposal::edit/$1');
$routes->post('/proposal/konfirm/(:num)', 'Proposal::konfirm/$1');
$routes->post('/proposal/editpengajuan/(:num)', 'Proposal::konfirm/$1');
$routes->post('/proposal/editdata/(:num)', 'Proposal::editData/$1');
$routes->post('/proposal/editdaeditfileproposalta/(:num)', 'Proposal::editFileProposal/$1');
$routes->post('/proposal/konfirmasieditkedekan/(:num)', 'Proposal::konfirmasiEditkeDekan/$1');
$routes->post('/proposal/konfirmasieditkewadeksumda/(:num)', 'Proposal::konfirmasiEditkeWadeksumda/$1');
$routes->post('/proposal/konfirmasieditkewadekakakem/(:num)', 'Proposal::konfirmasiEditkeWadekakem/$1');
$routes->post('/proposal/konfirmasieditkekaprodis1/(:num)', 'Proposal::konfirmasiEditkeKaprodis1/$1');
$routes->post('/proposal/konfirmasieditketatausaha/(:num)', 'Proposal::konfirmasiEditkeTatausaha/$1');
$routes->post('/proposal/konfirmasieditkesumberdaya/(:num)', 'Proposal::konfirmasiEditkeSumberdaya/$1');
$routes->post('/proposal/konfirmasieditkeakademik/(:num)', 'Proposal::konfirmasiEditkeAkademik/$1');
$routes->post('/proposal/konfirmasieditkebem/(:num)', 'Proposal::konfirmasiEditkeBEM/$1');


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
