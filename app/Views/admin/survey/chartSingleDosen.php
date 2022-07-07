<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <?php $numbering = 1;
            $array = json_decode(json_encode($dataDosenFiltered), true);
            // dd($array);
            ?>
            <div class="chartBox" style="width: 300px;">
                <canvas id="Q1"></canvas>
                <p class="text-center">asdsad</p>
            </div>
            <div class="chartBox" style="width: 300px;">
                <canvas id="Q2"></canvas>
                <p class="text-center">asdsad</p>
            </div>
        </div>
    </div>
</div>

<script>
    var bgColor = ["#878BB6", "#FFEA88", "#FF8153", "#4ACAB4", "#c0504d"];
    var labels = ["Sangat Baik", "Baik", "Cukup", "Buruk", "Sangat Buruk"];
    <?php $array = json_decode(json_encode($dataDosenFiltered), true);
    for ($i = 0; $i < count($array); $i++) : ?>
        var sangatBaik = [
            <?= $array[$i]["sangat_baik"] ?>,
            <?= $array[$i]["baik"] ?>,
            <?= $array[$i]["cukup"] ?>,
            <?= $array[$i]["buruk"] ?>,
            <?= $array[$i]["sangat_buruk"] ?>
        ];

    <?php endfor; ?>
    const data = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: sangatBaik,
            backgroundColor: bgColor
        }]
    };

    const Config = {
        type: 'pie',
        data
    };

    const Q1 = new Chart(
        document.getElementById('Q1'),
        Config
    );

    const Q2 = new Chart(
        document.getElementById('Q2'),
        Config
    );
</script>