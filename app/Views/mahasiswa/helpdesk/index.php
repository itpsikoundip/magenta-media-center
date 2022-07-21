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
                    <a class="card" href="<?= base_url('mahasiswa/helpdesk/tiket') ?>">
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
                    <a class="card" href="<?= base_url('mahasiswa/helpdesk/hotline') ?>">
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
                            <ul class="nav nav-tabs nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Akademik</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Non-akademik</a>
                                </li>
                            </ul>
                            <div class="tab-content px-1 pt-1">
                                <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                    <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                                        <div class="card collapse-icon panel mb-0 box-shadow-0 border-0">
                                            <?php 
                                            $i = 1;
                                            foreach($faqs_akdm as $faq){
                                            ?>

                                            <div id="heading<?php echo $i ?>" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                <a data-toggle="collapse" data-parent="#accordion<?php echo $i ?>" href="#accordion<?php echo $i ?>" aria-expanded="false" aria-controls="accordion<?php echo $i ?>" class="h6 blue collapsed">
                                                    <b><?php echo $faq->pertanyaan?></b>
                                                </a>
                                            </div>
                                            <div id="accordion<?php echo $i ?>" role="tabpanel" aria-labelledby="heading<?php echo $i ?>" class="collapse" aria-expanded="false">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <?php echo $faq->jawaban?>
                                                    </p>
                                                </div>
                                            </div>

                                            <?php
                                            $i++;
                                            } 
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                    <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                                        <div class="card collapse-icon panel mb-0 box-shadow-0 border-0">
                                            <?php 
                                            $i = 1;
                                            foreach($faqs_nonakdm as $faq){
                                            ?>

                                            <div id="heading<?php echo $i ?>" role="tab" class="card-header border-bottom-blue-grey border-bottom-lighten-4">
                                                <a data-toggle="collapse" data-parent="#accordion<?php echo $i ?>" href="#accordion<?php echo $i ?>" aria-expanded="false" aria-controls="accordion<?php echo $i ?>" class="h6 blue collapsed">
                                                    <b><?php echo $faq->pertanyaan?></b>
                                                </a>
                                            </div>
                                            <div id="accordion<?php echo $i ?>" role="tabpanel" aria-labelledby="heading<?php echo $i ?>" class="collapse" aria-expanded="false">
                                                <div class="card-body">
                                                    <p class="card-text">
                                                        <?php echo $faq->jawaban?>
                                                    </p>
                                                </div>
                                            </div>

                                            <?php
                                            $i++;
                                            } 
                                            ?>
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