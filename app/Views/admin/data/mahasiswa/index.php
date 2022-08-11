<div class="app-content content">
    <div class="content-wrapper">
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
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?></h3>
            </div>
            <!-- <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#inlineForm"><i class="icon-plus mr-1"></i>Tambah</button>
                </div>
            </div> -->
        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">

                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tahun Masuk</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($dataMahasiswa as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nim']  ?></td>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <?php if ($value['status'] == 1) {
                                                            echo 'Laki-Laki';
                                                        } elseif (($value['status']) == 2) {
                                                            echo 'Perempuan';
                                                        }
                                                        ?>
                                                    </td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['tahun_masuk']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <?php if ($value['status'] == 1) {
                                                            echo '<div class="badge badge-success">Aktif</div>';
                                                        } elseif (($value['status']) == 2) {
                                                            echo '<div class="badge badge-danger">Tidak Aktif</div>';
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
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>