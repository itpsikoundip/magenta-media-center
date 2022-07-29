<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen/sk') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
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
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey"><?= $detailAksesUserOp['nama_jenis_op']  ?></h4>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <a href="<?= base_url('staffdosen/sk/operator/rektor/add') ?>" class="btn btn-info btn-min-width"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Menunggu Konfirmasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Semua SK</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Judul SK</th>
                                                    <th>Tanggal Pembuatan</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($dataSKRektorPengajuMenungguKonfirmasi as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= $value['judul_sk']  ?></td>
                                                        <td><?= $value['tanggal_pembuatan']  ?></td>
                                                        <td>
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
                                                        <td>
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
                                                        <td>
                                                            <a href="<?= base_url('staffdosen/sk/operator/rektor/view/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            <?php if (($value['dekan_status']) == 2) { ?>
                                                                <a href="<?= base_url('staffdosen/sk/operator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            <?php } elseif (($value['wadek_sumda_status']) == 2) { ?>
                                                                <a href="<?= base_url('staffdosen/sk/operator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            <?php } elseif (($value['wadek_akem_status']) == 2) { ?>
                                                                <a href="<?= base_url('staffdosen/sk/operator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            <?php } elseif (($value['manager_tu_status']) == 2) { ?>
                                                                <a href="<?= base_url('staffdosen/sk/operator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            <?php } elseif (($value['sv_sumda_status']) == 2) { ?>
                                                                <a href="<?= base_url('staffdosen/sk/operator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            <?php } elseif (($value['sk_akem_status']) == 2) { ?>
                                                                <a href="<?= base_url('staffdosen/sk/operator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                <?php  } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Judul SK</th>
                                                    <th>Tanggal Pembuatan</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Judul SK</th>
                                                    <th>Tanggal Pembuatan</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($dataSKRektorPengajuSemuaSK as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= $value['judul_sk']  ?></td>
                                                        <td><?= $value['tanggal_pembuatan']  ?></td>
                                                        <td>
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
                                                        <td>
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
                                                        <td>
                                                            <a href="<?= base_url('staffdosen/sk/operator/rektor/view/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php  } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Judul SK</th>
                                                    <th>Tanggal Pembuatan</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>