@extends('admin.layout')

@section('content') 
	<div class="container-full">


		<!-- Main content -->
		<section class="content">

			<div class="row">

				<div class="col-12">

					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">All Categories Uploaded</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example" class="table table-sm table-bordered table-hover display nowrap margin-top-10 w-p100">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Date Created</th>
											<th>last Update</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<tbody>
									 @if ($categories->count() >=1)
										 @foreach ($categories as $category)
											 <tr>
												 <td>{{ $category->id }}</td>
												 <td>{{ $category->name }}</td>
												 <td>{{ $category->created_at->addHours(3)->format('d-m-y h:i:s a') }}</td>
												 <td>{{ $category->updated_at->addHours(3)->format('d-m-y h:i:s a') }}</td>

												 <td>
													<a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">Edit</a>
												 </td>
												 <td>

													<form action="{{ route('category.destroy', $category->id)}}" method="post">
														@csrf
														@method('DELETE')
														<button class="btn btn-danger" type="submit">Delete</button>
													  </form>
												 </td>
											 </tr>
										 @endforeach
									 @endif
									</tbody>
									<tfoot>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Date Created</th>
											<th>last Update</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>

		</section>
		<!-- /.content -->
	</div>
@endsection
