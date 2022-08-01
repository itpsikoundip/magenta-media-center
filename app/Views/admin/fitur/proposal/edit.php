<div class="app-content content">
    <div class="content-wrapper">
        <a href="<?= base_url('AdminProposalData/details/' . $detailProposal['id_propo']) ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?> <?= $detailProposal['judul_propo'] ?></h3>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informasi Proposal</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="width-200">Judul / Nama Proposal</th>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Judul Proposal" maxlength="255" name="namaProposal" value="<?= $detailProposal['judul_propo']  ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Proposal</th>
                                        <td>
                                            <select name="jenisProposal" class="form-control custom-select">
                                                <option value="1">Acara</option>
                                                <option value="2">Lomba</option>
                                                <option value="3">UKM</option>
                                                <option value="4">Lainnya</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Kegiatan</th>
                                        <td>
                                            <input type="text" class="form-control" maxlength="255" placeholder="Nama Kegiatan / Acara" name="namaKegiatan" value="<?= $detailProposal['nama_keg']  ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pendidikan</th>
                                        <td>
                                            <select name="studi" class="form-control custom-select" required>
                                                <option value="none" disabled>-- Pilih Jenis Studi --</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tahun Anggaran</th>
                                        <td><input type="number" class="form-control" maxlength="4" placeholder="Tahun Anggaran Kegiatan" name="tahun_anggaran" value="<?= $detailProposal['tahun_anggaran']  ?>"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Organisasi / Lembaga</th>
                                        <td><input type="text" class="form-control" maxlength="255" placeholder="Nama Organisasi / Lembaga Pengaju Proposal" name="organisasiLembaga" value="<?= $detailProposal['organisasi_lembaga']  ?>"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ketua / Penanggung Jawab</th>
                                        <td>
                                            <input type="text" class="form-control" maxlength="255" placeholder="Ketua / Penanggungjawab Organisasi / Lembaga terkait" name="ketuaPJ" value="<?= $detailProposal['penanggung_jawab']  ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor HP Akif</th>
                                        <td><input type="number" class="form-control" maxlength="20" placeholder="Nomor HP Aktif Telepon / Whatsapp" name="noHP" value="<?= $detailProposal['no_hp']  ?>"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Mulai</th>
                                        <td><input type="date" class="form-control" name="tanggalMulai" value="<?= $detailProposal['tanggal_mulai']  ?>">
                                            <p class="text-left"><small class="text-muted">Tanggal Acara / Kebutuhan Proposal</small></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Selesai</th>
                                        <td>
                                            <input type="date" class="form-control" name="tanggalSelesai" value="<?= $detailProposal['tanggal_selesai']  ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lokasi</th>
                                        <td>
                                            <input type="text" class="text-capitalize form-control" maxlength="255" placeholder="Tempat / Lokasi yang diajukan di Proposal" name="lokasi" value="<?= $detailProposal['lokasi']  ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total Anggaran</th>
                                        <td>
                                            <input type="text" class="form-control" placeholder="Nominal | Angka saja tanpa simbol titik atau koma" name="totalAnggaran" value="<?= $detailProposal['total_anggaran']  ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tentang Proposal</th>
                                        <td>
                                            <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="3" name="tentangProposal"><?= $detailProposal['tentang_propo']  ?></textarea>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block" disabled>Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status Proposal</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Posisi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>BEM</td>
                                            <td>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="statusPropo">
                                                        <option hidden>-- Pilih Status Proposal --</option>
                                                        <option value="3">Disetujui</option>
                                                        <option value="2">Perbaikan</option>
                                                        <option value="1">Ditolak</option>
                                                    </select>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Akademik</td>
                                            <td>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="statusPropo">
                                                        <option hidden>-- Pilih Status Proposal --</option>
                                                        <option value="3">Disetujui</option>
                                                        <option value="2">Perbaikan</option>
                                                        <option value="1">Ditolak</option>
                                                    </select>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sumber Daya</td>
                                            <td>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="statusPropo">
                                                        <option hidden>-- Pilih Status Proposal --</option>
                                                        <option value="3">Disetujui</option>
                                                        <option value="2">Perbaikan</option>
                                                        <option value="1">Ditolak</option>
                                                    </select>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tata Usaha</td>
                                            <td>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="statusPropo">
                                                        <option hidden>-- Pilih Status Proposal --</option>
                                                        <option value="3">Disetujui</option>
                                                        <option value="2">Perbaikan</option>
                                                        <option value="1">Ditolak</option>
                                                    </select>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <?php if ($detailProposal['jenispendidikan_propo'] == 'S1') { ?>
                                            <tr>
                                                <td>Kaprodi S1</td>
                                                <td>
                                                    <fieldset class="form-group">
                                                        <select class="form-control" name="statusPropo">
                                                            <option hidden>-- Pilih Status Proposal --</option>
                                                            <option value="3">Disetujui</option>
                                                            <option value="2">Perbaikan</option>
                                                            <option value="1">Ditolak</option>
                                                        </select>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                        <?php } elseif ($detailProposal['jenispendidikan_propo'] == 'S2') { ?>
                                            <tr>
                                                <td>Kaprodi S2</td>
                                                <td>
                                                    <fieldset class="form-group">
                                                        <select class="form-control" name="statusPropo">
                                                            <option hidden>-- Pilih Status Proposal --</option>
                                                            <option value="3">Disetujui</option>
                                                            <option value="2">Perbaikan</option>
                                                            <option value="1">Ditolak</option>
                                                        </select>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td>Wadek Akem</td>
                                            <td>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="statusPropo">
                                                        <option hidden>-- Pilih Status Proposal --</option>
                                                        <option value="3">Disetujui</option>
                                                        <option value="2">Perbaikan</option>
                                                        <option value="1">Ditolak</option>
                                                    </select>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wadek Sumda</td>
                                            <td>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="statusPropo">
                                                        <option hidden>-- Pilih Status Proposal --</option>
                                                        <option value="3">Disetujui</option>
                                                        <option value="2">Perbaikan</option>
                                                        <option value="1">Ditolak</option>
                                                    </select>
                                                </fieldset>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dekan</td>
                                            <td>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="statusPropo">
                                                        <option hidden>-- Pilih Status Proposal --</option>
                                                        <option value="3">Disetujui</option>
                                                        <option value="2">Perbaikan</option>
                                                        <option value="1">Ditolak</option>
                                                    </select>
                                                </fieldset>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block" disabled>Simpan</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Upload Proposal</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <fieldset class="form-group">
                                    <input type="file" class="form-control-file" id="exampleInputFile">
                                </fieldset>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block" disabled>Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Catatan/Revisi</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="width:25%">Posisi</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>BEM</strong></td>
                                            <td>
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['bem_note']  ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Akademik</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteAkademik as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['akademik_updatetime']  ?></i></small>
                                            </td>
                                            <td>
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['akademik_note']  ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sumber Daya</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteSumda as $key => $b) { ?>
                                                        <?= $b['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['sumberdaya_updatetime']  ?></i></td></small>
                                            <td>
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['sumberdaya_note']  ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tata Usaha</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteTataUsaha as $key => $b) { ?>
                                                        <?= $b['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['tatausaha_updatetime']  ?></i></small></td>
                                            <td>
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['tatausaha_note']  ?></textarea>
                                            </td>
                                        </tr>
                                        <?php if ($detailProposal['jenispendidikan_propo'] == 'S1') { ?>
                                            <tr>
                                                <td><strong>Kaprodi S1</strong><small><br>
                                                        <?php
                                                        foreach ($detailProposalNoteKaprodiS1 as $key => $c) { ?>
                                                            <?= $c['nama']  ?>
                                                        <?php  } ?>
                                                        <i><?= $detailProposal['kaprodis1_updatetime']  ?></i></small></td>
                                                <td>
                                                    <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['kaprodis1_note']  ?></textarea>
                                                </td>
                                            </tr>
                                        <?php } elseif ($detailProposal['jenispendidikan_propo'] == 'S2') { ?>
                                            <tr>
                                                <td><strong>Kaprodi S2</strong><small><br>
                                                        <?php
                                                        foreach ($detailProposalNoteKaprodiS2 as $key => $g) { ?>
                                                            <?= $g['nama']  ?>
                                                        <?php  } ?>
                                                        <i><?= $detailProposal['kaprodis2_updatetime']  ?></i></small></td>
                                                <td>
                                                    <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['kaprodis2_note']  ?></textarea>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td><strong>Wadek Akem</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteWadekAkem as $key => $d) { ?>
                                                        <?= $d['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['wadekakem_updatetime']  ?></i></small></td>
                                            <td>
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['wadekakem_note']  ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wadek Sumda</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteWadekSumda as $key => $e) { ?>
                                                        <?= $e['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['wadeksumda_updatetime']  ?></i></small></td>
                                            <td>
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['wadeksumda_note']  ?></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Dekan</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteDekan as $key => $f) { ?>
                                                        <?= $f['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['dekan_updatetime']  ?></i></small></td>
                                            <td>
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="2" name="tentangProposal"><?= $detailProposal['dekan_note']  ?></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block" disabled>Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>