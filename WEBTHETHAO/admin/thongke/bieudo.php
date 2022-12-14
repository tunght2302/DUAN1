<!DOCTYPE html>
<html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered">
                        <div id="myChart" style="margin-left:300px">
                        </div>
                        <script>
                            google.charts.load('current', {
                                'packages': ['corechart']
                            });
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Danh Mục', 'Số Lượng Sản Phẩm'],
                                    <?php
                                    $tongdm = count($listthongke);
                                    $i = 1;
                                    foreach ($listthongke as $tk) {
                                        extract($tk);
                                        if ($i == $tongdm) $dauphay = "";
                                        else $dauphay = ",";
                                        echo "['" . $tk['tendm'] . "', " . $tk['countsp'] . "]" . $dauphay;
                                        $i += 1;
                                    }
                                    ?>

                                ]);

                                var options = {
                                    title: 'Biểu Đồ Thống Kê Theo Danh Mục'
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                                chart.draw(data, options);
                            }
                        </script>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>