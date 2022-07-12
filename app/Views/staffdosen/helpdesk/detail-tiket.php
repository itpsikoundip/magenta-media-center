<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
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
                                            <div class="card">
                                                <div class="card-content">
                                                    <h4 class="card-title">ID Tiket: <?php echo $tiket['id'] ?></h4>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Tanggal</th>
                                                                    <td><?php echo date("d M Y, H:i", strtotime($tiket['created_at'])) ?></td>
                                                                </tr>
                                                                <!-- <tr>
                                                                    <th scope="row">Topik</th>
                                                                    <td>
                                                                        <?php
                                                                        // if($riwayat->topik_id == 1) echo 'Akademik'; 
                                                                        // elseif($riwayat->topik_id == 2) echo 'Non-akademik';
                                                                        ?>
                                                                    </td>
                                                                </tr> -->
                                                                <tr>
                                                                    <th scope="row">Detail</th>
                                                                    <td>
                                                                    <?php echo $tiket['detail'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Jawaban</th>
                                                                    <td>
                                                                    <?php echo $tiket['jawaban'] ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 d-flex justify-content-center align-items-center" style="border-left: 1px solid #cfd8dc"">
                                            <div class="card">
                                                <div class="card-content">
                                                <?php 
                                                if($tiket['lampiran'] == NULL) {?>
                                                    <p>Tidak ada lampiran</p>
                                                <?php
                                                } else {
                                                ?>                                                                      
                                                    <img class="card-img-top img-fluid" src="<?php echo base_url('lampiran-helpdesk/'.$tiket['lampiran'])?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h4 class="card-title"><?php echo $tiket['lampiran'] ?></h4>
                                                        <a href="<?php echo base_url('lampiran-helpdesk/'.$tiket['lampiran'])?>" class="btn btn-outline-secondary" target="blank">Lihat File</a>
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