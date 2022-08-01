<div class="app-content content">
    <div class="container mt-4">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('mahasiswa') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Profil
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <?php
                if (session()->getFlashdata('error')) {
                    echo '<<div class="alert alert-danger alert-dismissible mb-2" role="alert">
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>';
                    echo session()->getFlashdata('error');
                    echo '</div>';
                }
                if (session()->getFlashdata('sukses')) {
                    echo '<div class="alert alert-success alert-dismissible mb-2" role="alert">
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>';
                    echo session()->getFlashdata('sukses');
                    echo '
                    </div>';
                }
                ?>
                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            <?php foreach ($errors as $key => $value) { ?>
                                <li><?= esc($value) ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="text-center">
                            <div class="card-body">
                                <img src="<?php echo base_url('robust/app-assets/images/portrait/medium/avatar-m-4.png ') ?>" class="rounded-circle  height-150" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?= $detailMahasiswa['nama'] ?></h4>
                                <h6 class="card-subtitle text-muted"><?= $detailMahasiswa['nim'] ?></h6>
                            </div>
                            <div class="card-body">
                                <p>belum fungsi</p>
                                <button type="button" class="btn btn-primary"><i class="fa fa-upload mr-1"></i> Upload Foto</button>
                                <button type="button" class="btn btn-success"><i class="fa fa-check mr-1"></i> Ubah Foto</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form">
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-user"></i> Profil</h4>

                                        <div class="form-group">
                                            <label for="userinput5">Nama</label>
                                            <input class="form-control border-primary" value="<?= $detailMahasiswa['nama'] ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="userinput6">Nim</label>
                                            <input class="form-control border-primary" value="<?= $detailMahasiswa['nim'] ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control border-primary" value="<?= $detailMahasiswa['email'] ?>" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control border-primary" id="userinput7" type="password" placeholder="">
                                        </div>

                                    </div>

                                    <div class="form-actions right">
                                        <p>belum fungsi</p>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-check-square-o"></i> Ubah Password
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>