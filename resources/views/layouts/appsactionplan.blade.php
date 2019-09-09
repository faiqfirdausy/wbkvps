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
	<link rel="stylesheet" href="{{ asset('sweet/sweetalert2.min.css') }}">

	
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{ asset('css/skin-blue.min.css') }}">
	<!-- Morris chart -->
	<link rel="stylesheet" href="{{ asset('morris.js/morris.css') }}">
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- DataTables -->
	<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">


<!--===============================================================================================-->
	<link rel="stylesheet" href="{{ asset('css/button/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/button/hamburgers.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/button/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/button/util.css') }}">
	<link rel="stylesheet" href="{{ asset('css/button/main.css') }}">
<!--===============================================================================================-->
	
	@yield('css')
	@stack('css')
</head>


<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			@include('layouts.headeractionplan')
		</header>

		<div class="content-wrapper">
		
				@yield('content')
			
		</div>
		
		<footer class="main-footer text-center">
			<small>Copyright &copy; 2019 Kanwil Kementerian Hukum dan HAM Jawa Timur</small>
		</footer>
	</div>

	

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.full.min.js"></script> -->
	<!-- DataTables -->
	<script src="{{ asset('js/button/jquery-3.2.1.min.js')}}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="{{ asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
	<!-- jQuery 3 -->
	<script src="{{ asset('sweet/sweetalert2.min.js')}}"></script>

	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	<!-- Morris.js charts -->
	<script src="{{ asset('js/raphael.min.js')}}"></script>
	<script src="{{ asset('js/morris.min.js')}}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{ asset('js/jquery-knob/dist/jquery.knob.min.js')}}"></script>
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
	

	
	<!--===============================================================================================-->	
	<script src="{{ asset('js/button/popper.js')}}"></script>
	<script src="{{ asset('js/button/select2.min.js')}}"></script>
	<script src="{{ asset('js/button/tilt.jquery.min.js')}}"></script>


	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="{{ asset('js/button/main.js')}}"></script>
	
	<script>
  $(function () {
    "use strict";


    //DONUT CHART
    // var donut = new Morris.Donut({
    //   element: 'sales-chart',
    //   resize: true,
    //   colors: ["#3c8dbc", "#f56954", "#00a65a"],
    //   data: [
    //     {label: "Download Sales", value: 12},
    //     {label: "In-Store Sales", value: 30},
    //     {label: "Mail-Order Sales", value: 20}
    //   ],
    //   hideHover: 'auto'
    // });

  });
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