<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('proposal/') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
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
                <h4 class="grey">Mahasiswa</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card bg-success">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-check text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataProposalStatus3 ?></h3>
                                        <span>Disetujui</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card bg-info">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-clock text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataProposalStatus1 ?></h3>
                                        <span>Proses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card bg-warning">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-drawer text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataProposalStatus0 ?></h3>
                                        <span>Draft / Perbaikan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card bg-danger">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-ban text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataProposalStatus2 ?></h3>
                                        <span>Ditolak</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel <?= $title ?> </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <table id="tbl_semua" class="table table-striped table-bordered row-grouping">
                            <thead>
                                <tr style="text-align: center; vertical-align: middle;">
                                    <th>Judul</th>
                                    <th>ID Proposal</th>
                                    <th>Status</th>
                                    <th>Posisi</th>
                                    <th>Progress</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($dataProposal as $key => $value) { ?>
                                    <tr>
                                        <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                        <td style="text-align: center; vertical-align: middle;"><?= $value['id_propo']  ?></td>
                                        <td>
                                            <?php if ($value['status_propo'] == 0) {
                                                echo '<strong>DRAFT / PERBAIKAN</strong>';
                                            } elseif (($value['status_propo']) == 1) {
                                                echo '<strong>PROSES</strong>';
                                            } elseif (($value['status_propo']) == 2) {
                                                echo '<strong>DITOLAK</strong>';
                                            } elseif (($value['status_propo']) == 3) {
                                                echo '<strong>DITERIMA</strong>';
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <?php if ($value['dekan_status'] != 0) {
                                                echo '<div class="badge badge-primary">Dekan</div>';
                                            } elseif (($value['wadek2_status']) != 0) {
                                                echo '<div class="badge badge-primary">Wadek 2</div>';
                                            } elseif (($value['wadek1_status']) != 0) {
                                                echo '<div class="badge badge-primary">Wadek 1</div>';
                                            } elseif (($value['kaprodis1_status']) != 0) {
                                                echo '<div class="badge badge-primary">Kaprodi</div>';
                                            } elseif (($value['tatausaha_status']) != 0) {
                                                echo '<div class="badge badge-primary">KTU</div>';
                                            } elseif (($value['sumberdaya_status']) != 0) {
                                                echo '<div class="badge badge-primary">Sumber Daya</div>';
                                            } elseif (($value['akademik_status']) != 0) {
                                                echo '<div class="badge badge-primary">Akademik</div>';
                                            } elseif (($value['bem_status']) != 0) {
                                                echo '<div class="badge badge-primary">BEM</div>';
                                            } elseif (($value['status_propo']) != 0) {
                                                echo '';
                                            }
                                            ?>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <div class="progress">
                                                <?php if ($value['dekan_status'] != 0) {
                                                    echo '<div class="progress-bar bg-success" role="progressbar" style="width:100%">100%</div>';
                                                } elseif (($value['wadek2_status']) != 0) {
                                                    echo '<div class="progress-bar bg-info" role="progressbar" style="width:80%">80%</div>';
                                                } elseif (($value['wadek1_status']) != 0) {
                                                    echo '<div class="progress-bar bg-info" role="progressbar" style="width:70%">70%</div>';
                                                } elseif (($value['kaprodis1_status']) != 0) {
                                                    echo '<div class="progress-bar bg-warning" role="progressbar" style="width:60%">60%</div>';
                                                } elseif (($value['tatausaha_status']) != 0) {
                                                    echo '<div class="progress-bar bg-warning" role="progressbar" style="width:50%">50%</div>';
                                                } elseif (($value['sumberdaya_status']) != 0) {
                                                    echo '<div class="progress-bar bg-warning" role="progressbar" style="width:40%">40%</div>';
                                                } elseif (($value['akademik_status']) != 0) {
                                                    echo '<div class="progress-bar bg-danger" role="progressbar" style="width:30%">30%</div>';
                                                } elseif (($value['bem_status']) != 0) {
                                                    echo '<div class="progress-bar bg-danger" role="progressbar" style="width:20%">20%</div>';
                                                } elseif (($value['status_propo']) != 0) {
                                                    echo '<div class="progress-bar bg-danger" role="progressbar" style="width:10%">10%</div>';
                                                }
                                                ?>

                                            </div>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <?php if ($value['status_propo'] == 0) {
                                                echo '
                                                        <a href="/Proposal/edit/' . $value['id_propo'] . '" class="btn btn-sm btn-icon btn-warning"><i class="fa fa-edit"></i></a>
                                                        
                                                        ';
                                            } elseif (($value['status_propo']) == 1) {
                                                echo '';
                                            } elseif (($value['status_propo']) == 2) {
                                                echo '
                                                        <button type="button" class="btn btn-sm  btn-icon btn-danger" data-toggle="modal" data-target="#delete' . $value['id_propo'] . '">
                                                        <i class="fa fa-trash"></i>
									                    </button>
                                                        ';
                                            } elseif (($value['status_propo']) == 3) {
                                                echo '';
                                            }
                                            ?>
                                            <a href="<?= base_url('proposal/detail/' . $value['id_propo']) ?>" class="btn btn-icon btn-sm  btn-info"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
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