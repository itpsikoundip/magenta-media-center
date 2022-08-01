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

$routes->get('/', 'ControllerLogin::index');

//LOGIN
$routes->group('login', function ($routes) {
    $routes->get('/', 'ControllerLogin::index');
    $routes->get('mahasiswa', 'ControllerLogin::mahasiswa');
    $routes->get('staffdosen', 'ControllerLogin::staffdosen');
    $routes->get('eksternal', 'ControllerLogin::eksternal');
    $routes->get('admin', 'ControllerLogin::admin');
    $routes->post('authmhs', 'ControllerLogin::authMhs');
    $routes->post('authstaffdosen', 'ControllerLogin::authStaffDosen');
    $routes->get('logoutmhs', 'ControllerLogin::logoutMhs');
    $routes->get('logoutstaffdosen', 'ControllerLogin::logoutStaffDosen');
});

// ADMIN
$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'authAdmin'], function ($routes) {
    $routes->get('/', 'ControllerAdmin::index');
    // Fitur
    $routes->group('fitur',  function ($routes) {
        // SK
        $routes->group('sk', ['namespace' => 'App\Controllers\Admin\fitur\sk'], function ($routes) {
            $routes->group('usermanagement',  function ($routes) {
                $routes->get('/', 'ControllerAdminSKUserManagement::index');
                $routes->post('addop', 'ControllerAdminSKUserManagement::addAksesUserOperator');
                $routes->get('deleteop/(:num)', 'ControllerAdminSKUserManagement::deleteAksesUserOperator/$1');
                $routes->post('editop/(:num)', 'ControllerAdminSKUserManagement::editAksesUserOperator/$1');
                $routes->post('addverif', 'ControllerAdminSKUserManagement::addAksesUserVerifikator');
                $routes->get('deleteverif/(:num)', 'ControllerAdminSKUserManagement::deleteAksesUserVerifikator/$1');
                $routes->post('editverif/(:num)', 'ControllerAdminSKUserManagement::editAksesUserVerifikator/$1');
            });
            $routes->group('data',  function ($routes) {
                $routes->group('skdekan',  function ($routes) {
                    $routes->get('/', 'ControllerAdminSKDataSKDekan::index');
                });
                $routes->group('skrektor',  function ($routes) {
                    $routes->get('/', 'ControllerAdminSKDataSKRektor::index');
                });
            });
        });
        // Proposal
        $routes->group('proposal', ['namespace' => 'App\Controllers\Admin\fitur\proposal'], function ($routes) {
            $routes->group('usermanagement',  function ($routes) {
                $routes->get('/', 'ControllerAdminProposalUserManagement::index');
            });
            $routes->group('data',  function ($routes) {
                $routes->get('/', 'ControllerAdminProposalData::index');
            });
        });
    });
    // Data
    $routes->group('data',  function ($routes) {
        // Mahasiswa
        $routes->group('mahasiswa', ['namespace' => 'App\Controllers\Admin\Data\Mahasiswa'], function ($routes) {
            $routes->get('/', 'ControllerAdminDataMahasiswa::index');
        });
        // Staff & Dosen
        $routes->group('staffdosen', ['namespace' => 'App\Controllers\Admin\Data\StaffDosen'], function ($routes) {
            $routes->get('/', 'ControllerAdminDataStaffDosen::index');
        });
    });
    // User
    $routes->group('user',  function ($routes) {
        // Mahasiswa
        $routes->group('mahasiswa', ['namespace' => 'App\Controllers\Admin\User'], function ($routes) {
            $routes->get('/', 'ControllerAdminUserMahasiswa::index');
            $routes->post('add', 'ControllerAdminUserMahasiswa::addUser');
            $routes->post('edit/(:num)', 'ControllerAdminUserMahasiswa::editData/$1');
            $routes->post('editpass/(:num)', 'ControllerAdminUserMahasiswa::editDataPass/$1');
            $routes->get('delete/(:num)', 'ControllerAdminUserMahasiswa::delete/$1');
        });
        // Ormawa
        $routes->group('ormawa', ['namespace' => 'App\Controllers\Admin\User'], function ($routes) {
            $routes->get('/', 'ControllerAdminUserOrmawa::index');
            $routes->post('add', 'ControllerAdminUserOrmawa::addUser');
            $routes->get('delete/(:num)', 'ControllerAdminUserOrmawa::delete/$1');
        });
        // Staff & Dosen
        $routes->group('staffdosen', ['namespace' => 'App\Controllers\Admin\User'], function ($routes) {
            $routes->get('/', 'ControllerAdminUserStaffDosen::index');
            $routes->post('add', 'ControllerAdminUserStaffDosen::addUser');
            $routes->post('edit/(:num)', 'ControllerAdminUserStaffDosen::editData/$1');
            $routes->post('editpass/(:num)', 'ControllerAdminUserStaffDosen::editDataPass/$1');
            $routes->get('delete/(:num)', 'ControllerAdminUserStaffDosen::delete/$1');
        });
    });
});

// STAFFDOSEN
$routes->group('staffdosen', ['namespace' => 'App\Controllers\StaffDosen', 'filter' => 'authStaffDosen'], function ($routes) {

    $routes->get('/', 'ControllerStaffDosen::index');

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
        $routes->post('addkegiatan', 'KegiatanController::addKegiatan');
    });

    $routes->post('keg/addkegiatan', 'App\Controllers\StaffDosen\Kegiatan\KegiatanController::addKegiatan');

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
            $routes->group('rektor', ['namespace' => 'App\Controllers\StaffDosen\SK', 'filter' => 'authStaffDosen'], function ($routes) {
                $routes->get('/', 'ControllerOperatorSKRektor::index');
                $routes->get('add', 'ControllerOperatorSKRektor::add');
                $routes->post('addData', 'ControllerOperatorSKRektor::addData');
                $routes->get('view/(:num)', 'ControllerOperatorSKRektor::view/$1');
                $routes->get('edit/(:num)', 'ControllerOperatorSKRektor::edit/$1');
                $routes->post('editdata/(:num)', 'ControllerOperatorSKRektor::editData/$1');
                $routes->post('editdatafilesk/(:num)', 'ControllerOperatorSKRektor::editDataFileSK/$1');
                $routes->post('konfirmasieditkedekan/(:num)', 'ControllerOperatorSKRektor::konfirmasiEditkeDekan/$1');
                $routes->post('konfirmiaseditkewadeksumda/(:num)', 'ControllerOperatorSKRektor::konfirmasiEditkeWadeksumda/$1');
                $routes->post('konfirmasieditkewadekakem/(:num)', 'ControllerOperatorSKRektor::konfirmasiEditkeWadekakem/$1');
                $routes->post('konfirmasieditketatausaha/(:num)', 'ControllerOperatorSKRektor::konfirmasiEditkeTatausaha/$1');
                $routes->post('konfirmasieditkesumberdaya/(:num)', 'ControllerOperatorSKRektor::konfirmasiEditkeSumberdaya/$1');
                $routes->post('konfirmasieditkeakademik/(:num)', 'ControllerOperatorSKRektor::konfirmasiEditkeAkademik/$1');
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
            $routes->group('rektor', ['namespace' => 'App\Controllers\StaffDosen\SK', 'filter' => 'authStaffDosen'], function ($routes) {
                $routes->get('/', 'ControllerVerifikatorSKRektor::index');
                $routes->get('view/(:num)', 'ControllerVerifikatorSKRektor::view/$1');
                $routes->get('edit/(:num)', 'ControllerVerifikatorSKRektor::edit/$1');
                // Catatan Revisi / Perbaikan
                $routes->post('editdatasvakakemcatatan/(:num)', 'ControllerVerifikatorSKRektor::editDataSvAkakemCatatan/$1');
                $routes->post('editdatasvsumdacatatan/(:num)', 'ControllerVerifikatorSKRektor::editDataSvSumdaCatatan/$1');
                $routes->post('editdatamanagertucatatan/(:num)', 'ControllerVerifikatorSKRektor::editDataManagerTUCatatan/$1');
                $routes->post('editdatawadekakakemcatatan/(:num)', 'ControllerVerifikatorSKRektor::editDataWadekAkakemCatatan/$1');
                $routes->post('editdatawadeksumdacatatan/(:num)', 'ControllerVerifikatorSKRektor::editDataWadekSumdaCatatan/$1');
                $routes->post('editdatadekancatatan/(:num)', 'ControllerVerifikatorSKRektor::editDataDekanCatatan/$1');
                // Status Proposal
                $routes->post('editdatasvakakemstatus/(:num)', 'ControllerVerifikatorSKRektor::editDataSvAkakemStatus/$1');
                $routes->post('editdatasvsumdastatus/(:num)', 'ControllerVerifikatorSKRektor::editDataSvSumdaStatus/$1');
                $routes->post('editdatamanagertustatus/(:num)', 'ControllerVerifikatorSKRektor::editDataManagerTUStatus/$1');
                $routes->post('editdatawadekakakemstatus/(:num)', 'ControllerVerifikatorSKRektor::editDataWadekAkakemStatus/$1');
                $routes->post('editdatawadeksumdastatus/(:num)', 'ControllerVerifikatorSKRektor::editDataWadekSumdaStatus/$1');
                $routes->post('editdatadekanstatus/(:num)', 'ControllerVerifikatorSKRektor::editDataDekanStatus/$1');
            });
        });
    });

    $routes->group('profil', ['namespace' => 'App\Controllers\StaffDosen\Profil', 'filter' => 'authStaffDosen'], function ($routes) {
        $routes->get('/', 'ControllerStaffDosenProfil::index');
    });
});

// MAHASISWA
$routes->group('mahasiswa', ['namespace' => 'App\Controllers\Mahasiswa', 'filter' => 'authMhs'], function ($routes) {

    $routes->get('/', 'ControllerMahasiswa::index');

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

    $routes->group('profil', ['namespace' => 'App\Controllers\Mahasiswa\Profil', 'filter' => 'authMhs'], function ($routes) {
        $routes->get('/', 'ControllerMahasiswaProfil::index');
    });

    $routes->group('layananakademik', ['namespace' => 'App\Controllers\Mahasiswa\LayananAkademik', 'filter' => 'authMhs'], function ($routes) {
        $routes->get('/', 'ControllerMahasiswaLayananAkademik::index');
    });
});

// ORMAWA
$routes->group('ormawa', ['namespace' => 'App\Controllers\Ormawa', 'filter' => 'authMhs'], function ($routes) {
    $routes->get('/', 'ControllerOrmawa::index');
    $routes->group('proposal', ['namespace' => 'App\Controllers\Ormawa\Proposal', 'filter' => 'authMhs'], function ($routes) {
        $routes->get('/', 'ControllerProposal::index');
        $routes->get('add', 'ControllerProposal::add');
        $routes->post('adddata', 'ControllerProposal::addData');
        $routes->get('data', 'ControllerProposal::data');
        $routes->get('view/(:num)', 'ControllerProposal::view/$1');
        $routes->get('edit/(:num)', 'ControllerProposal::edit/$1');
        $routes->post('editdata/(:num)', 'ControllerProposal::editData/$1');
        $routes->post('konfirmasieditkedekan/(:num)', 'ControllerProposal::konfirmasiEditkeDekan/$1');
        $routes->post('konfirmasieditkewadeksumda/(:num)', 'ControllerProposal::konfirmasiEditkeWadeksumda/$1');
        $routes->post('konfirmasieditkewadekakakem/(:num)', 'ControllerProposal::konfirmasiEditkeWadekakem/$1');
        $routes->post('konfirmasieditkekaprodis1/(:num)', 'ControllerProposal::konfirmasiEditkeKaprodis1/$1');
        $routes->post('konfirmasieditketatausaha/(:num)', 'ControllerProposal::konfirmasiEditkeTatausaha/$1');
        $routes->post('konfirmasieditkesumberdaya/(:num)', 'ControllerProposal::konfirmasiEditkeSumberdaya/$1');
        $routes->post('konfirmasieditkeakademik/(:num)', 'ControllerProposal::konfirmasiEditkeAkademik/$1');
        $routes->post('konfirmasieditkebem/(:num)', 'ControllerProposal::konfirmasiEditkeBEM/$1');
        $routes->post('editfileproposal/(:num)', 'ControllerProposal::editFileProposal/$1');
        $routes->get('konfirm/(:num)', 'ControllerProposal::konfirm/$1');
        $routes->post('editdatabemcatatan/(:num)', 'ControllerProposal::editDataBEMCatatan/$1');
        $routes->post('editbemstatus/(:num)', 'ControllerProposal::editBEMStatus/$1');
    });
});


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
