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

//BACKEND SURVEY
//Pertanyaan Survey
$routes->get('/surveydosen', 'backendSurveyDosenController::index');
$routes->post('/surveydosen/addSurveyDosen', 'backendSurveyDosenController::addSurveyDosen');
$routes->get('/surveydosen/deleteSurveyDosen/(:any)', 'backendSurveyDosenController::deleteSurveyDosen/$1');

$routes->get('/surveykepend', 'backendSurveyKependController::index');
$routes->post('/surveykepend/addSurveyKepend', 'backendSurveyKependController::addSurveyKepend');
$routes->get('/surveykepend/deleteSurveyKepend/(:any)', 'backendSurveyKependController::deleteSurveyKepend/$1');

$routes->get('/surveylulusan', 'backendSurveyLulusanController::index');
$routes->post('/surveylulusan/addSurveyLulusan', 'backendSurveyLulusanController::addSurveyLulusan');
$routes->get('/surveylulusan/deleteSurveyLulusan/(:num)', 'backendSurveyLulusanController::deleteSurveyLulusan/$1');

//Truncate Data
$routes->get('/truncateDosen', 'backendSurveyDosenController::truncateAll');
$routes->get('/truncateKepend', 'backendSurveyKependController::truncateAll');
$routes->get('/truncateLulusan', 'backendSurveyLulusanController::truncateAll');

//Hasil Survey Individual
$routes->get('/hasilSurveyDosen', 'backendHasilSurveyDosenController::index');
$routes->get('/chartSingleDosen/(:num)', 'backendHasilSurveyDosenController::displayChart/$1');

$routes->get('/hasilSurveyKepend', 'backendHasilSurveyKependController::index');
$routes->get('/chartSingleKepend/(:num)', 'backendHasilSurveyKependController::displayChart/$1');

//Grafik Hasil Survey
$routes->get('/grafikDosen', 'backendGrafikDosenController::index');
$routes->get('/grafikKepend', 'backendGrafikKependController::index');
$routes->get('/grafikLulusan', 'backendGrafikLulusanController::index');

//Export
$routes->get('/exportDosen', 'backendSurveyDosenController::export');
$routes->get('/exportKepend', 'backendSurveyKependController::export');
$routes->get('/exportLulusan', 'backendSurveyLulusanController::export');

//FRONTEND SURVEY
//3 Menu Card Landing
$routes->get('/menuDisplay/(:num)', 'frontendMenuDisplayController::index/$1', ['filter' => 'authMhs']);

//Table Select & Input Dosen
$routes->get('/selectDosen', 'frontendSelectDosenController::index', ['filter' => 'authMhs']);
$routes->get('/gotoInputDosen/(:num)/(:segment)', 'frontendSelectDosenController::gotoInputDosen/$1/$2', ['filter' => 'authMhs']);
$routes->post('/inputDosen/(:num)/(:segment)', 'frontendSelectDosenController::inputDosen/$1/$2', ['filter' => 'authMhs']);

//Table Select & Input Tenaga Kependidikan
$routes->get('/selectKepend', 'frontendSelectKependController::index', ['filter' => 'authMhs']);
$routes->get('/gotoInputKepend/(:num)/(:segment)', 'frontendSelectKependController::gotoInputKepend/$1/$2', ['filter' => 'authMhs']);
$routes->post('/inputKepend/(:num)/(:segment)', 'frontendSelectKependController::inputKepend/$1/$2', ['filter' => 'authMhs']);

//Survey Lulusan
$routes->get('/inputLulusan', 'frontendInputLulusanController::index');
$routes->post('/inputLulusan/input/(:num)', 'frontendInputLulusanController::inputLulusan/$1');


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
