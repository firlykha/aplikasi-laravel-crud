@extends('backend.layouts.main')
@extends('auth.partials.header-script')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User</a></li>
        <li class="active">Tambah User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
 
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<form class="form-horizontal" method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Nama" name="name" value="{{ old('name') }}" required autofocus>
                     
					 @if ($errors->has('name'))
                     <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                     </span>
                     @endif					
                  </div>
                </div>	
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                     
					 @if ($errors->has('email'))
                     <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                     </span>
                     @endif					
                  </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-sm-2 control-label">Kata Sandi</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Kata Sandi" name="password" value="{{ old('password') }}" required autofocus>
                     
					 @if ($errors->has('password'))
                     <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                     </span>
                     @endif					
                  </div>
                </div>
				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password-confirm" class="col-sm-2 control-label">Konfirmasi Kata Sandi</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="password-confirm" placeholder="Kata Sandi" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
                     
					 @if ($errors->has('password'))
                     <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                     </span>
                     @endif					
                  </div>
                </div>
				
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->		
	
@endsection
@extends('auth.partials.footer-script')