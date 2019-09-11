@extends('layouts.app')

@section('content')
<div class="limiter">
		<div class="container-login100" style="background-image: url({{ asset('login.baks/images/bg-01.gif') }});">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
				@csrf
					<a href="{{ url('/') }}"><span class="login100-form-logo">
						<img src="{{ asset('login.baks/images/siap.png') }}" width="70%">
					</span></a>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input id="name" type="text" class="input100{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" placeholder="Username" value="{{ old('username') }}" required autofocus>       
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
					
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-30">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
