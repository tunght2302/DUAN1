<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Ngày', 'Doanh Thu'],
                <?php
                $tongdm = count($listthongke);
                $i = 1;
                foreach ($listthongke as $tk) {
                    extract($tk);
                    if ($i == $tongdm) $dauphay = "";
                    else $dauphay = ",";
                    echo "['" . $tk['ngaydathang'] . "', " . $tk['total'] . "]" . $dauphay;
                    $i += 1;
                }
                ?>
            ]);

            var options = {
                title: 'Thống Kê Theo Doanh Thu'
            };

            var chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>

</body>

</html>