<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="card">
                <h1 class="ml-2 mt-2">Grafik Dosen Psikologi UNDIP</h1>
                <p id="demo"></p>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <?php
                            $numbering = 1;
                            for ($i = 0; $i < 5; $i++) :
                                echo '<td>';
                                echo '<div class="chartBox" style="width: 250px;">';
                                echo '<canvas id="Q' . $numbering++ . '"></canvas>';
                                echo '<br>';
                                echo "<p class='text-center'>" . $arrayPertanyaan[$i] . "</p>";
                                echo '</div>';
                                echo '</td>';
                            endfor; ?>
                        <tr>
                            <?php
                            $numbering = 6;
                            for ($i = 5; $i < 10; $i++) :
                                echo '<td>';
                                echo '<div class="chartBox" style="width: 250px;">';
                                echo '<canvas id="Q' . $numbering++ . '"></canvas>';
                                echo '<br>';
                                echo "<p class='text-center'>" . $arrayPertanyaan[$i] . "</p>";
                                echo '</div>';
                                echo '</td>';
                            endfor; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    var bgColor = ["#33ccff", "#95CD41", "#FFEA88", "#FF9F45", "#F68989"];
    var labels = ["Sangat Baik", "Baik", "Cukup", "Buruk", "Sangat Buruk"];

    <?php
    $valueSangatBaik = json_decode(json_encode($sumSangatBaik), true);
    $valueBaik = json_decode(json_encode($sumBaik), true);
    $valueCukup = json_decode(json_encode($sumCukup), true);
    $valueBuruk = json_decode(json_encode($sumBuruk), true);
    $valueSangatBuruk = json_decode(json_encode($sumSangatBuruk), true);

    ?>

    arrayConfig = [];

    var arrayPertanyaanJs = <?php echo json_encode($arrayPertanyaan); ?>; //Convert array php ke array js

    for (let i = 0; i < arrayPertanyaanJs.length; i++) {
        const config = {
            type: 'doughnut',
            data: data1,
            options: {
                plugins: {
                    datalabels: {
                        formatter: (value, context) => {
                            const datapoints = context.chart.data.datasets[0].data;

                            function totalSum(total, datapoint) {
                                return total + datapoint;
                            }
                            const totalValue = datapoints.reduce(totalSum, 0)
                            const percentageValue = (value / totalValue * 100).toFixed(1);
                            const display = [`${percentageValue}%`]
                            return display;
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        };
    }

    const data1 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[0][0]["sangat_baik"] ?>,
                <?= $valueBaik[0][0]["baik"] ?>,
                <?= $valueCukup[0][0]["cukup"] ?>,
                <?= $valueBuruk[0][0]["buruk"] ?>,
                <?= $valueSangatBuruk[0][0]["sangat_buruk"] ?>
            ],
            backgroundColor: bgColor
        }]
    };

    const config = {
        type: 'doughnut',
        data: data1,
        options: {
            plugins: {
                datalabels: {
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data2 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[1][0]["sangat_baik"] ?>,
                <?= $valueBaik[1][0]["baik"] ?>,
                <?= $valueCukup[1][0]["cukup"] ?>,
                <?= $valueBuruk[1][0]["buruk"] ?>,
                <?= $valueSangatBuruk[1][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data3 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[2][0]["sangat_baik"] ?>,
                <?= $valueBaik[2][0]["baik"] ?>,
                <?= $valueCukup[2][0]["cukup"] ?>,
                <?= $valueBuruk[2][0]["buruk"] ?>,
                <?= $valueSangatBuruk[2][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data4 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[3][0]["sangat_baik"] ?>,
                <?= $valueBaik[3][0]["baik"] ?>,
                <?= $valueCukup[3][0]["cukup"] ?>,
                <?= $valueBuruk[3][0]["buruk"] ?>,
                <?= $valueSangatBuruk[3][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data5 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[4][0]["sangat_baik"] ?>,
                <?= $valueBaik[4][0]["baik"] ?>,
                <?= $valueCukup[4][0]["cukup"] ?>,
                <?= $valueBuruk[4][0]["buruk"] ?>,
                <?= $valueSangatBuruk[4][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data6 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[5][0]["sangat_baik"] ?>,
                <?= $valueBaik[5][0]["baik"] ?>,
                <?= $valueCukup[5][0]["cukup"] ?>,
                <?= $valueBuruk[5][0]["buruk"] ?>,
                <?= $valueSangatBuruk[5][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data7 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[6][0]["sangat_baik"] ?>,
                <?= $valueBaik[6][0]["baik"] ?>,
                <?= $valueCukup[6][0]["cukup"] ?>,
                <?= $valueBuruk[6][0]["buruk"] ?>,
                <?= $valueSangatBuruk[6][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data8 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[7][0]["sangat_baik"] ?>,
                <?= $valueBaik[7][0]["baik"] ?>,
                <?= $valueCukup[7][0]["cukup"] ?>,
                <?= $valueBuruk[7][0]["buruk"] ?>,
                <?= $valueSangatBuruk[7][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data9 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[8][0]["sangat_baik"] ?>,
                <?= $valueBaik[8][0]["baik"] ?>,
                <?= $valueCukup[8][0]["cukup"] ?>,
                <?= $valueBuruk[8][0]["buruk"] ?>,
                <?= $valueSangatBuruk[8][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const data10 = {
        labels: labels,
        datasets: [{
            label: '# of Votes',
            data: [
                <?= $valueSangatBaik[9][0]["sangat_baik"] ?>,
                <?= $valueBaik[9][0]["baik"] ?>,
                <?= $valueCukup[9][0]["cukup"] ?>,
                <?= $valueBuruk[9][0]["buruk"] ?>,
                <?= $valueSangatBuruk[9][0]["sangat_buruk"] ?>
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
                    formatter: (value, context) => {
                        const datapoints = context.chart.data.datasets[0].data;

                        function totalSum(total, datapoint) {
                            return total + datapoint;
                        }
                        const totalValue = datapoints.reduce(totalSum, 0)
                        const percentageValue = (value / totalValue * 100).toFixed(1);
                        const display = [`${percentageValue}%`]
                        return display;
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    };

    const Q1 = new Chart(
        document.getElementById('Q1'),
        config
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
</script>