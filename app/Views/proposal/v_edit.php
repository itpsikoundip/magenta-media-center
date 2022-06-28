<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="mb-0 d-inline-block"><?= $title ?></h3>
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
        <a href="<?= base_url('proposal') ?>" type="button" class="mr-1 mb-1 btn btn-outline-secondary btn-min-width"><i class="fa fa-long-arrow-left"></i> Kembali</a>
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php
                                    foreach ($detailProposal as $key => $value) { ?>
                                        <?php
                                        echo form_open('/proposal/editData/' . $value['id_propo']);
                                        ?>
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="fa fa-file-o"></i> Informasi Proposal</h4>
                                            <div class="form-group">
                                                <label>Judul / Nama Proposal <strong>*</strong></label>
                                                <input type="text" class="form-control" placeholder="Judul Proposal" maxlength="255" name="namaProposal" value="<?= $value['judul_propo']  ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Proposal <strong>*</strong></label>
                                                <select name="jenisProposal" class="form-control custom-select">
                                                    <option value="<?= $value['jenis_propo'] ?>" selected>Jenis Terpilih : <?= $value['nama_jenis'] ?> </option>
                                                    <option value="" disabled>++++++++++++++++++++++++++++++++++++++++</option>
                                                    <option value="1">Acara</option>
                                                    <option value="2">Lomba</option>
                                                    <option value="3">UKM</option>
                                                    <option value="4">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Kegiatan<strong>*</strong></label>
                                                <input type="text" class="form-control" maxlength="255" placeholder="Nama Kegiatan / Acara" name="namaKegiatan" value="<?= $value['nama_keg']  ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Anggaran<strong>*</strong></label>
                                                <input type="number" class="form-control" maxlength="4" placeholder="Tahun Anggaran Kegiatan" name="tahun_anggaran" value="<?= $value['tahun_anggaran']  ?>">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Organisasi / Lembaga <strong>*</strong></label>
                                                        <input type="text" class="form-control" maxlength="255" placeholder="Nama Organisasi / Lembaga Pengaju Proposal" name="organisasiLembaga" value="<?= $value['organisasi_lembaga']  ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Ketua / Penanggung Jawab <strong>*</strong></label>
                                                        <input type="text" class="form-control" maxlength="255" placeholder="Ketua / Penanggungjawab Organisasi / Lembaga terkait" name="ketuaPJ" value="<?= $value['penanggung_jawab']  ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Nomor HP Akif <strong>*</strong></label>
                                                        <input type="number" class="form-control" maxlength="20" placeholder="Nomor HP Aktif Telepon / Whatsapp" name="noHP" value="<?= $value['no_hp']  ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Tanggal Mulai <strong>*</strong></label>
                                                        <input type="date" class="form-control" name="tanggalMulai" value="<?= $value['tanggal_mulai']  ?>">
                                                        <p class="text-left"><small class="text-muted">Tanggal Acara / Kebutuhan Proposal</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Tanggal Selesai</label>
                                                        <input type="date" class="form-control" name="tanggalSelesai" value="<?= $value['tanggal_selesai']  ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Lokasi<strong>*</strong></label>
                                                <input type="text" class="text-capitalize form-control" maxlength="255" placeholder="Tempat / Lokasi yang diajukan di Proposal" name="lokasi" value="<?= $value['lokasi']  ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Anggaran<strong>*</strong></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Nominal | Angka saja tanpa simbol titik atau koma" name="totalAnggaran" value="<?= $value['total_anggaran']  ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Tentang Proposal <strong>*</strong></label>
                                                <div class="form-group">
                                                    <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="5" name="tentangProposal"><?= $value['tentang_propo']  ?></textarea>
                                                </div>
                                            </div>

                                            <br>
                                            <p class="text-right"><em>* bersifat wajib</em></p>
                                            <div class="form-actions right">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Simpan
                                                </button>
                                            </div>
                                        </div>
                                        <?php echo form_close() ?>
                                    <?php  } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php
                                    echo form_open_multipart('/proposal/editFileProposal/' . $value['id_propo']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-paperclip"></i> Upload File Proposal</h4>
                                        <div class="card-text">
                                            <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                <span class="alert-icon"><i class="fa fa-info"></i></span>
                                                <strong>Perhatikan Format Proposal</strong>
                                                <ul>
                                                    <li>Ukuran file maksimal <strong>5MB</strong></li>
                                                    <li>Format file dalam bentuk <strong>.pdf</strong></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-group">
                                                    <input type="file" class="form-control-file" id="uploadFileProposal" name="uploadFileProposal">
                                                </fieldset>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-actions right">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Simpan
                                            </button>
                                        </div>
                                    </div>
                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php
                                    echo form_open('/proposal/konfirmasiEdit/' . $value['id_propo']);
                                    ?>
                                    <div class="form-body">
                                        <input type="hidden" name="konfirmasi" value="1">
                                        <h4 class="form-section"><i class="fa fa-file-pdf-o"></i> File Proposal</h4>
                                        <?php
                                        foreach ($detailProposal as $key => $value) { ?>
                                            <a href="<?= base_url('uploadproposal/' . $value['upload_proposal']) ?>" target="_blank" class="btn btn-info btn-block btn-lg"><i class="fa fa-file-pdf-o"></i> <?= $value['upload_proposal'] ?></a>
                                        <?php  } ?>
                                    </div>
                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php
                                    echo form_open('/proposal/konfirmasiEdit/' . $value['id_propo']);
                                    ?>
                                    <div class="form-body">
                                        <input type="hidden" name="konfirmasi" value="1">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>