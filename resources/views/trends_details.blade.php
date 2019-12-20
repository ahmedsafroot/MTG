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
                    <div class="col-md-7">
        <table id="profile" class="display">
                <thead>
                    <tr>
                        <th>Observed Trend</th>
                        <th>Likely to continue</th>
                        <th>Revenue</th>
                        <th>Cost</th>
                        <th>Growth</th>
                        <th>Vs competitor</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trends as $trend)
                        
                    <tr>
                    <td class="question">{{$trend->observed}}</td>
                    <td style="text-align:center" class="continue">{{$trend->cont}}</td>
                    <td style="text-align:center" class="revenue">{{$trend->revenue}}</td>
                    <td style="text-align:center" class="cost">{{$trend->cost}}</td>
                    <td style="text-align:center" class="growth">{{$trend->growth}}</td>
                    <td style="text-align:center" class="comp">{{$trend->comp}}</td>
                    <td style="text-align:center">{{$trend->notes}}</td>

                    </tr>

                    @endforeach

                    
                </tbody>
            </table>
        </div>
            <!--chart section-->
            <div class="col-md-5">
                    <div class="chart-container">
                        <canvas id="market_trends_chart"></canvas>
                    </div>

                    <div class="chart-container" style="margin-top:15%
                        !important;">
                        <canvas id="market1_trends_chart"></canvas>
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
           
             //chart of market trends
            var label=[];
            var continu=[];
            var revenue=[];
            var cost=[];
            var growth=[];
            var comp=[];
            var total=[];
            var sum=0;
            $('.question').each(function(i, obj) {
            
              label.push($(this).text().split(' ').slice(0,3).join(' ')+'...');
              continu.push($(this).siblings(".continue").text());
              revenue.push($(this).siblings(".revenue").text());
              cost.push($(this).siblings(".cost").text());
              growth.push($(this).siblings(".growth").text());
              comp.push($(this).siblings(".comp").text());
              sum=parseInt(continu[i])+parseInt(revenue[i])+parseInt(cost[i])+parseInt(growth[i])+parseInt(comp[i]);
              total.push(sum);
              sum=0;

            });

             var marketChart = document.getElementById("market_trends_chart");
            var myMarketChart = new Chart(marketChart, {
                type: 'bar',
                data: {
                    labels: label,
            
                    datasets: [{
                            label: 'Likely To Continu (Low:1- High:5)',
                            data: continu,
                            type: 'line',
                            backgroundColor: "orange",
                            fill: false,
                        }, {
                            label: "Total Impact",
                            data: total,
                            backgroundColor: "#0080FF",
                            hoverBackgroundColor: "#0080FF",
            
                            },
            
            
                        ]
                    },
                    options: {
                        elements: {
                            line: {
                                tension: 0 // disables bezier curves
                            }
                        },
                        scales: {
                            xAxes: [{
                                stacked: true,
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        },
                        title: {
                            display: true,
                            text: 'Total Impact Vs Contineous Probability'
                        }
                    },
                });
            
            
            var marketChart1 = document.getElementById("market1_trends_chart");
            var myMarketChart1 = new Chart(marketChart1, {
                type: 'bar',
                data: {
                    labels: label,
                    datasets: [{
                            label: "Revenue",
                            backgroundColor: "#0080FF",
                            data: revenue,
                        }, {
                            label: "Cost",
                            backgroundColor: "orange",
                            data: cost,
                        },
                        {
                            label: "Growth",
                            backgroundColor: "grey",
                            data: growth,
                        }
                     ]
                    },
                });
            
   
        } );
    </script>
</body>
</html>