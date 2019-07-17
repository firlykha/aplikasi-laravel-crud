@extends('backend.layouts.main')
@extends('backend.kategoriberitas.partials.header-script')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        News Category
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
					<a href="{{route('kategoriberitas.create')}}">
						<button type="button" class="btn btn-success pull-right">Add Category</button>
					<a>
				</div>				  
            </div>

            <!-- /.box-header -->
            <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
						<thead>
                            <tr>
                                <th>News Category</th>
                                <th>Information</th>						
                                <th>Action</th>						
                            </tr>
						</thead>
						<tbody>
                            @foreach ($kategoriberitas as $kategoriberita)
                                <tr>
                                    <td>{{ $kategoriberita->kategori }}</td>
                                    <td>{{ $kategoriberita->keterangan }}</td>
									<td width="210px">
									<form action="{{ route('kategoriberitas.destroy', $kategoriberita->id) }}" method="post">
										<a class="btn btn-info" href="{{ route('kategoriberitas.show',$kategoriberita->id) }}">Show</a>
										<a class="btn btn-warning" href="{{route('kategoriberitas.edit', $kategoriberita->id)}}"> Edit </a>
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
@extends('backend.kategoriberitas.partials.footer-script')