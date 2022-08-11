<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen/sk/operator/rektor') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
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
                <h2 class="mb-0 d-inline-block font-weight-bold">Edit <?= $detailSKRektor['judul_sk'] ?></h2>
                <h4 class="grey"><?= $detailSKRektor['tanggal_pembuatan']  ?></h4>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php
                                echo form_open_multipart('staffdosen/sk/operator/rektor/editdata/' . $detailSKRektor['id_sk_rektor']);
                                ?>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="fa fa-file-o"></i> Informasi SK</h4>
                                    <div class="form-group">
                                        <label>Judul SK</label>
                                        <input type="text" class="form-control" maxlength="255" name="judulSKRektor" value="<?= $detailSKRektor['judul_sk'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembuatan</label>
                                        <input type="date" class="form-control" name="tanggalPembuatanSKRektor" value="<?= $detailSKRektor['tanggal_pembuatan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>TMT Kegiatan</label>
                                        <input type="date" class="form-control" name="tmtKegiatanSKRektor" value="<?= $detailSKRektor['tmt_kegiatan'] ?>">
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-floppy-o"></i>&nbsp; SIMPAN
                                        </button>
                                    </div>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php
                                echo form_open_multipart('staffdosen/sk/operator/rektor/editdatafilesk/' . $detailSKRektor['id_sk_rektor']);
                                ?>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="fa fa-file-o"></i> Upload File SK</h4>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
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
                                            <th style="width:50%">Posisi</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($detailSKRektor['jenis_op_id'] == 1) { ?>
                                            <tr>
                                                <td><strong>SV Akem</strong><small><br>
                                                        <?php
                                                        foreach ($detailSKRektorNoteSVAkademik as $key => $a) { ?>
                                                            <?= $a['nama']  ?>
                                                        <?php  } ?>
                                                        <i><?= $detailSKRektor['sk_akem_updatetime']  ?></i></small>
                                                </td>
                                                <td><small><?= $detailSKRektor['sk_akem_note']  ?></small></td>
                                            </tr>
                                        <?php } elseif ($detailSKRektor['jenis_op_id'] == 2) { ?>
                                            <tr>
                                                <td><strong>SV Sumda</strong><small><br>
                                                        <?php
                                                        foreach ($detailSKRektorNoteSVSumda as $key => $a) { ?>
                                                            <?= $a['nama']  ?>
                                                        <?php  } ?>
                                                        <i><?= $detailSKRektor['sv_sumda_updatetime']  ?></i></small>
                                                </td>
                                                <td><small><?= $detailSKRektor['sv_sumda_note']  ?></small></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td><strong>Manager TU</strong><small><br>
                                                    <?php
                                                    foreach ($detailSKRektorNoteTataUsaha as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailSKRektor['manager_tu_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailSKRektor['manager_tu_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wadek Akem</strong><small><br>
                                                    <?php
                                                    foreach ($detailSKRektorNoteWadekAkem as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailSKRektor['wadek_akem_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailSKRektor['wadek_akem_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wadek Sumda</strong><small><br>
                                                    <?php
                                                    foreach ($detailSKRektorNoteWadekSumda as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailSKRektor['wadek_sumda_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailSKRektor['wadek_sumda_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Dekan</strong><small><br>
                                                    <?php
                                                    foreach ($detailSKRektorNoteDekan as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailSKRektor['dekan_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailSKRektor['dekan_note']  ?></small></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php
                                echo form_open_multipart('PengajuanSKrektor/editData');
                                ?>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="fa fa-file-pdf-o"></i> File SK Saat ini</h4>
                                    <a href="<?= base_url('uploadskrektor/' . $detailSKRektor['upload_sk_rektor']) ?>" target="_blank" class="btn btn-info btn-block btn-lg"><i class="fa fa-file-pdf-o"></i> <?= $detailSKRektor['upload_sk_rektor'] ?></a>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php if (($detailSKRektor['dekan_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/rektor/konfirmasieditkedekan/' . $detailSKRektor['id_sk_rektor']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKRektor['wadek_sumda_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/rektor/konfirmasieditkewadeksumda/' . $detailSKRektor['id_sk_rektor']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKRektor['wadek_akem_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/rektor/konfirmasieditkewadekakakem/' . $detailSKRektor['id_sk_rektor']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKRektor['manager_tu_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/rektor/konfirmasieditketatausaha/' . $detailSKRektor['id_sk_rektor']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKRektor['sv_sumda_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/rektor/konfirmasieditkesumberdaya/' . $detailSKRektor['id_sk_rektor']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKRektor['sk_akem_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/rektor/konfirmasieditkeakademik/' . $detailSKRektor['id_sk_rektor']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>