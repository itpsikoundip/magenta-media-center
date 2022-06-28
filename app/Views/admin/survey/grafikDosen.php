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
            title: 'Apakah Dosen menerangkan dengan baik',
            width: 400,
            height: 300
        };

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
    }

    // Callback that draws the pie chart for Anthony's pizza.
    function drawAnthonyChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Indikator');
        data.addColumn('number', 'Skor');
        data.addRows([
            ['Sangat Baik', 1],
            ['Baik', 2],
            ['Cukup', 3],
            ['Buruk', 4],
            ['Sangat Buruk', 5]
        ]);

        // Set options for Anthony's pie chart.
        var options = {
            title: 'Apakah dosen memberi tugas sesuai',
            width: 400,
            height: 300
        };

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
        chart.draw(data, options);
    }

    function drawJuanChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Indikator');
        data.addColumn('number', 'Skor');
        data.addRows([
            ['Sangat Baik', 1],
            ['Baik', 5],
            ['Cukup', 2],
            ['Buruk', 4],
            ['Sangat Buruk', 3]
        ]);

        // Set options for Anthony's pie chart.


        var options = {
            title: 'Apakah dosen mengerti materi',
            width: 400,
            height: 300
        };

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Juan_chart_div'));
        chart.draw(data, options);
    }
</script>

<div class="app-content content">
    <div class="content-wrapper">
        <table class="columns">
            <tr>
                <td>
                    <div id="Sarah_chart_div" style="border: 1px solid #ccc"></div>
                </td>
                <td>
                    <div id="Anthony_chart_div" style="border: 1px solid #ccc"></div>
                </td>
                <td>
                    <div id="Juan_chart_div" style="border: 1px solid #ccc"></div>
                </td>
            </tr>
        </table>
    </div>
</div>