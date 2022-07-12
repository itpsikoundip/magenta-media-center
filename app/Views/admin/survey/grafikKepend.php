<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="card">
                <!-- <h1 class="ml-2 mt-2"><b>Grafik Dosen Psikologi UNDIP</b></h1> -->
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <?php
                            if ($arrayPertanyaan == "Tidak ada pertanyaan survey kependidikan") {
                                echo '<br><br>';
                                echo '<b class="m-auto">' . $arrayPertanyaan . '</b>';
                                echo '<br>';
                                echo '<a class="btn btn-primary m-auto" href="/surveykepend" role="button" style="background-color: #f1457e !important; border: 0 !important;">
                                Tambah Pertanyaan</a>';
                                echo '<br>';
                            } else {
                                if (count($arrayPertanyaan) <= 5) {
                                    $numbering = 1;
                                    for ($i = 0; $i < count($arrayPertanyaan); $i++) :
                                        echo '<td>';
                                        echo '<div class="chartBox" style="width: 290px;">';
                                        echo '<canvas id="Q' . $numbering++ . '"></canvas>';
                                        echo '<br>';
                                        echo "<p class='text-center'><b>" . $arrayPertanyaan[$i] . "</b></p>";
                                        echo '</div>';
                                        echo '</td>';
                                    endfor;
                                } else {
                                    $numbering = 1;
                                    for ($i = 0; $i < 5; $i++) :
                                        echo '<td>';
                                        echo '<div class="chartBox" style="width: 290px;">';
                                        echo '<canvas id="Q' . $numbering++ . '"></canvas>';
                                        echo '<br>';
                                        echo "<p class='text-center'><b>" . $arrayPertanyaan[$i] . "</b></p>";
                                        echo '</div>';
                                        echo '</td>';
                                    endfor;
                                }
                            }
                            ?>
                        <tr>
                            <?php
                            if ($arrayPertanyaan == "Tidak ada pertanyaan survey kependidikan") {
                            } else {
                                if (count($arrayPertanyaan) > 5) {
                                    $numbering = 6;
                                    for ($i = 5; $i < count($arrayPertanyaan); $i++) :
                                        echo '<td>';
                                        echo '<div class="chartBox" style="width: 290px;">';
                                        echo '<canvas id="Q' . $numbering++ . '"></canvas>';
                                        echo '<br>';
                                        echo "<p class='text-center'><b>" . $arrayPertanyaan[$i] . "</b></p>";
                                        echo '</div>';
                                        echo '</td>';
                                    endfor;
                                } else {
                                    echo '';
                                }
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    <?php
    if ($arrayPertanyaan == "Tidak ada pertanyaan survey kependidikan") {
        echo '<p>' . $arrayPertanyaan . '</P>';
    } else { ?>
        var bgColor = ["#0096FF", "#008080", "#f28500", "#ff6361", "#ff0000 "];
        var labels = ["Sangat Baik", "Baik", "Cukup", "Buruk", "Sangat Buruk"];

        <?php
        $valueSangatBaik = json_decode(json_encode($sumSangatBaik), true);
        $valueBaik = json_decode(json_encode($sumBaik), true);
        $valueCukup = json_decode(json_encode($sumCukup), true);
        $valueBuruk = json_decode(json_encode($sumBuruk), true);
        $valueSangatBuruk = json_decode(json_encode($sumSangatBuruk), true);

        if (count($arrayPertanyaan) == 1) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(0, 0, 0, 0, 0);
            $dataset3 = array(0, 0, 0, 0, 0);
            $dataset4 = array(0, 0, 0, 0, 0);
            $dataset5 = array(0, 0, 0, 0, 0);
            $dataset6 = array(0, 0, 0, 0, 0);
            $dataset7 = array(0, 0, 0, 0, 0);
            $dataset8 = array(0, 0, 0, 0, 0);
            $dataset9 = array(0, 0, 0, 0, 0);
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 2) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(0, 0, 0, 0, 0);
            $dataset4 = array(0, 0, 0, 0, 0);
            $dataset5 = array(0, 0, 0, 0, 0);
            $dataset6 = array(0, 0, 0, 0, 0);
            $dataset7 = array(0, 0, 0, 0, 0);
            $dataset8 = array(0, 0, 0, 0, 0);
            $dataset9 = array(0, 0, 0, 0, 0);
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 3) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(
                $valueSangatBaik[2][0]["sangat_baik"],
                $valueBaik[2][0]["baik"],
                $valueCukup[2][0]["cukup"],
                $valueBuruk[2][0]["buruk"],
                $valueSangatBuruk[2][0]["sangat_buruk"]
            );
            $dataset4 = array(0, 0, 0, 0, 0);
            $dataset5 = array(0, 0, 0, 0, 0);
            $dataset6 = array(0, 0, 0, 0, 0);
            $dataset7 = array(0, 0, 0, 0, 0);
            $dataset8 = array(0, 0, 0, 0, 0);
            $dataset9 = array(0, 0, 0, 0, 0);
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 4) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(
                $valueSangatBaik[2][0]["sangat_baik"],
                $valueBaik[2][0]["baik"],
                $valueCukup[2][0]["cukup"],
                $valueBuruk[2][0]["buruk"],
                $valueSangatBuruk[2][0]["sangat_buruk"]
            );
            $dataset4 = array(
                $valueSangatBaik[3][0]["sangat_baik"],
                $valueBaik[3][0]["baik"],
                $valueCukup[3][0]["cukup"],
                $valueBuruk[3][0]["buruk"],
                $valueSangatBuruk[3][0]["sangat_buruk"]
            );
            $dataset5 = array(0, 0, 0, 0, 0);
            $dataset6 = array(0, 0, 0, 0, 0);
            $dataset7 = array(0, 0, 0, 0, 0);
            $dataset8 = array(0, 0, 0, 0, 0);
            $dataset9 = array(0, 0, 0, 0, 0);
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 5) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(
                $valueSangatBaik[2][0]["sangat_baik"],
                $valueBaik[2][0]["baik"],
                $valueCukup[2][0]["cukup"],
                $valueBuruk[2][0]["buruk"],
                $valueSangatBuruk[2][0]["sangat_buruk"]
            );
            $dataset4 = array(
                $valueSangatBaik[3][0]["sangat_baik"],
                $valueBaik[3][0]["baik"],
                $valueCukup[3][0]["cukup"],
                $valueBuruk[3][0]["buruk"],
                $valueSangatBuruk[3][0]["sangat_buruk"]
            );
            $dataset5 = array(
                $valueSangatBaik[4][0]["sangat_baik"],
                $valueBaik[4][0]["baik"],
                $valueCukup[4][0]["cukup"],
                $valueBuruk[4][0]["buruk"],
                $valueSangatBuruk[4][0]["sangat_buruk"]
            );
            $dataset6 = array(0, 0, 0, 0, 0);
            $dataset7 = array(0, 0, 0, 0, 0);
            $dataset8 = array(0, 0, 0, 0, 0);
            $dataset9 = array(0, 0, 0, 0, 0);
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 6) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(
                $valueSangatBaik[2][0]["sangat_baik"],
                $valueBaik[2][0]["baik"],
                $valueCukup[2][0]["cukup"],
                $valueBuruk[2][0]["buruk"],
                $valueSangatBuruk[2][0]["sangat_buruk"]
            );
            $dataset4 = array(
                $valueSangatBaik[3][0]["sangat_baik"],
                $valueBaik[3][0]["baik"],
                $valueCukup[3][0]["cukup"],
                $valueBuruk[3][0]["buruk"],
                $valueSangatBuruk[3][0]["sangat_buruk"]
            );
            $dataset5 = array(
                $valueSangatBaik[4][0]["sangat_baik"],
                $valueBaik[4][0]["baik"],
                $valueCukup[4][0]["cukup"],
                $valueBuruk[4][0]["buruk"],
                $valueSangatBuruk[4][0]["sangat_buruk"]
            );
            $dataset6 = array(
                $valueSangatBaik[5][0]["sangat_baik"],
                $valueBaik[5][0]["baik"],
                $valueCukup[5][0]["cukup"],
                $valueBuruk[5][0]["buruk"],
                $valueSangatBuruk[5][0]["sangat_buruk"]
            );
            $dataset7 = array(0, 0, 0, 0, 0);
            $dataset8 = array(0, 0, 0, 0, 0);
            $dataset9 = array(0, 0, 0, 0, 0);
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 7) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(
                $valueSangatBaik[2][0]["sangat_baik"],
                $valueBaik[2][0]["baik"],
                $valueCukup[2][0]["cukup"],
                $valueBuruk[2][0]["buruk"],
                $valueSangatBuruk[2][0]["sangat_buruk"]
            );
            $dataset4 = array(
                $valueSangatBaik[3][0]["sangat_baik"],
                $valueBaik[3][0]["baik"],
                $valueCukup[3][0]["cukup"],
                $valueBuruk[3][0]["buruk"],
                $valueSangatBuruk[3][0]["sangat_buruk"]
            );
            $dataset5 = array(
                $valueSangatBaik[4][0]["sangat_baik"],
                $valueBaik[4][0]["baik"],
                $valueCukup[4][0]["cukup"],
                $valueBuruk[4][0]["buruk"],
                $valueSangatBuruk[4][0]["sangat_buruk"]
            );
            $dataset6 = array(
                $valueSangatBaik[5][0]["sangat_baik"],
                $valueBaik[5][0]["baik"],
                $valueCukup[5][0]["cukup"],
                $valueBuruk[5][0]["buruk"],
                $valueSangatBuruk[5][0]["sangat_buruk"]
            );
            $dataset7 = array(
                $valueSangatBaik[6][0]["sangat_baik"],
                $valueBaik[6][0]["baik"],
                $valueCukup[6][0]["cukup"],
                $valueBuruk[6][0]["buruk"],
                $valueSangatBuruk[6][0]["sangat_buruk"]
            );
            $dataset8 = array(0, 0, 0, 0, 0);
            $dataset9 = array(0, 0, 0, 0, 0);
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 8) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(
                $valueSangatBaik[2][0]["sangat_baik"],
                $valueBaik[2][0]["baik"],
                $valueCukup[2][0]["cukup"],
                $valueBuruk[2][0]["buruk"],
                $valueSangatBuruk[2][0]["sangat_buruk"]
            );
            $dataset4 = array(
                $valueSangatBaik[3][0]["sangat_baik"],
                $valueBaik[3][0]["baik"],
                $valueCukup[3][0]["cukup"],
                $valueBuruk[3][0]["buruk"],
                $valueSangatBuruk[3][0]["sangat_buruk"]
            );
            $dataset5 = array(
                $valueSangatBaik[4][0]["sangat_baik"],
                $valueBaik[4][0]["baik"],
                $valueCukup[4][0]["cukup"],
                $valueBuruk[4][0]["buruk"],
                $valueSangatBuruk[4][0]["sangat_buruk"]
            );
            $dataset6 = array(
                $valueSangatBaik[5][0]["sangat_baik"],
                $valueBaik[5][0]["baik"],
                $valueCukup[5][0]["cukup"],
                $valueBuruk[5][0]["buruk"],
                $valueSangatBuruk[5][0]["sangat_buruk"]
            );
            $dataset7 = array(
                $valueSangatBaik[6][0]["sangat_baik"],
                $valueBaik[6][0]["baik"],
                $valueCukup[6][0]["cukup"],
                $valueBuruk[6][0]["buruk"],
                $valueSangatBuruk[6][0]["sangat_buruk"]
            );
            $dataset8 = array(
                $valueSangatBaik[7][0]["sangat_baik"],
                $valueBaik[7][0]["baik"],
                $valueCukup[7][0]["cukup"],
                $valueBuruk[7][0]["buruk"],
                $valueSangatBuruk[7][0]["sangat_buruk"]
            );
            $dataset9 = array(0, 0, 0, 0, 0);
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 9) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(
                $valueSangatBaik[2][0]["sangat_baik"],
                $valueBaik[2][0]["baik"],
                $valueCukup[2][0]["cukup"],
                $valueBuruk[2][0]["buruk"],
                $valueSangatBuruk[2][0]["sangat_buruk"]
            );
            $dataset4 = array(
                $valueSangatBaik[3][0]["sangat_baik"],
                $valueBaik[3][0]["baik"],
                $valueCukup[3][0]["cukup"],
                $valueBuruk[3][0]["buruk"],
                $valueSangatBuruk[3][0]["sangat_buruk"]
            );
            $dataset5 = array(
                $valueSangatBaik[4][0]["sangat_baik"],
                $valueBaik[4][0]["baik"],
                $valueCukup[4][0]["cukup"],
                $valueBuruk[4][0]["buruk"],
                $valueSangatBuruk[4][0]["sangat_buruk"]
            );
            $dataset6 = array(
                $valueSangatBaik[5][0]["sangat_baik"],
                $valueBaik[5][0]["baik"],
                $valueCukup[5][0]["cukup"],
                $valueBuruk[5][0]["buruk"],
                $valueSangatBuruk[5][0]["sangat_buruk"]
            );
            $dataset7 = array(
                $valueSangatBaik[6][0]["sangat_baik"],
                $valueBaik[6][0]["baik"],
                $valueCukup[6][0]["cukup"],
                $valueBuruk[6][0]["buruk"],
                $valueSangatBuruk[6][0]["sangat_buruk"]
            );
            $dataset8 = array(
                $valueSangatBaik[7][0]["sangat_baik"],
                $valueBaik[7][0]["baik"],
                $valueCukup[7][0]["cukup"],
                $valueBuruk[7][0]["buruk"],
                $valueSangatBuruk[7][0]["sangat_buruk"]
            );
            $dataset9 = array(
                $valueSangatBaik[8][0]["sangat_baik"],
                $valueBaik[8][0]["baik"],
                $valueCukup[8][0]["cukup"],
                $valueBuruk[8][0]["buruk"],
                $valueSangatBuruk[8][0]["sangat_buruk"]
            );
            $dataset10 = array(0, 0, 0, 0, 0);
        } elseif (count($arrayPertanyaan) == 10) {
            $dataset1 = array(
                $valueSangatBaik[0][0]["sangat_baik"],
                $valueBaik[0][0]["baik"],
                $valueCukup[0][0]["cukup"],
                $valueBuruk[0][0]["buruk"],
                $valueSangatBuruk[0][0]["sangat_buruk"]
            );
            $dataset2 = array(
                $valueSangatBaik[1][0]["sangat_baik"],
                $valueBaik[1][0]["baik"],
                $valueCukup[1][0]["cukup"],
                $valueBuruk[1][0]["buruk"],
                $valueSangatBuruk[1][0]["sangat_buruk"]
            );
            $dataset3 = array(
                $valueSangatBaik[2][0]["sangat_baik"],
                $valueBaik[2][0]["baik"],
                $valueCukup[2][0]["cukup"],
                $valueBuruk[2][0]["buruk"],
                $valueSangatBuruk[2][0]["sangat_buruk"]
            );
            $dataset4 = array(
                $valueSangatBaik[3][0]["sangat_baik"],
                $valueBaik[3][0]["baik"],
                $valueCukup[3][0]["cukup"],
                $valueBuruk[3][0]["buruk"],
                $valueSangatBuruk[3][0]["sangat_buruk"]
            );
            $dataset5 = array(
                $valueSangatBaik[4][0]["sangat_baik"],
                $valueBaik[4][0]["baik"],
                $valueCukup[4][0]["cukup"],
                $valueBuruk[4][0]["buruk"],
                $valueSangatBuruk[4][0]["sangat_buruk"]
            );
            $dataset6 = array(
                $valueSangatBaik[5][0]["sangat_baik"],
                $valueBaik[5][0]["baik"],
                $valueCukup[5][0]["cukup"],
                $valueBuruk[5][0]["buruk"],
                $valueSangatBuruk[5][0]["sangat_buruk"]
            );
            $dataset7 = array(
                $valueSangatBaik[6][0]["sangat_baik"],
                $valueBaik[6][0]["baik"],
                $valueCukup[6][0]["cukup"],
                $valueBuruk[6][0]["buruk"],
                $valueSangatBuruk[6][0]["sangat_buruk"]
            );
            $dataset8 = array(
                $valueSangatBaik[7][0]["sangat_baik"],
                $valueBaik[7][0]["baik"],
                $valueCukup[7][0]["cukup"],
                $valueBuruk[7][0]["buruk"],
                $valueSangatBuruk[7][0]["sangat_buruk"]
            );
            $dataset9 = array(
                $valueSangatBaik[8][0]["sangat_baik"],
                $valueBaik[8][0]["baik"],
                $valueCukup[8][0]["cukup"],
                $valueBuruk[8][0]["buruk"],
                $valueSangatBuruk[8][0]["sangat_buruk"]
            );
            $dataset10 = array(
                $valueSangatBaik[9][0]["sangat_baik"],
                $valueBaik[9][0]["baik"],
                $valueCukup[9][0]["cukup"],
                $valueBuruk[9][0]["buruk"],
                $valueSangatBuruk[9][0]["sangat_buruk"]
            );
        }
        ?>

        const image = new Image();
        image.src = 'https://i.imgur.com/IRF4VxE.png';

        const addImage = {
            id: 'custom_canvas_background_image',
            beforeDraw: (chart) => {
                if (image.complete) {
                    const ctx = chart.ctx;
                    const {
                        top,
                        left,
                        width,
                        height
                    } = chart.chartArea;
                    const x = left + width / 2 - image.width / 2;
                    const y = top + height / 2 - image.height / 2;
                    ctx.drawImage(image, x, y);
                } else {
                    image.onload = () => chart.draw();
                }
            }
        };

        const data1 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset1[0]; ?>,
                    <?= $dataset1[1]; ?>,
                    <?= $dataset1[2]; ?>,
                    <?= $dataset1[3]; ?>,
                    <?= $dataset1[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config1 = {
            type: 'doughnut',
            data: data1,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data2 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset2[0]; ?>,
                    <?= $dataset2[1]; ?>,
                    <?= $dataset2[2]; ?>,
                    <?= $dataset2[3]; ?>,
                    <?= $dataset2[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config2 = {
            type: 'doughnut',
            data: data2,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data3 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset3[0]; ?>,
                    <?= $dataset3[1]; ?>,
                    <?= $dataset3[2]; ?>,
                    <?= $dataset3[3]; ?>,
                    <?= $dataset3[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config3 = {
            type: 'doughnut',
            data: data3,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data4 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset4[0]; ?>,
                    <?= $dataset4[1]; ?>,
                    <?= $dataset4[2]; ?>,
                    <?= $dataset4[3]; ?>,
                    <?= $dataset4[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config4 = {
            type: 'doughnut',
            data: data4,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data5 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset5[0]; ?>,
                    <?= $dataset5[1]; ?>,
                    <?= $dataset5[2]; ?>,
                    <?= $dataset5[3]; ?>,
                    <?= $dataset5[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config5 = {
            type: 'doughnut',
            data: data5,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data6 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset6[0]; ?>,
                    <?= $dataset6[1]; ?>,
                    <?= $dataset6[2]; ?>,
                    <?= $dataset6[3]; ?>,
                    <?= $dataset6[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config6 = {
            type: 'doughnut',
            data: data6,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data7 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset7[0]; ?>,
                    <?= $dataset7[1]; ?>,
                    <?= $dataset7[2]; ?>,
                    <?= $dataset7[3]; ?>,
                    <?= $dataset7[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config7 = {
            type: 'doughnut',
            data: data7,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data8 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset8[0]; ?>,
                    <?= $dataset8[1]; ?>,
                    <?= $dataset8[2]; ?>,
                    <?= $dataset8[3]; ?>,
                    <?= $dataset8[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config8 = {
            type: 'doughnut',
            data: data8,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data9 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset9[0]; ?>,
                    <?= $dataset9[1]; ?>,
                    <?= $dataset9[2]; ?>,
                    <?= $dataset9[3]; ?>,
                    <?= $dataset9[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config9 = {
            type: 'doughnut',
            data: data9,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const data10 = {
            labels: labels,
            datasets: [{

                data: [
                    <?= $dataset10[0]; ?>,
                    <?= $dataset10[1]; ?>,
                    <?= $dataset10[2]; ?>,
                    <?= $dataset10[3]; ?>,
                    <?= $dataset10[4]; ?>
                ],
                backgroundColor: bgColor
            }]
        };

        const config10 = {
            type: 'doughnut',
            data: data10,
            options: {
                plugins: {
                    datalabels: {
                        color: 'white',
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(0);
                            const display = [`${percentageValue}%`]
                            return display;
                        },
                        font: {
                            size: 13,
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels, addImage]
        };

        const Q1 = new Chart(
            document.getElementById('Q1'),
            config1
        );
        const Q2 = new Chart(
            document.getElementById('Q2'),
            config2
        );
        const Q3 = new Chart(
            document.getElementById('Q3'),
            config3
        );
        const Q4 = new Chart(
            document.getElementById('Q4'),
            config4
        );
        const Q5 = new Chart(
            document.getElementById('Q5'),
            config5
        );
        const Q6 = new Chart(
            document.getElementById('Q6'),
            config6
        );
        const Q7 = new Chart(
            document.getElementById('Q7'),
            config7
        );
        const Q8 = new Chart(
            document.getElementById('Q8'),
            config8
        );
        const Q9 = new Chart(
            document.getElementById('Q9'),
            config9
        );
        const Q10 = new Chart(
            document.getElementById('Q10'),
            config10
        );

    <?php } ?>
</script>