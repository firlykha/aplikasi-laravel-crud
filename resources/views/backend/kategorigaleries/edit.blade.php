@extends('backend.layouts.main')
@extends('backend.kategorigaleries.partials.header-script')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Galerry Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gallery Category</a></li>
        <li class="active">Update Category</li>
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
              <h3 class="box-title">Update Data <b>{{$kategorigaleries->kategori}}</b></h3>
				<div class="col-xs-12">
					<a href="{{route('kategorigaleries.index')}}">
						<button type="button" class="btn btn-success pull-right">Back</button>
					<a>
				</div>				  
            </div>			
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="{{ route('kategorigaleries.update', $kategorigaleries->id) }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('put') }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
                  <label for="kategori" class="col-sm-3 control-label">Gallery Category</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="kategori" placeholder="Gallery Category" name="kategori" value="{{ $kategorigaleries->kategori }}" required autofocus>
                    @if ($errors->has('kategori'))
						<span class="help-block">
						<strong>{{ $errors->first('kategori') }}</strong>
						</span>
                    @endif					
                  </div>
                </div>
                <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
                  <label for="keterangan" class="col-sm-3 control-label">Information</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="keterangan" placeholder="Information" name="keterangan" value="{{ $kategorigaleries->keterangan }}">
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
				<div class="col-sm-3"></div>
				<div class="col-sm-5">
					<button type="submit" id="submit" class="btn btn-info">Update Data</button>
				
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
@extends('backend.kategorigaleries.partials.footer-script')  
