<div class="app-content content">
    <div class="content-wrapper">
        <a href="<?= base_url('admin/fitur/proposal/data') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?> <?= $detailProposal['judul_propo'] ?></h3>
            </div>
            <!-- <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings mr-1"></i>Action</button>
                    <div class="dropdown-menu arrow">
                        <a class="dropdown-item" href="< = base_url('AdminProposalData/edit/' . $detailProposal['id_propo']) ?>"><i class="fa fa-edit mr-1"></i> Edit</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-print mr-1"></i> Print</a>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item" data-toggle="modal" data-target="#delete< = $detailProposal['id_propo'] ?>"><i class=" fa fa-trash mr-1"></i> Delete</button>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Informasi Proposal</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="width-200">Judul / Nama Proposal</th>
                                        <td>: <?= $detailProposal['judul_propo']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Proposal</th>
                                        <td>: <?= $detailProposal['jenis_propo']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Kegiatan</th>
                                        <td>: <?= $detailProposal['nama_keg']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pendidikan</th>
                                        <td>: <?= $detailProposal['jenispendidikan_propo']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tahun Anggaran</th>
                                        <td>: <?= $detailProposal['tahun_anggaran']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Organisasi / Lembaga</th>
                                        <td>: <?= $detailProposal['organisasi_lembaga']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ketua / Penanggung Jawab</th>
                                        <td>: <?= $detailProposal['penanggung_jawab']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor HP Akif</th>
                                        <td>: <?= $detailProposal['no_hp']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Mulai & Selesai</th>
                                        <td>: <?= $detailProposal['tanggal_mulai']  ?> s.d. <?= $detailProposal['tanggal_selesai']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lokasi</th>
                                        <td>: <?= $detailProposal['lokasi']  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total Anggaran</th>
                                        <td>: Rp<?= rupiah($detailProposal['total_anggaran'])  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tentang Proposal</th>
                                        <td>
                                            <div class="form-group">
                                                <textarea class="form-control textarea-maxlength" placeholder="Deskripsi Singkat Proposal" maxlength="500" rows="3" name="tentangProposal" readonly><?= $detailProposal['tentang_propo']  ?></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal & Waktu Pengajuan</th>
                                        <td>: <?= $detailProposal['created_at']  ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-3">
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
                                        <tr>
                                            <td>BEM</td>
                                            <td>
                                                <?php if ($detailProposal['bem_status'] == 0) {
                                                    echo '<div class="badge badge-info">Diproses</div>';
                                                } elseif (($detailProposal['bem_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailProposal['bem_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailProposal['bem_status']) == 3) {
                                                    echo '<div class="badge badge-success">Diterima</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Akademik</td>
                                            <td>
                                                <?php if ($detailProposal['akademik_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailProposal['akademik_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailProposal['akademik_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailProposal['akademik_status']) == 3) {
                                                    echo '<div class="badge badge-success">Diterima</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sumber Daya</td>
                                            <td>
                                                <?php if ($detailProposal['sumberdaya_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailProposal['sumberdaya_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailProposal['sumberdaya_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailProposal['sumberdaya_status']) == 3) {
                                                    echo '<div class="badge badge-success">Diterima</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tata Usaha</td>
                                            <td>
                                                <?php if ($detailProposal['tatausaha_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailProposal['tatausaha_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailProposal['tatausaha_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailProposal['tatausaha_status']) == 3) {
                                                    echo '<div class="badge badge-success">Diterima</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php if ($detailProposal['jenispendidikan_propo'] == 'S1') { ?>
                                            <tr>
                                                <td>Kaprodi S1</td>
                                                <td>
                                                    <?php if ($detailProposal['kaprodis1_status'] == 0) {
                                                        echo '';
                                                    } elseif (($detailProposal['kaprodis1_status']) == 1) {
                                                        echo '<div class="badge badge-danger">Ditolak</div>';
                                                    } elseif (($detailProposal['kaprodis1_status']) == 2) {
                                                        echo '<div class="badge badge-warning">Perbaikan</div>';
                                                    } elseif (($detailProposal['kaprodis1_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } elseif ($detailProposal['jenispendidikan_propo'] == 'S2') { ?>
                                            <tr>
                                                <td>Kaprodi S2</td>
                                                <td>
                                                    <?php if ($detailProposal['kaprodis2_status'] == 0) {
                                                        echo '';
                                                    } elseif (($detailProposal['kaprodis2_status']) == 1) {
                                                        echo '<div class="badge badge-danger">Ditolak</div>';
                                                    } elseif (($detailProposal['kaprodis2_status']) == 2) {
                                                        echo '<div class="badge badge-warning">Perbaikan</div>';
                                                    } elseif (($detailProposal['kaprodis2_status']) == 3) {
                                                        echo '<div class="badge badge-success">Diterima</div>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td>Wadek Akem</td>
                                            <td>
                                                <?php if ($detailProposal['wadekakem_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailProposal['wadekakem_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailProposal['wadekakem_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailProposal['wadekakem_status']) == 3) {
                                                    echo '<div class="badge badge-success">Diterima</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wadek Sumda</td>
                                            <td>
                                                <?php if ($detailProposal['wadeksumda_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailProposal['wadeksumda_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailProposal['wadeksumda_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailProposal['wadeksumda_status']) == 3) {
                                                    echo '<div class="badge badge-success">Diterima</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dekan</td>
                                            <td>
                                                <?php if ($detailProposal['dekan_status'] == 0) {
                                                    echo '';
                                                } elseif (($detailProposal['dekan_status']) == 1) {
                                                    echo '<div class="badge badge-danger">Ditolak</div>';
                                                } elseif (($detailProposal['dekan_status']) == 2) {
                                                    echo '<div class="badge badge-warning">Perbaikan</div>';
                                                } elseif (($detailProposal['dekan_status']) == 3) {
                                                    echo '<div class="badge badge-success">Diterima</div>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header text-center">
                            <h4 class="card-title">File Proposal</h4>
                            <br>
                            <a href="<?= base_url('uploadproposal/' . $detailProposal['upload_proposal']) ?>" target="_blank" class="mr-1 mb-1 btn btn-info btn-min-width"><i class="fa fa-eye"></i> Lihat</a>
                            <a href="<?= base_url('uploadproposal/' . $detailProposal['upload_proposal']) ?>" download="<?= $detailProposal['id_propo']  ?>_<?= $detailProposal['upload_proposal']  ?>" class="mr-1 mb-1 btn btn-secondary btn-min-width"><i class="fa fa-download"></i> Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Catatan/Revisi</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="width:25%">Posisi</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>BEM</strong></td>
                                            <td><?= $detailProposal['bem_note']  ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Akademik</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteAkademik as $key => $a) { ?>
                                                        <?= $a['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['akademik_updatetime']  ?></i></small>
                                            </td>
                                            <td><small><?= $detailProposal['akademik_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Sumber Daya</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteSumda as $key => $b) { ?>
                                                        <?= $b['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['sumberdaya_updatetime']  ?></i></td></small>
                                            <td><small><?= $detailProposal['sumberdaya_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Tata Usaha</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteTataUsaha as $key => $b) { ?>
                                                        <?= $b['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['tatausaha_updatetime']  ?></i></small></td>
                                            <td><small><?= $detailProposal['tatausaha_note']  ?></small></td>
                                        </tr>
                                        <?php if ($detailProposal['jenispendidikan_propo'] == 'S1') { ?>
                                            <tr>
                                                <td><strong>Kaprodi S1</strong><small><br>
                                                        <?php
                                                        foreach ($detailProposalNoteKaprodiS1 as $key => $c) { ?>
                                                            <?= $c['nama']  ?>
                                                        <?php  } ?>
                                                        <i><?= $detailProposal['kaprodis1_updatetime']  ?></i></small></td>
                                                <td><small><?= $detailProposal['kaprodis1_note']  ?></small></td>
                                            </tr>
                                        <?php } elseif ($detailProposal['jenispendidikan_propo'] == 'S2') { ?>
                                            <tr>
                                                <td><strong>Kaprodi S2</strong><small><br>
                                                        <?php
                                                        foreach ($detailProposalNoteKaprodiS2 as $key => $g) { ?>
                                                            <?= $g['nama']  ?>
                                                        <?php  } ?>
                                                        <i><?= $detailProposal['kaprodis2_updatetime']  ?></i></small></td>
                                                <td><small><?= $detailProposal['kaprodis2_note']  ?></small></td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <td><strong>Wadek Akem</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteWadekAkem as $key => $d) { ?>
                                                        <?= $d['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['wadekakem_updatetime']  ?></i></small></td>
                                            <td><small><?= $detailProposal['wadekakem_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Wadek Sumda</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteWadekSumda as $key => $e) { ?>
                                                        <?= $e['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['wadeksumda_updatetime']  ?></i></small></td>
                                            <td><small><?= $detailProposal['wadeksumda_note']  ?></small></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Dekan</strong><small><br>
                                                    <?php
                                                    foreach ($detailProposalNoteDekan as $key => $f) { ?>
                                                        <?= $f['nama']  ?>
                                                    <?php  } ?>
                                                    <i><?= $detailProposal['dekan_updatetime']  ?></i></small></td>
                                            <td><small><?= $detailProposal['dekan_note']  ?></small></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade text-left" id="delete<?= $detailProposal['id_propo']  ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                <p class="text-center">Menghapus Proposal <strong><?= $detailProposal['judul_propo']  ?></strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                <a href="<?= base_url('AdminProposalData/delete/' . $detailProposal['id_propo']) ?>" class="btn btn-outline-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
<!-- End OF Modal Hapus -->