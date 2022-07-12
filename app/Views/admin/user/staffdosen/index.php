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
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?></h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#inlineForm"><i class="icon-plus mr-1"></i>Tambah</button>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">

                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Created At</th>
                                                <th>Proposal</th>
                                                <th>Survey</th>
                                                <th>Helpdesk</th>
                                                <th>SK</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($dataUserStaffDosen as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nip']  ?></td>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <?= $value['created_at']  ?>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <?php if ($value['proposal'] == 0) {
                                                            echo '<div class="badge badge-pill badge-danger">X</div>';
                                                        } elseif (($value['proposal']) == 1) {
                                                            echo '<div class="badge badge-pill badge-success">V</div>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <?php if ($value['survey'] == 0) {
                                                            echo '<div class="badge badge-pill badge-danger">X</div>';
                                                        } elseif (($value['survey']) == 1) {
                                                            echo '<div class="badge badge-pill badge-success">V</div>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <?php if ($value['helpdesk'] == 0) {
                                                            echo '<div class="badge badge-pill badge-danger">X</div>';
                                                        } elseif (($value['helpdesk']) == 1) {
                                                            echo '<div class="badge badge-pill badge-success">V</div>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <?php if ($value['sk'] == 0) {
                                                            echo '<div class="badge badge-pill badge-danger">X</div>';
                                                        } elseif (($value['sk']) == 1) {
                                                            echo '<div class="badge badge-pill badge-success">V</div>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="vertical-align: middle;">
                                                        <button type="button" class="btn btn-icon btn-danger mr-1" data-toggle="modal" data-target="#delete<?= $value['id_userstaffdosen']  ?>"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-icon btn-success mr-1" data-toggle="modal" data-target="#edit<?= $value['id_userstaffdosen']  ?>"><i class="fa fa-check-square-o"></i></button>
                                                        <button type="button" class="btn btn-icon btn-dark" data-toggle="modal" data-target="#editpass<?= $value['id_userstaffdosen']  ?>"><i class="fa fa-lock"></i></button>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
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

<!-- Modal -->
<div class="modal fade text-left" id="inlineForm" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Tambah Akses Staff & Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('UserStaffDosen/addUser');
            ?>
            <div class="modal-body">
                <p>Data berasal dari tabel master staffdosen</p>
                <div class="form-group">
                    <label>Nama</label>
                    <select class="select2 form-control block" name="idStaffDosen" style="width: 100%">
                        <?php
                        foreach ($allDataStaffDosen as $key => $value) { ?>
                            <option value="<?= $value['id_staffdosen'] ?>"><?= $value['nama'] ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>Akses</label>
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="proposal">
                            Proposal
                        </label>
                    </fieldset>
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="survey">
                            Survey
                        </label>
                    </fieldset>
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="helpdesk">
                            Helpdesk
                        </label>
                    </fieldset>
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="sk">
                            SK
                        </label>
                    </fieldset>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-outline-primary">Tambah</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<!-- Modal Delete -->
<?php
foreach ($dataUserStaffDosen as $key => $value) { ?>
    <div class="modal fade text-left" id="delete<?= $value['id_userstaffdosen']  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white" id="myModalLabel10">Konfirmasi Hapus Akses</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda Yakin?</h5>
                    <p>Menghapus akses <strong><?= $value['nama']  ?></strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('UserStaffDosen/delete/' . $value['id_userstaffdosen']) ?>" class="btn btn-outline-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Modal Delete -->

<!-- Modal Edit -->
<?php
foreach ($dataUserStaffDosen as $key => $value) { ?>
    <div class="modal fade text-left" id="edit<?= $value['id_userstaffdosen']  ?>" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Akses Staff & Dosen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                echo form_open('UserStaffDosen/editData/' . $value['id_userstaffdosen']);
                ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama :</label>
                        <p class="form-control-static"><?= $value['nama']  ?></p>
                    </div>
                    <div class="form-group">
                        <label>Akses Baru :</label>
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="proposal">
                                Proposal
                            </label>
                        </fieldset>
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="survey">
                                Survey
                            </label>
                        </fieldset>
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="helpdesk">
                                Helpdesk
                            </label>
                        </fieldset>
                        <fieldset class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="sk">
                                SK
                            </label>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-outline-primary">Edit</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Modal Edit -->

<!-- Modal Edit Pass-->
<?php
foreach ($dataUserStaffDosen as $key => $value) { ?>
    <div class="modal fade text-left" id="editpass<?= $value['id_userstaffdosen']  ?>" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Akses Staff & Dosen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                echo form_open('UserStaffDosen/editDataPass/' . $value['id_userstaffdosen']);
                ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama :</label>
                        <p class="form-control-static"><?= $value['nama']  ?></p>
                    </div>
                    <div class="form-group">
                        <label>Pass Baru :</label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-outline-primary">Ubah Password</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Modal Edit -->