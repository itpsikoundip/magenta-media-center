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
                <?php if ($detailVerifikator['sk_jenis_verifikator_id'] == 1) { ?>
                    <h4 class="grey">Verifikator Supervisor Akem</h4>
                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 2) { ?>
                    <h4 class="grey">Verifikator Supervisor Sumda</h4>
                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 3) { ?>
                    <h4 class="grey">Verifikator Manager TU</h4>
                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 4) { ?>
                    <h4 class="grey">Verifikator Wadek Akem</h4>
                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 5) { ?>
                    <h4 class="grey">Verifikator Wadek Sumda</h4>
                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 6) { ?>
                    <h4 class="grey">Verifikator Dekan</h4>
                <?php } ?>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-underline no-hover-bg">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Menunggu Verifikasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Semua SK</a>
                                    </li>
                                </ul>
                                <?php if ($detailVerifikator['sk_jenis_verifikator_id'] == 1) { ?>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorSVAkemSiapVerif as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorSVAkem as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <?php if ($value['sk_akem_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['sk_akem_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['sk_akem_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['sk_akem_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/view/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 2) { ?>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorSVSumdaSiapVerif as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorSVSumda as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <?php if ($value['sv_sumda_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['sv_sumda_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['sv_sumda_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['sv_sumda_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/view/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 3) { ?>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorManagerTUSiapVerif as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorManagerTU as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <?php if ($value['manager_tu_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['manager_tu_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['manager_tu_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['manager_tu_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/view/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 4) { ?>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorWadekAkemSiapVerif as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorWadekAkem as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <?php if ($value['manager_tu_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['manager_tu_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['manager_tu_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['manager_tu_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/view/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 5) { ?>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorWadekSumdaSiapVerif as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorWadekSumda as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <?php if ($value['sk_akem_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['sk_akem_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['sk_akem_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['sk_akem_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/view/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                <?php } elseif ($detailVerifikator['sk_jenis_verifikator_id'] == 6) { ?>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorDekanSiapVerif as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/edit/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr style="text-align: center;">
                                                        <th style="width:60%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKRektorDekan as $key => $value) { ?>
                                                        <tr style="text-align: center;">
                                                            <td style="text-align: left;"><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <?php if ($value['sk_akem_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['sk_akem_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['sk_akem_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['sk_akem_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/sk/verifikator/rektor/view/' . $value['id_sk_rektor']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th style="width:50%; text-align: left;">Judul SK</th>
                                                        <th style="width:20%">Tanggal Pembuatan</th>
                                                        <th style="width:10%">Status</th>
                                                        <th style="width:20%">Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>