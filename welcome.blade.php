@extends('layouts.appfront', ['title' => 'Home'])

@section('content')
			        <!--
        content section
        ==================================== -->
		<link  rel="icon" href="{{ asset('img/logo2.png') }}" >
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">			
				<!-- Wrapper banner -->
				<div class="carousel-inner" role="listbox">
					
					<!-- banner -->
					<div class="item active" style="background-image: url({{ asset('frontend/img/banner2.gif') }});">
						<div class="carousel-caption">
							<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
								<img src="{{ asset('frontend/img/logo2.png') }}" width="60%">
							</div>
									<div class="work-filter fadeInRight animated" data-wow-duration="500ms">
										<ul>
											<li><a href="#features" data-wow-duration="1000ms" class="wow slideInLeft animated">VIDEO</a></li>
											<li><a href="#capaian" data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">CAPAIAN ZI</a></li>
											<li><a href="#ipk/ikm" data-wow-duration="1000ms" class="wow slideInRight animated">IPK/IKM</a></li>
										</ul>
									</div>
							<ul class="social-links text-center">
								<li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-instagram fa-lg"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end banner -->
					
				</div>
				<!-- end of content -->
				
			</div>
		</section>
		
        <!--
        Banner
        ==================================== -->
		
		 <!--
        Video
        ==================================== -->
		
		<section id="features" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>VIDEO</h2>
						<div class="devider"><i class="fa fa-spinner fa-spin fa-lg"></i></div>
					</div>
	
				</div>
			</div>
			<div class="project-wrapper">
			
				<figure class="mix work-item branding">
					<img src="{{ asset('frontend/img/works/item-1.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>HARI MERDEKA COVER BY COKELAT (UNOFFICIAL VIDEO BY KEMENKUMHAM JATIM)</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/lDIOqSrRizo" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				
				<figure class="mix work-item web">
					<img src="{{ asset('frontend/img/works/item-2.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Seru! Begini aksi pegawai Kemenkumham Jatim peringati HUT RI</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/2elm7nKN4L8" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item logo-design">
					<img src="{{ asset('frontend/img/works/item-3.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Tips Lolos Tes Kesamaptaan CASN Kemenkumham 2018</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/iqh3NnoWgxY" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="{{ asset('frontend/img/works/item-4.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Lapas Kelas I Surabaya Goes To WBK/ WBBM</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/adZSQzCmLkk" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
			
				<figure class="mix work-item logo-design">
					<img src="{{ asset('frontend/img/works/item-3.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Tips Lolos Tes Kesamaptaan CASN Kemenkumham 2018</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/iqh3NnoWgxY" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item photography">
					<img src="{{ asset('frontend/img/works/item-4.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Hari Ulang Tahun RI ke 74</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/adZSQzCmLkk" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				<figure class="mix work-item branding">
					<img src="{{ asset('frontend/img/works/item-1.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Video HUT RI ke 74</h4>
						<p>Kanwil Kemenkumham Jatim</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/lDIOqSrRizo" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
				
				<figure class="mix work-item web">
					<img src="{{ asset('frontend/img/works/item-2.jpg') }}" alt="">
					<figcaption class="overlay">
						<h4>Labore et dolore magnam</h4>
						<p>Photography</p>
						<p></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/2elm7nKN4L8" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
				</figure>
				
			</div>
</section>
<!-- Modal video-->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">

		  
		  <div class="modal-body">

		   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>        
			<!-- 16:9 aspect ratio -->
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
		</div>
			
			
		  </div>

		</div>
	  </div>
	</div> 

		<!--
       Capaian ZI
        ==================================== -->		
		
		<section id="capaian" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>CAPAIAN Zona Integritas</h2>
						<div class="devider"><i class="fa fa-bar-chart fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Pilih Kategori UPT dan Jangka Waktu Penilaian</p>
					</div>
					
					
					<!-- form -->
					<div class="wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<select class="form-control" id="sel1">
											<option>BAPAS & LAPAS</option>
											<option>RUTAN & RUPBASAN</option>
											<option>KANIM & RUDENIM</option>
											<option>BHP</option>
										</select>
									</div>
									<div class="input-field">
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
										   <input type="submit" class="btn btn-success" value="Submit">
									 <input class="btn btn-default" type="reset" value="Reset">
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<canvas id="bar-chart" width="400" height="150"></canvas>
					</div>
			
				</div>
			</div>
			
		</section>
		
        <!--================IPK / IPM==================== -->
		<section id="ipk/ikm" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Indeks Persepsi Korupsi & Indeks Kepuasan Masyarakat</h2>
						<div class="devider"><i class="fa fa-bar-chart fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Pilih Kategori UPT dan Jangka Waktu Penilaian</p>
					</div>
					
					
					<!-- form -->
					<div class="wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="contact-form">
							<form action="#" id="contact-form">
								<div class="input-group name-email">
									<div class="input-field">
										<select class="form-control" id="sel1">
											<option>BAPAS & LAPAS</option>
											<option>RUTAN & RUPBASAN</option>
											<option>KANIM & RUDENIM</option>
											<option>BHP</option>
										</select>
									</div>
									<div class="input-field">
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
										   <input type="submit" class="btn btn-success" value="Submit">
									 <input class="btn btn-default" type="reset" value="Reset">
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<canvas id="bar-chart2" width="400" height="150"></canvas>
					</div>
			
				</div>
			</div>
			
		</section>


@endsection
