<div class="app-content content">
    <div class="content-wrapper">
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
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?></h3>
            </div>
        </div>
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="width:100%">
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th style="width:5%">ID</th>
                                                <th style="width:20%; text-align: left;">Judul SK</th>
                                                <th style="width:10%">Operator</th>
                                                <th style="width:15%">Pengaju</th>
                                                <th style="width:10%">Tanggal Pembuatan</th>
                                                <th style="width:10%">TMT Kegiatan</th>
                                                <th style="width:10%">Posisi</th>
                                                <th style="width:5%">Status</th>
                                                <th style="width:10%">Created at</th>
                                                <th style="width:5%">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allDataSKDekan as $key => $value) { ?>
                                                <tr style="text-align: center; vertical-align: middle;">
                                                    <td style="vertical-align: middle;"><?= $value['id_sk_dekan']  ?></td>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['judul_sk']  ?></td>
                                                    <td style="vertical-align: middle;"><?= $value['nama_jenis_op']  ?></td>
                                                    <td style="vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="vertical-align: middle;"><?= $value['tanggal_pembuatan']  ?></td>
                                                    <td style="vertical-align: middle;"><?= $value['tmt_kegiatan']  ?></td>
                                                    <td style="vertical-align: middle;">
                                                        <?php if ($value['dekan_status'] != 0) {
                                                            echo 'Dekan';
                                                        } elseif (($value['wadek_sumda_status']) != 0) {
                                                            echo 'Wadek Sumda';
                                                        } elseif (($value['wadek_akem_status']) != 0) {
                                                            echo 'Wadek Akem';
                                                        } elseif (($value['manager_tu_status']) != 0) {
                                                            echo 'Manager Tata Usaha';
                                                        } elseif (($value['sv_sumda_status']) != 0) {
                                                            echo 'Supervisor Sumber Daya';
                                                        } elseif (($value['sk_akem_status']) != 0) {
                                                            echo 'Supervisor Akademik';
                                                        } elseif (($value['sk_akem_status']) == 0) {
                                                            echo 'Supervisor Akademik';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="vertical-align: middle;">
                                                        <?php if ($value['dekan_status'] == 3) {
                                                            echo '<div class="badge badge-success">Disetujui</div>';
                                                        } elseif (($value['dekan_status']) == 2) {
                                                            echo '<div class="badge badge-warning">Perbaikan</div>';
                                                        } elseif (($value['dekan_status']) == 1) {
                                                            echo '<div class="badge badge-danger">Ditolak</div>';
                                                        } elseif (($value['wadek_sumda_status']) == 3) {
                                                            echo '<div class="badge badge-success">Disetujui</div>';
                                                        } elseif (($value['wadek_sumda_status']) == 2) {
                                                            echo '<div class="badge badge-warning">Perbaikan</div>';
                                                        } elseif (($value['wadek_sumda_status']) == 1) {
                                                            echo '<div class="badge badge-danger">Ditolak</div>';
                                                        } elseif (($value['wadek_akem_status']) == 3) {
                                                            echo '<div class="badge badge-success">Disetujui</div>';
                                                        } elseif (($value['wadek_akem_status']) == 2) {
                                                            echo '<div class="badge badge-warning">Perbaikan</div>';
                                                        } elseif (($value['wadek_akem_status']) == 1) {
                                                            echo '<div class="badge badge-danger">Ditolak</div>';
                                                        } elseif (($value['manager_tu_status']) == 3) {
                                                            echo '<div class="badge badge-success">Disetujui</div>';
                                                        } elseif (($value['manager_tu_status']) == 2) {
                                                            echo '<div class="badge badge-warning">Perbaikan</div>';
                                                        } elseif (($value['manager_tu_status']) == 1) {
                                                            echo '<div class="badge badge-danger">Ditolak</div>';
                                                        } elseif (($value['sv_sumda_status']) == 3) {
                                                            echo '<div class="badge badge-success">Disetujui</div>';
                                                        } elseif (($value['sv_sumda_status']) == 2) {
                                                            echo '<div class="badge badge-warning">Perbaikan</div>';
                                                        } elseif (($value['sv_sumda_status']) == 1) {
                                                            echo '<div class="badge badge-danger">Ditolak</div>';
                                                        } elseif (($value['sk_akem_status']) == 3) {
                                                            echo '<div class="badge badge-success">Disetujui</div>';
                                                        } elseif (($value['sk_akem_status']) == 2) {
                                                            echo '<div class="badge badge-warning">Perbaikan</div>';
                                                        } elseif (($value['sk_akem_status']) == 1) {
                                                            echo '<div class="badge badge-danger">Ditolak</div>';
                                                        } elseif (($value['sk_akem_status']) == 0) {
                                                            echo '<div class="badge badge-info">Proses</div>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="vertical-align: middle;"><?= $value['created_at']  ?></td>
                                                    <td style="vertical-align: middle;">
                                                        <a href="<?= base_url('admin/fitur/sk/data/skdekan/detail/' . $value['id_sk_dekan']) ?>" type="button" class="btn btn-primary btn-min-width mr-1 mb-1">Detail</a>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr style="text-align: center;">
                                                <th style="width:5%">ID</th>
                                                <th style="width:20%; text-align: left;">Judul SK</th>
                                                <th style="width:10%">Jenis Operator</th>
                                                <th style="width:15%">Pengaju</th>
                                                <th style="width:10%">Tanggal Pembuatan</th>
                                                <th style="width:10%">TMT Kegiatan</th>
                                                <th style="width:10%">Posisi</th>
                                                <th style="width:5%">Status</th>
                                                <th style="width:10%">Created at</th>
                                                <th style="width:5%">Detail</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>