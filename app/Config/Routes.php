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
$routes->setAutoRoute(true);
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

    $routes->group('survey', ['namespace' => 'App\Controllers\StaffDosen\Survey', 'filter' => 'authStaffDosen'], function ($routes) {
        //BACKEND SURVEY
        //Pertanyaan Survey
        $routes->get('surveydosen', 'backendSurveyDosenController::index');
        $routes->post('surveydosen/addsurveydosen', 'backendSurveyDosenController::addSurveyDosen');
        $routes->get('surveydosen/deletesurveydosen/(:any)', 'backendSurveyDosenController::deleteSurveyDosen/$1');

        $routes->get('surveykepend', 'backendSurveyKependController::index');
        $routes->post('surveykepend/addsurveykepend', 'backendSurveyKependController::addSurveyKepend');
        $routes->get('surveykepend/deletesurveykepend/(:any)', 'backendSurveyKependController::deleteSurveyKepend/$1');

        $routes->get('surveylulusan', 'backendSurveyLulusanController::index');
        $routes->post('surveylulusan/addsurveylulusan', 'backendSurveyLulusanController::addSurveyLulusan');
        $routes->get('surveylulusan/deletesurveylulusan/(:num)', 'backendSurveyLulusanController::deleteSurveyLulusan/$1');

        //Truncate Data
        $routes->get('truncatedosen', 'backendSurveyDosenController::truncateAll');
        $routes->get('truncatekepend', 'backendSurveyKependController::truncateAll');
        $routes->get('truncatelulusan', 'backendSurveyLulusanController::truncateAll');

        //Hasil Survey Individual
        $routes->get('hasilsurveydosen', 'backendHasilSurveyDosenController::index');
        $routes->get('chartsingledosen/(:num)', 'backendHasilSurveyDosenController::displayChart/$1');

        $routes->get('hasilsurveykepend', 'backendHasilSurveyKependController::index');
        $routes->get('chartsinglekepend/(:num)', 'backendHasilSurveyKependController::displayChart/$1');

        //Grafik Hasil Survey
        $routes->get('grafikdosen', 'backendGrafikDosenController::index');
        $routes->get('grafikkepend', 'backendGrafikKependController::index');
        $routes->get('grafiklulusan', 'backendGrafikLulusanController::index');

        //Export
        $routes->get('exportdosen', 'backendSurveyDosenController::export');
        $routes->get('exportkepend', 'backendSurveyKependController::export');
        $routes->get('exportlulusan', 'backendSurveyLulusanController::export');
    });

    $routes->group('helpdesk', ['namespace' => 'App\Controllers\StaffDosen\Helpdesk', 'filter' => 'authStaffDosen'], function ($routes) {
        $routes->get('/', 'Helpdesk::index');
        $routes->get('detailtiket/(:num)', 'Helpdesk::detailTiket/$1');
        $routes->post('jawabtiket/(:num)', 'Helpdesk::jawabTiket/$1');
        $routes->post('addfaq', 'Helpdesk::addFAQ');
    });
});

$routes->group('mahasiswa', function ($routes) {

    $routes->group('survey', ['namespace' => 'App\Controllers\Mahasiswa\Survey', 'filter' => 'authMhs'], function ($routes) {
        //FRONTEND SURVEY
        //3 Menu Card Landing
        $routes->get('menudisplay/(:num)', 'frontendMenuDisplayController::index/$1');

        //Table Select & Input Dosen
        $routes->get('selectdosen', 'frontendSelectDosenController::index');
        $routes->get('gotoinputdosen/(:num)/(:segment)', 'frontendSelectDosenController::gotoInputDosen/$1/$2');
        $routes->post('inputdosen/(:num)/(:segment)', 'frontendSelectDosenController::inputDosen/$1/$2');

        //Table Select & Input Tenaga Kependidikan
        $routes->get('selectkepend', 'frontendSelectKependController::index');
        $routes->get('gotoinputkepend/(:num)/(:segment)', 'frontendSelectKependController::gotoInputKepend/$1/$2');
        $routes->post('inputkepend/(:num)/(:segment)', 'frontendSelectKependController::inputKepend/$1/$2');

        //Survey Lulusan
        $routes->get('inputlulusan', 'frontendInputLulusanController::index');
        $routes->post('inputlulusan/input/(:num)', 'frontendInputLulusanController::inputLulusan/$1');
    });

    $routes->group('helpdesk', ['namespace' => 'App\Controllers\Mahasiswa\Helpdesk', 'filter' => 'authMhs'], function ($routes) {
        $routes->get('/', 'Helpdesk::index');
        $routes->get('tiket', 'Helpdesk::tiket');
        $routes->post('tiket/kirim', 'Helpdesk::kirimTiket');
        $routes->get('hotline', 'Helpdesk::hotline');
    });
});

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
