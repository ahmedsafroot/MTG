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
   
        <table id="profile" class="display">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                     
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>We have a reasonably good idea where we want our business to be in 3-5 years</td>
                      <td>{{$audit->question1 ?? ""}}</td>

                    </tr>

                    <tr>
                            <td>Strategically, we tend to be proactive, constantly seeking new areas of growth</td>
                            <td>{{$audit->question2 ?? ""}}</td>
      
                    </tr>
                    <tr>
                            <td>We are prepared to trade-off short term goals in the interest of long run growth</td>
                            <td>{{$audit->question3 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>Our business and marketing objectives provide clear guidelines for market planning</td>
                            <td>{{$audit->question4 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>We have specific targets (volume, profit, ROI) for our strategic objectives</td>
                            <td>{{$audit->question5 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>It is relatively easy for anyone to track the progress of any order in the system</td>
                            <td>{{$audit->question6 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>Our machines (any type you use) are well maintained and never tend to break down	</td>
                            <td>{{$audit->question7 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>We have a labelling system to identify physical items (materials, tools, products, etc.)	</td>
                            <td>{{$audit->question8 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>Our processes (material, product, service, orders, …) flow smoothly, rarely delayed	</td>
                            <td>{{$audit->question9 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>It is very rare for us to amend our schedules (for production or service delivery)	</td>
                            <td>{{$audit->question10 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>We have a “right first time” policy for outputs (products/services) and achieve them	</td>
                            <td>{{$audit->question11 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>Quality of products/services are consistently inspected before delivery	</td>
                            <td>{{$audit->question12 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>Quality of purchased items/services from suppliers are inspected consistently	</td>
                            <td>{{$audit->question13 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>We rarely have to change the design of our new products or services	</td>
                            <td>{{$audit->question14 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>It is rare to receive returned products or rejected services from customers	</td>
                            <td>{{$audit->question15 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>In our firm, exceptional service is defined clearly	</td>
                            <td>{{$audit->question16 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>Performance of our employees is regularly measured and monitored	</td>
                            <td>{{$audit->question17 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>Satisfying customers’ needs and desires is well understood by all our employees	</td>
                            <td>{{$audit->question18 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>Our employees really understand that their behaviour reflects the firm’s image	</td>
                            <td>{{$audit->question19 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>One of our strengths is that we respond rapidly to threatening competitive actions	</td>
                            <td>{{$audit->question20 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>We differentiate ourselves from competition very well	</td>
                            <td>{{$audit->question21 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>We consistently discuss and monitor our competitors’ strengths and strategies	</td>
                            <td>{{$audit->question22 ?? ""}}</td>
                    </tr>
                    <tr>
                            <td>We target customers where we have an opportunity for competitive advantage	</td>
                            <td>{{$audit->question23 ?? ""}}</td>
                    </tr>
                    <tr>
                            <th>Score</th>
                            <th>{{$total}}</th>
                    </tr>
                    <tr>
                                <th>Induction</th>
                                <th>{{$indeuction}}</th>
                     </tr>
                     <tr>
                                        <th>What To Do</th>
                                        <th>{{$what_to_do}}</th>
                     </tr>
                </tbody>
            </table>

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
        } );
    </script>
</body>
</html>