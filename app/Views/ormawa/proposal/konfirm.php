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
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Isi File Proposal</h4>
                        </div>
                        <?php
                        foreach ($detailProposal as $key => $value) { ?>
                            <iframe src="<?= base_url('uploadproposal/' . $value['upload_proposal']) ?>" frameborder="0" height="1000px" width="auto">
                            </iframe>
                        <?php  } ?>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Catatan Revisi / Perbaikan</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            foreach ($detailProposal as $key => $value) { ?>
                                <?php
                                echo form_open('ormawa/proposal/editdatabemcatatan/' . $value['id_propo']);
                                ?>
                                <fieldset class="form-group">
                                    <textarea class="form-control" name="addCatatanRevisiPerbaikan" rows="3" placeholder="Isi jika ada catatan revisi / perbaikan (opsional)"><?= $value['bem_note']  ?></textarea>
                                </fieldset>
                                <input type="hidden" name="userID" value="<?= session()->get('nim') ?>">
                                <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                <?php echo form_close() ?>
                            <?php  } ?>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Status Proposal</h4>
                        </div>
                        <div class="card-body">
                            <?php
                            echo form_open('ormawa/proposal/editbemstatus/' . $value['id_propo']);
                            ?>
                            <div class="alert alert-info mb-2" role="alert">
                                Status saat ini :
                                <strong>
                                    <?php if ($value['bem_status'] == 0) {
                                        echo 'Belum ada status';
                                    } elseif (($value['bem_status']) == 1) {
                                        echo 'Ditolak';
                                    } elseif (($value['bem_status']) == 2) {
                                        echo 'Perbaikan';
                                    } elseif (($value['bem_status']) == 3) {
                                        echo 'Disetujui';
                                    }
                                    ?>
                                </strong>
                            </div>
                            <fieldset class="form-group">
                                <select class="form-control" name="statusPropo">
                                    <option hidden>-- Pilih Status Proposal --</option>
                                    <option value="3">Disetujui</option>
                                    <option value="2">Perbaikan</option>
                                    <option value="1">Ditolak</option>
                                </select>
                            </fieldset>
                            <input type="hidden" name="userID" value="<?= session()->get('nim') ?>">
                            <input type="hidden" name="timeUpdated" value="<?= date('Y-m-d H:i:s'); ?>">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                            <?php echo form_close() ?>
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