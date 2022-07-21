<style>
    .card {
        border-radius: 4px;
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.08), 0 0 6px rgba(0, 0, 0, 0.05);
        transition: 0.3s transform cubic-bezier(0.155, 1.105, 0.295, 1.12),
            0.3s box-shadow,
            0.3s -webkit-transform cubic-bezier(0.155, 1.105, 0.295, 1.12);
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12), 0 4px 8px rgba(0, 0, 0, 0.06);
    }
</style>
<div class="bg-input">
    <div class="app-content content">
        <div class="container my-5">
            <section id="decks">
                <div class="row">
                    <div class="col my-3 d-none d-md-block">
                        <h1 class="mb-4 display-3 text-center text-white"><b>Selamat datang di halaman <br>survey Magenta Media Center</b></h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php if ($isMhs == 1) : ?>
                        <div class="card col-lg-5 mx-3">
                            <a href="<?php echo base_url('/mahasiswa/survey/selectdosen') ?>">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="<?php echo base_url('/images/homeKepend.jpg') ?>" alt="Card image cap" />
                                    <div class="card-body">
                                        <hr>
                                        <h3 class="text-center font-weight-bold mt-1">Dosen</h3>
                                        <p class="card-title text-center mt-2">Survey dosen Fakultas Psikologi UNDIP</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card col-lg-5 mx-3">
                            <a href="<?php echo base_url('/mahasiswa/survey/selectkepend') ?>">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="<?php echo base_url('/images/homeDosen.jpg') ?>" alt="Card image cap" />
                                    <div class="card-body">
                                        <hr>
                                        <h3 class="text-center font-weight-bold mt-1">Tenaga Kependidikan</h3>
                                        <p class="card-title text-center mt-2">Survey tenaga kependidikan Fakultas Psikologi UNDIP</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                </div>
            <?php else : ?>
                <div class="card mx-3 mb-3">
                    <a href="<?php echo base_url('/mahasiswa/survey/inputlulusan') ?>">
                        <div class="card-content m-2">
                            <img class="card-img-top img-fluid" src="<?php echo base_url('/images/homeLus.jpg') ?>" alt="Card image cap" />
                            <div class="card-body">
                                <h3 class="text-center font-weight-bold mt-1">Lulusan</h3>
                                <p class="card-title text-center mt-2">Survey lulusan Fakultas Psikologi UNDIP</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
            </section>
        </div>
    </div>
</div>