    <!-- Logo -->
    <link  rel="icon" href="{{ asset('public/img/logo2.png') }}" >
	<a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIAP</b>ZI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              @if($jmlrevisi != 0)
              <span class="label label-warning">{{$jmlrevisi}}</span>
              @else
              @endif
            </a>
            <ul class="dropdown-menu">
              <li class="header">Anda Memiliki {{$jmlrevisi}} Revisi</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  @if(!empty($trevisi))
                  @foreach($trevisi as $data)
                  <li>
                    <a href="{{url('pertanyaan2/notifikasi/'.$data->id)}}">
                      <i class="fa fa-users text-aqua"></i>  Revisi di {{$data->AbcSoal->NomorSoal->RomawiSoal->nama}}, {{$data->AbcSoal->NomorSoal->nama}}
                    </a>
                  </li>
                  @endforeach
                  @endif
                </ul>
              </li>
              <li class="footer"></li>
            </ul>
          </li>

          <!-- Notifications: style can be found in dropdown.less -->
 
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">@php print_r($session->upt->nama_upt) @endphp </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">

                <p>
                  @php print_r($session->upt->nama_upt) @endphp 
                </p>
              </li>
              <!-- Menu Body -->
    
              <!-- Menu Footer-->
              <li class="user-footer">
                 <div class="pull-left">
                  <a href="{{ url('/') }}" class="btn btn-default btn-flat">Beranda</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="#" data-toggle="modal" data-target="#myModalsurvey">
                      {{ __('Logout') }}
                  </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
        </div>
        <div class="pull-left info">
          @php print_r($session->upt->nama_upt) @endphp 
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li ><a href="{{url('home')}}"><i class="fa fa-home"></i>Beranda</a></li>

      <!-- /.Jika sedang membuka Indikator Perubahan-->


        <li class="active treeview">
          <a href="#">

            <i class="fa fa-laptop"></i> <span>Indikator Perubahan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @foreach($kategori as $data)
              @if($id_kategori == $data->id)

                <li class="active"><a href="{{url('pertanyaan2/kategori/'.$data->id)}}"><i class="fa fa-circle-o"></i>{{$data->nama}}</a></li>
              @else
                <li ><a href="{{url('pertanyaan2/kategori/'.$data->id)}}"><i class="fa fa-circle-o"></i>{{$data->nama}}</a></li>

              @endif
          

            @endforeach
			
          </ul>

        </li>

       
		<!--<li ><a href="{{url('ipkikm')}}"><i class="fa fa-bar-chart"></i>IPK/IKM</a></li>-->
		<li ><a href="{{url('acplan')}}"><i class="fa fa-pencil-square-o"></i>Action Plan</a></li>
		 <li ><a href="{{url('video')}}"><i class="fa fa-camera"></i>Video</a></li>
      <li><a href="{{url('viewdownload')}}"><i class="fa fa-download"></i>Download</a></li>

		 <!--<li ><a href="{{url('status')}}"><i class="fa fa-bar-chart"></i>Status</a></li>-->


  
        
    </section>

    <!-- /.sidebar -->
  </aside>