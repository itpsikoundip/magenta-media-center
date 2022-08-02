<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen/proposal') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
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
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Mahasiswa</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informasi Proposal</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <?php
                                    foreach ($detailProposal as $key => $value) { ?>
                                        <tr>
                                            <th scope="row" class="width-200">Judul / Nama Proposal</th>
                                            <td>: <?= $value['judul_propo']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Proposal</th>
                                            <td>: <?= $value['jenis_propo']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nama Kegiatan</th>
                                            <td>: <?= $value['nama_keg']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pendidikan</th>
                                            <td>: <?= $value['jenispendidikan_propo']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tahun Anggaran</th>
                                            <td>: <?= $value['tahun_anggaran']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Organisasi / Lembaga</th>
                                            <td>: <?= $value['organisasi_lembaga']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Ketua / Penanggung Jawab</th>
                                            <td>: <?= $value['penanggung_jawab']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nomor HP Akif</th>
                                            <td>: <?= $value['no_hp']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Mulai & Selesai</th>
                                            <td>: <?= $value['tanggal_mulai']  ?> s.d. <?= $value['tanggal_selesai']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Lokasi</th>
                                            <td>: <?= $value['lokasi']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Anggaran</th>
                                            <td>: Rp<?= rupiah($value['total_anggaran'])  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tentang Proposal</th>
                                            <td>
                                                <div class="form-group">
                                                    <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="3" name="tentangProposal" readonly><?= $value['tentang_propo']  ?></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal & Waktu Pengajuan</th>
                                            <td>: <?= $value['created_at']  ?></td>
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
                        foreach ($detailProposal as $key => $value) { ?>
                            <iframe src="<?= base_url('uploadproposal/' . $value['upload_proposal']) ?>" frameborder="0" height="1000px" width="auto">
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
                            foreach ($detailProposal as $key => $value) { ?>
                                <!-- Unit Subbagian Akademik dan Kemahasiswaan FPSi -->
                                <?php if (session()->get('unit') == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/proposal/editdataakademikcatatan/' . $value['id_propo']);
                                    ?>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['akademik_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Subbagian Sumberdaya FPSi -->
                                <?php } elseif (session()->get('unit') == 3) { ?>
                                    <?php
                                    echo form_open('staffdosen/proposal/editdatasumberdayacatatan/' . $value['id_propo']);
                                    ?>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['sumberdaya_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Tata Usaha -->
                                <?php } elseif (session()->get('unit') == 4) { ?>
                                    <?php
                                    echo form_open('staffdosen/proposal/editdatatatausahacatatan/' . $value['id_propo']);
                                    ?>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['tatausaha_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Wadek Akademik dan Kemahasiswaan -->
                                <?php } elseif (session()->get('unit') == 5) { ?>
                                    <?php
                                    echo form_open('staffdosen/proposal/editdatawadekakemcatatan/' . $value['id_propo']);
                                    ?>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['wadekakem_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Wadek Sumber Daya -->
                                <?php } elseif (session()->get('unit') == 6) { ?>
                                    <?php
                                    echo form_open('staffdosen/proposal/editdatawadeksumdacatatan/' . $value['id_propo']);
                                    ?>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['wadeksumda_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Kaprodi S1 -->
                                <?php } elseif (session()->get('unit') == 7) { ?>
                                    <?php
                                    echo form_open('staffdosen/proposal/editdatakaprodis1catatan/' . $value['id_propo']);
                                    ?>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['kaprodis1_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Kaprodi S2 -->
                                <?php } elseif (session()->get('unit') == 8) { ?>
                                    <?php
                                    echo form_open('staffdosen/proposal/editdatakaprodis2catatan/' . $value['id_propo']);
                                    ?>
                                    <fieldset class="form-group">
                                        <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['kaprodis2_note']  ?></textarea>
                                    </fieldset>
                                    <input type="hidden" name="userID" value="<?= session()->get('id') ?>">
                                    <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <?php echo form_close() ?>
                                    <!-- Dekan -->
                                <?php } elseif (session()->get('unit') == 9) { ?>
                                    <?php
                                    echo form_open('staffdosen/proposal/editdatadekancatatan/' . $value['id_propo']);
                                    ?>
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
                            <?php if (session()->get('unit') == 2) { ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['akademik_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['akademik_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['akademik_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['akademik_status']) == 3) {
                                            echo 'Disetujui';
                                        }
                                        ?>
                                    </strong>
                                </div>
                                <?php
                                echo form_open('staffdosen/proposal/editdataakademikstatus/' . $value['id_propo']);
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
                            <?php } elseif (session()->get('unit') == 3) { ?>
                                <?php
                                echo form_open('staffdosen/proposal/editdatasumberdayastatus/' . $value['id_propo']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['sumberdaya_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['sumberdaya_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['sumberdaya_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['sumberdaya_status']) == 3) {
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
                            <?php } elseif (session()->get('unit') == 4) { ?>
                                <?php
                                echo form_open('staffdosen/proposal/editdatatatausahastatus/' . $value['id_propo']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['tatausaha_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['tatausaha_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['tatausaha_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['tatausaha_status']) == 3) {
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
                            <?php } elseif (session()->get('unit') == 5) { ?>
                                <?php
                                echo form_open('staffdosen/proposal/editdatawadekakemstatus/' . $value['id_propo']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['wadekakem_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['wadekakem_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['wadekakem_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['wadekakem_status']) == 3) {
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
                            <?php } elseif (session()->get('unit') == 6) { ?>
                                <?php
                                echo form_open('staffdosen/proposal/editdatawadeksumdastatus/' . $value['id_propo']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['wadeksumda_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['wadeksumda_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['wadeksumda_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['wadeksumda_status']) == 3) {
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
                                <!-- Kaprodi S1 -->
                            <?php } elseif (session()->get('unit') == 7) { ?>
                                <?php
                                echo form_open('staffdosen/proposal/editdatakaprodis1status/' . $value['id_propo']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['kaprodis1_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['kaprodis1_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['kaprodis1_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['kaprodis1_status']) == 3) {
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
                                <!-- Kaprodi S2 -->
                            <?php } elseif (session()->get('unit') == 8) { ?>
                                <?php
                                echo form_open('staffdosen/proposal/editdatakaprodis2status/' . $value['id_propo']);
                                ?>
                                <div class="alert alert-info mb-2" role="alert">
                                    Status saat ini :
                                    <strong>
                                        <?php if ($value['kaprodis2_status'] == 0) {
                                            echo 'Belum ada status';
                                        } elseif (($value['kaprodis2_status']) == 1) {
                                            echo 'Ditolak';
                                        } elseif (($value['kaprodis2_status']) == 2) {
                                            echo 'Perbaikan';
                                        } elseif (($value['kaprodis2_status']) == 3) {
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
                            <?php } elseif (session()->get('unit') == 9) { ?>
                                <?php
                                echo form_open('staffdosen/proposal/editdatadekanstatus/' . $value['id_propo']);
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
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tbl_datapengajuanmodul').DataTable({});
    });
</script>