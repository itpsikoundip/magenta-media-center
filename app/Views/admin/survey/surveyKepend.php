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
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('message'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Pertanyaan Survey Tenaga Kependidikan</th>
                                                <?php if (count($dataSurveyKepend) <= 9) : ?>
                                                    <th><a href="#" class="badge badge-primary" data-toggle="modal" data-target="#ModalSurveyKepend"><i class="ft-plus-circle"></i> Add</a></th>
                                                <?php else : ?>
                                                    <th>Aksi</th>
                                                <?php endif; ?>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $numbering = 1;
                                            foreach ($dataSurveyKepend as $row) : ?>
                                                <tr>
                                                    <td><?= $numbering++; ?></td>
                                                    <td><?= $row["pertanyaan"]; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('surveykepend/deleteSurveyKepend/' . $row["pertanyaan"]) ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin hapus data?')"><i class="ft-trash-2"></i> Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
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
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Survey..." name="pertanyaan" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" name="button">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</div>