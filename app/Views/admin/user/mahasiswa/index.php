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
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allData as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nim']  ?></td>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['email']  ?></td>
                                                    <td style="vertical-align: middle;">
                                                        <button type="button" class="btn btn-icon btn-danger mr-1" data-toggle="modal" data-target="#delete<?= $value['nim']  ?>"><i class="fa fa-trash"></i></button>
                                                        <button type="button" class="btn btn-icon btn-dark" data-toggle="modal" data-target="#editpass<?= $value['nim']  ?>"><i class="fa fa-lock"></i></button>
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
                <h4 class="modal-title">Tambah Akses Staff & Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
            echo form_open('admin/user/mahasiswa/add');
            ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
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
    <div class="modal fade text-left" id="delete<?= $value['nim']  ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <p>Menghapus akses <strong><?= $value['nama']  ?> [<?= $value['nim']  ?>]</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('admin/user/mahasiswa/delete/' . $value['nim']) ?>" class="btn btn-outline-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>

<!-- Edit Password Modal -->
<?php
foreach ($allData as $key => $value) { ?>
    <div class="modal fade text-left" id="editpass<?= $value['nim']  ?>" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                echo form_open('admin/user/mahasiswa/editpass/' . $value['nim']);
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