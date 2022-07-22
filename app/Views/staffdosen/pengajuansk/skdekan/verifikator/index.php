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
                <h2 class="mb-0 d-inline-block font-weight-bold"></h2>
                <h4 class="grey"></h4>
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
                                        <a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31" href="#tab31" aria-expanded="true">Menunggu Verifikasi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32" aria-expanded="false">Semua SK</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <?php if ($detailVerifikator['sk_dekan_jenis_verifikator_id'] == 1) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab31" aria-expanded="true" aria-labelledby="base-tab31">
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
                                                    foreach ($dataSKDekanSiapVerif as $key => $value) { ?>
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
                                        <div class="tab-pane" id="tab32" aria-labelledby="base-tab32">
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
                                                    foreach ($dataSKDekanSiapVerif as $key => $value) { ?>
                                                        <tr>
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
                            <?php } elseif ($detailVerifikator['sk_dekan_jenis_verifikator_id'] == 2) { ?>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>