<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load Charts and the corechart package.
    google.charts.load('current', {
        'packages': ['corechart']
    });

    // Draw the pie chart for Sarah's pizza when Charts is loaded.
    google.charts.setOnLoadCallback(drawSarahChart);

    // Draw the pie chart for the Anthony's pizza when Charts is loaded.
    google.charts.setOnLoadCallback(drawAnthonyChart);

    google.charts.setOnLoadCallback(drawJuanChart);

    // Callback that draws the pie chart for Sarah's pizza.
    function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Indikator');
        data.addColumn('number', 'Skor');
        data.addRows([
            ['Sangat Baik', 5],
            ['Baik', 4],
            ['Cukup', 3],
            ['Buruk', 2],
            ['Sangat Buruk', 1]
        ]);

        // Set options for Sarah's pie chart.
        var options = {
            width: 400,
            height: 300
        };

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
    }
</script>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h1>Tabel Hasil Survey Tenaga Kependidikan</h1>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table id="tbl_dataHasilSurveyKepend" class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama Lengkap</th>
                                                <th>Pertanyaan Survey</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $numbering = 1;
                                            foreach ($dataHasilSurveyKepend as $key => $value) : ?>
                                                <tr>
                                                    <td><?= $key + 1 ?></td>
                                                    <td><?= $value->nip ?></td>
                                                    <td><?= $value->nama_lengkap ?></td>
                                                    <td><?= $value->pertanyaan ?></td>
                                                    <td>
                                                        <a href="#" class="badge badge-info" data-toggle="modal" data-target="#ModalHasilSurveyKepend"><i class="ft-bar-chart-2"></i> Hasil</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalHasilSurveyKepend" arta-labelledby="ModalEditSurveyKependLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalHasilSurveyKepend"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline-style: none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="Sarah_chart_div" style="border: 1px solid #ccc"></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tbl_dataHasilSurveyKepend').DataTable({});
    });
</script>