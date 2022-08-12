<style>
    .app-content {
        background-color: #f1467e;
    }
</style>

<body class="vertical-layout vertical-menu 1-column bg-lighten-2 menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img src="https://psikologi.undip.ac.id/wp-content/uploads/Splash-1.png" alt="Universitas Diponegoro" style="width: 150px;">
                                        <h4 class="mt-2"><u>LOGIN</u></h4>
                                        <h1><strong>Magenta Media Center (MMC)</strong></h1>
                                        <h2>Fakultas Psikologi Undip</h2>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2"><span>Pilih Role</span></p>
                                    <div class="card-body pt-0">
                                        <div class="form-group text-center mt-4">
                                            <a href="<?= base_url('login/mahasiswa'); ?>" class="btn btn-outline-secondary btn-lg btn-min-width mr-1 mb-1">Mahasiswa</a>
                                            <a href="<?= base_url('login/staffdosen'); ?>" class="btn btn-outline-secondary btn-lg btn-min-width mr-1 mb-1">Staff & Dosen</a>
                                            <a href="<?= base_url('login/eksternal'); ?>" class="btn btn-outline-secondary btn-lg btn-min-width mr-1 mb-1">Eksternal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->