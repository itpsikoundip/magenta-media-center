<div class="app-content content">
    <div class="container mt-4">
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
        <a href="<?= base_url('proposal/') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Ormawa <?php echo session()->namaormawa ?></h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php
                                    echo form_open_multipart('/proposal/add');
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-file-o"></i> Informasi Proposal</h4>
                                        <div class="form-group">
                                            <label>Judul / Nama Proposal <strong>*</strong></label>
                                            <input type="text" class="form-control" placeholder="Judul Proposal" maxlength="255" name="namaProposal" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Proposal <strong>*</strong></label>
                                            <select name="jenisProposal" class="form-control custom-select" required>
                                                <option value="none" disabled>-- Pilih Jenis Proposal --</option>
                                                <option value="1">Kegiatan</option>
                                                <option value="2">Pengajuan Dana</option>
                                                <option value="3">Kerjasama</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Kegiatan<strong>*</strong></label>
                                                    <input type="text" class="form-control" maxlength="255" placeholder="Nama Kegiatan / Acara" name="namaKegiatan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Studi <strong>*</strong></label>
                                                    <select name="studi" class="form-control custom-select" required>
                                                        <option value="none" disabled>-- Pilih Jenis Studi --</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Anggaran<strong>*</strong></label>
                                        <input type="number" class="form-control" maxlength="4" placeholder="Tahun Anggaran Kegiatan" name="tahunAnggaran" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Ketua / Penanggung Jawab <strong>*</strong></label>
                                                <input type="text" class="form-control" maxlength="255" placeholder="Ketua / Penanggungjawab Organisasi / Lembaga terkait" name="ketuaPJ" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nomor HP Akif <strong>*</strong></label>
                                                <input type="number" class="form-control" maxlength="20" placeholder="Nomor HP Aktif Telepon / Whatsapp" name="noHP" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal Mulai <strong>*</strong></label>
                                                <input type="date" class="form-control" name="tanggalMulai" required>
                                                <p class="text-left"><small class="text-muted">Tanggal Acara / Kebutuhan Proposal</small></p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal Selesai</label>
                                                <input type="date" class="form-control" name="tanggalSelesai" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Lokasi<strong>*</strong></label>
                                        <input type="text" class="text-capitalize form-control" maxlength="255" placeholder="Tempat / Lokasi yang diajukan di Proposal" name="lokasi" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Total Anggaran<strong>*</strong></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nominal | Angka saja tanpa simbol titik atau koma" name="totalAnggaran" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tentang Proposal <strong>*</strong></label>
                                        <div class="form-group">
                                            <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="5" name="tentangProposal" required></textarea>
                                        </div>
                                    </div>
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
                                                <input type="file" name="inputFileProposal" id="inputFileProposal">
                                                <label>Choose file <strong>*</strong></label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <p class="text-right"><em>* bersifat wajib</em></p>
                                    <input type="hidden" name="organisasiLembaga" value="<?= session()->get('idormawa') ?>">
                                    <div class="form-actions right">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-floppy-o"></i>&nbsp; SIMPAN
                                        </button>
                                    </div>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>