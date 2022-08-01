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
        </div>
        <div class="content-body">
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="width:30%">Judul SK</th>
                                                <th style="width:5%; text-align: center;">Tanggal Pembuatan</th>
                                                <th style="width:20%; text-align: center;">TMT Kegiatan</th>
                                                <th style="width:15%; text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($allDataSKRektor as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['judul_sk']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['tanggal_pembuatan']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;"><?= $value['tmt_kegiatan']  ?></td>
                                                    <td style="text-align: center; vertical-align: middle;">
                                                        <!-- <a href="" class="btn btn-info mr-1 mb-1"><i class="ft-eye"></i> Lihat</a> -->
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width:30%">Judul SK</th>
                                                <th style="width:5%; text-align: center;">Tanggal Pembuatan</th>
                                                <th style="width:20%; text-align: center;">TMT Kegiatan</th>
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