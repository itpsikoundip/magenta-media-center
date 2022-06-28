<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
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
                    <div class="card bg-success">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-check text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataProposalStatus3 ?></h3>
                                        <span>Disetujui</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card bg-info">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-clock text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataProposalStatus1 ?></h3>
                                        <span>Proses</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card bg-warning">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-drawer text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataProposalStatus0 ?></h3>
                                        <span>Draft / Perbaikan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card bg-danger">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-ban text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataProposalStatus2 ?></h3>
                                        <span>Ditolak</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card bg-primary">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-briefcase text-white font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-white text-right">
                                        <h3 class="text-white"><?= $dataPosisi ?></h3>
                                        <span>Menunggu Persetujuan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-underline nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#MenungguPersetujuan" aria-expanded="true"><i class="icon-briefcase"></i> Menunggu Persetujuan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#Semua" aria-expanded="false"><i class="icon-layers"></i> Semua</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#Disetujui" aria-expanded="false"><i class="icon-check"></i> Disetujui</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#Proses" aria-expanded="false"><i class="icon-clock"></i> Proses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#DraftPerbaikan" aria-expanded="false"><i class="icon-drawer"></i> Draft/Perbaikan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#Ditolak" aria-expanded="false"><i class="icon-ban"></i> Ditolak</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="MenungguPersetujuan" aria-expanded="true">
                                        <table id="#" class="table">
                                            <thead>
                                                <tr style="text-align: center; vertical-align: middle;">
                                                    <th>Judul</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($allDataMenungguPersetujuanSession as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= $value['judul_propo']  ?></td>
                                                        <td>
                                                            <a href="<?= base_url('proposals/edit/' . $value['id_propo']) ?>" class="btn btn-icon btn-block btn-info"><i class="fa fa-edit"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php  } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="Semua" role="tabpanel" aria-expanded="false">
                                        <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie. Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit tiramisu.</p>
                                    </div>
                                    <div class="tab-pane" id="Disetujui" role="tabpanel" aria-expanded="false">
                                        <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                    </div>
                                    <div class="tab-pane" id="Proses" role="tabpanel" aria-expanded="false">
                                        <p>asCookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                    </div>
                                    <div class="tab-pane" id="DraftPerbaikan" role="tabpanel" aria-expanded="false">
                                        <p>asCookie icing tootsie dsaroll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                    </div>
                                    <div class="tab-pane" id="Ditolak" role="tabpanel" aria-expanded="false">
                                        <p>asCookie icing tootsiedsa dsaroll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>