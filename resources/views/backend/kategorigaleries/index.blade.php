@extends('backend.layouts.main')
@extends('backend.kategorigaleries.partials.header-script')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Photo Gallery Category
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Category Data</h3>
				<div class="col-xs-12">
					<a href="{{route('kategorigaleries.create')}}">
						<button type="button" class="btn btn-success pull-right">Add Category</button>
					<a>
				</div>				  
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
						<thead>
                            <tr>
                                <th>Gallery Category</th>
                                <th>Information</th>						
                                <th>Action</th>						
                            </tr>
						</thead>
						<tbody>
                            @foreach ($kategorigaleries as $kategorigaleri)
                                <tr>
                                    <td>{{ $kategorigaleri->kategori }}</td>
                                    <td>{{ $kategorigaleri->keterangan }}</td>
									<td width="210px">
									<form action="{{ route('kategorigaleries.destroy', $kategorigaleri->id) }}" method="post">
										<a class="btn btn-info" href="{{ route('kategorigaleries.show',$kategorigaleri->id) }}">Show</a>
										<a class="btn btn-warning" href="{{route('kategorigaleries.edit', $kategorigaleri->id)}}"> Edit </a>
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
@extends('backend.kategorigaleries.partials.footer-script')