<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen/sk/verifikator/rektor') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
        <?php
        if (session()->getFlashdata('notifikasi')) {
            echo '
            <div class="alert alert-success alert-dismissible mb-2" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
            ';
            echo session()->getFlashdata('notifikasi');
            echo '
            </div>
            ';
        }
        ?>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <?php
                foreach ($detailSKRektor as $key => $value) { ?>
                    <h2 class="mb-0 d-inline-block font-weight-bold"><?= $value['judul_sk']  ?></h2>
                    <h4 class="grey"><?= $value['tanggal_pembuatan']  ?></h4>
                <?php  } ?>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informasi SK</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <?php
                                    foreach ($detailSKRektor as $key => $value) { ?>
                                        <tr>
                                            <th scope="row" class="width-200">Judul SK</th>
                                            <td>: <?= $value['judul_sk']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Pembuatan</th>
                                            <td>: <?= $value['tanggal_pembuatan']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tmt Kegiatan</th>
                                            <td>: <?= $value['tmt_kegiatan']  ?></td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Isi File Proposal</h4>
                        </div>
                        <?php
                        foreach ($detailSKRektor as $key => $value) { ?>
                            <iframe src="<?= base_url('uploadskrektor/' . $value['upload_sk_rektor']) ?>" frameborder="0" height="1000px" width="auto">
                            </iframe>
                        <?php  } ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Catatan Revisi / Perbaikan</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            foreach ($detailSKRektor as $key => $value) { ?>
                                <!-- Unit Subbagian Akademik dan Kemahasiswaan FPSi -->
                                <?php if ($detailVerifikator['sk_jenis_verifikator_id'] == 1) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/verifikator/rektor/editdatasvakakemcatatan/' . $value['id_sk_rektor']);
                                    ?>
                                    <p><?= $detailVerifikator['nama_jenis_verifikator'] ?></p>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['sk_akem_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Subbagian Sumberdaya FPSi -->
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/verifikator/rektor/editdatasvsumdacatatan/' . $value['id_sk_rektor']);
                                    ?>
                                    <p><?= $detailVerifikator['nama_jenis_verifikator'] ?></p>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['sv_sumda_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Tata Usaha -->
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 3) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/verifikator/rektor/editdatamanagertucatatan/' . $value['id_sk_rektor']);
                                    ?>
                                    <p><?= $detailVerifikator['nama_jenis_verifikator'] ?></p>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['manager_tu_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Wadek Akademik dan Kemahasiswaan -->
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 4) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/verifikator/rektor/editdatawadekakakemcatatan/' . $value['id_sk_rektor']);
                                    ?>
                                    <p><?= $detailVerifikator['nama_jenis_verifikator'] ?></p>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['wadek_akem_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Wadek Sumber Daya -->
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 5) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/verifikator/rektor/editdatawadeksumdacatatan/' . $value['id_sk_rektor']);
                                    ?>
                                    <p><?= $detailVerifikator['nama_jenis_verifikator'] ?></p>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['wadek_sumda_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Dekan -->
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 6) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/verifikator/rektor/editdatadekancatatan/' . $value['id_sk_rektor']);
                                    ?>
                                    <p><?= $detailVerifikator['nama_jenis_verifikator'] ?></p>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['dekan_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                <?php } ?>
                            <?php  } ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status Proposal</h4>
                        </div>
                        <div class="card-body">
                            <!-- Unit Subbagian Akademik dan Kemahasiswaan FPSi -->
                            <?php if ($detailVerifikator['sk_jenis_verifikator_id'] == 1) { ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['sk_akem_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['sk_akem_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['sk_akem_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['sk_akem_status']) == 3) {
                                            echo 'Disetujui';
                                        }
                                        ?>
                                    </strong>
                                </div>
                                <?php
                                echo form_open('staffdosen/sk/verifikator/rektor/editdatasvakakemstatus/' . $value['id_sk_rektor']);
                                ?>
                                <fieldset class="form-group">
                                    <select class="form-control" name="statusPropo">
                                        <option hidden>-- Pilih Status Proposal --</option>
                                        <option value="3">Disetujui</option>
                                        <option value="2">Perbaikan</option>
                                        <option value="1">Ditolak</option>
                                    </select>
                                </fieldset>
                                <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                <?php echo form_close() ?>
                                <!-- Subbagian Sumberdaya FPSi -->
                            <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 2) { ?>
                                <?php
                                echo form_open('staffdosen/sk/verifikator/rektor/editdatasvsumdastatus/' . $value['id_sk_rektor']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['sv_sumda_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['sv_sumda_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['sv_sumda_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['sv_sumda_status']) == 3) {
                                            echo 'Disetujui';
                                        }
                                        ?>
                                    </strong>
                                </div>
                                <fieldset class="form-group">
                                    <select class="form-control" name="statusPropo">
                                        <option hidden>-- Pilih Status Proposal --</option>
                                        <option value="3">Disetujui</option>
                                        <option value="2">Perbaikan</option>
                                        <option value="1">Ditolak</option>
                                    </select>
                                </fieldset>
                                <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                <?php echo form_close() ?>
                                <!-- Tata Usaha -->
                            <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 3) { ?>
                                <?php
                                echo form_open('staffdosen/sk/verifikator/rektor/editdatamanagertustatus/' . $value['id_sk_rektor']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['manager_tu_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['manager_tu_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['manager_tu_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['manager_tu_status']) == 3) {
                                            echo 'Disetujui';
                                        }
                                        ?>
                                    </strong>
                                </div>
                                <fieldset class="form-group">
                                    <select class="form-control" name="statusPropo">
                                        <option hidden>-- Pilih Status Proposal --</option>
                                        <option value="3">Disetujui</option>
                                        <option value="2">Perbaikan</option>
                                        <option value="1">Ditolak</option>
                                    </select>
                                </fieldset>
                                <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                <?php echo form_close() ?>
                                <!-- Wadek Akademik dan Kemahasiswaan -->
                            <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 4) { ?>
                                <?php
                                echo form_open('staffdosen/sk/verifikator/rektor/editdatawadekakakemstatus/' . $value['id_sk_rektor']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['wadek_akem_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['wadek_akem_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['wadek_akem_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['wadek_akem_status']) == 3) {
                                            echo 'Disetujui';
                                        }
                                        ?>
                                    </strong>
                                </div>
                                <fieldset class="form-group">
                                    <select class="form-control" name="statusPropo">
                                        <option hidden>-- Pilih Status Proposal --</option>
                                        <option value="3">Disetujui</option>
                                        <option value="2">Perbaikan</option>
                                        <option value="1">Ditolak</option>
                                    </select>
                                </fieldset>
                                <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                <?php echo form_close() ?>
                                <!-- Wadek Sumber Daya -->
                            <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 5) { ?>
                                <?php
                                echo form_open('staffdosen/sk/verifikator/rektor/editdatawadeksumdastatus/' . $value['id_sk_rektor']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['wadek_sumda_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['wadek_sumda_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['wadek_sumda_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['wadek_sumda_status']) == 3) {
                                            echo 'Disetujui';
                                        }
                                        ?>
                                    </strong>
                                </div>
                                <fieldset class="form-group">
                                    <select class="form-control" name="statusPropo">
                                        <option hidden>-- Pilih Status Proposal --</option>
                                        <option value="3">Disetujui</option>
                                        <option value="2">Perbaikan</option>
                                        <option value="1">Ditolak</option>
                                    </select>
                                </fieldset>
                                <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                <?php echo form_close() ?>
                                <!-- Dekan -->
                            <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 6) { ?>
                                <?php
                                echo form_open('staffdosen/sk/verifikator/rektor/editdatadekanstatus/' . $value['id_sk_rektor']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['dekan_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['dekan_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['dekan_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['dekan_status']) == 3) {
                                            echo 'Disetujui';
                                        }
                                        ?>
                                    </strong>
                                </div>
                                <fieldset class="form-group">
                                    <select class="form-control" name="statusPropo">
                                        <option hidden>-- Pilih Status Proposal --</option>
                                        <option value="3">Disetujui</option>
                                        <option value="2">Perbaikan</option>
                                        <option value="1">Ditolak</option>
                                    </select>
                                </fieldset>
                                <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                <?php echo form_close() ?>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if ($detailVerifikator['sk_jenis_verifikator_id'] != 6) { ?>
                    <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 6) { ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <?php
                                    foreach ($detailSKRektor as $key => $value) { ?>
                                        <?php
                                        echo form_open_multipart('staffdosen/sk/verifikator/rektor/editdatafilesk/' . $value['id_sk_rektor']);
                                        ?>
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="fa fa-file-o"></i> Upload File SK Final</h4>
                                            <div class="form-group">
                                                <label>Upload</label>
                                                <input type="file" class="form-control" name="uploadSKRektor">
                                                <p class="text-left"><small class="text-muted">Format file wajib .pdf | Ukuran maks 5MB</small></p>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-block btn-primary">
                                                    <i class="fa fa-floppy-o"></i>&nbsp; SIMPAN
                                                </button>
                                            </div>
                                        </div>
                                        <?php echo form_close() ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>