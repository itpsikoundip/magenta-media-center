<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('admin/fitur/sk/data/skrektor') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $detailSKRektor['judul_sk']  ?></h2>
                <h4 class="grey"><?= $detailSKRektor['tanggal_pembuatan']  ?></h4>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informasi SK Rektor</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row">ID</th>
                                        <td>: <?= $detailSKRektor['id_sk_rektor']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Judul SK</th>
                                        <td>: <?= $detailSKRektor['judul_sk']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Operator</th>
                                        <td>: <?= $detailSKRektor['nama_jenis_op']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pengaju</th>
                                        <td>: <?= $detailSKRektor['nama']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Pembuatan</th>
                                        <td>: <?= $detailSKRektor['tanggal_pembuatan']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">TMT Kegiatan</th>
                                        <td>: <?= $detailSKRektor['tmt_kegiatan']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Created at</th>
                                        <td>: <?= $detailSKRektor['created_at']  ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status SK Rektor</h4>
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
                                        <?php if ($detailSKRektor['jenis_op_id'] == 1) { ?>
                                            <tr>
                                                <td>SV Akem</td>
                                                <td>
                                                    <?php if ($detailSKRektor['sk_akem_status'] == 0) {
                                                        echo '<div class="badge badge-info">Proses</div>';
                                                    } elseif (($detailSKRektor['sk_akem_status']) == 1) {
                                                        echo '<div class="badge badge-danger">Ditolak</div>';
                                                    } elseif (($detailSKRektor['sk_akem_status']) == 2) {
                                                        echo '<div class="badge badge-warning">Perbaikan</div>';
                                                    } elseif (($detailSKRektor['sk_akem_status']) == 3) {
                                                        echo '<div class="badge badge-success">Disetujui</div>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } elseif ($detailSKRektor['jenis_op_id'] == 2) { ?>
                                            <tr>
                                                <td>SV Sumda</td>
                                                <td>
                                                    <?php if ($detailSKRektor['sv_sumda_status'] == 0) {
                                                        echo '';
                                                    } elseif (($detailSKRektor['sv_sumda_status']) == 1) {
                                                        echo '<div class="badge badge-danger">Ditolak</div>';
                                                    } elseif (($detailSKRektor['sv_sumda_status']) == 2) {
                                                        echo '<div class="badge badge-warning">Perbaikan</div>';
                                                    } elseif (($detailSKRektor['sv_sumda_status']) == 3) {
                                                        echo '<div class="badge badge-success">Disetujui</div>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td>Manager TU</td>
                                            <td>
                                                <?php if ($detailSKRektor['manager_tu_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKRektor['manager_tu_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailSKRektor['manager_tu_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailSKRektor['manager_tu_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wadek Akem</td>
                                            <td>
                                                <?php if ($detailSKRektor['wadek_akem_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKRektor['wadek_akem_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailSKRektor['wadek_akem_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailSKRektor['wadek_akem_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wadek Sumda</td>
                                            <td>
                                                <?php if ($detailSKRektor['wadek_sumda_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKRektor['wadek_sumda_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailSKRektor['wadek_sumda_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailSKRektor['wadek_sumda_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dekan</td>
                                            <td>
                                                <?php if ($detailSKRektor['dekan_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKRektor['dekan_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailSKRektor['dekan_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailSKRektor['dekan_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">File SK Rektor</h4>
                            <br>
                            <a href="<?= base_url('uploadskrektor/' . $detailSKRektor['upload_sk_rektor']) ?>" download="<?= $detailSKRektor['id_sk_rektor']  ?>_<?= $detailSKRektor['upload_sk_rektor']  ?>" class="mr-1 mb-1 btn btn-block btn-secondary btn-min-width"><i class="fa fa-download"></i> Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Isi File Proposal</h4>
                        </div>
                        <iframe src="<?= base_url('uploadskrektor/' . $detailSKRektor['upload_sk_rektor']) ?>" frameborder="0" height="900px" width="auto">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
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
                </div>
            </div>
        </div>
    </div>
</div>