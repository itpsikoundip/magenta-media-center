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
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?> User Operator</h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal"><i class="icon-plus mr-1"></i>Tambah</button>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="width:30%">Nama</th>
                                                <th style="width:5%; text-align: center;">NIP</th>
                                                <th style="width:20%; text-align: center;">Unit</th>
                                                <th style="width:15%; text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allDataUserOp as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nip']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['nama_jenis_op']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <button type="button" class="btn btn-success mr-1 mb-1" data-toggle="modal" data-target="#edit<?= $value['id_sk_dekan_user_op']  ?>"><i class="ft-edit"></i> Edit</button>
                                                        <button type="button" class="btn btn-danger mr-1 mb-1" data-toggle="modal" data-target="#delete<?= $value['id_sk_dekan_user_op']  ?>"><i class="ft-trash"></i> Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width:30%">Nama</th>
                                                <th style="width:5%; text-align: center;">NIP</th>
                                                <th style="width:20%; text-align: center;">Unit</th>
                                                <th style="width:15%; text-align: center;">Aksi</th>
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