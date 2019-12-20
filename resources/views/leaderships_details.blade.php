<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

   

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.2.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.56/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.56/vfs_fonts.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>

   <style>
     body{
         margin: 20px;
         
     }
     .dt-buttons
     {
        margin-top: 38px;
     }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
        <table id="profile" class="display">
                <thead>
                    <tr>
                        <th>Differentiation factors</th>
                        <th>Attractiveness to customer</th>
                        <th>Compared to sector average</th>
                        <th>Effort in maintaining lead</th>
                        <th>Position</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ships as $ship)
                        
                    <tr>
                    <td class="question">{{$ship->question}}</td>
                    <td style="text-align:center" class="attract">{{$ship->attractiveness}}</td>
                    <td style="text-align:center" class="sector">{{$ship->sector}}</td>
                    <td style="text-align:center" class="mainting">{{$ship->mainting}}</td>
                    <td style="text-align:center" class="position">{{$ship->position}}</td>
                    <td style="text-align:center">{{$ship->comment}}</td>

                    </tr>

                    @endforeach

                    
                </tbody>
            </table>
            </div>
            <div class="col-2"></div>
            <div class="col-md-5" style="margin-top: 9%;">
                    <div class="chart-container">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
        </div>
    </div>

    <script>

        $(document).ready( function () {
            $('#profile').DataTable( {
                aLengthMenu: [
                    [5,10,25, 50, 100, 200, -1],
                    [5,10,25, 50, 100, 200, "All"]
                ],
                iDisplayLength: -1,
                "ordering": false,
                dom: 'lBfrtip',

                buttons: [
                    'copyHtml5', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
                ]
            } );
            var label=[];
            var attract=[];
            var sector=[];
            var mainting=[];
            var position=[];
            $('.question').each(function(i, obj) {
              label.push($(this).text().split(' ').slice(0,3).join(' ')+'...');
              attract.push($(this).siblings(".attract").text());
              sector.push($(this).siblings(".sector").text());
              mainting.push($(this).siblings(".mainting").text());
              position.push($(this).siblings(".position").text());

            });
 var barOptions_stacked = {
    tooltips: {
        enabled: false
    },
    hover: {
        animationDuration: 0
    },
    scales: {
        xAxes: [{
            ticks: {
                beginAtZero: true,
                fontFamily: "'Open Sans Bold', sans-serif",
                fontSize: 11
            },
            scaleLabel: {
                display: false
            },
            gridLines: {},
            stacked: true
        }],
        yAxes: [{
            gridLines: {
                display: false,
                color: "#fff",
                zeroLineColor: "#fff",
                zeroLineWidth: 0,
            },
            ticks: {
                fontFamily: "'Open Sans Bold', sans-serif",
                fontSize: 11
            },
            stacked: true
        }]
    },
    legend: {
        display: false
    },

    animation: {
        onComplete: function() {
            var chartInstance = this.chart;
            var ctx = chartInstance.ctx;
            ctx.textAlign = "center";
            ctx.font = "9px Open Sans";
            ctx.fillStyle = "#fff";

            Chart.helpers.each(this.data.datasets.forEach(function(dataset, i) {
                var meta = chartInstance.controller.getDatasetMeta(i);
                Chart.helpers.each(meta.data.forEach(function(bar, index) {
                    data = dataset.data[index];
                    if (i == 2) {
                        ctx.fillText(data, bar._model.x - 30, bar._model.y + 4);
                    } else {
                        ctx.fillText(data, bar._model.x - 15, bar._model.y + 4);
                    }
                }), this)
            }), this);
        }
    },
    pointLabelFontFamily: "Quadon Extra Bold",
    scaleFontFamily: "Quadon Extra Bold",
};


//chart of industary leadership
var ctx1 = document.getElementById("chart1");
var myChart1 = new Chart(ctx1, {
    type: 'horizontalBar',
    data: {
        labels: label,

        datasets: [{
            data: attract,
            backgroundColor: "#0080FF",
            hoverBackgroundColor: "#0080FF"
        }, {
            data: sector,
            backgroundColor: "#009900",
            hoverBackgroundColor: "#009900"
        }, {
            data: mainting,

            backgroundColor: "rgba(63,203,226,1)",
            hoverBackgroundColor: "rgba(46,185,235,1)"
        }, {
            data: position,
            backgroundColor: "#FF0000",
            hoverBackgroundColor: "#FF0000"
        }, ]
    },

    options: barOptions_stacked,
});
} );

    </script>
</body>
</html>