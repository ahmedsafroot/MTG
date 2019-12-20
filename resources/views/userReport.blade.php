<!DOCTYPE html>
<html lang="en">

@include('header')
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
    <!--Container for top page (logo and title)-->
    <!-- This is a row for logo and company name-->
    <div class="container-fluid">
        <div class="row header-logo">
            <div class="col-sm-1 col-md-1"></div>
            <div class="col-10 col-sm-10 col-md-4">
                <img src="{{ asset('public/images/logo.png')}}" class="rounded float-left mt-4" alt="logo" width="70%">
            </div>
            <div class="col-10 col-sm-10 col-md-5">
            </div>
            <div class="col-2 col-sm-2 col-md-2" style="margin-top:35px">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-info">Logout</button>
                  </form>
            </div>
        </div>
        <!-- This is a row for page title-->
        <div class="row title">
            <div class="col-12 col-sm-12">
                <h2>Agility Model</h2>
                <p>Liverpool Agility Centre</p>
            </div>
        </div>
    </div>
             <a href="{{ route('profile') }}" class="btn btn-info add_new_profile">
                 Add New
             </a>

        @if (\Session::has('error'))
             <div class="alert alert-error">
                 <ul>
                     <li>{!! \Session::get('error') !!}</li>
                 </ul>
             </div>
         @endif
        <div class="report_table">
            <table id="profile" class="display">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Agility Audit Tool</th>
                        <th>Market Leadership</th>
                        <th>Market Trends</th>
                        <th>Customer Experience</th>
                        <th>BUSINESS ENVIRONMENT UNCERTAINTY</th>
                        <th>An Analysis of the company’s..</th>
                        <th>Focus worksheet</th>
                        <th>GROWTH Direction</th>
                        <th>Actions</th>
                        <th>IDENTIFIED areas</th>
                        <th>Export</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                    <tr>
                            <td><a href="{{ route('profile.details',['id' => $profile->id] ) }}">{{$profile->userName}}</a></td>
                            <th><a href="{{ route('audit_tools.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('industry_leadership.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('market_trends.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('customer_experience.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('bea.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('sw.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('worksheet.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('ansoff.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('messages.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('action.details',['id' => $profile->id] ) }}">see more</a></th>
                            <th><a href="{{ route('export',['id' => $profile->id] ) }}">Export</a></th>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    <script>

        $(document).ready( function () {
            $('#profile').DataTable( {
                dom: 'lBfrtip',
                "ordering": false,
                buttons: [
                    'copyHtml5', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
                ]
            } );
        } );
    </script>



</body>
</html>