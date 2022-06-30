<div class="bg-input">
    <div class="app-content content">
        <div class="container mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="text-center mb-3 mt-2">Survey Dosen Psikologi UNDIP</h1>
                    <h3 class="text-center mt-2">Dosen:</h3>
                    <h3 class="text-center mb-2"><?= $namaDosen ?></h3>
                    <?php if (!empty(session()->getFlashdata('message'))) : ?>
                        <div class="alert alert-danger text-center">
                            <?= session()->getFlashdata('message'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="row mx-3">
                        <table class="table">
                            <form action="<?= base_url('inputDosen/' . $idSend) ?>" method="post">
                                <?php $numbering = 1;
                                foreach ($dataSurveyDosen as $key => $value) : ?>
                                    <tr>
                                        <td width="1%"><?= $numbering++; ?></td>
                                        <td><?= $value->pertanyaan ?>
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value->id ?>" value="1">
                                                Sangat Baik
                                                <br>
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value->id ?>" value="2">
                                                Baik
                                                <br>
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value->id ?>" value="3">
                                                Cukup
                                                <br>
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value->id ?>" value="4">
                                                Buruk
                                                <br>
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value->id ?>" value="5">
                                                Sangat Buruk
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="2"><button type="submit" class="btn btn-info btn-lg btn-block">Kirim</button></td>
                                </tr>
                            </form>
                        </table>
                        <p class=" ml-2">Dengan menyelesaikan survey ini maka secara tidak langsung saya menyatakan bahwa :<br>
                            1. Saya bersedia untuk menjadi responden dalam survey ini dan telah memberikan informasi yang sebenar-benarnya.<br>
                            2. Informasi/data yang saya berikan akan dijaga kerahasiannya dan hanya digunakan untuk kepentingan survey.<br>
                            Terima kasih atas kesediaan mahasiswa/mahasiswi Psikologi UNDIP untuk dapat berpertisipasi pada survey ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>