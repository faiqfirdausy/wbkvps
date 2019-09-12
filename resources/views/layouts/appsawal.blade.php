<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>Dashboard</title>

	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
	
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ asset('css/skin-blue.min.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">

<!--===============================================================================================-->
	<link rel="stylesheet" href="{{ asset('css/button/main.css') }}">
<!--===============================================================================================-->
	
	@yield('css')
	@stack('css')
</head>


<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			@include('layouts.headerawal')
		</header>

		<div class="content">
		
				@yield('content')
			
		</div>
		
		<footer class="footer-depan text-center">
			<small>Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa timur</small>
		</footer>
	</div>

	

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.full.min.js"></script> -->
	<!-- DataTables -->
		<script src="{{ asset('js/button/jquery-3.2.1.min.js')}}"></script>

	<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
	<!-- jQuery 3 -->
	<!-- jQuery UI 1.11.4 -->
	<script src="{{ asset('js/jquery-ui.min.js')}}"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<!-- datepicker -->
	<script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="{{ asset('js/bootstrap3-wysihtml5.all.min.js')}}"></script>
	<!-- Slimscroll -->
	<script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>	
	<!-- FastClick -->
	<script src="{{ asset('js/fastclick.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('js/adminlte.min.js')}}"></script>

	<!--doughnut chart-->
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script>

		window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			title:{
				horizontalAlign: "left"
			},
			data: [{
				type: "doughnut",
				startAngle: 60,
				//innerRadius: 60,
				indexLabelFontSize: 17,
				indexLabel: "{label} - #percent%",
				toolTipContent: "<b>{label}:</b> {y} (#percent%)",
				dataPoints: [
				@if(!empty($tercapai))
					{ y: {{$tercapai}}, label: "Tercapai" },
					{ y: {{$belumtercapai}}, label: "Belum Tercapai" }
				@else
					{ y: 0, label: "Tercapai" },
					{ y: 100, label: "Belum Tercapai" }

				@endif
				]
			}]
		});
		chart.render();

		}
	</script>

	<script>
	$(document).ready( function () {
    $('#example1').DataTable();
} );
	</script>

    @yield('scripts')
	@stack('scripts')

</body>
</html>