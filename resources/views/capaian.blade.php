@extends('layouts.appfront2', ['title' => 'Home'])

@section('content')
	<!-- Header -->
	<header id="header">
		<div class="inner">
			<a href="{{ url('/') }}" class="logo">SIAP<strong>ZI</strong></a>
			<nav id="nav">
				<a href="{{ url('/') }}">Beranda</a>
				<a href="">Berita ZI</a>
				<a href="{{ url('/ipkikm') }}">IPK/IKM</a>
			</nav>
			<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		</div>
	</header>
	<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>CAPAIAN ZONA INTEGRITAS</h2>
					</header>

					<hr class="major" />
						<header class="align-center">
						<h3>Pilih Kategori UPT dan Jangka Waktu Penilaian</h3>
						</header>
								<!-- Form -->
									<form method="post" action="#">
										<div class="row uniform">
											<!-- Break -->
											<div class="8u 12u$(xsmall)">
												<div class="input-group dropdown">
												  <input type="text" class="form-control upt dropdown-toggle" value="Pilih Kategori">
												  <ul class="dropdown-menu">
													<li><a href="#" data-value="Lapas & Bapas">Lapas & Bapas</a></li>
													<li><a href="#" data-value="Rutan & Rupbasan">Rutan & Rupbasan</a></li>
													<li><a href="#" data-value="Kanim & Rudenim">Kanim & Rudenim</a></li>
												  </ul>
												  <span role="button" class="input-group-addon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></span>
												</div>
											</div>
											<div class="6u 12u$(xsmall)">
												<div id="sla-data-range" class="mrp-container nav navbar-nav">
													  <span class="mrp-icon"><i class="fa fa-calendar"></i></span>
													  <div class="mrp-monthdisplay">
														<span class="mrp-lowerMonth">Jul 2014</span>
														<span class="mrp-to"> to </span>
														<span class="mrp-upperMonth">Aug 2014</span>
													  </div>
													<input type="hidden" value="201407" id="mrp-lowerDate" />
													<input type="hidden" value="201408" id="mrp-upperDate" />
												  </div>
											</div>
											<!-- Break -->
											<div class="6u 12u$(xsmall)">
												<ul class="actions">
													<li><input type="submit" value="Lihat" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>

									<hr />
									 <!-- BAR CHART -->
									  <div class="box box-success">
										  <h3 class="box-title">Bar Chart</h3>
										  <canvas id="myChart" width="1000" height="400"></canvas>

										<!-- /.box-body -->
									  </div>



						</div>
					</div>

				</div>

			</section>
			
@endsection
