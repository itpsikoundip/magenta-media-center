<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen/sk/verifikator/dekan') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
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
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $detailSKDekan['judul_sk']  ?></h2>
                <h4 class="grey"><?= $detailSKDekan['tanggal_pembuatan']  ?></h4>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status SK Dekan</h4>
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
                                            <td>SV Akem</td>
                                            <td>
                                                <?php if ($detailSKDekan['sk_akem_status'] == 0) {
                                                    echo '<div class="badge badge-info">Proses</div>';
                                                } elseif (($detailSKDekan['sk_akem_status']) == 1) {
                                                    echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                } elseif (($detailSKDekan['sk_akem_status']) == 2) {
                                                    echo '<div class="badge badge-info">Perbaikan</div>';
                                                } elseif (($detailSKDekan['sk_akem_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SV Sumda</td>
                                            <td>
                                                <?php if ($detailSKDekan['sv_sumda_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKDekan['sv_sumda_status']) == 1) {
                                                    echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                } elseif (($detailSKDekan['sv_sumda_status']) == 2) {
                                                    echo '<div class="badge badge-info">Perbaikan</div>';
                                                } elseif (($detailSKDekan['sv_sumda_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Manager TU</td>
                                            <td>
                                                <?php if ($detailSKDekan['manager_tu_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKDekan['manager_tu_status']) == 1) {
                                                    echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                } elseif (($detailSKDekan['manager_tu_status']) == 2) {
                                                    echo '<div class="badge badge-info">Perbaikan</div>';
                                                } elseif (($detailSKDekan['manager_tu_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wadek Akem</td>
                                            <td>
                                                <?php if ($detailSKDekan['wadek_akem_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKDekan['wadek_akem_status']) == 1) {
                                                    echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                } elseif (($detailSKDekan['wadek_akem_status']) == 2) {
                                                    echo '<div class="badge badge-info">Perbaikan</div>';
                                                } elseif (($detailSKDekan['wadek_akem_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wadek Sumda</td>
                                            <td>
                                                <?php if ($detailSKDekan['wadek_sumda_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKDekan['wadek_sumda_status']) == 1) {
                                                    echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                } elseif (($detailSKDekan['wadek_sumda_status']) == 2) {
                                                    echo '<div class="badge badge-info">Perbaikan</div>';
                                                } elseif (($detailSKDekan['wadek_sumda_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dekan</td>
                                            <td>
                                                <?php if ($detailSKDekan['dekan_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailSKDekan['dekan_status']) == 1) {
                                                    echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                } elseif (($detailSKDekan['dekan_status']) == 2) {
                                                    echo '<div class="badge badge-info">Perbaikan</div>';
                                                } elseif (($detailSKDekan['dekan_status']) == 3) {
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
                            <h4 class="card-title">File SK Dekan</h4>
                            <br>
                            <a href="<?= base_url('uploadskdekan/' . $detailSKDekan['upload_sk_dekan']) ?>" target="_blank" class="mr-1 mb-1 btn btn-info btn-min-width"><i class="fa fa-eye"></i> Lihat</a>
                            <a href="<?= base_url('uploadskdekan/' . $detailSKDekan['upload_sk_dekan']) ?>" download="<?= $detailSKDekan['id_sk_dekan']  ?>_<?= $detailSKDekan['upload_sk_dekan']  ?>" class="mr-1 mb-1 btn btn-secondary btn-min-width"><i class="fa fa-download"></i> Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informasi SK Dekan</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="width-200">Judul SK</th>
                                        <td>: <?= $detailSKDekan['judul_sk']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Pembuatan</th>
                                        <td>: <?= $detailSKDekan['tanggal_pembuatan']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">TMT Kegiatan</th>
                                        <td>: <?= $detailSKDekan['tmt_kegiatan']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal dan Waktu Pengajuan</th>
                                        <td>: <?= $detailSKDekan['created_at']  ?></td>
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