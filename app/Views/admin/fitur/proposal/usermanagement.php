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
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?> Staff & Dosen</h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><i class="icon-plus mr-1"></i>Tambah</button>
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
                                            foreach ($allDataUser as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nip']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nama_unittugas']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <button type="button" class="btn btn-danger mr-1 mb-1" data-toggle="modal" data-target="#delete<?= $value['id_user_proposal_staffdosen']  ?>"><i class="ft-trash"></i> Hapus</button>
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
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?> Mahasiswa</h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModalMahasiswa"><i class="icon-plus mr-1"></i>Tambah</button>
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
                                    <table class="table table-striped table-bordered zero-configuration" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="width:30%">Nama</th>
                                                <th style="width:5%; text-align: center;">NIM</th>
                                                <th style="width:20%; text-align: center;">Ormawa</th>
                                                <th style="width:15%; text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allDataAksesProposalOrmawa as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nim']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nama_ormawa']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <button type="button" class="btn btn-danger mr-1 mb-1" data-toggle="modal" data-target="#deletemahasiswa<?= $value['id_user_proposal_ormawa']  ?>"><i class="ft-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width:30%">Nama</th>
                                                <th style="width:5%; text-align: center;">NIM</th>
                                                <th style="width:20%; text-align: center;">Ormawa</th>
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
<div class="modal fade text-left" id="addModal" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Tambah <?= $title ?></label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('admin/fitur/proposal/usermanagement/addaksesstaffdosen');
            ?>
            <div class="modal-body">
                <p>Nama yang muncul adalah nama yang memiliki akses Proposal. Jika nama tidak ditemukan, tambahkan akses Proposal terlebih dahulu di tab / menu lain</p>
                <label>Staff & Dosen : </label>
                <div class="form-group">
                    <select class="select2 form-control" style="width: 100%" name="selectStaffdosen">
                        <?php
                        foreach ($allDataStaffDosen as $key => $value) { ?>
                            <option value="<?= $value['id_staffdosen']  ?>"><?= $value['nama']  ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <label>Unit Tugas : </label>
                <div class="form-group">
                    <select class="form-control" name="selectUnitTugas">
                        <?php
                        foreach ($allDataUnitTugas as $key => $value) { ?>
                            <option value="<?= $value['id_unittugas']  ?>"><?= $value['nama_unittugas']  ?></option>
                        <?php  } ?>
                    </select>
                </div>
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
foreach ($allDataUser as $key => $value) { ?>
    <div class="modal fade text-left" id="delete<?= $value['id_user_proposal_staffdosen']  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
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
                    <a href="<?= base_url('admin/fitur/proposal/usermanagement/deleteaksesstaffdosen/' . $value['id_user_proposal_staffdosen']) ?>" class="btn btn-outline-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Delete Modal -->









<!-- Add Modal -->
<div class="modal fade text-left" id="addModalMahasiswa" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <label class="modal-title text-text-bold-600" id="myModalLabel33">Tambah <?= $title ?></label>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('admin/fitur/proposal/usermanagement/addaksesmahasiswa');
            ?>
            <div class="modal-body">
                <p>Nama yang muncul adalah nama mahasiswa yang sudah didaftarkan sebagai perwakilan ormawa. Jika nama tidak ditemukan, tambahkan mahasiswa ke ormawa terlebih dahulu di tab / menu lain</p>
                <label>Mahasiswa : </label>
                <div class="form-group">
                    <select class="select2 form-control" style="width: 100%" name="selectMahasiswaOrmawa">
                        <?php
                        foreach ($allDataMahasiswaOrmawa as $key => $value) { ?>
                            <option value="<?= $value['id']  ?>"><?= $value['nama']  ?> - <?= $value['nim']  ?> (<?= $value['nama_ormawa']  ?>)</option>
                        <?php  } ?>
                    </select>
                </div>
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
foreach ($allDataAksesProposalOrmawa as $key => $value) { ?>
    <div class="modal fade text-left" id="deletemahasiswa<?= $value['id_user_proposal_ormawa']  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
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
                    <a href="<?= base_url('admin/fitur/proposal/usermanagement/deleteaksesmahasiswa/' . $value['id_user_proposal_ormawa']) ?>" class="btn btn-outline-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End of Delete Modal -->