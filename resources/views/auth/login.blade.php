@extends('auth.partials.header-loginscript')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo"><b>Login </b>Form</div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="{{ route('login') }}" method="POST">
	@csrf
      <div class="form-group has-feedback">
		
        <input type="email" id="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>	
		@if ($errors->has('email'))
			<span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
		
        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
		@if ($errors->has('password'))
			<span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label for="remember">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
			  Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">		 
		  Sign In</button>
		</div>
        <!-- /.col -->
      </div>
    </form>
	<a href="#">I forgot my password</a><br>
    <a href="{{ route('register') }}" class="text-center">Register</a>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@extends('auth.partials.footer-loginscript')