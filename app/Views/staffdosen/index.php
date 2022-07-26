<style>
    .media-body span {
        color: black;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <?php if (session()->get('jenispegawai') == 1) { ?>
            <!-- Jenis Pegawai 1 = Tenaga Pendidikan -->
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                    <h4 class="grey">Staff</h4>
                </div>
            </div>
            <hr class="mb-2 mt-0">
            <div class="content-body">
                <div class="row">
                    <?php if (session()->get('helpdesk') == 1) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <a class="card" href="<?= base_url('staffdosen/helpdesk/') ?>">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-bubbles info font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Helpdesk</u></h3>
                                                <span>Solusi Permasalahan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } elseif (session()->get('helpdesk') == 0) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-bubbles light font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Helpdesk</u></h3>
                                                <span>Solusi Permasalahan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Proposal -->
                    <?php if (session()->get('proposal') == 1) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <a class="card" href="<?= base_url('proposals/') ?>">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-book-open info font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Proposal</u></h3>
                                                <span>Pengajuan Proposal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } elseif (session()->get('proposal') == 0) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-book-open light font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Proposal</u></h3>
                                                <span>Pengajuan Proposal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Survey -->
                    <?php if (session()->get('survey') == 1) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <a class="card" href="<?= base_url('/staffdosen/survey/surveydosen') ?>">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-list info font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Survey</u></h3>
                                                <span>Evaluasi Kinerja</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } elseif (session()->get('survey') == 0) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-list light font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Survey</u></h3>
                                                <span>Evaluasi Kinerja</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-graduation light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Akademik</u></h3>
                                            <span>Layanan Akademik</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <a class="card" href="<?= base_url('pengajuansk/') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Pengajuan SK</u></h3>
                                            <span>SK Rektor & Dekan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Drive File SKP</u></h3>
                                            <span>Deskripsi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Drive File IKU</u></h3>
                                            <span>Deskripsi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-support light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Sumber Daya</u></h3>
                                            <span>Layanan Sumber Daya</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>E-Surat Tugas</u></h3>
                                            <span>Deskripsi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif (session()->get('jenispegawai') == 2) { ?>
            <!-- Jenis Pegawai 2 = Tenaga Dosen -->
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                    <h4 class="grey">Dosen</h4>
                </div>
            </div>
            <hr class="mb-2 mt-0">
            <div class="content-body">
            </div>
        <?php } elseif (session()->get('jenispegawai') == 3) { ?>
            <!-- Jenis Pegawai 2 = Tenaga Dosen & Tenaga Pendidikan -->
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                    <h4 class="grey">Dosen & Tenaga Pendidikan</h4>
                </div>
            </div>
            <hr class="mb-2 mt-0">
            <div class="content-body">
                <div class="row">
                    <!-- Helpdesk -->
                    <?php if (session()->get('helpdesk') == 1) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <a class="card" href="<?= base_url('staffdosen/helpdesk/') ?>">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-bubbles info font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Helpdesk</u></h3>
                                                <span>Solusi Permasalahan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } elseif (session()->get('helpdesk') == 0) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-bubbles light font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Helpdesk</u></h3>
                                                <span>Solusi Permasalahan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Proposal -->
                    <?php if (session()->get('proposal') == 1) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <a class="card" href="<?= base_url('proposals/') ?>">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-book-open info font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Proposal</u></h3>
                                                <span>Pengajuan Proposal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } elseif (session()->get('proposal') == 0) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-book-open light font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Proposal</u></h3>
                                                <span>Pengajuan Proposal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Survey -->
                    <?php if (session()->get('survey') == 1) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <a class="card" href="#">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-list info font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Survey</u></h3>
                                                <span>Evaluasi Kinerja</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } elseif (session()->get('survey') == 0) { ?>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media d-flex">
                                            <div class="align-self-center">
                                                <i class="icon-list light font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body text-right">
                                                <h3><u>Survey</u></h3>
                                                <span>Evaluasi Kinerja</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-graduation light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Akademik</u></h3>
                                            <span>Layanan Akademik</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <a class="card" href="<?= base_url('pengajuansk/') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Pengajuan SK</u></h3>
                                            <span>SK Rektor & Dekan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Drive File SKP</u></h3>
                                            <span>Deskripsi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Drive File IKU</u></h3>
                                            <span>Deskripsi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-support light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Sumber Daya</u></h3>
                                            <span>Layanan Sumber Daya</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc light font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>E-Surat Tugas</u></h3>
                                            <span>Deskripsi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>