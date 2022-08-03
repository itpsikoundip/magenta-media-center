<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="mb-0 d-inline-block"><?= $title ?></h3>
            </div>
        </div>
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
        <div class="content-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-info rounded-left">
                                    <i class="icon-user font-large-2 text-white"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5>User Mahasiswa</h5>
                                    <h5 class="text-bold-400 mb-0"><?= $jmlAkunMahasiswa ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-danger rounded-left">
                                    <i class="icon-user font-large-2 text-white"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5>User Ormawa</h5>
                                    <h5 class="text-bold-400 mb-0"><?= $jmlAkunMahasiswaOrmawa ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-success rounded-left">
                                    <i class="icon-user font-large-2 text-white"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5>User Staff & Dosen</h5>
                                    <h5 class="text-bold-400 mb-0"><?= $jmlAkunStaffDosen ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="media align-items-stretch">
                                <div class="p-2 text-center bg-warning rounded-left">
                                    <i class="icon-user font-large-2 text-white"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5>User Eksternal</h5>
                                    <h5 class="text-bold-400 mb-0">-</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>