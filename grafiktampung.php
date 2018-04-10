<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daya Tampung</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="code/highcharts.js"></script>
<script src="code/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Daya Tampung Departemen'
    },
    xAxis: {
        categories: ['Teknik Informatika', 'Sistem Informasi', 'Teknologi Informasi']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total daya tampung'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal'
        }
    },
    series: [{
        name: 'Mandiri',
        data: [54, 45, 13]
    }, {
        name: 'SBMPTN',
        data: [72, 60, 18]
    }, {
        name: 'SNMPTN',
        data: [54, 45, 14]
    }]
});
		</script>
	</body>
</html>
