<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Tabel Survey Tenaga Kependidikan</h1>
                            </div>
                            <div class="card-body card-dashboard">
                                <?php if (!empty(session()->getFlashdata('message'))) : ?>
                                    <div class="alert alert-success">
                                        <?= session()->getFlashdata('message'); ?>
                                    </div>
                                <?php endif; ?>

                                <table class="table table-striped table-bordered">
                                    <!--zero-configuration ^^-->
                                    <thead>
                                        <tr>
                                            <th class=" text-center align-middle">No</th>
                                            <th class="text-center align-middle">Pertanyaan Survey Tenaga Kependidikan</th>
                                            <?php if (count($dataSurveyKepend) <= 9) : ?>
                                                <th class="text-center">
                                                    <a href="#" class="badge badge-info px-1 py-1" data-toggle="modal" data-target="#ModalSurveyKepend" style="display:inline-block; width:100px">
                                                        <i class="ft-plus-circle"></i> Tambah
                                                    </a>
                                                    <?php if (count($dataSurveyKepend) >= 1) : ?>
                                                        <a href="#" class="badge badge-danger px-1 py-1" data-toggle="modal" data-target="#ModalTruncate">
                                                            <i class="ft-alert-triangle"></i> Hapus Semua
                                                        </a>
                                                    <?php endif; ?>
                                                </th>
                                            <?php else : ?>
                                                <th class="text-center align-middle">Aksi</th>
                                            <?php endif; ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $numbering = 1;
                                        foreach ($dataSurveyKepend as $row) : ?>
                                            <tr>
                                                <td class="text-center align-middle"><?= $numbering++; ?></td>
                                                <td class="align-middle"><?= $row["pertanyaan"]; ?></td>
                                                <td class="text-center">
                                                    <a href="#" class="badge badge-danger px-1 py-1" data-toggle="modal" data-target="#ModalDelete<?php echo $row['id']; ?>">
                                                        <i class="ft-trash-2"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal Add -->
            <div class="modal fade" id="ModalSurveyKepend" arta-labelledby="ModalSurveyKependLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalSurveyKependLabel">Tambah Survey Tenaga Kependidikan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('/surveykepend/addSurveyKepend') ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Survey..." name="pertanyaan" style="height:150px;" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-info btn-block" name="button">Tambah Pertanyaan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Delete -->
            <?php foreach ($dataSurveyKepend as $row) : ?>
                <div class="modal fade" id="ModalDelete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <b> HAPUS DATA </b>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Aksi ini akan menghapus :
                                    <br>
                                    <li><b>Pertanyaan survey T. kependidikan yang dipilih.</b></li>
                                    <li><b>Hasil survey T. kependidikan terkait pertanyaan yang dipilih.</b></li>
                                    <br>
                                    Apakah anda yakin untuk menghapus data?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-danger" href="<?= base_url('surveykepend/deleteSurveyKepend/' . $row["pertanyaan"]) ?>" role="button">
                                    <i class="ft-alert-triangle"></i> Hapus
                                </a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Modal Edit -->
            <?php foreach ($dataSurveyKepend as $row) : ?>
                <div class="modal fade" id="ModalEditSurveyKepend<?php echo $row['id']; ?>" arta-labelledby="ModalEditSurveyKependLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalSurveyKependLabel">Edit Survey Tenaga Kependidikan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('/surveykepend/updateSurveyKepend/' . $row["id"]) ?>" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Survey..." name="pertanyaan" required><?php echo $row['pertanyaan']; ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" name="button">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Modal Truncate -->
            <div class="modal fade" id="ModalTruncate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="ft-alert-triangle"></i>
                                <b> PERHATIAN </b>
                                <i class="ft-alert-triangle"></i>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Aksi ini akan menghapus :
                                <br>
                                <li><b>Seluruh data pertanyaan survey tenaga kependidikan.</b></li>
                                <li><b>Seluruh data hasil survey tenaga kependidikan.</b></li>
                                <br>
                                Pastikan anda sudah melakukan
                                <a href=" <?= base_url('/exportKepend') ?>"><i class="ft-download-cloud"></i> Export Kependidikan </a>
                                sebelumnya untuk menyimpan record dalam komputer anda.
                                <br><br>
                                Apakah anda yakin untuk menghapus seluruh data?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" href="<?php echo base_url('/truncateKepend') ?>" role="button"><i class="ft-alert-triangle"></i> Hapus</a>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>