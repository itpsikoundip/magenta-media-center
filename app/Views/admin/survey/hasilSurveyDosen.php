<div class="app-content content">
    <div class="loader">
        <img src="<?php echo base_url('/images/loading.gif') ?>" alt="Loading..." />
    </div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Tabel Hasil Survey Dosen</h1>
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
                                    <table id="tbl_dataHasilSurveyDosen" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">NIP</th>
                                                <th class="text-center">Nama Lengkap Dosen</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $numbering = 1;
                                            foreach ($dataDosen as $row) : ?>
                                                <tr>
                                                    <td class="align-middle text-center"><?= $numbering++ ?></td>
                                                    <td class="align-middle"><?= $row["nip"] ?></td>
                                                    <td class="align-middle"><?= $row["nama_lengkap"] ?></td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('chartSingleDosen/' . $row["id_dosen"]) ?>" class="badge badge-info px-1 py-1">
                                                            <i class="ft-bar-chart-2"></i> Hasil
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
        </div>
    </div>
</div>

<script>
    window.addEventListener("load", function() {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
    });
    $(document).ready(function() {
        $('#tbl_dataHasilSurveyDosen').DataTable({});
    });
</script>