<div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row" style="margin-top:0px; margin-left:0px;">
        <div class="flot-chart-content" id="flot-chart-pie"></div>
        <div id="" style="width: 800px; height: 500px; margin-left:500px; margin-top:-620px;"></div>
    </div>
</div>

<!-- <div class="row" style="margin-top:-50px; margin-left:-100px;">
    <div class="flot-chart-content" id="flot-chart-pie"></div>
    <div id="" style="width: 800px; height: 500px; margin-left:500px; margin-top:-620px;"></div>
</div> -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart1);
    // Draw the chart and set the chart values
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Type', 'Jumlah'],
            <?php foreach ($pie_sr as $row) {
                $hasil = array(
                    $type = $row->type,
                    $jumlah = $row->jumlah,
                );
                extract($hasil);
                echo "['{$type}', {$jumlah}],";
            }
            ?>
        ]);
        // Optional; add a title and set the width and height of the chart
        var options = {
            'title': 'Service Request',
            'is3D': true,
            'width': 550,
            'height': 550
        };
        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('flot-chart-pie'));
        chart.draw(data, options);
    }

    function drawChart1() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2004', 1000, 400],
            ['2005', 1170, 460],
            ['2006', 660, 1120],
            ['2007', 1030, 540]
        ]);

        var options = {
            title: 'Company Performance',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>