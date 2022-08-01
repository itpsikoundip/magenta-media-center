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
                                        <h4 class="mt-2"><u>LOGIN MAHASISWA</u></h4>
                                        <h1><strong>Magenta Media Center (MMC)</strong></h1>
                                        <h2>Fakultas Psikologi Undip</h2>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2"><span>Silakan Masuk</span></p>
                                    <div class="card-body pt-0">
                                        <?php
                                        $errors = session()->getFlashdata('errors');
                                        ?>
                                        <?php
                                        if (session()->getFlashdata('pesan')) {
                                            echo '<div class="alert alert-danger"  role="alert">';
                                            echo session()->getFlashdata('pesan');
                                            echo '</div>';
                                        }
                                        if (session()->getFlashdata('sukses')) {
                                            echo '<div class="alert alert-success" role="alert">';
                                            echo session()->getFlashdata('sukses');
                                            echo '</div>';
                                        }
                                        ?>

                                        <?php

                                        form_open('login/authmhs');

                                        ?>

                                        <form class="form-horizontal" action="authmhs" method="post">
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left  mt-4">
                                                <input type="text" class="form-control" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa | NIM">
                                                <div class="form-control-position">
                                                    <i class="ft-mail"></i>
                                                </div>
                                                <span class="text-danger">
                                                    <?php
                                                    if ($validation->hasError('nim')) {
                                                        echo $validation->getError('nim');
                                                    }
                                                    ?>
                                                </span>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left ">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                                <div class="form-control-position">
                                                    <i class="ft-lock"></i>
                                                </div>
                                                <span class="text-danger">
                                                    <?php
                                                    if ($validation->hasError('password')) {
                                                        echo $validation->getError('password');
                                                    }
                                                    ?>
                                                </span>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left ">
                                                <select class="form-control" id="level" name="level">
                                                    <option value="">-- Login Sebagai --</option>
                                                    <option value="1">Mahasiswa</option>
                                                    <option value="2">Ormawa</option>
                                                </select>
                                                <div class="form-control-position">
                                                    <i class="ft-users"></i>
                                                </div>
                                                <span class="text-danger">
                                                    <?php
                                                    if ($validation->hasError('level')) {
                                                        echo $validation->getError('level');
                                                    }
                                                    ?>
                                                </span>
                                            </fieldset>
                                            <button type="submit" class="btn btn-outline-indigo btn-lg btn-block indigo mb-1 wrapper_btn_login" style="border-radius: 0px;">
                                                <i class="ft-unlock"></i> LOGIN
                                            </button>
                                        </form>
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