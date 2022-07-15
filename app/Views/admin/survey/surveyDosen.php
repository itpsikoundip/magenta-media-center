<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Tabel Survey Dosen</h1>
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
                                    <table id="tbl_dataSurveyDosen" class="table table-striped table-bordered">
                                        <!--zero-configuration ^^-->
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle">No</th>
                                                <th class="text-center align-middle">Pertanyaan Survey Dosen</th>
                                                <?php if (count($dataSurveyDosen) <= 9) : ?>
                                                    <th class="text-center">
                                                        <a href="#" class="badge badge-primary px-1 py-1" data-toggle="modal" data-target="#ModalSurveyDosen" style="display:inline-block; width:100px">
                                                            <i class="ft-plus-circle"></i> Tambah
                                                        </a>
                                                    </th>
                                                <?php else : ?>
                                                    <th class="text-center align-middle">Aksi</th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $numbering = 1;
                                            foreach ($dataSurveyDosen as $row) : ?>
                                                <tr>
                                                    <td class="text-center align-middle"><?= $numbering++; ?></td>
                                                    <td class="align-middle"><?= $row["pertanyaan"]; ?></td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('surveydosen/deleteSurveyDosen/' . $row["pertanyaan"]) ?>" class="badge badge-danger px-1 py-1" onclick="return confirm('Yakin ingin hapus data?')" style="display:inline-block; width:100px">
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
                </div>
            </section>
            <!-- Modal Add -->
            <div class="modal fade" id="ModalSurveyDosen" arta-labelledby="ModalSurveyDosenLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalSurveyDosenLabel">Tambah Survey Dosen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('/surveydosen/addSurveyDosen') ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Survey..." name="pertanyaan" style="height:150px;" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" name="button">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Edit -->
            <?php foreach ($dataSurveyDosen as $row) : ?>
                <div class="modal fade" id="ModalEditSurveyDosen<?php echo $row['id']; ?>" arta-labelledby="ModalEditSurveyDosenLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalSurveyDosenLabel">Edit Survey Dosen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('/surveydosen/updateSurveyDosen/' . $row["id"]) ?>" method="post">
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

<script>
    $(document).ready(function() {
        $('#tbl_dataSurveyDosen').DataTable({});
    });
</script>