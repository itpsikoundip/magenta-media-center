<style>
    .media-body span {
        color: black;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('ormawa') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Ormawa <?php echo session()->namaormawa ?></h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <?php if (session()->get('idormawa') == 2) { ?>
                    <div class="col-xl-12 col-lg-12 col-12">
                        <a class="card" href="<?= base_url('ormawa/proposal/data') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-list info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Data</u></h3>
                                            <span>Data Proposal Diajukan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="col-xl-6 col-lg-6 col-12">
                        <a class="card" href="<?= base_url('ormawa/proposal/add') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-pencil info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Pengajuan</u></h3>
                                            <span>Formulir Pengajuan Proposal</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12">
                        <a class="card" href="<?= base_url('ormawa/proposal/data') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-list info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>Data</u></h3>
                                            <span>Data Proposal Diajukan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>