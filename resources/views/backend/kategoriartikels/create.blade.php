@extends('backend.layouts.main')
@extends('backend.kategoriartikels.partials.header-script')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Article Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Article Category</a></li>
        <li class="active">Add Article</li>
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
              <h3 class="box-title">Add Article</h3>
            <div class="col-xs-12">
					<a href="{{route('kategoriartikels.index')}}">
						<button type="button" class="btn btn-success pull-right">Back</button>
					<a>
				</div>
			</div>
            <!-- /.box-header -->
            <!-- form start -->
			<form class="form-horizontal" method="POST" action="{{ route('kategoriartikels.store') }}">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                  <label for="kategori" class="col-sm-2 control-label">Article Category</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kategori" placeholder="Article Category" name="kategori" value="{{ old('kategori') }}" required autofocus>
                     
					 @if ($errors->has('kategori'))
                     <span class="help-block">
                          <strong>{{ $errors->first('kategori') }}</strong>
                     </span>
                     @endif					
                  </div>
                </div>
                <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                  <label for="keterangan" class="col-sm-2 control-label">Information</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="keterangan" placeholder="Information" name="keterangan" value="{{ old('keterangan') }}" required autofocus>
                     
					 @if ($errors->has('keterangan'))
                     <span class="help-block">
                          <strong>{{ $errors->first('keterangan') }}</strong>
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
@extends('backend.kategoriartikels.partials.footer-script')
