<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
        <?php
        if (session()->getFlashdata('notifikasi')) {
            echo '
            <div class="alert alert-success alert-dismissible mb-2" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
            ';
            echo session()->getFlashdata('notifikasi');
            echo '
            </div>
            ';
        }
        ?>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Unit/Divisi : <?= session()->get('namaunit') ?></h4>
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
                                        <a class="nav-link" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Semua Proposal</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <!-- Unit Subbagian Akademik dan Kemahasiswaan FPSi -->
                                    <?php if ($detailDosen['unittugas_id'] == 1) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagAkademikSiapACC as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagAkademik as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <?php if ($value['akademik_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['akademik_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['akademik_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['akademik_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Subbagian Sumberdaya FPSi -->
                                    <?php } elseif ($detailDosen['unittugas_id'] == 2) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagSumberDayaSiapACC as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/edit//' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagSumberDaya as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <?php if ($value['sumberdaya_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['sumberdaya_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['sumberdaya_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['sumberdaya_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Tata Usaha -->
                                    <?php } elseif ($detailDosen['unittugas_id'] == 3) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagTataUsahaSiapACC as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagTataUsaha as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <?php if ($value['tatausaha_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['tatausaha_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['tatausaha_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['tatausaha_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Wadek Akademik dan Kemahasiswaan -->
                                    <?php } elseif ($detailDosen['unittugas_id'] == 4) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagWadekAkemSiapACC as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagWadekAkem as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <?php if ($value['wadekakem_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['wadekakem_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['wadekakem_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['wadekakem_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Wadek Sumber Daya -->
                                    <?php } elseif ($detailDosen['unittugas_id'] == 5) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagWadekSumdaSiapACC as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagWadekSumda as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <?php if ($value['wadeksumda_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['wadeksumda_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['wadeksumda_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['wadeksumda_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Kaprodi S1 -->
                                    <?php } elseif ($detailDosen['unittugas_id'] == 6) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagKaprodiS1SiapACC as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagKaprodiS1 as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <?php if ($value['kaprodis1_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['kaprodis1_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['kaprodis1_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['kaprodis1_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Kaprodi S2 -->
                                    <?php } elseif ($detailDosen['unittugas_id'] == 7) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagKaprodiS2SiapACC as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagKaprodiS2 as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <?php if ($value['kaprodis2_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['kaprodis2_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['kaprodis2_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['kaprodis2_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Dekan -->
                                    <?php } elseif ($detailDosen['unittugas_id'] == 8) { ?>
                                        <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagDekanSiapACC as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <table class="table table-striped table-bordered zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Proposal</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no = 1;
                                                    foreach ($allDataProposalBagDekan as $key => $value) { ?>
                                                        <tr>
                                                            <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                            <td>
                                                                <?php if ($value['dekan_status'] == 0) {
                                                                    echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                                } elseif (($value['dekan_status']) == 1) {
                                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                                } elseif (($value['dekan_status']) == 2) {
                                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                                } elseif (($value['dekan_status']) == 3) {
                                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('staffdosen/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php  } ?>
                                                </tbody>
                                            </table>
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
</div>