<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Tabel Survey Lulusan</h1>
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
                                                <th>Pertanyaan Survey Lulusan</th>
                                                <th><a href="#" class="badge badge-primary" data-toggle="modal" data-target="#ModalSurveyLulusan"><i class="ft-plus-circle"></i> Add</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $numbering = 1;
                                            foreach ($dataSurveyLulusan as $row) : ?>
                                                <tr>
                                                    <td><?= $numbering++; ?></td>
                                                    <td><?= $row["pertanyaan"]; ?></td>
                                                    <td>
                                                        <!-- <a href="#" class="badge badge-info" data-toggle="modal" data-target="#ModalEditSurveyLulusan<?php echo $row['id']; ?>"><i class="ft-edit"></i></a> -->
                                                        <a href="<?= base_url('surveylulusan/deleteSurveyLulusan/' . $row["id"]) ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin hapus data?')"><i class="ft-trash-2"></i> Delete</a>
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
            <div class="modal fade" id="ModalSurveyLulusan" arta-labelledby="ModalSurveyLulusanLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalSurveyLulusanLabel">Tambah Survey Lulusan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('/surveylulusan/addSurveyLulusan') ?>" method="post">
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
            <?php foreach ($dataSurveyLulusan as $row) : ?>
                <div class="modal fade" id="ModalEditSurveyLulusan<?php echo $row['id']; ?>" arta-labelledby="ModalEditSurveyLulusanLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalSurveyLulusanLabel">Edit Survey Lulusan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('/surveylulusan/updateSurveyLulusan/' . $row["id"]) ?>" method="post">
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