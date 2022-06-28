<style>
    .media-body span {
        color: black;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Mahasiswa</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <a class="card" href=" <?= base_url('helpdesk/') ?>">
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
                <div class="col-xl-3 col-lg-6 col-12">
                    <a class="card" href="<?= base_url('proposal/') ?>">
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
                <div class="col-xl-3 col-lg-6 col-12">
                    <a class="card" href="<?= base_url('layananakademik/') ?>">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-graduation info font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3><u>Akademik</u></h3>
                                        <span>Layanan Akademik</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>