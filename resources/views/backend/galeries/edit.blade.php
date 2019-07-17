@extends('backend.layouts.main')
@extends('backend.galeries.partials.header-script')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Photo Gallery
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li class="active">Update Gallery</li>
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
              <h3 class="box-title">Update Data <b>{{$galeries->judul}}</b></h3>
				<div class="col-xs-12">
					<a href="{{route('galeries.index')}}">
						<button type="button" class="btn btn-success pull-right">Back</button>
					<a>
				</div>				  
            </div>			
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('galeries.update', $galeries->id) }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('put') }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                  <label for="judul" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" placeholder="Title" name="judul" value="{{ $galeries->judul }}" required autofocus>
                    @if ($errors->has('judul'))
						<span class="help-block">
						<strong>{{ $errors->first('judul') }}</strong>
						</span>
                    @endif					
                  </div>
                </div>
				<div class="form-group{{ $errors->has('kategorigalieri_id') ? ' has-error' : '' }}">
                  <label for="kategorigaleri_id" class="col-sm-2 control-label">Category</label>
                  <div class="col-sm-10">
				  <select class="form-control" name="kategorigaleri_id" required="">
                  @foreach($kategorigaleries as $kategorigaleri)
                  <option value="{{$kategorigaleri->id}}" {{ $galeries->kategorigaleri_id === $kategorigaleri->id ? "selected" : ""}}>{{$kategorigaleri->kategori}}</option>
                  @endforeach
                  </select>
                  @if ($errors->has('kategorigaleri_id'))
                  <span class="help-block">
						<strong>{{ $errors->first('kategorigaleri_id') }}</strong>
                  </span>
                  @endif
                  </div>
              </div>			
              <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                <label for="foto" class="col-sm-2 control-label">Photo</label>

                <div class="col-sm-10">
					<img class="product" width="200" @if($galeries->foto) src="{{ asset('images/galeri/'.$galeries->foto) }}" @endif /> 
				
                  <input type="file" class="uploads form-control" id="foto" style="margin-top: 20px;" name="foto">
				  @if ($errors->has('foto'))
						<span class="help-block">
						<strong>{{ $errors->first('foto') }}</strong>
						</span>
                    @endif
			   </div>
              </div>				

				<div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                  <label for="keterangan" class="col-sm-2 control-label">Information</label>
					<div class="col-sm-10">
                    <textarea type="text" class="form-control"  id="keterangan" name="keterangan" rows="5" cols="50" value="{{ $galeries->keterangan }}" autofocus>{{ $galeries->keterangan }}
                    </textarea>					
				                   
					 @if ($errors->has('keterangan'))
                     <span class="help-block">
                          <strong>{{ $errors->first('keterangan') }}</strong>
                     </span>
                     @endif					
                  </div>
			    </div>
                	
                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                  <label for="user_id" class="col-sm-2 control-label">Author</label>
                  <div class="col-sm-10">
				  <select class="form-control" name="user_id" required="">
                  @foreach($users as $user)
                  <option value="{{$user->id}}" {{ $galeries->user_id === $user->id ? "selected" : ""}}>{{$user->name}}</option>
                  @endforeach
                  </select>
                  @if ($errors->has('user_id'))
                  <span class="help-block">
						<strong>{{ $errors->first('user_id') }}</strong>
                  </span>
                  @endif				
                  </div>
                </div>	
			  		  
              </div>
              <!-- /.box-body -->
			  
              <div class="box-footer">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
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
@endsection
@extends('backend.galeries.partials.footer-script')  
