<div class="row">
    <div class="row formtitle">
        <h1>BIỂU ĐỒ</h1>
    </div>
    <div class="row">
        <div id="myChart" style="width:100%; width:800px; height:500px; align-items: center">
        </div>
        
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Set Data
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng'],
                    <?php foreach ($thongke_chart as $tk) {
                        extract($tk);
                    echo "['$name', $soluong],";
                     } ?>
                ]);

                // Set Options
                const options = {
                    title: 'Số lượng sản phẩm trong mỗi danh mục',
                    is3D: true
                };

                // Draw
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>

    </div>
</div>