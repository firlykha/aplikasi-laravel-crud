@extends('backend.layouts.main')
@extends('backend.beritas.partials.header-script')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        News
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">News</a></li>
        <li class="active">Add News</li>
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
              <h3 class="box-title">Add News</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<form class="form-horizontal" method="POST" action="{{ route('beritas.store') }}" enctype="multipart/form-data">
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
                <div class="form-group{{ $errors->has('isi') ? ' has-error' : '' }}">
                  <label for="isi" class="col-sm-2 control-label">Content</label>
					<div class="col-sm-10">
                    <textarea type="text" class="form-control"  id="isi" name="isi" rows="5" cols="50" value="{{ old('isi') }}" autofocus>
                    </textarea>					
				                   
					 @if ($errors->has('isi'))
                     <span class="help-block">
                          <strong>{{ $errors->first('isi') }}</strong>
                     </span>
                     @endif					
                  </div>
				</div>
                <div class="form-group{{ $errors->has('kategoriberita_id') ? ' has-error' : '' }}">
                  <label for="kategoriberita_id" class="col-sm-2 control-label">Category</label>

                  <div class="col-sm-10">
                  <select name="kategoriberita_id" class="form-control" required>
                  @foreach ($kategoriberitas as $kategoriberita)
                      <option value="{{ $kategoriberita->id }}">{{ $kategoriberita->kategori }}</option>
                  @endforeach
                  </select>
                  @if ($errors->has('kategoriberita_id'))
                  <span class="help-block">
						<strong>{{ $errors->first('kategoriberita_id') }}</strong>
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
@extends('backend.beritas.partials.footer-script')