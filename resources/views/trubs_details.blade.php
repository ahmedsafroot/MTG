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
                        <th>factor</th>
                        <th>Revenue</th>
                        <th>Cost</th>
                        <th>Growth</th>
                        <th>Control</th>
                        <th>Vs competitor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trubs as $trub)
                        
                    <tr>
                    <td>{{$trub->factor}}</td>
                    <td>{{$trub->revenue}}</td>
                    <td>{{$trub->cost}}</td>
                    <td>{{$trub->growth}}</td>
                    <td>{{$trub->control}}</td>
                    <td>{{$trub->comp}}</td>

                    </tr>

                    @endforeach

                    
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