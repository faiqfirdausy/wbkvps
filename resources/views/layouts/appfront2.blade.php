<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	<meta charset="UTF-8">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>SIAPZI</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<link rel="stylesheet" href="{{ asset('css/default.css') }}">
	
	<link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--month picker-->
	<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/monthpicker.css') }}">
	
	@yield('css')
	@stack('css')
</head>
    <body class="subpage">
		
		@yield('content')

		
		<footer id="footer">
			<div class="inner">
				<div class="copyright">
					<p>Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur</p>
				</div>
				<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
			</div>
		</footer>
		<!--Animation-->
			<script src="{{ asset('js/animate.js')}}"></script>
		<!-- ChartJS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.js"></script>
		<!--month picker-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="{{ asset('js/monthpicker.js')}}"></script>
		<script>
			$(function() {
			  $('.dropdown-menu a').click(function() {
				console.log($(this).attr('data-value'));
				$(this).closest('.dropdown').find('input.upt')
				  .val($(this).attr('data-value'));
			  });
			});
		</script>
		<script>
				var ctx = document.getElementById("myChart");
				var myChart = new Chart(ctx, {
				  type: 'bar',
				  data: {
					labels: ["Lapas Kelas I Surabaya", "2015-02", "2015-03", "2015-04", "2015-05", 
					"2015-06", "2015-07", "2015-08", "2015-09", "2015-10", "2015-11", "2015-07", 
					"2015-08", "2015-09", "2015-10", "2015-11", "2015-12"],
					datasets: [{
					  label: '# of Tomatoes',
					  data: [18,30,12,8,9,18,23,12, 19, 3, 5, 2, 3, 20, 3, 5, 6, 2, 1],
					  backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)'
					  ],
					  borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)',
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)'
					  ],
					  borderWidth: 1
					}]
				  },
				  options: {
					responsive: false,
					scales: {
					  xAxes: [{
						ticks: {
						  maxRotation: 90,
						  minRotation: 80
						}
					  }],
					  yAxes: [{
						ticks: {
						  beginAtZero: true
						}
					  }]
					}
				  }
				});
		</script>
	@yield('scripts')
	@stack('scripts')
    </body>
</html>
