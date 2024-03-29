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
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-hourglass warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <?php
                                        $count = 0;
                                        foreach ($kegiatanAktif as $kegiatan) {
                                            if (($kegiatan['tanggal'] == $currentDate && $kegiatan['mulai'] >= $currentTime) || $kegiatan['tanggal'] > $currentDate) {
                                                $count++;
                                            }
                                        }
                                        echo '<h3>' . $count . '</h3>';
                                        ?>
                                        <span>Akan Berlangsung</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-rocket info font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <?php
                                        $count = 0;
                                        foreach ($kegiatanAktif as $kegiatan) {
                                            if ($kegiatan['tanggal'] == $currentDate && ($kegiatan['mulai'] <= $currentTime && $kegiatan['selesai'] >= $currentTime)) {
                                                $count++;
                                            }
                                        }
                                        echo '<h3>' . $count . '</h3>';
                                        ?>
                                        <span>Sedang Berlangsung</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-grid success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3><?php echo $ruanganAktif ?></h3>
                                        <span>Ruangan Dipinjam</span>
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
                                        <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Kegiatan Aktif</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Tambahkan Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Riwayat</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                        <p><i>Kegiatan yang akan dilaksanakan hari ini dan hari selanjutnya</i></p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Mulai</th>
                                                        <th class="text-center">Selesai</th>
                                                        <th class="text-center">Ruangan</th>
                                                        <th class="text-center">Agenda</th>
                                                        <th class="text-center">PIC</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($kegiatanAktif as $kegiatan) {
                                                        if ($kegiatan['tanggal'] == $currentDate && ($kegiatan['mulai'] <= $currentTime && $kegiatan['selesai'] >= $currentTime)) {        
                                                    ?>
                                                        <tr class="table-info font-weight-bold">
                                                    <?php
                                                        } else { 
                                                    ?>
                                                        <tr>
                                                    <?php
                                                        }
                                                    ?>
                                                            <td class="text-center align-middle">
                                                                <?php echo date("d M Y", strtotime($kegiatan['tanggal'])) ?>
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                <?php echo date("H:i", strtotime($kegiatan['mulai'])) ?>
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                <?php echo date("H:i", strtotime($kegiatan['selesai'])) ?>
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                <?php echo $kegiatan['ruangan'] ?>
                                                            </td>
                                                            <td class="align-middle">
                                                                <?php echo $kegiatan['agenda'] ?>
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                <?php echo $kegiatan['pic'] ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="https://wa.me/<?php echo $kegiatan['hp'] ?>?text=[E-KEGIATAN FAKULTAS PSIKOLOGI]%0A%0A" class="btn btn-success btn-sm" target="blank" style="min-height: 30px; margin: 2px">
                                                                    <i class="icofont-brand-whatsapp"></i>
                                                                </a>
                                                                <a href="<?php echo base_url('undangan-kegiatan/' . $kegiatan['undangan']) ?>" class="btn btn-secondary btn-sm" target="blank" style="min-height: 30px; margin: 2px">
                                                                    <i class="icon-doc"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">

                                        <form class="form form-horizontal mx-md-2" action="<?= base_url('staffdosen/kegiatan/addkegiatan/') ?>" method="post" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="label-control" for="pilihRuangan"><b>Ruangan</b></label>
                                                    
                                                        <select id="pilihRuangan" name="pilihRuangan" class="form-control" required value="<?= old('pilihRuangan'); ?>">
                                                            <option value="">-- Pilih Ruangan --</option>
                                                            <?php foreach ($ruangan as $ruang) { ?>
                                                                <option value="<?php echo $ruang->id ?>"><?php echo $ruang->nama ?>, lantai <?php echo $ruang->lantai ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4">
                                                        <label class="label-control" for="inputTanggal"><b>Tanggal Kegiatan</b></label>
                                                        <input type="date" id="inputTanggal" name="inputTanggal" onchange="checkDate()" class="form-control" placeholder="Tanggal kegiatan" required value="<?= old('inputTanggal'); ?>">
                                                        <small>Minimum: hari ini</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="label-control" for="pilihJamMulai"><b>Waktu Mulai Kegiatan</b></label>
                                                        <input type="time" class="form-control" name="pilihJamMulai" required>
                                                        <small>Minimum: 07.00, maksimum: 16.30</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="label-control" for="pilihJamMulai"><b>Waktu Selesai Kegiatan</b></label>
                                                        <input type="time" class="form-control" name="pilihJamSelesai" required>
                                                        <small>Minimum: 07.30, maksimum: 17.00</small>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="label-control" for="inputJawaban"><b>Agenda</b></label>
                                                    <textarea id="inputAgenda" name="inputAgenda" rows="5" class="form-control" placeholder="Detail agenda/kegiatan" required></textarea>                                                  
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="inputPIC"><b>PIC</b></label>
                                                    <select id="pilihPIC" name="pilihPIC" class="form-control" required>
                                                        <option value="">-- Pilih PIC --</option>
                                                        <?php
                                                        foreach ($staffdosen as $sd) {
                                                        ?>
                                                            <option value="<?php echo $sd['id_staffdosen'] ?>"><?php echo $sd['nama'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="inputHP"><b>No WA PIC</b></label>
                                                    <div class="d-flex">
                                                        <button class="btn btn-light" style="color:black; 
                                                                        border-radius: 0.21rem 0 0 0.21rem; 
                                                                        border-top: 1px solid #d4d4d4;
                                                                        border-left: 1px solid #d4d4d4;
                                                                        border-bottom: 1px solid #d4d4d4" disabled>
                                                            +62
                                                        </button>
                                                        <input type="number" id="inputHP" name="inputHP" class="form-control" placeholder="81234567890" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="label-control" for="inputUndangan"><b>File Undangan</b></label>
                                                    <div class="form-control d-flex">
                                                        <input class="align-self-center w-100" id="inputUndangan" name="inputUndangan" type="file">
                                                    </div>
                                                    <small>Jenis file: PDF. Ukuran maksimum: 2MB </small>
                                                </div>
                                            </div>

                                            <div class="form-actions justify-content-end">
                                                <div class="d-flex justify-content-end">
                                                    <p><i>Kegiatan yang ditambahkan akan muncul pada tab List Kegiatan dan dapat dibaca oleh semua staff dan dosen</i></p>
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
                                        <p><i>Riwayat kegiatan di mana Anda sebagai PIC</i></p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Tanggal</th>
                                                        <th class="text-center">Mulai</th>
                                                        <th class="text-center">Selesai</th>
                                                        <th class="text-center">Ruangan</th>
                                                        <th class="text-center">Agenda</th>
                                                        <!-- <th class="text-center">PIC</th> -->
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1; 
                                                    foreach ($riwayat as $kegiatan) { 
                                                    ?>
                                                        <tr>
                                                            <td class="text-center align-middle">
                                                                <?php echo date("d M Y", strtotime($kegiatan['tanggal'])) ?>
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                <?php echo date("H:i", strtotime($kegiatan['mulai'])) ?>
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                <?php echo date("H:i", strtotime($kegiatan['selesai'])) ?>
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                <?php echo $kegiatan['ruangan'] ?>
                                                            </td>
                                                            <td class="align-middle">
                                                                <?php echo $kegiatan['agenda'] ?>
                                                            </td>
                                                            <!-- <td class="text-center align-middle">
                                                                <?php echo $kegiatan['pic'] ?>
                                                            </td> -->
                                                            <td class="text-center align-middle">
                                                                <a href="<?php echo base_url('undangan-kegiatan/' . $kegiatan['undangan']) ?>" class="btn btn-secondary btn-sm" target="blank" style="min-height: 30px; margin: 2px">
                                                                    <i class="icon-doc"></i>
                                                                </a>
                                                                <?php
                                                                if($kegiatan['tanggal'] == $currentDate && ($kegiatan['mulai'] <= $currentTime && $kegiatan['selesai'] >= $currentTime)){
                                                                ?>
                                                                <button class="btn btn-info btn-sm" style="min-height: 30px; margin: 2px" data-toggle="modal" data-target="#konfirmasiSelesai<?php echo $i ?>">
                                                                    <i class="ft-check-circle"></i>
                                                                </button>
                                                                <div class="modal fade" id="konfirmasiSelesai<?php echo $i ?>" tabindex="-1" aria-labelledby="konfirmasiSelesai<?php echo $i ?>" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-info">
                                                                                <h5 class="modal-title text-white" id="exampleModalLabel">Konfirmasi Selesaikan Kegiatan</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body text-left">
                                                                                Apakah Anda yakin akan menyelesaikan kegiatan tersebut sekarang?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Kembali</button>
                                                                                <a href="<?= base_url('staffdosen/kegiatan/selesaikegiatan/' . $kegiatan['id']) ?>" class="btn btn-info" style="min-height: 30px; margin: 2px">
                                                                                    Ya, selesaikan
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php
                                                                }
                                                                ?>
                                                                <button class="btn btn-danger btn-sm" style="min-height: 30px; margin: 2px" data-toggle="modal" data-target="#konfirmasiHapus<?php echo $i ?>">
                                                                    <i class="ft-trash-2"></i>
                                                                </button>
                                                                <div class="modal fade" id="konfirmasiHapus<?php echo $i ?>" tabindex="-1" aria-labelledby="konfirmasiHapus<?php echo $i ?>" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-danger">
                                                                                <h5 class="modal-title text-white" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body modal-body text-left">
                                                                                Apakah Anda akan menghapus kegiatan tersebut?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Kembali</button>
                                                                                <a href="<?= base_url('staffdosen/kegiatan/deletekegiatan/' . $kegiatan['id']) ?>" class="btn btn-danger" style="min-height: 30px; margin: 2px">
                                                                                    Ya, hapus
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php 
                                                    $i++; 
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
</div>