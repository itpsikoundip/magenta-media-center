<div class="bg-input">
    <div class="app-content content">
        <div class="container mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <a href="<?php echo base_url('/mahasiswa/survey/selectkepend') ?>" class="btn btn-secondary align-center" role="button">
                        <i class="ft-chevron-left"></i> Kembali
                    </a>
                    <h1 class="text-center mb-3 mt-2"><b>Survey Tenaga Pendidik Psikologi UNDIP</b></h1>
                    <h3 class="text-center mt-2">Tenaga Pendidik:</h3>
                    <h3 class="text-center mb-2"><?= $namaKepend ?></h3>
                    <hr>
                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                        <div class="alert alert-danger text-center">
                            <?= session()->getFlashdata('message'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="row mx-3">
                        <table class="table table-borderless">
                            <form action="<?= base_url('/mahasiswa/survey/inputkepend/' . $idSend . '/' . $namaKepend) ?>" method="post">
                                <?= csrf_field(); ?>
                                <?php $numbering = 1;
                                if (count($dataSurveyKepend) == 0) { ?>
                                    <tr>
                                        <td class="text-center d-none d-lg-block d-xl-block">Maaf belum ada survey tenaga kependidikan</td>
                                    </tr>
                                    <?php } else {
                                    foreach ($dataSurveyKepend as $key => $value) : ?>
                                        <tr>
                                            <td class="text-center d-none d-lg-block d-xl-block"><?= $numbering++; ?></td>
                                            <td><b><?= $value->pertanyaan ?></b>
                                                <div class="form-check mt-1">
                                                    <input class="radio-custom mb-1 mr-1" type="radio" name="indikator-<?= $value->id ?>" value="1">
                                                    Sangat Baik
                                                    <br>
                                                    <input class="radio-custom mb-1 mr-1" type="radio" name="indikator-<?= $value->id ?>" value="2">
                                                    Baik
                                                    <br>
                                                    <input class="radio-custom mb-1 mr-1" type="radio" name="indikator-<?= $value->id ?>" value="3">
                                                    Cukup
                                                    <br>
                                                    <input class="radio-custom mb-1 mr-1" type="radio" name="indikator-<?= $value->id ?>" value="4">
                                                    Buruk
                                                    <br>
                                                    <input class="radio-custom mr-1" type="radio" name="indikator-<?= $value->id ?>" value="5">
                                                    Sangat Buruk
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                    <tr>
                                        <td colspan="2">
                                            <hr>
                                            <p class="my-2">Saran bagi Tenaga Pendidik <b><?= $namaKepend ?></b></p>
                                            <textarea class="form-control" name="saran" rows="5" maxlength="500"></textarea>
                                            <p class="text-right">(Maksimum 500 karakter)</b></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <hr>
                                            <p class="mt-1">Dengan menyelesaikan survey ini maka secara tidak langsung saya menyatakan bahwa :<br>
                                                <li>Saya bersedia untuk menjadi responden dalam survey ini dan telah memberikan informasi yang sebenar-benarnya.</li><br>
                                                <li>Informasi/data yang saya berikan akan dijaga kerahasiannya dan hanya digunakan untuk kepentingan survey.</li><br>
                                                Terima kasih atas kesediaan mahasiswa/mahasiswi Psikologi UNDIP untuk dapat berpertisipasi pada survey ini.
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button type="submit" class="btn btn-info btn-lg btn-block" style="background-color: #f1467e !important; border: 0 !important;"><b>Kirim</b></button></td>
                                    </tr>
                                <?php } ?>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>