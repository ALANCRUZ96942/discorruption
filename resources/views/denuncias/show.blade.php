@extends('layouts.main')
@section('content')

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


<script type="text/javascript">
    $ags = DB::table('denuncias')
                    ->where('estado_id', '=', 1)
                    ->get();


    var ags  =  parseInt('<?php echo $ags; ?>',10);
	var bc =  parseInt('<?php echo $bc; ?>',10);
	var bcs =  parseInt('<?php echo $bcs; ?>',10);
	var campeche =  parseInt('<?php echo $campeche; ?>',10);
	var coahuila =  parseInt('<?php echo $coahuila; ?>',10);
	var colima =  parseInt('<?php echo $colima; ?>',10);
	var chiapas =  parseInt('<?php echo $chiapas; ?>',10);
	var chihuahua =  parseInt('<?php echo $chihuahua; ?>',10);
	var cdmx =  parseInt('<?php echo $cdmx; ?>',10);
	var durango =  parseInt('<?php echo $durango; ?>',10);
	var guanajuato =  parseInt('<?php echo $guanajuato; ?>',10);
	var guerrero =  parseInt('<?php echo $guerrero; ?>',10);
	var hidalgo =  parseInt('<?php echo $hidalgo; ?>',10);
	var jalisco =  parseInt('<?php echo $jalisco; ?>',10);
	var mexico =  parseInt('<?php echo $mexico; ?>',10);
	var michoacan =  parseInt('<?php echo $michoacan; ?>',10);
	var morelos =  parseInt('<?php echo $morelos; ?>',10);
	var nayarit =  parseInt('<?php echo $nayarit; ?>',10);
	var nl =  parseInt('<?php echo $nl; ?>',10);
	var oaxaca =  parseInt('<?php echo $oaxaca; ?>',10);
	var puebla =  parseInt('<?php echo $puebla; ?>',10);
	var qro =  parseInt('<?php echo $qro; ?>',10);
	var qroo =  parseInt('<?php echo $qroo; ?>',10);
	var slp =  parseInt('<?php echo $slp; ?>',10);
	var sinaloa =  parseInt('<?php echo $sinaloa; ?>',10);
	var sonora =  parseInt('<?php echo $sonora; ?>',10);
	var tabasco =  parseInt('<?php echo $tabasco; ?>',10);
	var tamaulipas =  parseInt('<?php echo $tamaulipas; ?>',10);
	var tlaxcala =  parseInt('<?php echo $tlaxcala; ?>',10);
	var veracruz =  parseInt('<?php echo $veracruz; ?>',10);
	var yucatan =  parseInt('<?php echo $yucatan; ?>',10);
	var zacatecas =  parseInt('<?php echo $zacatecas; ?>',10);

    var ags  =  parseInt('js',10);
	var bc =  parseInt('js',10);
	var bcs =  parseInt('js',10);
	var campeche =  parseInt('js',10);
	var coahuila =  parseInt('js',10);
	var colima =  parseInt('js',10);
	var chiapas =  parseInt('js',10);
	var chihuahua =  parseInt('js',10);
	var cdmx =  parseInt('js',10);
	var durango =  parseInt('js',10);
	var guanajuato =  parseInt('js',10);
	var guerrero =  parseInt('js',10);
	var hidalgo =  parseInt('js',10);
	var jalisco =  parseInt('js',10);
	var mexico =  parseInt('js',10);
	var michoacan =  parseInt('js',10);
	var morelos =  parseInt('js',10);
	var nayarit =  parseInt('js',10);
	var nl =  parseInt('js',10);
	var oaxaca =  parseInt('js',10);
	var puebla =  parseInt('js',10);
	var qro =  parseInt('js',10);
	var qroo =  parseInt('js',10);
	var slp =  parseInt('js',10);
	var sinaloa =  parseInt('js',10);
	var sonora =  parseInt('js',10);
	var tabasco =  parseInt('js',10);
	var tamaulipas =  parseInt('js',10);
	var tlaxcala =  parseInt('js',10);
	var veracruz =  parseInt('js',10);
	var yucatan =  parseInt('js',10);
	var zacatecas =  parseInt('js',10);


	$("#nav-bar").load("shared/navbar2.php");
	$("#footer").load("shared/footer.php");

		google.charts.load('current', {
			'packages':['geochart'],
			// Note: you will need to get a mapsApiKey for your project.
			// See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
			'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
		});
		google.charts.setOnLoadCallback(drawRegionsMap);

		function drawRegionsMap() {
			var data = google.visualization.arrayToDataTable([
				['Estado', 'Denuncias'],
				['Aguascalientes', ags ],
				['Baja California', bc],
				['Baja California Sur', bcs],
				['Campeche', campeche],
				['Coahuila de Zaragoza', coahuila],
				['Colima', colima],
				['Chiapas', chiapas],
				['Chihuahua', chihuahua],
				['Distrito Federal', cdmx],
				['Durango', durango],
				['Guanajuato', guanajuato],
				['Guerrero', guerrero],
				['Hidalgo', hidalgo],
				['Jalisco', jalisco],
				['México', mexico],
				['Michoacán de Ocampo', michoacan],
				['Morelos', morelos],
				['Nayarit',nayarit],
				['Nuevo León', nl],
				['Oaxaca', oaxaca],
				['Puebla', puebla],
				['Querétaro', qro],
				['Quintana Roo', qroo],
				['San Luis Potosí', slp],
				['Sinaloa', sinaloa],
				['Sonora', sonora],
				['Tabasco', tabasco],
				['Tamaulipas', tamaulipas],
				['Tlaxcala', tlaxcala],
				['Veracruz', veracruz],
				['Yucatán', yucatan],
				['Zacatecas', zacatecas]

			]);

			var options = {
			region: 'MX', // Peru
			resolution:'provinces',
			colorAxis: {colors: ['#ffffff', '#8D99AE']}//muestre las provincias/departamentos
			};

			var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
			chart.draw(data, options);
		}
	</script>

	<script type="text/javascript">


	var hombre =  parseInt('s',10);
	var mujer =  parseInt('s',10);
	var na =  parseInt('s',10);


	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Sexo', 'Número de personas'],
			['Hombres',     hombre],
			['Mujeres',      mujer],
			['No especificado',      na]

		]);

		var options = {
			title: 'Sexo de las personas denunciantes',
			pieHole: 0.4,
										slices: {
										0: { color: '#F6DDCC' },
										1: { color: '#CCD1D1' },
										2: { color: '#8D99AE' },
										3: { color: '#ABB2B9' },
										4: { color: '#73C6B6' },
										5: { color: '#797D7F' }
									},
		};

		var chart = new google.visualization.PieChart(document.getElementById('donutchart1'));
		chart.draw(data, options);
	}
</script>

  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
  


@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@stop