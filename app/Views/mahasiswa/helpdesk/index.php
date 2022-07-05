<style>
    .media-body span {
        color: black;
    }
</style>
<div class="app-content content">
    <div class="container mt-4">
        <a href="<?= base_url('mahasiswa') ?>" class="btn btn-sm btn-secondary mr-1 mb-1"><i class="fa fa-chevron-left"></i> Back</a>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold"><?= $title ?></h2>
                <h4 class="grey">Mahasiswa</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h1 class="mb-2"><b>Selamat datang di helpdesk Magenta Media Center!</b></h1>
                                <p>Pusat bantuan dan informasi internal untuk mahasiswa Fakultas Psikologi UNDIP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <a class="card" href="<?= base_url('helpdesk/tiket') ?>">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-bubbles danger disabled font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3><u>Ticketing</u></h3>
                                        <span>Ajukan pertanyaan spesifik & detail</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <a class="card" href="<?= base_url('helpdesk/hotline') ?>">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-call-end success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3><u>WhatsApp Hotline</u></h3>
                                        <span>Kontak segera secara langsung</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h2 class="mb-0 d-inline-block font-weight-bold">FAQ (Frequently Asked Question)</h2>
                <h4 class="grey">Pertanyaan dan Jawaban</h4>
            </div>
        </div>
        <hr class="mb-2 mt-0">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                                <div class="card collapse-icon panel mb-0 box-shadow-0 border-0">
                                    <div role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                        <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion12" aria-expanded="false" aria-controls="accordion12" class="h6 blue collapsed">Bagaimana prosedur untuk mengajukan banding UKT?</a>
                                    </div>
                                    <div id="accordion12" role="tabpanel" aria-labelledby="heading12" class="collapse" aria-expanded="false">
                                        <div class="card-body">
                                            <p class="card-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                                        </div>
                                    </div>
                                    <div id="heading13" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                        <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion13" aria-expanded="false" aria-controls="accordion13" class="h6 blue collapsed">Kapan batas waktu mengajukan pembatalan SKS semester genap?</a>
                                    </div>
                                    <div id="accordion13" role="tabpanel" aria-labelledby="heading13" class="collapse" aria-expanded="false">
                                        <div class="card-body">
                                            <p class="card-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                                        </div>
                                    </div>
                                    <div id="heading14" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                        <a data-toggle="collapse" data-parent="#accordionWrap1" href="#accordion14" aria-expanded="false" aria-controls="accordion14" class="h6 blue collapsed">Apakah Fakultas Psikologi akan membangun kantin?</a>
                                    </div>
                                    <div id="accordion14" role="tabpanel" aria-labelledby="heading14" class="card-collapse collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="card-body">
                                            <p class="card-text">Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée candy canes carrot cake chupa chups danish cake sugar plum candy.</p>
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
</div>