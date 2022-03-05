@extends('layouts.main')
@section('content')


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Denuncias', 'Personas'],
          ['Hombres', 5], ['Mujeres', 6]
        ]);

        var options = {
          title: 'Denuncias por género',
          legend: 'none',
          pieSliceText: 'label',
          slices: { 	0: { color: '#D3DFF0' },
										1: { color: '#87a8CF' },
										2: { color: '#D3DFF0' },
										3: { color: '#ABB2B9' },
										4: { color: '#73C6B6' },
										5: { color: '#797D7F' }
          },
        };


		
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 1200px; height: 500px;"></div>
  </body>

@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@stop