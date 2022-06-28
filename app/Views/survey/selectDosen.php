<div class="bg-input">
    <div class="app-content content">
        <div class="container-fluid mt-4">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12" style="height: 800px;">
                            <div class="card mt-2">
                                <div class="card-header">
                                    <h1 class="text-center mt-2">Daftar Dosen Psikologi UNDIP</h1>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table id="tbl_dataDosen" class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Nama Dosen</th>
                                                    <th class="text-center">NIP</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $numbering = 1;
                                                foreach ($dataListDosen as $row) : ?>
                                                    <tr>
                                                        <td width="1%" class="text-center"><?= $numbering++; ?></td>
                                                        <td><?= $row["nama_lengkap"]; ?></td>
                                                        <td><?= $row["nip"]; ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('gotoInputDosen/' . $row["id_dosen"]) ?>" class="badge badge-info"><i class="ft-edit"></i> Survey</a>
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
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#tbl_dataDosen').DataTable({});
    });
</script>