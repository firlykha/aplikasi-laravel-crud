@extends('backend.layouts.main')
@extends('backend.dashboard.partials.header-script')
@section('content')
 <!-- DASHBOARD AWAL -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-bar-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Artikel</span>
              <span class="info-box-number">{{$artikel->count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-clone"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Berita</span>
              <span class="info-box-number">{{$berita->count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Galeri</span>
              <span class="info-box-number">{{$galeri->count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->	
		
		
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">User</span>
              <span class="info-box-number">{{$user->count()}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
			
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">

          <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Artikel</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
			
			
			
			
			<!-- /.box-header -->
            <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
						<thead>
                            <tr>
                                <th>Judul</th>
								<th>Foto</th>
                                <th>Kategori</th>		
                                <th>Author</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($dataartikels as $artikel)
                                <tr>
                                    <td>{{ $artikel->judul }}</td>
								    <td class="py-1">
								    @if($artikel->foto)
									   <img src="{{url('images/artikel/'. $artikel->foto)}}" width="100" alt="image" style="margin-right: 10px;" />
								    @else
									   <img src="{{url('images/artikel/default.png')}}" width="100" alt="image" style="margin-right: 10px;" />
								    @endif
								 </td>
                                    <td>{{ $artikel->kategoriartikel->kategori }}</td>
                                    <td>{{ $artikel->user->name }}</td>
                                </tr>
                            @endforeach
						</tbody>
						<tfoot>
                            <tr>
                                <th>Judul</th>
								<th>Foto</th>
                                <th>Kategori</th>		
                                <th>Author</th>	
                            </tr>
						</tfoot>
                        </table>			
            </div>
          
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

		
		
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  
	  
       
	  
	  
	  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- DASHBOARD AKHIR -->  
@extends('backend.dashboard.partials.footer-script')  
@endsection 