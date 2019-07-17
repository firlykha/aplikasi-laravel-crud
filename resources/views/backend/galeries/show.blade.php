@extends('backend.layouts.main')
@extends('backend.galeries.partials.header-script')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Gallery</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li class="active">Details Gallery</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
		
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Details <b>{{$galeries->judul}}</b></h3>
				<div class="col-xs-12">
					<a href="{{route('galeries.index')}}">
						<button type="button" class="btn btn-success pull-right">Back</button>
					<a>
				</div>				  
            </div>
 
		 <!-- Table row -->
			  <div class="box-body">
				<div class="col-xs-12 table-responsive">
				  <table class="table table-striped">
					<tr>
					  <td>Title</td>
					  <td>{{ $galeries->judul }}</td>
					</tr>
					<tr>
					  <td>Category</td>
					  <td>{{ $galeries->kategorigaleri->kategori }}</td>
					</tr>
					<tr>
					  <td>Image</td>
					  <td>
					  @if($galeries->foto)
							<img src="{{url('images/galeri/'. $galeries->foto)}}" width="200" alt="image" style="margin-right: 10px;" />
					  @else
							<img src="{{url('images/galeri/default.png')}}" width="200" alt="image" style="margin-right: 10px;" />
					  @endif
					  </td>
					</tr>									
					<tr>
					  <td>Information</td>
					  <td>{{ $galeries->keterangan }}</td>
					</tr>	
					<tr>
					  <td>Author</td>
					  <td>{{ $galeries->user->name }}</td>
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
@extends('backend.galeries.partials.footer-script')  
