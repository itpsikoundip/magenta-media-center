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
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Mahasiswa</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h1 class="mb-2"><b>Selamat datang di helpdesk Magenta Media Center</b></h1>
                                <p>Pusat bantuan dan informasi internal untuk mahasiswa Fakultas Psikologi UNDIP</p>






                                
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <form class="form form-horizontal">
                                        <div class="form-body">

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="pilihKategori">Topik</label>
                                                <div class="col-md-9">
                                                    <select id="pilihKategori" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
                                                        <option value="0">--Pilih Topik--</option>
                                                        <option value="1">Akademik</option>
                                                        <option value="2">Kemahasiswaan</option>
                                                        <option value="3">Keuangan Kuliah</option>
                                                        <option value="4">Sarana & Prasarana</option>
                                                        <option value="5">Kerja Sama</option>
                                                        <option value="6">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="inputRingkasan">Ringkasan / Subjek</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="inputRingkasan" class="form-control" placeholder="" name="fname">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="inputRingkasan">Detail</label>
                                                <div class="col-md-9">
                                                    <textarea id="inputDetail" rows="5" class="form-control" name="comment" placeholder="Ceritakan permasalahan"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-actions d-flex justify-content-end">
                                            <!-- <button type="button" class="btn btn-warning mr-1">
                              <i class="ft-x"></i> Batal
                          </button> -->
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> Kirim
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                    <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                                        <div class="card collapse-icon panel mb-0 box-shadow-0 border-0">

                                            <div role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion12" aria-expanded="false" aria-controls="accordion12" class="h6 blue collapsed">
                                                    Akses Wifi tidak bisa
                                                </a>
                                            </div>
                                            <div id="accordion12" role="tabpanel" aria-labelledby="heading12" class="collapse" aria-expanded="false">
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
                                                                    <h4 class="card-title">ID Tiket : 4890423</h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Tanggal</th>
                                                                                    <td>17 Juni 2022, 09.30</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Topik</th>
                                                                                    <td>IT - Akses Internet</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Detail</th>
                                                                                    <td>
                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices, elit pulvinar lobortis egestas, turpis ligula sollicitudin dolor, eu pharetra
                                                                                        enim lacus nec leo. Vestibulum mollis tellus non ante interdum posuere. Nulla viverra, lorem et vehicula varius, orci magna rhoncus erat, vitae rhoncus
                                                                                        nulla nibh ultricies risus. In hac habitasse platea dictumst.
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Jawaban</th>
                                                                                    <td>
                                                                                        Suspendisse lacinia dolor quam, ut rutrum est ultricies quis. Sed congue nulla a suscipit
                                                                                        mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse tincidunt ultrices turpis. Nulla fringilla
                                                                                        sollicitudin justo, vitae viverra turpis accumsan a. Praesent mattis tempus nibh, ac cursus felis feugiat non. Mauris mattis hendrerit aliquam.
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

                                            <div id="heading13" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion13" aria-expanded="false" aria-controls="accordion13" class="h6 blue collapsed">Accordion Group Item #3</a>
                                            </div>
                                            <div id="accordion13" role="tabpanel" aria-labelledby="heading13" class="collapse" aria-expanded="false">
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
                                                                    <h4 class="card-title">ID Tiket : 4890423</h4>
                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th scope="row">Nama Lengkap</th>
                                                                                    <td>Gading Ihsan</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">E-Mail</th>
                                                                                    <td>gadingihsancahya@gmail.com</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Nomor HP</th>
                                                                                    <td>085602577471</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Topik</th>
                                                                                    <td>IT - Akses Internet</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Ringkasan / Subjek</th>
                                                                                    <td>Akses Wifi tidak bisa</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Permasalahan</th>
                                                                                    <td>View</td>
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

                                            <div id="heading14" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion14" aria-expanded="false" aria-controls="accordion14" class="h6 blue collapsed">Accordion Group Item #4</a>
                                            </div>
                                            <div id="accordion14" role="tabpanel" aria-labelledby="heading14" class="card-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="card-body">
                                                    <p class="card-text">Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée candy canes carrot cake chupa chups danish cake sugar plum candy.</p>
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