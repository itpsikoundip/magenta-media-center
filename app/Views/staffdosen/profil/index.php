<div class="app-content content">
    <div class="container mt-4">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url('staffdosen') ?>">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Profil
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="content-body">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <div class="text-center">
                            <?php if ($detailStaffDosen['fotoprofil'] == NULL) { ?>
                                <div class="card-body">
                                    <img src="<?php echo base_url('robust/app-assets/images/portrait/medium/avatar-m-1.png') ?>" class="rounded-circle  height-150" alt="Card image">
                                </div>
                            <?php } elseif ($detailStaffDosen['fotoprofil'] != NULL) { ?>
                                <div class="card-body">
                                    <img src="<?php echo base_url('fotoprofilstaffdosen/' . $detailStaffDosen['fotoprofil']) ?>" class="rounded-circle  height-150" alt="Foto Profil">
                                </div>
                            <?php } ?>
                            <div class="card-body">
                                <h4 class="card-title"><?= $detailStaffDosen['nama'] ?></h4>
                                <h6 class="card-subtitle text-muted">NIP : <?= $detailStaffDosen['nip'] ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php
                                echo form_open_multipart('staffdosen/profil/editfotoprofil/' . $detailStaffDosen['id_staffdosen']);
                                ?>
                                <div class="form-body">

                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="formUploadFotoProfil" name="formUploadFotoProfil">
                                    </div>

                                </div>
                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fa fa-check-square-o"></i> Ubah Foto Profil
                                    </button>
                                </div>
                                <?php echo form_close() ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php
                                echo form_open('staffdosen/profil/editpass/' . session()->get('iduser'));
                                ?>
                                <div class="form-body">

                                    <h4 class="form-section"><i class="ft-user"></i> Profil</h4>
                                    <p>Hubungi Admin apabila terdapat ketidaksesuaian data</p>
                                    <div class="form-group">
                                        <label for="userinput5">Nama</label>
                                        <input class="form-control border-primary" value="<?= $detailStaffDosen['nama'] ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="userinput6">NIP</label>
                                        <input class="form-control border-primary" value="<?= $detailStaffDosen['nip'] ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="userinput6">Departemen</label>
                                        <input class="form-control border-primary" value="<?= $detailStaffDosen['nama_departemen'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="userinput6">Jenis Pegawai</label>
                                        <input class="form-control border-primary" value="<?= $detailStaffDosen['nama_jenispegawai'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="userinput6">Unit 1</label>
                                        <input class="form-control border-primary" value="<?= $detailStaffDosen['nama_unit'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="userinput6">Unit 2</label>
                                        <input class="form-control border-primary" value="<?= $detailStaffDosen['nama_unit2'] ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="userinput6">Status</label>
                                        <input class="form-control border-primary" value="<?= $detailStaffDosen['nama_status'] ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control border-primary" id="password" name="password" type="password" placeholder="">
                                    </div>
                                </div>
                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Ubah Password
                                    </button>
                                </div>
                                <?php echo form_close() ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>