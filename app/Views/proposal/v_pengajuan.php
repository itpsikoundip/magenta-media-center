<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="mb-0 d-inline-block"><?= $title ?></h3>
            </div>
        </div>
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <?php
                                    echo form_open('/proposal/add');
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-file-o"></i> Informasi Proposal</h4>
                                        <div class="form-group">
                                            <label>Judul / Nama Proposal <strong>*</strong></label>
                                            <input type="text" class="form-control" placeholder="Judul Proposal" maxlength="255" name="namaProposal">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Proposal <strong>*</strong></label>
                                            <select name="jenisProposal" class="form-control custom-select">
                                                <option value="none" selected="" disabled="">-- Pilih Jenis Proposal --</option>
                                                <option value="0">Acara</option>
                                                <option value="1">Lomba</option>
                                                <option value="2">UKM</option>
                                                <option value="3">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kegiatan<strong>*</strong></label>
                                            <input type="text" class="form-control" maxlength="255" placeholder="Nama Kegiatan / Acara" name="namaKegiatan">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Anggaran<strong>*</strong></label>
                                            <input type="number" class="form-control" maxlength="4" placeholder="Tahun Anggaran Kegiatan" name="tahunAnggaran">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Organisasi / Lembaga <strong>*</strong></label>
                                                    <input type="text" class="form-control" maxlength="255" placeholder="Nama Organisasi / Lembaga Pengaju Proposal" name="organisasiLembaga">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Ketua / Penanggung Jawab <strong>*</strong></label>
                                                    <input type="text" class="form-control" maxlength="255" placeholder="Ketua / Penanggungjawab Organisasi / Lembaga terkait" name="ketuaPJ">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nomor HP Akif <strong>*</strong></label>
                                                    <input type="number" class="form-control" maxlength="20" placeholder="Nomor HP Aktif Telepon / Whatsapp" name="noHP">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tanggal Mulai <strong>*</strong></label>
                                                    <input type="date" class="form-control" name="tanggalMulai">
                                                    <p class="text-left"><small class="text-muted">Tanggal Acara / Kebutuhan Proposal</small></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Tanggal Selesai</label>
                                                    <input type="date" class="form-control" name="tanggalSelesai">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi<strong>*</strong></label>
                                            <input type="text" class="text-capitalize form-control" maxlength="255" placeholder="Tempat / Lokasi yang diajukan di Proposal" name="lokasi">
                                        </div>
                                        <div class="form-group">
                                            <label>Total Anggaran<strong>*</strong></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Nominal | Angka saja tanpa simbol titik atau koma" name="totalAnggaran">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tentang Proposal <strong>*</strong></label>
                                            <div class="form-group">
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="5" name="tentangProposal"></textarea>
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
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputFileProposal">
                                                        <label class="custom-file-label" for="inputFileProposal">Choose file <strong>*</strong></label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <br>
                                        <p class="text-right"><em>* bersifat wajib</em></p>
                                        <input type="hidden" name="konfirmasi" value="1">
                                        <div class="form-actions right">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Batal
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-floppy-o"></i>Simpan
                                            </button>
                                        </div>
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