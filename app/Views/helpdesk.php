<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="mb-0 d-inline-block"><?= $title ?></h3>
            </div>
        </div>
        <div class="content-body">
            <form class="form form-horizontal">
                <div class="form-body">
                    <h4 class="form-section"><i class="ft-user"></i> Formulir Tiket</h4>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" id="projectinput1" class="form-control" placeholder="Nama Lengkap" name="fname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                        <div class="col-md-9">
                            <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput4">Telp/HP</label>
                        <div class="col-md-9">
                            <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput5">Topik</label>
                        <div class="col-md-9">
                            <select id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
                                <option value="#">Nama Departemen - Topik</option>
                                <option value="#">Nama Departemen - Topik</option>
                                <option value="#">Nama Departemen - Topik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput6">Ringkasan / Subject</label>
                        <div class="col-md-9">
                            <input type="text" id="projectinput1" class="form-control" placeholder="" name="fname">
<br>
                            <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="Ceritakan permasalahan"></textarea>
                        </div>
                    </div>

                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check-square-o"></i> Buat Tiket
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>