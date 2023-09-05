<script>
var salesData = <?php echo json_encode($data_grafik); ?>;
    // var chartDom = document.getElementById('bar-chart');
    // var myChart = echarts.init(chartDom);
    // var option;

    // option = {
    //     tooltip: {
    //         trigger: 'axis',
    //         axisPointer: {
    //             type: 'shadow'
    //         }
    //     },
    //     grid: {
    //         left: '3%',
    //         right: '4%',
    //         bottom: '3%',
    //         containLabel: true
    //     },
    //     xAxis: [{
    //         type: 'category',
    //         data: salesData.map(item => item.nama_bkimia),
    //         axisTick: {
    //             alignWithLabel: true
    //         }
    //     }],
    //     yAxis: [{
    //         type: 'value'
    //     }],
    //     series: [{
    //         name: 'Direct',
    //         type: 'bar',
    //         barWidth: '60%',
    //         data: salesData.map(item => item.volume_bkimia)
    //     }]
    // };

    // option && myChart.setOption(option);

    // Buat instance ECharts untuk grafik lingkaran
    // var pieChartContainer = document.getElementById('pie-chart');
    // var pieChart = echarts.init(pieChartContainer);

    // Konfigurasi untuk grafik lingkaran
    // var pieOption = {
    //     tooltip: {
    //         trigger: 'item',
    //         formatter: "{a} <br/>{b} : {c} ({d}%)"
    //     },
    //     legend: {
    //         x: 'center',
    //         y: 'bottom',
    //         data: salesData.map(item => item.nama_bkimia) // Menggunakan data nama_bkimia sebagai data di legenda
    //     },
    //     toolbox: {
    //         show: true,
    //         feature: {
    //             magicType: {
    //                 show: true,
    //                 type: ['pie', 'funnel']
    //             },
    //             restore: {
    //                 show: true,
    //                 title: "Restore"
    //             },
    //             saveAsImage: {
    //                 show: true,
    //                 title: "Save Image"
    //             }
    //         }
    //     },
    //     calculable: true,
    //     series: [{
    //         name: 'Area Mode',
    //         type: 'pie',
    //         radius: [25, 90],
    //         center: ['50%', '50%'], // Tengahkan grafik secara horizontal dan vertikal
    //         roseType: 'area',
    //         max: 40,
    //         sort: 'ascending',
    //         data: salesData.map(item => ({value: item.volume_bkimia, name: item.nama_bkimia})) // Menggunakan data nama_bkimia sebagai nama dan data volume_bkimia sebagai nilai grafik lingkaran
    //     }]
    // };

    // Set opsi konfigurasi ke grafik lingkaran
    // pieChart.setOption(pieOption);

    // Function to generate random color
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Extract the data from the PHP variable
        var chartData = <?php echo json_encode($data_grafik); ?>;

        // Define the labels and datasets
        var labels = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        var datasets = [];

        // Create a dataset for each nama_bkimia
        chartData.forEach(function(item, index) {
            datasets.push({
                label: item.nama_bkimia,
                backgroundColor: getRandomColor(),
                data: [
                    parseFloat(item.volume_bkimia_jan).toFixed(2),
                    parseFloat(item.volume_bkimia_feb).toFixed(2),
                    parseFloat(item.volume_bkimia_mar).toFixed(2),
                    parseFloat(item.volume_bkimia_apr).toFixed(2),
                    parseFloat(item.volume_bkimia_mei).toFixed(2),
                    parseFloat(item.volume_bkimia_jun).toFixed(2),
                    parseFloat(item.volume_bkimia_jul).toFixed(2),
                    parseFloat(item.volume_bkimia_agu).toFixed(2),
                    parseFloat(item.volume_bkimia_sep).toFixed(2),
                    parseFloat(item.volume_bkimia_okt).toFixed(2),
                    parseFloat(item.volume_bkimia_nov).toFixed(2),
                    parseFloat(item.volume_bkimia_des).toFixed(2)
                ]
            });
        });

        // Create the bar chart using Chart.js
        var ctx = document.getElementById("myBarChart").getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: datasets
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>