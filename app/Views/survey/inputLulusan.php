<div class="bg-input">
    <div class="app-content content">
        <div class="container my-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center mb-2 mt-2">Survey Lulusan Psikologi UNDIP</h1>
                    <div class="row mx-3">
                        <table class="table">
                            <?php $numbering = 1;
                            foreach ($dataSurveyLulusan as $key => $value) : ?>
                                <form action="<?= base_url('inputLulusan/input/' . $value["id"]) ?>" method="post">
                                    <tr>
                                        <td width="1%"><?= $numbering++; ?></td>
                                        <td><?= $value["pertanyaan"] ?>
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value["id"] ?>" value="1">
                                                Sangat Baik
                                                <br>
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value["id"] ?>" value="2">
                                                Baik
                                                <br>
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value["id"] ?>" value="3">
                                                Cukup
                                                <br>
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value["id"] ?>" value="4">
                                                Buruk
                                                <br>
                                                <input class="form-check-input" type="radio" name="indikator-<?= $value["id"] ?>" value="5">
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
                        <p class="mt-2">Dengan menyelesaikan survey ini maka secara tidak langsung saya menyatakan bahwa :<br>
                            1. Saya bersedia untuk menjadi responden dalam survey ini dan telah memberikan informasi yang sebenar-benarnya.<br>
                            2. Informasi/data yang saya berikan akan dijaga kerahasiannya dan hanya digunakan untuk kepentingan survey.<br>
                            Terima kasih atas kesediaan Bapak/Ibu/Saudara/Saudari pemangku kepentingan untuk dapat berpertisipasi pada survey ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>