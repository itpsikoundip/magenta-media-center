<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('proposals') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
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
                <h2 class="mb-0 d-inline-block font-weight-bold"></h2>
                <h4 class="grey"></h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
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
                                            <td>: <?= $value['jenis_propo']  ?></td>
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