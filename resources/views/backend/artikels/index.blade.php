@extends('backend.layouts.main')
@extends('backend.artikels.partials.header-script')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Article
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Article Data</h3>
				<div class="col-xs-12">
					<a href="{{ route('artikels.create') }}">
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
                            @foreach ($artikels as $artikel)
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
									<td width="210px">
									<form action="{{ route('artikels.destroy', $artikel->id) }}" method="post">
										<a class="btn btn-info" href="{{ route('artikels.show',$artikel->id) }}">Show</a>
										<a class="btn btn-warning" href="{{route('artikels.edit', $artikel->id)}}"> Edit </a>
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
@extends('backend.artikels.partials.footer-script')