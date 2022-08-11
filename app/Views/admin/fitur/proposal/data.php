<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?></h3>
            </div>
        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?= $title ?></h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="width:60%">Judul</th>
                                                <th style="width:5%; text-align: center;">Pendidikan</th>
                                                <th style="width:10%; text-align: center;">Organisasi / Lembaga</th>
                                                <th style="width:10%; text-align: center;">Waktu Pengajuan</th>
                                                <th style="width:5%; text-align: center;">Posisi</th>
                                                <th style="width:5%; text-align: center;">Status</th>
                                                <th style="width:5%; text-align: center;">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allDataProposal as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['judul_propo']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['jenispendidikan_propo']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nama_ormawa']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['created_at']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
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
                                                    <td style="text-align: center; vertical-align: middle;">
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
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <a href="<?= base_url('admin/fitur/proposal/data/detail/' . $value['id_propo']) ?>" class="btn btn-sm btn-info">Detail</a>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width:60%">Judul</th>
                                                <th style="width:5%; text-align: center;">Pendidikan</th>
                                                <th style="width:10%; text-align: center;">Organisasi / Lembaga</th>
                                                <th style="width:10%; text-align: center;">Waktu Pengajuan</th>
                                                <th style="width:5%; text-align: center;">Posisi</th>
                                                <th style="width:5%; text-align: center;">Status</th>
                                                <th style="width:5%; text-align: center;">Detail</th>
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