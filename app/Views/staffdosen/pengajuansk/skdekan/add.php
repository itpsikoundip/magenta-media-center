<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('PengajuanSKDekan') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
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
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php
                                echo form_open_multipart('PengajuanSKDekan/addData');
                                ?>
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Judul SK</label>
                                        <input type="text" class="form-control" maxlength="255" name="judulSKDekan" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembuatan</label>
                                        <input type="date" class="form-control" name="tanggalPembuatanSKDekan">
                                    </div>
                                    <div class="form-group">
                                        <label>TMT Kegiatan</label>
                                        <input type="text" class="form-control" placeholder="" maxlength="255" name="tmtKegiatanSKDekan">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload</label>
                                        <input type="file" class="form-control" name="uploadSKDekan">
                                        <p class="text-left"><small class="text-muted">Format file wajib .pdf | Ukuran maks 5MB</small></p>
                                    </div>
                                    <input type="hidden" name="jenisOp" value="<?= $detailAksesUserOp['sk_dekan_jenis_op_id'] ?>">
                                    <input type="hidden" name="idPengaju" value="<?= session()->get('id') ?>">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-block btn-primary mt-2">
                                            <i class="fa fa-floppy-o"></i>&nbsp; SUBMIT
                                        </button>
                                    </div>
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