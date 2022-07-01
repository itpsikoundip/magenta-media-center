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
$routes->get('/', 'Login::index');

//BACKEND

//Pertanyaan Survey
$routes->get('/surveydosen', 'backendSurveyDosenController::index');
$routes->post('/surveydosen/addSurveyDosen', 'backendSurveyDosenController::addSurveyDosen');
$routes->get('/surveydosen/deleteSurveyDosen/(:any)', 'backendSurveyDosenController::deleteSurveyDosen/$1');
$routes->post('/surveydosen/updateSurveyDosen/(:num)', 'backendSurveyDosenController::updateSurveyDosen/$1');

$routes->get('/surveykepend', 'backendSurveyKependController::index');
$routes->post('/surveykepend/addSurveyKepend', 'backendSurveyKependController::addSurveyKepend');
$routes->get('/surveykepend/deleteSurveyKepend/(:any)', 'backendSurveyKependController::deleteSurveyKepend/$1');
$routes->post('/surveykepend/updateSurveyKepend/(:num)', 'backendSurveyKependController::updateSurveyKepend/$1');

$routes->get('/surveylulusan', 'backendSurveyLulusanController::index');
$routes->post('/surveylulusan/addSurveyLulusan', 'backendSurveyLulusanController::addSurveyLulusan');
$routes->get('/surveylulusan/deleteSurveyLulusan/(:num)', 'backendSurveyLulusanController::deleteSurveyLulusan/$1');
$routes->post('/surveylulusan/updateSurveyLulusan/(:num)', 'backendSurveyLulusanController::updateSurveyLulusan/$1');

//Hasil Survey Individual
$routes->get('/hasilSurveyDosen', 'backendHasilSurveyDosenController::index');
$routes->get('/hasilSurveyKepend', 'backendHasilSurveyKependController::index');
$routes->get('/hasilSurveyLulusan', 'backendHasilSurveyLulusanController::index');

//Grafik Hasil Survey
$routes->get('/grafikDosen', 'backendGrafikDosenController::index');
$routes->get('/grafikKepend', 'backendGrafikKependController::index');
$routes->get('/grafikLulusan', 'backendGrafikLulusanController::index');

//FRONTEND

//3 Menu Card Landing
$routes->get('/menuDisplay', 'frontendMenuDisplayController::index');

//Table Select & Input Dosen
$routes->get('/selectDosen', 'frontendSelectDosenController::index');
$routes->get('/gotoInputDosen/(:num)/(:segment)', 'frontendSelectDosenController::gotoInputDosen/$1/$2');
$routes->post('/inputDosen/(:num)', 'frontendSelectDosenController::inputDosen/$1');

//Table Select & Input Tenaga Kependidikan
$routes->get('/selectKepend', 'frontendSelectKependController::index');
$routes->get('/gotoInputKepend/(:num)/(:segment)', 'frontendSelectKependController::gotoInputKepend/$1/$2');
$routes->post('/inputKepend/(:num)', 'frontendSelectKependController::inputKepend/$1');

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
