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
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">News Data</h3>
				<div class="col-xs-12">
					<a href="{{ route('beritas.create') }}">
						<button type="button" class="btn btn-success pull-right">Add Data</button>
					<a>
				</div>				  
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
						<thead>
                            <tr>
                                <th>Title</th>
								<th>Image</th>
                                <th>Category</th>		
                                <th>Author</th>	
                                <th>Action</th>									
                            </tr>
						</thead>
						<tbody>
                            @foreach ($beritas as $berita)
                                <tr>
                                    <td>{{ $berita->judul }}</td>
									<td class="py-1">
								    @if($berita->foto)
									   <img src="{{url('images/berita/'. $berita->foto)}}" width="100" alt="image" style="margin-right: 10px;" />
								    @else
									   <img src="{{url('images/berita/default.png')}}" width="100" alt="image" style="margin-right: 10px;" />
								    @endif
									</td>
                                    <td>{{ $berita->kategoriberita->kategori }}</td>
                                    <td>{{ $berita->user->name }}</td>
									<td width="210px">
									<form action="{{ route('beritas.destroy', $berita->id) }}" method="post">
										<a class="btn btn-info" href="{{ route('beritas.show',$berita->id) }}">Show</a>
										<a class="btn btn-warning" href="{{route('beritas.edit', $berita->id)}}"> Edit </a>
										{{ csrf_field() }}
										{{ method_field('delete') }}
										<button class="btn btn-danger" onclick="return confirm('Are you sure want to delete this data?')"> Delete
										</button>
									</form>
									
									
									</td>
                                </tr>
                            @endforeach
						</tbody>
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
@endsection
@extends('backend.beritas.partials.footer-script')