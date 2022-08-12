<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('ormawa/proposal') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
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
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Ormawa <?php echo session()->namaormawa ?></h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel <?= $title ?> </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?php if (session()->get('idormawa') == 2) { ?>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Menunggu Konfirmasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Semua Proposal</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
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
                                            foreach ($allDataProposalBagBEMSiapACC as $key => $value) { ?>
                                                <tr>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                    <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                    <td>
                                                        <a href="<?= base_url('ormawa/proposal/konfirm/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
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
                                            foreach ($allDataProposalBagBEM as $key => $value) { ?>
                                                <tr>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $no++; ?></td>
                                                    <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                    <td style="vertical-align: middle; text-align: center;">
                                                        <?php if ($value['bem_status'] == 0) {
                                                            echo '<div class="badge badge-primary">Belum ada Status</div>';
                                                        } elseif (($value['bem_status']) == 1) {
                                                            echo '<div class="badge badge-danger">Ditolak</div>';
                                                        } elseif (($value['bem_status']) == 2) {
                                                            echo '<div class="badge badge-warning">Perbaikan</div>';
                                                        } elseif (($value['bem_status']) == 3) {
                                                            echo '<div class="badge badge-success">Disetujui</div>';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="vertical-align: middle; text-align: center;">
                                                        <a href="<?= base_url('proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php } else { ?>
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr style="text-align: center; vertical-align: middle;">
                                        <th>Judul</th>
                                        <th>Posisi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($dataProposal as $key => $value) { ?>
                                        <tr>
                                            <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                            <td style="vertical-align: middle; text-align: center;">
                                                <?php if ($value['dekan_status'] != 0) {
                                                    echo 'Dekan';
                                                } elseif (($value['wadeksumda_status']) != 0) {
                                                    echo 'Wadek Sumda';
                                                } elseif (($value['wadekakem_status']) != 0) {
                                                    echo 'Wadek Akem';
                                                } elseif (($value['kaprodis1_status']) != 0) {
                                                    echo 'Kaprodi S1';
                                                } elseif (($value['tatausaha_status']) != 0) {
                                                    echo 'Tata Usaha';
                                                } elseif (($value['sumberdaya_status']) != 0) {
                                                    echo 'Sumber Daya';
                                                } elseif (($value['akademik_status']) != 0) {
                                                    echo 'Akademik';
                                                } elseif (($value['bem_status']) != 0) {
                                                    echo 'BEM';
                                                } elseif (($value['bem_status']) == 0) {
                                                    echo 'BEM';
                                                }
                                                ?>
                                            </td>
                                            <td style="vertical-align: middle; text-align: center;">
                                                <?php if ($value['dekan_status'] == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                } elseif (($value['dekan_status']) == 2) {
                                                    echo '<div class="badge badge-warning"><div class="badge badge-warning">Perbaikan</div></div>';
                                                } elseif (($value['dekan_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($value['wadeksumda_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                } elseif (($value['wadeksumda_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($value['wadeksumda_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($value['wadekakem_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                } elseif (($value['wadekakem_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($value['wadekakem_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($value['kaprodis1_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                } elseif (($value['kaprodis1_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($value['kaprodis1_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($value['tatausaha_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                } elseif (($value['tatausaha_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($value['tatausaha_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($value['sumberdaya_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                } elseif (($value['sumberdaya_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($value['sumberdaya_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($value['akademik_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                } elseif (($value['akademik_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($value['akademik_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($value['bem_status']) == 3) {
                                                    echo '<div class="badge badge-success">Disetujui</div>';
                                                } elseif (($value['bem_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($value['bem_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($value['bem_status']) == 0) {
                                                    echo '<div class="badge badge-info">Diproses</div>';
                                                }
                                                ?>
                                            </td>
                                            <td style="vertical-align: middle; text-align: center;">
                                                <a href="<?= base_url('ormawa/proposal/view/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-info"><i class="fa fa-eye"></i></a>
                                                <?php if (($value['dekan_status']) == 2) { ?>
                                                    <a href="<?= base_url('ormawa/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                <?php } elseif (($value['wadeksumda_status']) == 2) { ?>
                                                    <a href="<?= base_url('ormawa/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                <?php } elseif (($value['wadekakem_status']) == 2) { ?>
                                                    <a href="<?= base_url('ormawa/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                <?php } elseif (($value['kaprodis1_status']) == 2) { ?>
                                                    <a href="<?= base_url('ormawa/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                <?php } elseif (($value['tatausaha_status']) == 2) { ?>
                                                    <a href="<?= base_url('ormawa/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                <?php } elseif (($value['sumberdaya_status']) == 2) { ?>
                                                    <a href="<?= base_url('ormawa/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                <?php } elseif (($value['akademik_status']) == 2) { ?>
                                                    <a href="<?= base_url('ormawa/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                <?php } elseif (($value['bem_status']) == 2) { ?>
                                                    <a href="<?= base_url('ormawa/proposal/edit/' . $value['id_propo']) ?>" class="btn btn-sm btn-icon btn-success"><i class="fa fa-edit"></i></a>
                                                <?php } ?>

                                            </td>
                                        <?php  } ?>
                                </tbody>
                            </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Hapus -->
<?php
foreach ($dataProposal as $key => $value) { ?>
    <div class="modal fade text-left" id="delete<?= $value['id_propo']  ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger white">
                    <h4 class="modal-title white" id="myModalLabel10">Konfirmasi Hapus</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <br>
                    <h4 class="text-center"><strong>Anda Yakin?</strong></h4>
                    <br>
                    <p class="text-center">Menghapus Proposal <strong><?= $value['judul_propo']  ?></strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('proposal/delete/' . $value['id_propo']) ?>" class="btn btn-outline-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php  } ?>
<!-- End OF Modal Hapus -->