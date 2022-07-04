<div class="bg-input">
    <div class="app-content content">
        <div class="loader">
            <img src="/images/loading.gif" alt="Loading..." />
        </div>
        <div class="container-fluid">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <div class="card mt-2">
                                <div class="card-header">
                                    <h1 class="text-center mt-2"><b>Daftar Tenaga Pendidik Psikologi UNDIP</b></h1>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table id="tbl_dataKepend" class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th class="text-center d-none d-md-block">No</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center d-none d-md-block">NIP</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $numbering = 1;
                                                foreach ($dataListKepend as $row) : ?>
                                                    <tr>
                                                        <td class="text-center align-middle d-none d-md-block"><?= $numbering++; ?></td>
                                                        <td class="align-middle"><?= $row["nama_lengkap"]; ?></td>
                                                        <td class="align-middle d-none d-md-block"><?= $row["nip"]; ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('gotoInputKepend/' . $row["id_kepend"] . '/' . $row["nama_lengkap"]) ?>" class="badge badge-info px-2 py-1">
                                                                <i class="ft-edit"></i> Survey</a>
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
<script type="text/javascript">
    window.addEventListener("load", function() {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
    });
    $(document).ready(function() {
        $('#tbl_dataKepend').DataTable({});
    });
</script>