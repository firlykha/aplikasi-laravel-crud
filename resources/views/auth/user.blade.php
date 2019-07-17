@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
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
        User
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
				<div class="col-xs-12">
					<a href="{{route('user.create')}}">
						<button type="button" class="btn btn-success pull-right">Tambah User</button>
					<a>
				</div>				  
            </div>
			
			@if (Session::has('message'))
			<div class="col-md-12">
			  <div class="box box-default">					
				<div class="callout callout-info">
					<p>{{ Session::get('message') }}</p>
				</div>
			  </div>	
			</div>		
			@endif							

            <!-- /.box-header -->
            <div class="box-body">
                        <table id="datauser" class="table table-bordered table-striped">
						<thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>								
                                <th>Created At</th>	
                                <th>Aksi</th>									
                            </tr>
						</thead>
						<tbody>
							@foreach($datas as $data)
                                <tr>
                                    <td>
										{{$data->name}}									
									</td>
                                    <td>
										{{$data->email}}
									</td>
                                    <td>
										{{$data->created_at}}	
									</td>
                                    <td>
									<form action="{{ route('user.destroy', $data->id) }}" method="post">
									   <a class="btn btn-info" href="{{ route('user.show',$data->id) }}">Tampil</a>
										<a class="btn btn-warning" href="{{route('user.edit', $data->id)}}"> Ubah </a>
										
										
										
										
										{{ csrf_field() }}
										{{ method_field('delete') }}
										<button class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus </button>
									  </form>									
									</td>								
                                </tr>
                            @endforeach
						</tbody>
						<tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>								
                                <th>Created At</th>	
                                <th>Aksi</th>		
                            </tr>
						</tfoot>
                        </table>			
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->	  
@extends('auth.partials.footer-script')  		 
@endsection