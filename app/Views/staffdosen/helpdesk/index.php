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
                                <ul class="nav nav-tabs">
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
                                                <div role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                    <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion12" aria-expanded="false" aria-controls="accordion12" class="h6 blue collapsed">Bagaimana prosedur untuk mengajukan banding UKT?</a>
                                                </div>
                                                <div id="accordion12" role="tabpanel" aria-labelledby="heading12" class="collapse" aria-expanded="false">
                                                    <div class="card-body">
                                                        <p class="card-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                                                    </div>
                                                </div>
                                                <div id="heading13" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                    <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion13" aria-expanded="false" aria-controls="accordion13" class="h6 blue collapsed">Kapan batas waktu mengajukan pembatalan SKS semester genap?</a>
                                                </div>
                                                <div id="accordion13" role="tabpanel" aria-labelledby="heading13" class="collapse" aria-expanded="false">
                                                    <div class="card-body">
                                                        <p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                                                    </div>
                                                </div>
                                                <div id="heading14" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                    <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion14" aria-expanded="false" aria-controls="accordion14" class="h6 blue collapsed">Apakah Fakultas Psikologi akan membangun kantin?</a>
                                                </div>
                                                <div id="accordion14" role="tabpanel" aria-labelledby="heading14" class="card-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                    <div class="card-body">
                                                        <p class="card-text">Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée candy canes carrot cake chupa chups danish cake sugar plum candy.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                        <form class="form form-horizontal" action="helpdeskstaffdosen/addFAQ" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                            <div class="form-body">
                                                <!-- <h4 class="form-section"><i class="ft-user"></i> Formulir Tiket</h4> -->
                                                <div class="form-group row">
                                                    <label class="col-md-2 label-control" for="inputTopik"><b>Topik</b></label>
                                                    <div class="col-md-10">
                                                        <select id="inputTopik" name="inputTopik" class="form-control">
                                                            <option value="0">--Pilih Topik--</option>
                                                            <option value="1">Akademik</option>
                                                            <option value="2">Non-Akademik</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-2 label-control" for="inputPertanyaan"><b>Pertanyaan</b></label>
                                                    <div class="col-md-10">
                                                        <input id="inputSubjek" name="inputPertanyaan" class="form-control" placeholder="Pertanyaan/permasalahan">
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
                                                    <p><i>Pertanyaan dan jawaban yang ditambahkan akan muncul pada list FAQ dan dapat dibaca oleh semua mahasiswa</i></p>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-check-square-o"></i> Tambahkan
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
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
                                                        <td><a href="<?= base_url('helpdeskstaffdosen/detail_tiket/' . $tiket->id) ?>" class="btn btn-outline-info">Lihat</a></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab4" aria-labelledby="base-tab4">
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
                                                        <td><a href="<?= base_url('helpdeskstaffdosen/detail_tiket/' . $tiket->id) ?>" class="btn btn-outline-info">Lihat</a></td>
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