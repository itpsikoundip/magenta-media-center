<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="mb-0 d-inline-block"><?= $title ?></h3>
            </div>
        </div>
        <a href="<?= base_url('proposal') ?>" type="button" class="mr-1 mb-1 btn btn-outline-secondary btn-min-width"><i class="fa fa-long-arrow-left"></i> Kembali</a>
        <div class="content-body">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status Proposal</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
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
                                        <?php
                                        foreach ($detailProposal as $key => $value) { ?>
                                            <tr>
                                                <td>BEM</td>
                                                <td>
                                                    <?php if ($value['bem_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['bem_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</button>';
                                                    } elseif (($value['bem_status']) == 2) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    } elseif (($value['bem_status']) == 3) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Akademik</td>
                                                <td>
                                                    <?php if ($value['akademik_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['akademik_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</button>';
                                                    } elseif (($value['akademik_status']) == 2) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    } elseif (($value['akademik_status']) == 3) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sumber Daya</td>
                                                <td>
                                                    <?php if ($value['sumberdaya_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['sumberdaya_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</button>';
                                                    } elseif (($value['sumberdaya_status']) == 2) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    } elseif (($value['sumberdaya_status']) == 3) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>KTU</td>
                                                <td>
                                                    <?php if ($value['ktu_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['ktu_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</button>';
                                                    } elseif (($value['ktu_status']) == 2) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    } elseif (($value['ktu_status']) == 3) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kaprodi</td>
                                                <td>
                                                    <?php if ($value['kaprodi_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['kaprodi_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</button>';
                                                    } elseif (($value['kaprodi_status']) == 2) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    } elseif (($value['kaprodi_status']) == 3) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Wadek 1</td>
                                                <td>
                                                    <?php if ($value['wadek1_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['wadek1_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</button>';
                                                    } elseif (($value['wadek1_status']) == 2) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    } elseif (($value['wadek1_status']) == 3) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Wadek 2</td>
                                                <td>
                                                    <?php if ($value['wadek2_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['wadek2_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</button>';
                                                    } elseif (($value['wadek2_status']) == 2) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    } elseif (($value['wadek2_status']) == 3) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dekan</td>
                                                <td>
                                                    <?php if ($value['dekan_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['dekan_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</button>';
                                                    } elseif (($value['dekan_status']) == 2) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    } elseif (($value['dekan_status']) == 3) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">File Proposal</h4>
                            <br>
                            <?php
                            foreach ($detailProposal as $key => $value) { ?>
                                <a href="<?= base_url('uploadproposal/' . $value['upload_proposal']) ?>" target="_blank" class="mr-1 mb-1 btn btn-info btn-min-width"><i class="fa fa-eye"></i> Lihat</a>
                                <a href="<?= base_url('uploadproposal/' . $value['upload_proposal']) ?>" download="<?= $value['id_propo']  ?>_<?= $value['upload_proposal']  ?>" class="mr-1 mb-1 btn btn-secondary btn-min-width"><i class="fa fa-download"></i> Download</a>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informasi Proposal</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <?php
                                    foreach ($detailProposal as $key => $value) { ?>
                                        <tr>
                                            <th scope="row" class="width-200">Judul / Nama Proposal</th>
                                            <td>: <?= $value['judul_propo']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Jenis Proposal</th>
                                            <td>: <?= $value['nama_jenis']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nama Kegiatan</th>
                                            <td>: <?= $value['nama_keg']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tahun Anggaran</th>
                                            <td>: <?= $value['tahun_anggaran']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Organisasi / Lembaga</th>
                                            <td>: <?= $value['organisasi_lembaga']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Ketua / Penanggung Jawab</th>
                                            <td>: <?= $value['penanggung_jawab']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Nomor HP Akif</th>
                                            <td>: <?= $value['no_hp']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal Mulai & Selesai</th>
                                            <td>: <?= $value['tanggal_mulai']  ?> s.d. <?= $value['tanggal_selesai']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Lokasi</th>
                                            <td>: <?= $value['lokasi']  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total Anggaran</th>
                                            <td>: Rp<?= rupiah($value['total_anggaran'])  ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tentang Proposal</th>
                                            <td>
                                                <div class="form-group">
                                                    <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="3" name="tentangProposal" readonly><?= $value['tentang_propo']  ?></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Tanggal & Waktu Pengajuan</th>
                                            <td>: <?= $value['created_at']  ?></td>
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
</div>

<script>
    $(document).ready(function() {
        $('#tbl_datapengajuanmodul').DataTable({});
    });
</script>