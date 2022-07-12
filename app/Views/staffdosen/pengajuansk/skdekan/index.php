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
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Unit/Divisi : <?= session()->get('namaunit') ?></h4>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <a href="<?= base_url('PengajuanSKDekan/add') ?>" class="btn btn-info btn-min-width"><i class="fa fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
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
                                        foreach ($dataSKDekanPengaju as $key => $value) { ?>
                                            <tr>
                                            <tr>
                                                <td><?= $value['judul_sk']  ?></td>
                                                <td><?= $value['tanggal_pembuatan']  ?></td>
                                                <td>status</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>