@extends('backend.layouts.main')
@extends('backend.kategoriberitas.partials.header-script')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>News Category</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('kategoriberitas.index')}}">News Category</a></li>
        <li class="active">Details Category</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
		
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Details <b>{{$kategoriberitas->kategori}}</b></h3>
				<div class="col-xs-12">
					<a href="{{route('kategoriberitas.index')}}">
						<button type="button" class="btn btn-success pull-right">Back</button>
					<a>
				</div>				  
            </div>
 
		 <!-- Table row -->
			  <div class="box-body">
				<div class="col-xs-12 table-responsive">
				  <table class="table table-striped">
					<tr>
					  <td>News Category</td>
					  <td>{{ $kategoriberitas->kategori }}</td>
					</tr>
					<tr>
					  <td>Information</td>
					  <td>{{ $kategoriberitas->keterangan }}</td>
					</tr>				
				   </table>
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
		</div>	 
		</div>
		</div>
    </section>	  
</div>
@endsection	
@extends('backend.kategoriberitas.partials.footer-script')  
