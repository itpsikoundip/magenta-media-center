<div class="app-content content">
    <div class="content-wrapper">
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
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?> User Operator</h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalUserOp"><i class="icon-plus mr-1"></i>Tambah</button>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="width:30%">Nama</th>
                                                <th style="width:5%; text-align: center;">NIP</th>
                                                <th style="width:20%; text-align: center;">Unit</th>
                                                <th style="width:15%; text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allDataUserOp as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nip']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nama_jenis_op']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <button type="button" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#edit<?= $value['id_sk_dekan_user_op']  ?>"><i class="ft-edit"></i> Edit</button>
                                                        <button type="button" class="btn btn-danger mr-1 mb-1" data-toggle="modal" data-target="#delete<?= $value['id_sk_dekan_user_op']  ?>"><i class="ft-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width:30%">Nama</th>
                                                <th style="width:5%; text-align: center;">NIP</th>
                                                <th style="width:20%; text-align: center;">Unit</th>
                                                <th style="width:15%; text-align: center;">Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?> User Verifikator</h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalUserVerifikator"><i class="icon-plus mr-1"></i>Tambah</button>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="width:30%">Nama</th>
                                                <th style="width:5%; text-align: center;">NIP</th>
                                                <th style="width:20%; text-align: center;">Unit</th>
                                                <th style="width:15%; text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allDataUserVerifikator as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nip']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nama_jenis_verifikator']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <button type="button" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#editVerifikator<?= $value['id_sk_dekan_user_verifikator']  ?>"><i class="ft-edit"></i> Edit</button>
                                                        <button type="button" class="btn btn-danger mr-1 mb-1" data-toggle="modal" data-target="#deleteVerifikator<?= $value['id_sk_dekan_user_verifikator']  ?>"><i class="ft-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width:30%">Nama</th>
                                                <th style="width:5%; text-align: center;">NIP</th>
                                                <th style="width:20%; text-align: center;">Unit</th>
                                                <th style="width:15%; text-align: center;">Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Add Modal -->
<div class="modal fade text-left" id="addModalUserOp" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Tambah <?= $title ?></label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('AdminSKUserManagement/addAksesUserOperator');
            ?>
            <div class="modal-body">
                <p>Nama yang muncul adalah nama yang memiliki akses SK. Jika nama tidak ditemukan, tambahkan akses SK terlebih dahulu di tab / menu lain</p>
                <label>Staff & Dosen : </label>
                <div class="form-group">
                    <select class="select2 form-control" style="width: 100%" name="selectStaffdosen">
                        <?php
                        foreach ($allDataStaffDosen as $key => $value) { ?>
                            <option value="<?= $value['id_staffdosen']  ?>"><?= $value['nama']  ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <label>Jenis Operator : </label>
                <fieldset class="radio">
                    <label>
                        <input type="radio" name="jenisOperator" value="1">
                        Operator Akademik dan Kemahasiswaan
                    </label>
                </fieldset>
                <fieldset class="radio">
                    <label>
                        <input type="radio" name="jenisOperator" value="2">
                        Operator Sumber Daya
                    </label>
                </fieldset>
            </div>
            <div class="modal-footer">
                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Batal">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="Tambah">
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<!-- End of Add Modal -->

<!-- Delete Modal -->
<?php
foreach ($allDataUserOp as $key => $value) { ?>
    <div class="modal fade text-left" id="delete<?= $value['id_sk_dekan_user_op']  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white" id="myModalLabel10">Hapus <?= $title ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin menghapus <?= $title ?> <b><?= $value['nama']  ?></b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('AdminSKUserManagement/deleteAksesUserOperator/' . $value['id_sk_dekan_user_op']) ?>" class="btn btn-outline-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Delete Modal -->

<!-- Modal Edit -->
<?php
foreach ($allDataUserOp as $key => $value) { ?>
    <div class="modal fade text-left" id="edit<?= $value['id_sk_dekan_user_op']  ?>" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Edit <?= $title ?></label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                echo form_open('AdminSKUserManagement/editAksesUserOperator/' . $value['id_sk_dekan_user_op']);
                ?>
                <div class="modal-body">
                    <label>Staff & Dosen : </label>
                    <div class="form-group">
                        <p class="form-control-static"><?= $value['nama']  ?></p>
                    </div>
                    <label>Jenis Operator saat ini : </label>
                    <p class="form-control-static"><?= $value['nama_jenis_op']  ?></p>
                    <label>Ubah Jenis Operator : </label>
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="jenisOperator" value="1">
                            Operator Akademik dan Kemahasiswaan
                        </label>
                    </fieldset>
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="jenisOperator" value="2">
                            Operator Sumber Daya
                        </label>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Batal">
                    <input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Modal Edit -->






<!-- Add Modal -->
<div class="modal fade text-left" id="addModalUserVerifikator" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Tambah <?= $title ?></label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('AdminSKUserManagement/addAksesUserVerifikator');
            ?>
            <div class="modal-body">
                <p>Nama yang muncul adalah nama yang memiliki akses SK. Jika nama tidak ditemukan, tambahkan akses SK terlebih dahulu di tab / menu lain</p>
                <label>Staff & Dosen : </label>
                <div class="form-group">
                    <select class="select2 form-control" style="width: 100%" name="selectStaffdosen">
                        <?php
                        foreach ($allDataStaffDosen as $key => $value) { ?>
                            <option value="<?= $value['id_staffdosen']  ?>"><?= $value['nama']  ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <label>Jenis Verifikator : </label>
                <fieldset class="radio">
                    <label>
                        <input type="radio" name="jenisVerifikator" value="1">
                        Supervisor Akademik dan Kemahasiswaan
                    </label>
                </fieldset>
                <fieldset class="radio">
                    <label>
                        <input type="radio" name="jenisVerifikator" value="2">
                        Supervisor Sumber Daya
                    </label>
                </fieldset>
                <fieldset class="radio">
                    <label>
                        <input type="radio" name="jenisVerifikator" value="3">
                        Manager Tata Usaha
                    </label>
                </fieldset>
                <fieldset class="radio">
                    <label>
                        <input type="radio" name="jenisVerifikator" value="4">
                        Wakil Dekan Akademik dan Kemahasiswaan
                    </label>
                </fieldset>
                <fieldset class="radio">
                    <label>
                        <input type="radio" name="jenisVerifikator" value="5">
                        Wakil Dekan Sumber Daya
                    </label>
                </fieldset>
                <fieldset class="radio">
                    <label>
                        <input type="radio" name="jenisVerifikator" value="6">
                        Dekan
                    </label>
                </fieldset>
            </div>
            <div class="modal-footer">
                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Batal">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="Tambah">
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<!-- End of Add Modal -->

<!-- Delete Modal -->
<?php
foreach ($allDataUserVerifikator as $key => $value) { ?>
    <div class="modal fade text-left" id="deleteVerifikator<?= $value['id_sk_dekan_user_verifikator']  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white" id="myModalLabel10">Hapus <?= $title ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin menghapus <?= $title ?> <b><?= $value['nama']  ?></b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('AdminSKUserManagement/deleteAksesUserVerifikator/' . $value['id_sk_dekan_user_verifikator']) ?>" class="btn btn-outline-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Delete Modal -->

<!-- Modal Edit -->
<?php
foreach ($allDataUserVerifikator as $key => $value) { ?>
    <div class="modal fade text-left" id="editVerifikator<?= $value['id_sk_dekan_user_verifikator']  ?>" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Edit <?= $title ?></label>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                echo form_open('AdminSKUserManagement/editAksesUserVerifikator/' . $value['id_sk_dekan_user_verifikator']);
                ?>
                <div class="modal-body">
                    <label>Staff & Dosen : </label>
                    <div class="form-group">
                        <p class="form-control-static"><?= $value['nama']  ?></p>
                    </div>
                    <label>Jenis Verifikator saat ini : </label>
                    <p class="form-control-static"><?= $value['nama_jenis_verifikator']  ?></p>
                    <label>Ubah Jenis Verifikator : </label>
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="jenisVerifikator" value="1">
                            Supervisor Akademik dan Kemahasiswaan
                        </label>
                    </fieldset>
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="jenisVerifikator" value="2">
                            Supervisor Sumber Daya
                        </label>
                    </fieldset>
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="jenisVerifikator" value="3">
                            Manager Tata Usaha
                        </label>
                    </fieldset>
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="jenisVerifikator" value="4">
                            Wakil Dekan Akademik dan Kemahasiswaan
                        </label>
                    </fieldset>
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="jenisVerifikator" value="5">
                            Wakil Dekan Sumber Daya
                        </label>
                    </fieldset>
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="jenisVerifikator" value="6">
                            Dekan
                        </label>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="Batal">
                    <input type="submit" class="btn btn-outline-primary btn-lg" value="Edit">
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Modal Edit -->