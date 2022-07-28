<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('PengajuanSK') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
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
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanSVAkemSiapVerif as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/edit/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
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
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanSVAkem as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
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
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/view/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
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
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanSVSumdaSiapVerif as $key => $value) { ?>
                                                        <tr>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/edit/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
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
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanSVSumda as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
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
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/view/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
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
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanManagerTUSiapVerif as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/edit/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
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
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanManagerTU as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
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
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/view/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
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
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanWadekAkemSiapVerif as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/edit/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
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
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanWadekAkem as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
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
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/view/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
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
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanWadekSumdaSiapVerif as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/edit/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
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
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanWadekSumda as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
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
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/view/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
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
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanDekanSiapVerif as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
                                                            <td><?= $value['tanggal_pembuatan']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/edit/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
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
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($allDataSKDekanDekan as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= $value['judul_sk']  ?></td>
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
                                                                <a href="<?= base_url('PengajuanSKDekanVerifikator/view/' . $value['id_sk_dekan']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Judul SK</th>
                                                        <th>Tanggal Pembuatan</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
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