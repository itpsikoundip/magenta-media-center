<div class="bg-input h-100">
    <div class="app-content content">
        <div class="loader">
            <img src="<?php echo base_url('/images/loading.gif') ?>" alt="Loading..." />
        </div>
        <div class="container mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="text-center mb-3 mt-2"><b>Terima kasih telah mengisi survey</b></h1>
                    <div class="doneSurvey text-center">
                        <img src="<?php echo base_url('/images/done.gif') ?>" alt="done" />
                    </div>
                    <h3 class="text-center mb-2"><?= $nama ?></h3>
                    <?php if ($who == 1) : ?>
                        <div class="col text-center">
                            <a class="btn btn-primary rounded-circle p-1 mb-1" href="<?php echo base_url('/mahasiswa/survey/selectdosen') ?>" role="button" style="background-color: #f1457e !important; border: 0 !important;">
                                <i class="ft-chevron-left"></i>
                            </a>
                        </div>
                    <?php elseif ($who == 2) : ?>
                        <div class="col text-center">
                            <a class="btn btn-primary rounded-circle p-1 mb-1" href="<?php echo base_url('/mahasiswa/survey/selectkepend') ?>" role="button" style="background-color: #f1457e !important; border: 0 !important;">
                                <i class="ft-chevron-left"></i>
                            </a>
                        </div>
                    <?php else : ?>
                        <div class="col text-center">
                            <a class="btn btn-primary rounded-circle p-1 mb-1" href="<?php echo base_url('/mahasiswa/survey/menudisplay/2') ?>" role="button" style="background-color: #f1457e !important; border: 0 !important;">
                                <i class="ft-chevron-left"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    window.addEventListener("load", function() {
        const loader = document.querySelector(".loader");
        loader.className += " hidden"; // class "loader hidden"
    });
</script>