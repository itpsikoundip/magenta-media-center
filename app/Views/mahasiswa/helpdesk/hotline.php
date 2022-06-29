<style>
    .media-body span {
        color: black;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('helpdesk') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?> (Kirim Pesan WhatsApp)</h2>
                <h4 class="grey">Fakultas Psikologi UNDIP</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-header row">
            <div class="align-self-center col-md-6 col-12 mb-2">
                <h1 class="mb-2"><b>Hotline<br>Fakultas Psikologi UNDIP!</b></h1>
                <h4>Butuh bantuan atau jawaban segera? Sampaikan saja, kami siap membantumu.</h4>
            </div>
            <div class="col-md-6 col-12 mb-2 breadcrumb-new">
                <img src="/images/hotline.png" alt="" style="width:100%">
            </div>
        </div>
        <div class="content-body">
            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                <form class="form form-horizontal">
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="pilihTopik">Topik</label>
                            <div class="col-md-9">
                                <select id="pilihTopik" name="pilihTopik" onchange="kirim()" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Status">
                                    <option value="0">-- Pilih Topik --</option>
                                    <option value="1">Akademik</option>
                                    <option value="2">Kemahasiswaan</option>
                                    <option value="3">Keuangan Kuliah</option>
                                    <option value="4">Sarana & Prasarana</option>
                                    <option value="5">Kerja Sama</option>
                                    <option value="6">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 label-control" for="isiPesan">Isi pesan</label>
                            <div class="col-md-9">
                                <textarea id="isiPesan" oninput="kirim()" rows="5" class="form-control" name="comment" placeholder="Ceritakan permasalahan">mau nanya nih</textarea>
                            </div>
                        </div>
                        <script>
                            function kirim() {
                                let topik = document.getElementById("pilihTopik").value;
                                let target = document.getElementById("kirimWA");
                                let pesan = document.getElementById("isiPesan").value;
                                if (topik == 0) {
                                    target.innerHTML = '<a href="https://wa.me/628112666204?text=[TANYA HOTLINE PSIKOLOGI]%0A%0A" class="btn btn-success disabled" target="blank">Tanyakan lewat WhatsApp</a>';
                                } else if (topik == 1) {
                                    target.innerHTML = '<a href="https://wa.me/628112666204?text=[TANYA HOTLINE PSIKOLOGI]%0A%0A' + pesan + '" class="btn btn-success" target="blank">Tanyakan ke bagian Akademik</a>';
                                } else if (topik == 2) {
                                    target.innerHTML = '<a href="https://wa.me/6285602577471?text=[TANYA HOTLINE PSIKOLOGI]%0A%0A' + pesan + '" class="btn btn-success" target="blank">Tanyakan ke bagian Kemahasiswaan</a>';
                                } else if (topik == 3) {
                                    target.innerHTML = '<a href="https://wa.me/6282313758289?text=[TANYA HOTLINE PSIKOLOGI]%0A%0A' + pesan + '" class="btn btn-success" target="blank">Tanyakan ke bagian Keuangan</a>';
                                } else if (topik == 4) {
                                    target.innerHTML = '<a href="https://wa.me/6285602577471?text=[TANYA HOTLINE PSIKOLOGI]%0A%0A' + pesan + '" class="btn btn-success" target="blank">Tanyakan ke bagian Sarana & Prasarana</a>';
                                } else if (topik == 5) {
                                    target.innerHTML = '<a href="https://wa.me/6285602577471?text=[TANYA HOTLINE PSIKOLOGI]%0A%0A' + pesan + '" class="btn btn-success" target="blank">Tanyakan ke bagian Kerja Sama</a>';
                                } else if (topik == 6) {
                                    target.innerHTML = '<a href="https://wa.me/6285602577471?text=[TANYA HOTLINE PSIKOLOGI]%0A%0A' + pesan + '" class="btn btn-success" target="blank">Tanyakan ke bagian Lainnya</a>';
                                }
                            }
                        </script>
                    </div>
                    <div class="form-actions d-flex justify-content-end" id="kirimWA">
                        <a href="https://wa.me/628112666204?text=[TANYA HOTLINE PSIKOLOGI]%0A%0A" class="btn btn-success disabled" target="blank">Tanyakan lewat WhatsApp</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>