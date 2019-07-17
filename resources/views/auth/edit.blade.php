@section('js')
    <script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })


var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('submit').disabled = false;
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('submit').disabled = true;
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
    </script>
@stop
@extends('backend.layouts.main')
@extends('auth.partials.header-script')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User</a></li>
        <li class="active">Update User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">	
            <div class="box-header">
              <h3 class="box-title">Edit Data <b>{{$data->name}}</b></h3>
				<div class="col-xs-12">
					<a href="{{route('user.index')}}">
						<button type="button" class="btn btn-success pull-right">Back to The List</button>
					<a>
				</div>				  
            </div>			
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('user.update', $data->id) }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('put') }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-sm-3 control-label">Name</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $data->name }}" required autofocus>
                    @if ($errors->has('name'))
						<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
						</span>
                    @endif					
                  </div>
                </div>
                
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-sm-3 control-label">Alamat Email</label>
				<div class="col-sm-5">
                   <input type="email" class="form-control" id="email" placeholder="Alamat Email" name="email" value="{{ $data->email }}" required>
					@if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif		
				</div>	
              </div>
              
			  
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-3 control-label">Password</label>
				<div class="col-sm-5">
                   <input type="password" class="form-control" id="password" placeholder="Password" onkeyup='check();' name="password" value="{{ $data->password }}" required>
					@if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif		
				</div>	
              </div>
              <div class="form-group">
                <label for="password-confirm" class="col-sm-3 control-label">Confirm Password</label>
				<div class="col-sm-5">
                   <input type="password" class="form-control" id="confirm_password" placeholder="Password" onkeyup='check();' name="password_confirmation" value="{{ $data->password }}" required>
					<span id='message'></span>	
				</div>	
              </div>			  		  
              </div>
              <!-- /.box-body -->
			  
              <div class="box-footer">
				<div class="col-sm-3"></div>
				<div class="col-sm-5">
					<button type="submit" id="submit"class="btn btn-info">Update Data </button>
				
				</div>				  
              </div>
              <!-- /.box-footer -->			  
            </form>
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

@extends('auth.partials.footer-script')  
@endsection