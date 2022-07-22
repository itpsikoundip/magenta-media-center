<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('helpdeskstaffdosen') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Staff & Dosen</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pencil info font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>278</h3>
                                        <span>Total Tiket</span>
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
                                        <i class="icon-speech warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>156</h3>
                                        <span>Tiket Selesai</span>
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
                                        <i class="icon-graph success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>64</h3>
                                        <span>Tiket Belum Selesai</span>
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
                                        <i class="icon-pointer danger font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>423</h3>
                                        <span>Kepuasan</span>
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
                                <div class="tab-content px-1 pt-1">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <form class="form form-horizontal" action="<?= base_url('staffdosen/helpdesk/jawabtiket/'.$tiket[0]->id) ?>" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                                <div class="card">
                                                    <div class="card-content">
                                                        <h4 class="card-title">Mahasiswa Penanya</h4>
                                                        <div class="table-responsive mb-2">
                                                            <table class="table">
                                                                <tr>
                                                                    <th scope="row">Nama</th>
                                                                    <td><?php echo $tiket[0]->nama ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">NIM</th>
                                                                    <td><?php echo $tiket[0]->nim ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td><?php echo $tiket[0]->email ?></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <h4 class="card-title">Tiket</h4>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">ID</th>
                                                                        <td><?php echo $tiket[0]->id ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Tanggal</th>
                                                                        <td><?php echo date("d M Y, H:i", strtotime($tiket[0]->created_at)) ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Subjek</th>
                                                                        <td>
                                                                        <?php echo $tiket[0]->subjek ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Detail</th>
                                                                        <td>
                                                                        <?php echo $tiket[0]->detail ?>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">Jawaban</th>        
                                                                        <td>
                                                                            <textarea id="inputJawaban" name="inputJawaban" rows="10" class="form-control" placeholder="Masukkan jawaban"><?php echo $tiket[0]->jawaban ?></textarea>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="d-flex justify-content-end">
                                                            <p><i>Perubahan pada jawaban akan disimpan dan dapat dibaca oleh mahasiswa penanya</i></p>
                                                        </div>
                                                        <div class="d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary">
                                                                Simpan
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-4 d-flex justify-content-center align-items-center" style="border-left: 1px solid #cfd8dc"">
                                            <div class="card">
                                                <div class="card-content">
                                                <?php 
                                                if($tiket[0]->lampiran == NULL) {?>
                                                    <p>Tidak ada lampiran</p>
                                                <?php
                                                } else {
                                                ?>                                                                      
                                                    <img class="card-img-top img-fluid" src="<?php echo base_url('lampiran-helpdesk/'.$tiket[0]->lampiran)?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title"><?php echo $tiket[0]->lampiran ?></h4>
                                                        <a href="<?php echo base_url('lampiran-helpdesk/'.$tiket[0]->lampiran)?>" class="btn btn-outline-secondary" target="blank">Lihat File</a>
                                                    </div>
                                                <?php
                                                }
                                                ?>
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
        </div>
    </div>
</div>