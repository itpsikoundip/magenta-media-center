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
            <section class="content-header row">
                <section id="decks">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h1 class="mb-4 display-3 text-center text-white"><b>Selamat datang di halaman <br>survey Magenta Media Center</b></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                    <div class="card m-2">
                                        <a href="/selectDosen">
                                            <div class="card-content m-2">
                                                <img class="card-img-top img-fluid" src="/images/homeKepend.jpg" alt="Card image cap" />
                                                <div class="card-body">
                                                    <h4 class="card-title text-center mt-1">Dosen</h4>
                                                    <p class="card-title text-center">Survey dosen Fakultas Psikologi UNDIP</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card m-2">
                                        <a href="/selectKepend">
                                            <div class="card-content m-2">
                                                <img class="card-img-top img-fluid" src="/images/homeDosen.jpg" alt="Card image cap" />
                                                <div class="card-body">
                                                    <h4 class="card-title text-center mt-1">Tenaga Kependidikan</h4>
                                                    <p class="card-title text-center">Survey tenaga kependidikan Fakultas Psikologi UNDIP</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card m-2">
                                        <a href="/inputLulusan">
                                            <div class="card-content m-2">
                                                <img class="card-img-top img-fluid" src="/images/homeLus.jpg" alt="Card image cap" />
                                                <div class="card-body">
                                                    <h4 class="card-title text-center mt-1">Lulusan</h4>
                                                    <p class="card-title text-center">Survey lulusan Fakultas Psikologi UNDIP</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
</div>