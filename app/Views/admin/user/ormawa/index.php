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
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add"><i class="icon-plus mr-1"></i>Tambah</button>
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
                                                <th>Ormawa</th>
                                                <th>Nama</th>
                                                <th>NIM</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allData as $key => $value) { ?>
                                                <tr>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['nama_ormawa']  ?></td>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="vertical-align: middle;"><?= $value['nim']  ?></td>
                                                    <td style="vertical-align: middle;">
                                                        <button type="button" class="btn btn-icon btn-danger mr-1" data-toggle="modal" data-target="#delete<?= $value['id']  ?>"><i class="fa fa-trash"></i></button>
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

<!-- Add Modal -->
<div class="modal fade text-left" id="add" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Akses Ormawa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('admin/user/ormawa/add');
            ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Mahasiswa</label>
                    <select class="select2 form-control block" name="idMahasiswa" style="width: 100%">
                        <?php
                        foreach ($allDataMahasiswa as $key => $value) { ?>
                            <option value="<?= $value['nim'] ?>">[<?= $value['nim'] ?>] <?= $value['nama'] ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ormawa</label>
                    <select class="select2 form-control block" name="idOrmawa" style="width: 100%">
                        <?php
                        foreach ($allDataOrmawa as $key => $value) { ?>
                            <option value="<?= $value['id'] ?>"><?= $value['nama_ormawa'] ?></option>
                        <?php  } ?>
                    </select>
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

<!-- Delete Modal -->
<?php
foreach ($allData as $key => $value) { ?>
    <div class="modal fade text-left" id="delete<?= $value['id']  ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white">Konfirmasi Hapus Akses</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Apakah Anda Yakin?</h5>
                    <p>Menghapus akses <strong><?= $value['nama']  ?> [<?= $value['nim']  ?>]</strong> dari Ormawa <strong><?= $value['nama_ormawa']  ?></strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('admin/user/ormawa/delete/' . $value['id']) ?>" class="btn btn-outline-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>