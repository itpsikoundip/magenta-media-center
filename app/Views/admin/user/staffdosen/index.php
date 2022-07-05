<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"><?= $title ?></h3>
            </div>
            <div class="content-header-right col-md-4 col-12">
                <div class="btn-group float-md-right">
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings mr-1"></i>Aksi</button>
                    <div class="dropdown-menu arrow"><button type="button" class="dropdown-item" data-toggle="modal" data-target="#inlineForm"><i class="fa fa-plus mr-1"></i> Tambah</button><a class="dropdown-item" href="#"><i class="fa fa-print mr-1"></i> Print</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">

                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered zero-configuration" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Proposal</th>
                                                <th>Survey</th>
                                                <th>Helpdesk</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($dataUserStaffDosen as $key => $value) { ?>
                                                <tr>
                                                    <td style="vertical-align: middle;"><?= $value['nip']  ?></td>
                                                    <td style="text-align: left; vertical-align: middle;"><?= $value['nama']  ?></td>
                                                    <td>V</td>
                                                    <td>V</td>
                                                    <td>X</td>
                                                    <td style="vertical-align: middle;">
                                                        <button type="button" class="btn btn-icon btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Hapus</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade text-left" id="inlineForm" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Tambah Akses Staff & Dosen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>First Name</label>
                    <select class="select2 form-control block" name="" style="width: 100%">
                        <?php
                        foreach ($allDataStaffDosen as $key => $value) { ?>
                            <option value="<?= $value['id_staffdosen'] ?>"><?= $value['nama'] ?></option>
                        <?php  } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="">
                </div>
                <div class="form-group">
                    <label>Akses</label>
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" value="" name="">
                            Proposal
                        </label>
                    </fieldset>
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" value="" name="">
                            Survey
                        </label>
                    </fieldset>
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" value="" name="">
                            Helpdesk
                        </label>
                    </fieldset>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>