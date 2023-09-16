
    <!-- jQuery -->
    <script src="<?php echo base_url('assets');?>/backend/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="<?php echo base_url('assets');?>/backend/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('assets');?>/backend/vendors/echarts/dist/echarts.min.js"></script>
        <!-- Datatables -->
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo base_url('assets');?>/backend/vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets');?>/backend/build/js/custom.min.js"></script>
        <!-- Chart.js -->
        <script src="<?php echo base_url('assets');?>/backend/vendors/Chart.js/dist/Chart.min.js"></script>
        <script src="<?php echo base_url('assets');?>/frontend/js/scripts.js"></script>

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
</script>
<script>
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
var chartDataReq = <?php echo json_encode($data_grafik_limbah); ?>;

// Define the labels and datasets
var labels = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
var datasets = [];
var datasets_req = [];

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

chartDataReq.forEach(function(item, index) {
    datasets_req.push({
        label: item.nama_jenis,
        backgroundColor: getRandomColor(),
        data: [
            parseFloat(item.volume_limbah_jan).toFixed(2),
            parseFloat(item.volume_limbah_feb).toFixed(2),
            parseFloat(item.volume_limbah_mar).toFixed(2),
            parseFloat(item.volume_limbah_apr).toFixed(2),
            parseFloat(item.volume_limbah_mei).toFixed(2),
            parseFloat(item.volume_limbah_jun).toFixed(2),
            parseFloat(item.volume_limbah_jul).toFixed(2),
            parseFloat(item.volume_limbah_agu).toFixed(2),
            parseFloat(item.volume_limbah_sep).toFixed(2),
            parseFloat(item.volume_limbah_okt).toFixed(2),
            parseFloat(item.volume_limbah_nov).toFixed(2),
            parseFloat(item.volume_limbah_des).toFixed(2)
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
var ctx = document.getElementById("myBarChart1").getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: datasets_req
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
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    </body>
</html>