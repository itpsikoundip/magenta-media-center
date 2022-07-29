<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('staffdosen') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
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

            <?php
            if (session()->getFlashdata('error')) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('error');
                echo '</div>';
            }
            if (session()->getFlashdata('sukses')) {
                echo '<div class="alert alert-success" role="alert">';
                echo session()->getFlashdata('sukses');
                echo '</div>';
            }
            ?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-underline">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">List FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Tambahkan FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Tiket Terjawab</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab4" data-toggle="tab" aria-controls="tab4" href="#tab4" aria-expanded="false">Tiket Belum Terjawab</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                        <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                                            <div class="card collapse-icon panel mb-0 box-shadow-0 border-0">
                                                <?php 
                                                $i = 1;
                                                // dd($faqs);
                                                foreach($faqs as $faq){
                                                ?>

                                                <div id="heading<?php echo $i ?>" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                    <a data-toggle="collapse" data-parent="#accordion<?php echo $i ?>" href="#accordion<?php echo $i ?>" aria-expanded="false" aria-controls="accordion<?php echo $i ?>" class="h6 blue collapsed">
                                                        <b><?php echo $faq->pertanyaan?></b>
                                                    </a>
                                                </div>
                                                <div id="accordion<?php echo $i ?>" role="tabpanel" aria-labelledby="heading<?php echo $i ?>" class="collapse" aria-expanded="false">
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            <?php echo $faq->jawaban?>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button class="btn btn-outline-danger btn-sm mr-1" data-toggle="modal" data-target="#konfirmasiHapus<?php echo $i ?>">
                                                            Hapus
                                                        </button>
                                                        <a href="" class="btn btn-outline-secondary btn-sm">
                                                            Edit
                                                        </a>
                                                    </div>

                                                    <div class="modal fade" id="konfirmasiHapus<?php echo $i ?>" tabindex="-1" aria-labelledby="konfirmasiHapus<?php echo $i ?>" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                            <div class="modal-header bg-danger">
                                                                <h5 class="modal-title text-white" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah Anda yakin akan menghapus FAQ tersebut? FAQ yang dihapus tidak dapat dibaca lagi oleh mahasiswa.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a class="btn btn-outline-danger" href="<?= base_url('staffdosen/helpdesk/deletefaq/' . $faq->id) ?>" role="button">Hapus</a>
                                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Kembali</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                                <?php
                                                $i++;
                                                } 
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                        <form class="form form-horizontal" action="<?= base_url('staffdosen/helpdesk/addfaq/') ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                            <div class="form-body">
                                                <div class="form-group row">
                                                    <label class="col-md-2 label-control" for="inputPertanyaan"><b>Pertanyaan</b></label>
                                                    <div class="col-md-10">
                                                        <input id="inputPertanyaan" name="inputPertanyaan" class="form-control" placeholder="Pertanyaan/permasalahan">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-2 label-control" for="inputJawaban"><b>Jawaban</b></label>
                                                    <div class="col-md-10">
                                                        <textarea id="inputJawaban" name="inputJawaban" rows="5" class="form-control" placeholder="Jawaban detail"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions justify-content-end">
                                                <div class="d-flex justify-content-end"> 
                                                    <p><i>Pertanyaan dan jawaban yang ditambahkan akan muncul pada list FAQ <?php echo strtolower($kategori) ?> dan dapat dibaca oleh semua mahasiswa</i></p>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary">
                                                        Tambahkan
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                                        <p><i>Tiket yang ditampilkan hanyalah tiket dengan topik <?php echo strtolower($kategori) ?></i></p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tanggal Tiket</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>NIM</th>
                                                        <!-- <th>E-Mail</th>
                                                        <th>Topik</th> -->
                                                        <th>Ringkasan / Subjek</th>
                                                        <!-- <th>Status Tiket</th> -->
                                                        <th>Detail</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($tiketTerjawab as $tiket){
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $tiket->id ?></th>
                                                        <td><?php echo date("d M Y, H:i", strtotime($tiket->created_at)) ?></td>
                                                        <td><?php echo $tiket->nama ?></td>
                                                        <td><?php echo $tiket->mahasiswa_id ?></td>
                                                        <td><?php echo $tiket->subjek ?></td>
                                                        <td><?php echo $tiket->detail ?></td>
                                                        <td><a href="<?= base_url('staffdosen/helpdesk/detailtiket/' . $tiket->id) ?>" class="btn btn-outline-info btn-sm">Lihat</a></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab4" aria-labelledby="base-tab4">
                                        <p><i>Tiket yang ditampilkan hanyalah tiket dengan topik <?php echo strtolower($kategori) ?></i></p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tanggal Tiket</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>NIM</th>
                                                        <th>Ringkasan / Subjek</th>
                                                        <th>Detail</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($tiketBelumTerjawab as $tiket){
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $tiket->id ?></th>
                                                        <td><?php echo date("d M Y, H:i", strtotime($tiket->created_at)) ?></td>
                                                        <td><?php echo $tiket->nama ?></td>
                                                        <td><?php echo $tiket->mahasiswa_id ?></td>
                                                        <td><?php echo $tiket->subjek ?></td>
                                                        <td><?php echo $tiket->detail ?></td>
                                                        <td><a href="<?= base_url('staffdosen/helpdesk/detailtiket/' . $tiket->id) ?>" class="btn btn-outline-info btn-sm">Lihat</a></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
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