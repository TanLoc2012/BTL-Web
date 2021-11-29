<?php
	$title = 'Dashboard Page';
	$isActive = "Dashboard";
	require_once "mvc/utility/utility.php";
	require_once('blocks/header_admin.php');
    for($i=0;$i<12;$i++){
        echo '<p class="d-none" id="m'.$data["doanhthu"][$i]["MONTH(created_at)"].'">'.$data["doanhthu"][$i]["SUM(total_money)"].'<p>';
        echo '<p class="d-none" id="o'.$data["doanhthu"][$i]["MONTH(created_at)"].'">'.$data["doanhthu"][$i]["SUM(status)"].'<p>';
    }
?>

<div class="row">
    <div class="col-md-12">
        <h1>Dashboard</h1>
    </div>
</div>
<div class="container">
    <canvas id="myChart"></canvas>
    <canvas style="width:%" id="lineChart"></canvas>
</div>
<script>
    
    let myChart = document.getElementById('myChart').getContext('2d');
    // Global Options
    // biểu đồ
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';
    var m1 = document.getElementById("m1").innerHTML;
    var m2 = document.getElementById("m2").innerHTML;
    var m3 = document.getElementById("m3").innerHTML;
    var m4 = document.getElementById("m4").innerHTML;
    var m5 = document.getElementById("m5").innerHTML;
    var m6 = document.getElementById("m6").innerHTML;
    var m7 = document.getElementById("m7").innerHTML;
    var m8 = document.getElementById("m8").innerHTML;
    var m9 = document.getElementById("m9").innerHTML;
    var m10 = document.getElementById("m10").innerHTML;
    var m11 = document.getElementById("m11").innerHTML;
    var m12 = document.getElementById("m12").innerHTML;

    var o1 = document.getElementById("o1").innerHTML;
    var o2 = document.getElementById("o2").innerHTML;
    var o3 = document.getElementById("o3").innerHTML;
    var o4 = document.getElementById("o4").innerHTML;
    var o5 = document.getElementById("o5").innerHTML;
    var o6 = document.getElementById("o6").innerHTML;
    var o7 = document.getElementById("o7").innerHTML;
    var o8 = document.getElementById("o8").innerHTML;
    var o9 = document.getElementById("o9").innerHTML;
    var o10 = document.getElementById("o10").innerHTML;
    var o11 = document.getElementById("o11").innerHTML;
    var o12 = document.getElementById("o12").innerHTML;

    // Line chart
var ctxL = document.getElementById("lineChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October","November","December"],
        datasets: [
            {
                label: "Tổng số đơn hàng",
                data: [o1, o2, o3, o4, o5, o6, o7, o8,o9,o10,o11,o12],
                backgroundColor: 'rgba(66, 133, 244, 0.0)',
                borderColor: '#4285F4',
                borderWidth: 2,
                pointBorderColor: '#4285F4',
                pointBackgroundColor: '#4285F4',
                lineTension: 0.00,
            }
        ]
    },
    options: {
        title: {
                display: true,
                text: 'Thống kê đơn hàng hàng tháng',
                fontSize: 25,
            },
        responsive: true,
        legend: {
            display: true,
        },
        tooltips: {
            intersect: false,
            oode: 'index'
        },
        scales: {
            xAxes: [{
                stacked: true,
                gridLines: {
                    display: false,
                },

                ticks: {
                    fontColor: 'rgba(0,0,0, 0.5)',
                }
            }],
            yAxes: [{
                stacked: true,
                gridLines: {
                    borderDash: [2],
                    drawBorder: false,
                    zeroLineColor: "rgba(0,0,0,0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2]
                },
                ticks: {
                    fontColor: 'rgba(0,0,0, 0.5)'
                }
            }]
        }
    }
});

    let massPopChart = new Chart(myChart, {
        type: 'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Tổng số tiền bán hàng',
                data: [
                    m1,
                    m2,
                    m3,
                    m4,
                    m5,
                    m6,
                    m7,
                    m8,
                    m9,
                    m10,
                    m11,
                    m12
                ],
                //backgroundColor:'green',
                backgroundColor: [
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4',
                    '#4285f4'
                ],
                borderWidth: 1,
                borderColor: '#777',
                hoverBorderWidth: 3,
                hoverBorderColor: '#000'
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Thống kê doanh thu hàng tháng',
                fontSize: 25
            },
            legend: {
                display: true,
                position: 'right',
                labels: {
                    fontColor: '#000'
                }
            },
            layout: {
                padding: {
                    left: 50,
                    right: 0,
                    bottom: 0,
                    top: 0
                }
            },
            tooltips: {
                enabled: true
            }
        }
    });
</script>
<?php
	require_once('blocks/footer_admin.php');
?>