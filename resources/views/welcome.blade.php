@extends('layouts.appfront', ['title' => 'Home'])

@section('content')
			        <!--
        content section
        ==================================== -->
		<link  rel="icon" href="{{ asset('public/img/logo2.png') }}" >
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">			
				<!-- Wrapper banner -->
				<div class="carousel-inner" role="listbox">
					
					<!-- banner -->
					<div class="item active" style="background-image: url({{ asset('frontend/img/banner.gif') }});">
						
						<div class="carousel-caption">
							<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
								<img src="{{ asset('frontend/img/logo.png') }}" width="45%">
							</div>
							<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
								<img src="{{ asset('frontend/img/logo2.png') }}" width="55%">
							</div>
									<div class="work-filter fadeInRight animated" data-wow-duration="500ms">
										<ul>
											<li><a href="#features" data-wow-duration="1000ms" class="wow slideInLeft animated">VIDEO ZI</a></li>
											<li><a href="#pimti" data-wow-duration="1000ms" class="wow slideInRight animated">CAPAIAN ZI</a></li>
										</ul>
									</div>
							
						</div>
					</div>
					<!-- end banner -->
					
				</div>
				<!-- end of content -->
				
			</div>
		</section>
		
        <!--
        End of Banner
        ==================================== -->
				<!--
       PIMTI
        ==================================== -->		
		
		<section id="pimti" class="contact">
			<div class="container">
				
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Progres Capaian</h2>
						<div class="devider"><i class="fa fa-bar-chart fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>Progres Pembangunan Zona Integritas</p>
					</div>
					
					<style>
						div.hijau{
							width: 90%; 
							background-color: #4CAF50;
						}
						div.hijau1{
							width: 95%; 
							background-color: #4CAF50;
						}
						div.hijau2{
							width: 82%; 
							background-color: #4CAF50;
						}
						div.hijau3{
							width: 98%; 
							background-color: #4CAF50;
						}
						div.merah{
							width: 20%; 
							background-color: #f44336;
						}
						div.kuning{
							width: 56%; 
							background-color: #EBAF24;
						}
						div.kuning1{
							width: 40%; 
							background-color: #EBAF24;
						}
						div.merah1{
							width: 20%; 
							background-color: #f44336;
						}
						div.merah2{
							width: 10%; 
							background-color: #f44336;
						}
						div.merah3{
							width: 15%; 
							background-color: #f44336;
						}

					</style>
						<div class="table-responsive no-padding">
						  <table id="example1" class="table table-bordered table-striped">
							<thead>
							 <tr class="header">
								<th>NO</th>
								<th>NAMA UPT</th>
								<th>PROGRES PEMBANGUNAN</th>
								<th>REKOMENDASI</th>
						<!--		<th>REKOMENDASI</th> -->

							  </tr>
							</thead>
							<tbody>
								@php
                 				$i = 1;
                  				@endphp
								  @foreach($listupt as $list)
                 						 
							  <tr>
								<td>{{$i}}</td>
								<td>{{$list->nama_upt}}</td>

								<td>
								@php
								$temp =0;
								@endphp
								@foreach($listnilai as $list2)
									@if($list2->CreatedUser->Upt->id_upt == $list->id_upt)
									@php
									$asd = 0;
									$temp = 1;
									@endphp
									<div class="container-bar">
										<style>
										div.warna{{$list2->CreatedUser->Upt->id_upt}}{
											@if(is_null($list2->sum))
											background-color: #f44336;
											width: {{$asd}}%; 

											@elseif($list2->sum < 40 && $list2->sum >0)
											background-color: #f44336;
											width: {{$list2->sum}}%; 

											@elseif($list2->sum > 40 && $list->sum < 70)
											background-color: #EBAF24;
											width: {{$list2->sum}}%; 


											@else
											background-color: #4CAF50;
											width: {{$list2->sum}}%; 

											@endif
												}
										</style>
									
									@if(is_null($list2->sum))
									  <div class="skills-bar warna{{$list2->CreatedUser->Upt->id_upt}}" >0%</div>
									@else
									  <div class="skills-bar warna{{$list2->CreatedUser->Upt->id_upt}}" >{{$list2->sum}}%</div>
									@endif

									</div>
									@else
									@endif
								@endforeach
								@if($temp ==0)
								<div class="container-bar">
								<style>
									div.warnazz{
											width: 0%; 
											background-color: #f44336;
										}
								</style>
  									<div class="skills-bar warnazz" >0%</div>

								</div>
								@endif



								</td>
								<td>Harus meningkatkan pengawasan terhadap UPT
								</td>
								<!--<td><a href="#" class="btn btn-success " role="button" data-toggle="modal" data-target="#myModal1" >Detail</a></td>-->
								
							  </tr>
							     @php
                  				$i++;
                  				@endphp
							  @endforeach
							</tbody>
						  </table>
						  </div>
			
				</div>
			</div>
			


                          <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">
        
          <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Detail Capaian Lapas Kelas 1 Surabaya</h4>
										
                                    </div>
                                    <div class="modal-body">
                                     
									<table class="table table-bordered table-striped">

										<th>No</th>
										<th>Indikator Perubahan</th>
										<th>Progress Pembangunan</th>
										<tr>
										<td>1</td>
										<td>Manajemen Perubahan</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar merah1">20%</div>
										</div>
										</td>
										<tr>
										<td>2</td>
										<td>Penataan Tata Laksana</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar merah2">10%</div>
										</div>
										</td>
										<tr>
										<td>3</td>
										<td>Penataan Sistem Manajemen SDM</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar merah3">15%</div>
										</div>
										</td>
										<tr>
										<td>4</td>
										<td>Penguatan Akuntabilitas</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar merah1">20%</div>
										</div>
										</td>
										<tr>
										<td>5</td>
										<td>Penguatan Pengawasan</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar kuning1">40%</div>
										</div>
										</td>
										<tr>
										<td>6</td>
										<td>Peningkatan Kualitas Pelayanan Publik</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar merah3">15%</div>
										</div>
										</td>
										<tr>


									</table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                      </form>

                                    </div>
                                   </div>
          
                              </div>
                          </div>






						<div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">
        
          <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Detail Capaian Kanim Khusus Kelas 1 TPI Surabaya</h4>
										
                                    </div>
                                    <div class="modal-body">
                                     
									<table class="table table-bordered table-striped">

										<th>No</th>
										<th>Indikator Perubahan</th>
										<th>Progress Pembangunan</th>
										<tr>
										<td>1</td>
										<td>Manajemen Perubahan</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar hijau">90%</div>
										</div>
										</td>
										<tr>
										<td>2</td>
										<td>Penataan Tata Laksana</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar hijau1">95%</div>
										</div>
										</td>
										<tr>
										<td>3</td>
										<td>Penataan Sistem Manajemen SDM</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar hijau3">98%</div>
										</div>
										</td>
										<tr>
										<td>4</td>
										<td>Penguatan Akuntabilitas</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar hijau">90%</div>
										</div>
										</td>
										<tr>
										<td>5</td>
										<td>Penguatan Pengawasan</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar hijau1">95%</div>
										</div>
										</td>
										<tr>
										<td>6</td>
										<td>Peningkatan Kualitas Pelayanan Publik</td>
										<td>
										<div class="container-bar">
									 	<div class="skills-bar hijau2">82%</div>
										</div>
										</td>
										<tr>


									</table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                      </form>

                                    </div>
                                   </div>
          
                              </div>
                          </div>
		</section>



		
        <!--================IPK / IPM==================== 
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
										<select class="form-control" id="sel1">
											<option>TRIWULAN I</option>
											<option>TRIWULAN II</option>
											<option>TRIWULAN III</option>
											<option>TRIWULAN IV</option>
										</select>
										
									</div>
									<div class="input-field">
										<input class="date-own form-control" type="text" placeholder="Pilih Tahun">
									</div>
									<div class="input-field">
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
			
		</section>-->
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
		
					  <div class="carousel slide media-carousel" id="media">
						<div class="carousel-inner">
							@php
							$z=0
							@endphp

						@foreach($listvideo as $video)
							@php
							$z++
							@endphp

							@if($z ==1)
							<div class="item active">
							<div class="row">

							@elseif($z%4 ==1)
								@if($z%8==1)
									</div>
									</div>
									<div class="item">
									<div class="row">

								@else
								</div>
								<div class="row">
								@endif
							@endif
							  
					<figure class="mix work-item logo-design">
					<img src="{!! asset("$video->path") !!}" alt="">
					<figcaption class="overlay">
						<h4>{{$video->judul}}</h4>
						<p>{{$video->CreatedUser->upt->nama_upt}}</p>
						<p><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
						<button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/iqh3NnoWgxY" data-target="#myModal">
						  Putar Video
						</button>
					</figcaption>
					</figure>
					@if($z==$jumlahvideo)
					</div>
					</div>
					@endif
					@endforeach
							
							
	
						</div>
						<a data-slide="prev" href="#media" class="left carousel-control">‹</a>
						<a data-slide="next" href="#media" class="right carousel-control">›</a>
					  </div>                          

				
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

@endsection
