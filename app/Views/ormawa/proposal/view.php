<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('ormawa/proposal/data') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
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
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status Proposal</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
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
                                                        echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                    } elseif (($value['bem_status']) == 2) {
                                                        echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</a>';
                                                    } elseif (($value['bem_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
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
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    } elseif (($value['akademik_status']) == 2) {
                                                        echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                    } elseif (($value['akademik_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
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
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    } elseif (($value['sumberdaya_status']) == 2) {
                                                        echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                    } elseif (($value['sumberdaya_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tata Usaha</td>
                                                <td>
                                                    <?php if ($value['tatausaha_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['tatausaha_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    } elseif (($value['tatausaha_status']) == 2) {
                                                        echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                    } elseif (($value['tatausaha_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php if ($value['jenispendidikan_propo'] == 1) { ?>
                                                <tr>
                                                    <td>Kaprodi S1</td>
                                                    <td>
                                                        <?php if ($value['kaprodis1_status'] == 0) {
                                                            echo '';
                                                        } elseif (($value['kaprodis1_status']) == 1) {
                                                            echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                        } elseif (($value['kaprodis1_status']) == 2) {
                                                            echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                        } elseif (($value['kaprodis1_status']) == 3) {
                                                            echo '<div class="badge badge-success">Diterima</div>';
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php } elseif ($value['jenispendidikan_propo'] == 2) { ?>
                                                <tr>
                                                    <td>Kaprodi S2</td>
                                                    <td>
                                                        <?php if ($value['kaprodis2_status'] == 0) {
                                                            echo '';
                                                        } elseif (($value['kaprodis2_status']) == 1) {
                                                            echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                        } elseif (($value['kaprodis2_status']) == 2) {
                                                            echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                        } elseif (($value['kaprodis2_status']) == 3) {
                                                            echo '<div class="badge badge-success">Diterima</div>';
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <tr>
                                                <td>Wadek Akem</td>
                                                <td>
                                                    <?php if ($value['wadekakem_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['wadekakem_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    } elseif (($value['wadekakem_status']) == 2) {
                                                        echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                    } elseif (($value['wadekakem_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Wadek Sumda</td>
                                                <td>
                                                    <?php if ($value['wadeksumda_status'] == 0) {
                                                        echo '';
                                                    } elseif (($value['wadeksumda_status']) == 1) {
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    } elseif (($value['wadeksumda_status']) == 2) {
                                                        echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                    } elseif (($value['wadeksumda_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
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
                                                        echo '<button type="button" class="btn btn-sm btn-danger"><i class="ft-alert-triangle"></i> Ditolak</button>';
                                                    } elseif (($value['dekan_status']) == 2) {
                                                        echo '<a href="ormawa/proposal/edit' . $value['id_propo'] . '" class="btn btn-sm btn-warning"><i class="ft-help-circle"></i> Perbaikan</a>';
                                                    } elseif (($value['dekan_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
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
                <div class="col-8">
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
                                            <th scope="row">Pendidikan</th>
                                            <td>: <?= $value['jenispendidikan_propo']  ?></td>
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