@extends('admin.layouts.admin')

@section('title')
	Admin Panel | All Clients
@endsection

@section('page-title')
	Clients List
@endsection

@section('content')
	<section class="tables">   
	    <div class="container-fluid">

			<div class="row">
				<div class="col-lg">
					<div class="card">
						<div class="card-header d-flex align-items-center">
							<h3 class="h4">Clients List</h3>
						</div>
						<div class="card-body">

							<div class="row mb-4 ml-1 button-group">
								<button class="btn btn-primary mr-2">Add new Client</button>
								<button class="btn btn-danger">Remove Selected Clients</button>
							</div>

							<div class="table-responsive">  
								<table class="table table-striped">
								  <thead>
								    <tr>
								      <th><input type="checkbox" name="client[]" class="form-input mr-2">#</th>
								      <th>First Name</th>
								      <th>Last Name</th>
								      <th>Username</th>
								      <th>Email</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
										<th scope="row"><input type="checkbox" name="client[]" class="form-input mr-2">1</th>
										<td>
											<div class="m-0 p-0">
												<a href="#">Mark</a>
												<p class="m-0 p-0"><small><a href="#" class="text-success">Edit</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
											</div>
										</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td>mail@mail.com</td>
								    </tr>
								    <tr>
										<th scope="row"><input type="checkbox" name="client[]" class="form-input mr-2">2</th>
										<td>
											<div class="m-0 p-0">
												<a href="#">Jacob</a>
												<p class="m-0 p-0"><small><a href="#" class="text-success">Edit</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
											</div>
										<td>Thornton</td>
										<td>@fat</td>
										<td>mail@mail.com</td>
								    </tr>
								    <tr>
										<th scope="row"><input type="checkbox" name="client[]" class="form-input mr-2">3</th>
										<td>
											<div class="m-0 p-0">
												<a href="#">Larry</a>
												<p class="m-0 p-0"><small><a href="#" class="text-success">Edit</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
											</div>
										<td>the Bird</td>
										<td>@twitter</td>
										<td>mail@mail.com</td>
								    </tr>
								  </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	</section>	
@endsection

@section('top-nav')
	@include('admin.layouts.navs.top')
@endsection

@section('side-nav')
	@include('admin.layouts.navs.side')
@endsection
