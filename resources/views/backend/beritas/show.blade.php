@extends('backend.layouts.main')
@extends('backend.beritas.partials.header-script')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>News</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">News</a></li>
        <li class="active">Details News</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
		
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Details <b>{{$beritas->judul}}</b></h3>
				<div class="col-xs-12">
					<a href="{{route('beritas.index')}}">
						<button type="button" class="btn btn-success pull-right">Back</button>
					<a>
				</div>				  
            </div>
 
		 <!-- Table row -->
			  <div class="box-body">
				<div class="col-xs-12 table-responsive">
				  <table class="table table-striped">
					<tr>
					  <td>JTitle</td>
					  <td>{{ $beritas->judul }}</td>
					</tr>
					<tr>
					  <td>Image</td>
					  <td>
					  @if($beritas->foto)
							<img src="{{url('images/berita/'. $beritas->foto)}}" width="200" alt="image" style="margin-right: 10px;" />
					  @else
							<img src="{{url('images/berita/default.png')}}" width="200" alt="image" style="margin-right: 10px;" />
					  @endif
					  </td>
					</tr>
					<tr>
					  <td>Content</td>
					  <td>{{ $beritas->isi }}</td>
					</tr>	
					<tr>
					  <td>Category</td>
					  <td>{{ $beritas->kategoriberita->kategori }}</td>
					</tr>
					<tr>
					  <td>Author</td>
					  <td>{{ $beritas->user->name }}</td>
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
@extends('backend.beritas.partials.footer-script')  
