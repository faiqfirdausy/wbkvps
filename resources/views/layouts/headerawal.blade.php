    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
	<link  rel="icon" href="{{ asset('public/img/logo2.png') }}" >	
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIAP</b>ZI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

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
                  @if(!empty($trevisi2))
                  @foreach($trevisi2 as $data)
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
		  </ul>
		 </div>
     </nav>


