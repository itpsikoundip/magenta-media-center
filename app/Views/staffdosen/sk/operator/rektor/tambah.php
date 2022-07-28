<style>
    .media-body span {
        color: white;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('pengajuanskrektor') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Kembali</a>
        <?php
        if (session()->getFlashdata('notifikasi')) {
            echo '
            <div class="alert alert-success alert-dismissible mb-2" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
            ';
            echo session()->getFlashdata('notifikasi');
            echo '
            </div>
            ';
        }
        ?>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Unit/Divisi : <?= session()->get('namaunit') ?></h4>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">

                            <div class="card-body">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label>Judul SK</label>
                                        <input type="text" class="form-control" placeholder="Judul Proposal" maxlength="255" name="namaProposal">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pembuatan</label>
                                        <input type="date" class="form-control" name="namaProposal">
                                    </div>
                                    <div class="form-group">
                                        <label>TMT Kegiatan</label>
                                        <input type="text" class="form-control" placeholder="" maxlength="255" name="namaProposal">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload</label>
                                        <input type="file" class="form-control" name="namaProposal">
                                    </div>
                                    <div class="form-actions right">
                                        <button type="submit" class="btn btn-block btn-primary">
                                            <i class="fa fa-floppy-o"></i>&nbsp; SUBMIT
                                        </button>
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