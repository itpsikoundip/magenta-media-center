<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen/sk/operator/dekan') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
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
                <h2 class="mb-0 d-inline-block font-weight-bold">Edit <?= $detailSKDekan['judul_sk'] ?></h2>
                <h4 class="grey"><?= $detailSKDekan['tanggal_pembuatan']  ?></h4>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php
                                echo form_open_multipart('staffdosen/sk/operator/dekan/editdata/' . $detailSKDekan['id_sk_dekan']);
                                ?>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="fa fa-file-o"></i> Informasi SK</h4>
                                    <div class="form-group">
                                        <label>Judul SK</label>
                                        <input type="text" class="form-control" maxlength="255" name="judulSKDekan" value="<?= $detailSKDekan['judul_sk'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembuatan</label>
                                        <input type="date" class="form-control" name="tanggalPembuatanSKDekan" value="<?= $detailSKDekan['tanggal_pembuatan'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>TMT Kegiatan</label>
                                        <input type="date" class="form-control" name="tmtKegiatanSKDekan" value="<?= $detailSKDekan['tmt_kegiatan'] ?>">
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
                                echo form_open_multipart('staffdosen/sk/operator/dekan/editdatafilesk/' . $detailSKDekan['id_sk_dekan']);
                                ?>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="fa fa-file-o"></i> Upload File SK</h4>
                                    <div class="form-group">
                                        <label>Upload</label>
                                        <input type="file" class="form-control" name="uploadSKDekan">
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
                                        <?php if ($detailSKDekan['jenis_op_id'] == 1) { ?>
                                            <tr>
                                                <td><strong>SV Akem</strong><small><br>
                                                        <?php
                                                        foreach ($detailSKDekanNoteSVAkademik as $key => $a) { ?>
                                                            <?= $a['nama']  ?>
                                                        <?php  } ?>
                                                        <i><?= $detailSKDekan['sk_akem_updatetime']  ?></i></small>
                                                </td>
                                                <td><small><?= $detailSKDekan['sk_akem_note']  ?></small></td>
                                            </tr>
                                        <?php } elseif ($detailSKDekan['jenis_op_id'] == 2) { ?>
                                            <tr>
                                                <td><strong>SV Sumda</strong><small><br>
                                                        <?php
                                                        foreach ($detailSKDekanNoteSVSumda as $key => $a) { ?>
                                                            <?= $a['nama']  ?>
                                                        <?php  } ?>
                                                        <i><?= $detailSKDekan['sv_sumda_updatetime']  ?></i></small>
                                                </td>
                                                <td><small><?= $detailSKDekan['sv_sumda_note']  ?></small></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td><strong>Manager TU</strong><small><br>
                                                    <?php
                                                    foreach ($detailSKDekanNoteTataUsaha as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailSKDekan['manager_tu_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailSKDekan['manager_tu_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wadek Akem</strong><small><br>
                                                    <?php
                                                    foreach ($detailSKDekanNoteWadekAkem as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailSKDekan['wadek_akem_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailSKDekan['wadek_akem_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wadek Sumda</strong><small><br>
                                                    <?php
                                                    foreach ($detailSKDekanNoteWadekSumda as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailSKDekan['wadek_sumda_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailSKDekan['wadek_sumda_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Dekan</strong><small><br>
                                                    <?php
                                                    foreach ($detailSKDekanNoteDekan as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailSKDekan['dekan_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailSKDekan['dekan_note']  ?></small></td>
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
                                echo form_open_multipart('PengajuanSKDekan/editData');
                                ?>
                                <div class="form-body">
                                    <h4 class="form-section"><i class="fa fa-file-pdf-o"></i> File SK Saat ini</h4>
                                    <a href="<?= base_url('uploadskdekan/' . $detailSKDekan['upload_sk_dekan']) ?>" target="_blank" class="btn btn-info btn-block btn-lg"><i class="fa fa-file-pdf-o"></i> <?= $detailSKDekan['upload_sk_dekan'] ?></a>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <?php if (($detailSKDekan['dekan_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/dekan/konfirmasieditkedekan/' . $detailSKDekan['id_sk_dekan']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKDekan['wadek_sumda_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/dekan/konfirmasieditkewadeksumda/' . $detailSKDekan['id_sk_dekan']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKDekan['wadek_akem_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/dekan/konfirmasieditkewadekakakem/' . $detailSKDekan['id_sk_dekan']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKDekan['manager_tu_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/dekan/konfirmasieditketatausaha/' . $detailSKDekan['id_sk_dekan']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKDekan['sv_sumda_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/dekan/konfirmasieditkesumberdaya/' . $detailSKDekan['id_sk_dekan']);
                                    ?>
                                    <div class="form-body">
                                        <h4 class="form-section"><i class="fa fa-check-square-o"></i> Konfirmasi Pengajuan</h4>
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">KONFIRMASI / PERBAIKAN
                                        </button>
                                    </div>
                                    <?php echo form_close() ?>
                                <?php } elseif (($detailSKDekan['sk_akem_status']) == 2) { ?>
                                    <?php
                                    echo form_open('staffdosen/sk/operator/dekan/konfirmasieditkeakademik/' . $detailSKDekan['id_sk_dekan']);
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