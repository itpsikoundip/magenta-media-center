<style>
    .media-body span {
        color: black;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
        <!-- Apabila Bukan User Operator -->
        <?php if (!isset($detailAksesUserOp['sk_jenis_op_id'])) { ?>
            <!-- Apabila User Operator -->
        <?php } elseif (isset($detailAksesUserOp['sk_jenis_op_id'])) { ?>
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                    <?php if ($detailAksesUserOp['sk_jenis_op_id'] == 1) { ?>
                        <h4 class="grey">Operator Akademik dan Kemahasiswaan</h4>
                    <?php } elseif ($detailAksesUserOp['sk_jenis_op_id'] == 2) { ?>
                        <h4 class="grey">Operator Sumber Daya</h4>
                    <?php } ?>
                </div>
            </div>
            <hr class="mb-2 mt-0">
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <a class="card" href="<?= base_url('staffdosen/sk/operator/rektor') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>SK Rektor</u></h3>
                                            <span>Pengajuan SK Rektor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12">
                        <a class="card" href="<?= base_url('staffdosen/sk/operator/dekan') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>SK Dekan</u></h3>
                                            <span>Pengajuan SK Dekan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- Apabila User Bukan Verifikator -->
        <?php if (!isset($detailAksesUserVerifikator['sk_jenis_verifikator_id'])) { ?>
            <!-- Apabila User Verifikator -->
        <?php } elseif (isset($detailAksesUserVerifikator['sk_jenis_verifikator_id'])) { ?>
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                    <?php if ($detailAksesUserVerifikator['sk_jenis_verifikator_id'] == 1) { ?>
                        <h4 class="grey">Verifikator Supervisor Akem</h4>
                    <?php } elseif ($detailAksesUserVerifikator['sk_jenis_verifikator_id'] == 2) { ?>
                        <h4 class="grey">Verifikator Supervisor Sumda</h4>
                    <?php } elseif ($detailAksesUserVerifikator['sk_jenis_verifikator_id'] == 3) { ?>
                        <h4 class="grey">Verifikator Manager TU</h4>
                    <?php } elseif ($detailAksesUserVerifikator['sk_jenis_verifikator_id'] == 4) { ?>
                        <h4 class="grey">Verifikator Wadek Akem</h4>
                    <?php } elseif ($detailAksesUserVerifikator['sk_jenis_verifikator_id'] == 5) { ?>
                        <h4 class="grey">Verifikator Wadek Sumda</h4>
                    <?php } elseif ($detailAksesUserVerifikator['sk_jenis_verifikator_id'] == 6) { ?>
                        <h4 class="grey">Verifikator Dekan</h4>
                    <?php } ?>
                </div>
            </div>
            <hr class="mb-2 mt-0">
            <div class="content-body">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <a class="card" href="<?= base_url('staffdosen/sk/verifikator/rektor') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>SK Rektor</u></h3>
                                            <span>Verifikasi Pengajuan SK Rektor</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12">
                        <a class="card" href="<?= base_url('staffdosen/sk/verifikator/dekan') ?>">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="icon-doc info font-large-2 float-left"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <h3><u>SK Dekan</u></h3>
                                            <span>Verifikasi Pengajuan SK Dekan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>