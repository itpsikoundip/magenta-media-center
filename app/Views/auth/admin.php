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
                                        <h4 class="mt-2"><u>LOGIN ADMIN</u></h4>
                                        <h1><strong>Magenta Media Center (MMC)</strong></h1>
                                        <h2>Fakultas Psikologi Undip</h2>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 mb-4"><span>Silakan Masuk</span></p>
                                    <div class="card-body pt-0">


                                        <?php
                                        if (session()->getFlashdata('gagal')) {
                                            echo '<div class="alert alert-danger"  role="alert">';
                                            echo session()->getFlashdata('gagal');
                                            echo '</div>';
                                        }
                                        ?>
                                        <?php echo form_open('login/authadmin'); ?>
                                        <?= csrf_field() ?>
                                        <!-- Email -->
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input autocomplete="off" autofocus="on" type="text" class="form-control <?= $validation->hasError('email') ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email" value="<?= old('email') ?>">
                                            <div class="form-control-position">
                                                <i class="ft-mail"></i>
                                            </div>
                                            <span class="text-danger">
                                                <?php
                                                if ($validation->hasError('email')) {
                                                    echo $validation->getError('email');
                                                }
                                                ?>
                                            </span>
                                        </fieldset>
                                        <!-- Password -->
                                        <fieldset class="form-group position-relative has-icon-left ">
                                            <input type="password" class="form-control <?= $validation->hasError('password') ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="Password" value="<?= old('password') ?>">
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
                                        <button type="submit" class="btn btn-outline-indigo btn-lg btn-block indigo mb-1 wrapper_btn_login" style="border-radius: 0px;">
                                            <i class="ft-unlock"></i> LOGIN
                                        </button>
                                        <?php echo form_close() ?>
                                        <div class="card-body pb-0">
                                            <p class="text-center"><a href="<?= base_url('/') ?>" class="card-link">Kembali</a></p>
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