<style>
    .media-body span {
        color: black;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('helpdesk') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?> Helpdesk</h2>
                <h4 class="grey">Fakultas Psikologi Undip</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <?php
        if (session()->getFlashdata('error')) {
            echo '<div class="alert alert-danger"  role="alert">';
            echo session()->getFlashdata('error');
            echo '</div>';
        }
        if (session()->getFlashdata('sukses')) {
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('sukses');
            echo '</div>';
        }
        ?>
        <div class="content-header row">
            <div class="align-self-center col-md-7 col-12 mb-2">
                <!-- <h1 class="mb-2"><b>Pertanyaan/saran untuk<br>Fakultas Psikologi UNDIP</b></h1> -->
                <h4>Punya pertanyaan/saran untuk Fakultas Psikologi UNDIP? Tidak perlu ragu, sampaikan saja lewat form di bawah.</h4>
            </div>
            <div class="col-md-5 col-12 mb-2 breadcrumb-new">
                <img src="/images/question.png" alt="" style="width:100%">
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <ul class="nav nav-tabs nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Form</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Riwayat</a>
                                </li>
                            </ul>

                            <div class="tab-content px-1 pt-3">
                                <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                    <form class="form form-horizontal" action="kirimTiket" method="post">
                                        <div class="form-body">

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="pilihKategori">Topik</label>
                                                <div class="col-md-9">
                                                    <select id="inputTopik" name="inputTopik" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
                                                        <option value="0">--Pilih Topik--</option>
                                                        <option value="1">Akademik</option>
                                                        <option value="2">Non-Akademik</option>
                                                        <!-- <option value="1">Akademik</option>
                                                        <option value="2">Kemahasiswaan</option>
                                                        <option value="3">Keuangan Kuliah</option>
                                                        <option value="4">Sarana & Prasarana</option>
                                                        <option value="5">Kerja Sama</option>
                                                        <option value="6">Lainnya</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="inputSubjek">Ringkasan/Subjek</label>
                                                <div class="col-md-9">
                                                    <input id="inputSubjek" name="inputSubjek" class="form-control" placeholder="Ringkasan pertanyaan/permasalahan">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="inputRingkasan">Detail</label>
                                                <div class="col-md-9">
                                                    <textarea id="inputDetail" name="inputDetail" rows="5" class="form-control" placeholder="Ceritakan detail permasalahan"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Kirim
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                    <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                                        <div class="card collapse-icon panel mb-0 box-shadow-0 border-0">
                                            <?php 
                                            $i = 1;
                                            foreach($riwayatTiket as $riwayat){
                                            ?>
                                            
                                            <div role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                <a data-toggle="collapse" data-parent="#accordion<?php echo $i ?>" href="#accordion<?php echo $i ?>" aria-expanded="false" aria-controls="accordion<?php echo $i ?>" class="h6 blue collapsed">
                                                    <?php echo $riwayat->subjek?>
                                                </a>
                                            </div>
                                            <div id="accordion<?php echo $i ?>" role="tabpanel" aria-labelledby="heading<?php echo $i ?>" class="collapse" aria-expanded="false">
                                                <div class="card-body">
                                                    <div class="row match-height">
                                                        <div class="col-sm-4">
                                                            <div class="card">
                                                                <div class="card-content">
                                                                    <img class="card-img-top img-fluid" src="<?php echo base_url('robust/app-assets/images/carousel/06.jpg') ?>" alt="Card image cap">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Nama File</h4>
                                                                        <a href="#" class="btn btn-outline-amber">Lihat File</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card">
                                                                <div class="card-content">
                                                                    <h4 class="card-title">ID Tiket: <?php echo $riwayat->id ?></h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Tanggal</th>
                                                                                    <td><?php echo date("d M Y, H:i", strtotime($riwayat->created_at)) ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Topik</th>
                                                                                    <td>
                                                                                        <?php
                                                                                        if($riwayat->topik_id == 1) echo 'Akademik'; 
                                                                                        elseif($riwayat->topik_id == 2) echo 'Non-akademik';
                                                                                        ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Detail</th>
                                                                                    <td>
                                                                                    <?php echo $riwayat->detail ?>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Jawaban</th>
                                                                                    <td>
                                                                                    <?php echo $riwayat->jawaban ?>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>