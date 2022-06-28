<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="mb-0 d-inline-block"><?= $title ?></h3>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tabel <?= $title ?></h4>
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
                            <div class="card-body card-dashboard">
                                <table id="tbl_datapengajuanmodul" class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Judul</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($dataJenisProposal as $key => $value) { ?>
                                            <tr>
                                                <td><?= $value['id_jenis']  ?></td>
                                                <td><?= $value['nama_jenis']  ?></td>
                                                <td>
                                                    <a href="<?= base_url('proposal/editJenis/' . $value['id_jenis']) ?>" class="btn btn-icon btn-success mr-1"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url('proposal/editJenis/' . $value['id_jenis']) ?>" class="btn btn-icon btn-danger mr-1"><i class="fa fa-trash"></i></a>
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
    </div>
</div>