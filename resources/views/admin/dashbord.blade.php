@extends('admin.layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daily Expense Tracker - Dashboard</title>
  
  <!-- <link href="{{asset('public/new_theme/css/styles.css')}}" rel="stylesheet"> -->
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  
  
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
    </div><!--/.row-->
    
    
    
    
    <div class="row">
      <div class="col-xs-6 col-md-3">
        
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">


            <h4>Today's Expense</h4>
            <div class="easypiechart" id="easypiechart-blue" data-percent="" ><span class="percent"></span></div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
           
          <div class="panel-body easypiechart-panel">
            <h4>Yesterday's Expense</h4>
            <div class="easypiechart" id="easypiechart-orange" data-percent="" ><span class="percent"></span></div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          
          <div class="panel-body easypiechart-panel">
            <h4>Last 7day's Expense</h4>
            <div class="easypiechart" id="easypiechart-teal" data-percent=""><span class="percent"></span></div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          
          <div class="panel-body easypiechart-panel">
            <h4>Last 30day's Expenses</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="" ><span class="percent"></span></div>
          </div>
        </div>
      </div>
    
    </div><!--/.row-->
      <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          
          <div class="panel-body easypiechart-panel">
            <h4>Current Year Expenses</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="" ><span class="percent"></span></div>


          </div>
        
        </div>

      </div>

    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          
          <div class="panel-body easypiechart-panel">
            <h4>Total Expenses</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="" ><span class="percent"></span></div>


          </div>
        
        </div>

      </div>


    </div>
    
    <!--/.row-->
  </div>  <!--/.main-->
  
  <script src="{{asset('public/new_theme/js/jquery-1.11.1.min.js')}}"></script>
  <script src="{{asset('public/new_theme/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/new_theme/js/chart.min.jss')}}"></script>
  <script src="{{asset('public/new_theme/js/chart-data.js')}}"></script>
  <script src="{{asset('public/new_theme/js/easypiechart.js')}}"></script>
  <script src="{{asset('public/new_theme/js/easypiechart-data.js')}}"></script>
  <script src="{{asset('public/new_theme/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('public/new_theme/js/custom.js')}}"></script>
  <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>
    
</body>
</html>

@endsection

@push('footer-script')

@endpush




