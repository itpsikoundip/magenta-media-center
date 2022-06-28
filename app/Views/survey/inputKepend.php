<div class="bg-input">
    <div class="app-content content">
        <div class="container mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="text-center mb-2 mt-2">Survey Tenaga Pendidik Psikologi UNDIP</h1>
                    <div class="row m-3">
                        <table class="table">
                            <tbody>
                                <?php $numbering = 1;
                                foreach ($dataSurveyKepend as $key => $value) : ?>
                                    <form name="send-form" class="send-form" action="" method="post">
                                        <tr>
                                            <td width="1%"><?= $numbering++; ?></td>
                                            <td><?= $value->pertanyaan ?>
                                                <div class="form-check mt-1">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="actionRadio" id="1" value="1">
                                                        Sangat Baik
                                                        <br>
                                                        <input class="form-check-input" type="radio" name="actionRadio" id="2" value="2">
                                                        Baik
                                                        <br>
                                                        <input class="form-check-input" type="radio" name="actionRadio" id="3" value="3">
                                                        Cukup
                                                        <br>
                                                        <input class="form-check-input" type="radio" name="actionRadio" id="4" value="4">
                                                        Buruk
                                                        <br>
                                                        <input class="form-check-input" type="radio" name="actionRadio" id="5" value="5">
                                                        Sangat Buruk
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p class="mt-2">Dengan menyelesaikan survey ini maka secara tidak langsung saya menyatakan bahwa :<br>
                            1. Saya bersedia untuk menjadi responden dalam survey ini dan telah memberikan informasi yang sebenar-benarnya.<br>
                            2. Informasi/data yang saya berikan akan dijaga kerahasiannya dan hanya digunakan untuk kepentingan survey.<br>
                            Terima kasih atas kesediaan mahasiswa/mahasiswi Psikologi UNDIP untuk dapat berpertisipasi pada survey ini.</p>
                        <button type="button" class="btn btn-primary btn-lg btn-block">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>