


@extends('admin.main')

@section('main')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Categories List</h3>
					{{-- <div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Editable Tables</li>
							</ol>
						</nav>
					</div> --}}
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">

			  <div class="col-12">
				<div class="box">
					{{-- <div class="box-header">
						<h4 class="box-title">Editable with <strong>Datatable</strong></h4>	
						<h6 class="subtitle">Just click on word which you want to change and enter</h6>
					</div> --}}

			  <div class="box-body">
				  <div class="table-responsive">
					<table id="example1" class="table table-bordered table-separated">
						<thead>
							<tr>
								<th>Name</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                    
                                </tr>
                            @endforeach
							
						 
						</tfoot>
					  </table>
				  </div>
			  </div>
			</div>
			

		  </div>

		  <div class="row">

		  </div>

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
@endsection
