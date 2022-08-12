<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?></h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings mr-1"></i>Aksi</button>
                    <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-plus mr-1"></i> Tambah</a><a class="dropdown-item" href="#"><i class="fa fa-print mr-1"></i> Print</a>
                    </div>
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
                                    <table class="table table-striped table-bordered zero-configuration" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Jenis Pegawai</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($jenisPegawai as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['id_jenispegawai']  ?></td>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['nama_jenispegawai']  ?></td>
                                                    <td style="vertical-align: middle;">
                                                        <button type="button" class="btn btn-icon btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Hapus</a>
                                                        </div>
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