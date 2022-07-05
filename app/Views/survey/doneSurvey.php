<div class="bg-input h-100">
    <div class="app-content content">
        <div class="loader">
            <img src="/images/loading.gif" alt="Loading..." />
        </div>
        <div class="container mt-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h1 class="text-center mb-3 mt-2"><b>Terima kasih telah mengisi survey</b></h1>
                    <div class="doneSurvey text-center">
                        <img src="/images/done.gif" alt="done" />
                    </div>
                    <h3 class="text-center mb-2"><?= $nama ?></h3>
                    <?php if ($isMhs == 1) : ?>
                        <div class="col text-center">
                            <a class="btn btn-primary rounded-circle p-1 mb-1" href="/menuDisplay/1" role="button" style="background-color: #f1457e !important; border: 0 !important;">
                                <i class="ft-chevron-left"></i>
                            </a>
                        </div>
                    <?php else : ?>
                        <div class="col text-center">
                            <a class="btn btn-primary rounded-circle p-1 mb-1" href="/menuDisplay/2" role="button" style="background-color: #f1457e !important; border: 0 !important;">
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