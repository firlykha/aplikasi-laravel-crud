@extends('backend.layouts.main')
@extends('backend.galeries.partials.header-script')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gallery Image
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li class="active">Add Gallery</li>
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
              <h3 class="box-title">Add Gallery</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<form class="form-horizontal" method="POST" action="{{ route('galeries.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                  <label for="judul" class="col-sm-2 control-label">Title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" placeholder="Title" name="judul" value="{{ old('judul') }}" required autofocus>
                     
					 @if ($errors->has('judul'))
                     <span class="help-block">
                          <strong>{{ $errors->first('judul') }}</strong>
                     </span>
                     @endif					
                  </div>
                </div>
                <div class="form-group{{ $errors->has('kategorigaleri_id') ? ' has-error' : '' }}">
                  <label for="kategorigaleri_id" class="col-sm-2 control-label">Category</label>

                  <div class="col-sm-10">
                  <select name="kategorigaleri_id" class="form-control" required>
                  @foreach ($kategorigaleries as $kategorigaleri)
                      <option value="{{ $kategorigaleri->id }}">{{ $kategorigaleri->kategori }}</option>
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
					<label for="foto" class="col-sm-2 control-label">Image</label>

					<div class="col-sm-6">
						<img class="product" width="200" /> 
					
					  <input type="file" class="uploads form-control" id="foto" name="foto"> 
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
                    <textarea type="text" class="form-control"  id="keterangan" name="keterangan" rows="5" cols="50" value="{{ old('keterangan') }}" autofocus>
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
                  <select name="user_id" class="form-control" required>
                  @foreach ($users as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
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
                <button type="submit" class="btn btn-info pull-right">Save</button>
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
@extends('backend.galeries.partials.footer-script')