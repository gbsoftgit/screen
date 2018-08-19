@extends('admin.layouts.admin')

@section('title')
	Admin Panel | All Screens
@endsection

@section('page-title')
	Screens List
@endsection

@section('content')
	<section class="tables">   
	    <div class="container-fluid">

			<div class="row">
				<div class="col-lg">
					<div class="card">
						<div class="card-header d-flex align-items-center">
							<h3 class="h4">Screens List</h3>
						</div>
						<div class="card-body">

							<div class="row mb-4 ml-1 button-group">
								<button class="btn btn-primary mr-2">Add new Screen</button>
								<button class="btn btn-danger">Remove Selected Screens</button>
							</div>

							<div class="table-responsive">  
								<table class="table table-striped">
								  <thead>
								    <tr>
								      <th><input type="checkbox" name="screen[]" class="form-input mr-2">#</th>
								      <th>location</th>
								      <th>Resoulution</th>
								      <th>Admin</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
										<th scope="row"><input type="checkbox" name="screen[]" class="form-input mr-2">1</th>
										<td>
											<div class="m-0 p-0">
												<a href="#">Oran - senia</a>
												<p class="m-0 p-0"><small><a href="#" class="text-success">Edit</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
											</div>
										</td>
										<td>1024x1600 px</td>
										<td>@mdo</td>
								    </tr>
								    <tr>
										<th scope="row"><input type="checkbox" name="screen[]" class="form-input mr-2">2</th>
										<td>
											<div class="m-0 p-0">
												<a href="#">Oran - Mirocho</a>
												<p class="m-0 p-0"><small><a href="#" class="text-success">Edit</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
											</div>
										<td>1024x1600 px</td>
										<td>@fat</td>
								    </tr>
								    <tr>
										<th scope="row"><input type="checkbox" name="screen[]" class="form-input mr-2">3</th>
										<td>
											<div class="m-0 p-0">
												<a href="#">Oran - city golf</a>
												<p class="m-0 p-0"><small><a href="#" class="text-success">Edit</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
											</div>
										<td>1024x1600 px</td>
										<td>@twitter</td>
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
