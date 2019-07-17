@extends('auth.partials.header-loginscript')

@section('content')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Registration</b> Form</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registration</p>

    <form action="{{ route('register') }}" method="POST">
	@csrf
      <div for="name" class="form-group has-feedback">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"placeholder="Full name" autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
		@error('name')
			<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
            </span>
		@enderror
      </div>
      <div for="email" class="form-group has-feedback">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		@error('email')
			<span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
       @enderror
      </div>
      <div for="password" class="form-group has-feedback">
        <input id="password" type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
		@error('password')
			<span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
		@enderror
      </div>
      <div for="password-confirm" class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="{{ route('login') }}" class="text-center">Login Page</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

@extends('auth.partials.footer-loginscript')
