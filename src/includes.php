<?php

return "
    <script src='".asset('/vendor/consoletvs/charts/jquery-3.0.0.min.js')."'></script>

    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>google.charts.load('current', {'packages':['corechart', 'geochart', 'bar', 'line']});</script>

    <script src='".asset('/vendor/consoletvs/charts/highcharts/js/highcharts.js')."'></script>
    <script src='".asset('/vendor/consoletvs/charts/highcharts/js/modules/exporting.js')."'></script>
    <script src='".asset('/vendor/consoletvs/charts/highmaps/js/modules/map.js')."'></script>
    <script src='".asset('/vendor/consoletvs/charts/highmaps/js/modules/data.js')."'></script>
    <script src='".asset('/vendor/consoletvs/charts/highmaps/maps/world.js')."'></script>

    <script src='".asset('/vendor/consoletvs/charts/chartjs/Chart.js')."'></script>

    <script src='".asset('/vendor/consoletvs/charts/chartist/chartist.min.js')."'></script>
	<link rel='stylesheet' type='text/css' href='".asset('/vendor/consoletvs/charts/chartist/chartist.min.css')."' />

	<script type='text/javascript' src='".asset('/vendor/consoletvs/charts/fusioncharts/fusioncharts.js')."'></script>
	<script type='text/javascript' src='".asset('/vendor/consoletvs/charts/fusioncharts/themes/fusioncharts.theme.fint.js')."'></script>

	<link rel='stylesheet' href='".asset('/vendor/consoletvs/charts/morris/morris.css')."'>
	<script type='text/javascript' src='".asset('/vendor/consoletvs/charts/morris/raphael.min.js')."'></script>
	<script type='text/javascript' src='".asset('/vendor/consoletvs/charts/morris/morris.min.js')."'></script>

	<script src='".asset('/vendor/consoletvs/charts/d3/d3.js')."'></script>
	<link rel='stylesheet' href='".asset('/vendor/consoletvs/charts/plottable/plottable.css')."'>
	<script src='".asset('/vendor/consoletvs/charts/plottable/plottable.js')."'></script>

";
