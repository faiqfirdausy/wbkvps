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

          <!-- Notifications: style can be found in dropdown.less -->
 
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
           <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">@php print_r($session->name) @endphp </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">

                <p>
                  @php print_r($session->nama) @endphp 
                </p>
              </li>
              <!-- Menu Body -->
    
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ url('/') }}" class="btn btn-default btn-flat">Beranda</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
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
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          @php print_r($session->nama) @endphp 
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
          <li ><a href="{{url('home')}}"><i class="fa fa-laptop"></i>Indikator Perubahan</a></li>
		  <!--
          <li ><a href="{{url('verifipkikm')}}"><i class="fa fa-bar-chart"></i>IPK/ IKM</a></li>
          <li class="active"><a href="{{url('verifacplan')}}"><i class="fa fa-pencil-square-o"></i>Action Plan</a></li>--

        </li>


        
    </section>
    <!-- /.sidebar -->
  </aside>
