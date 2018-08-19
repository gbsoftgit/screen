@extends('admin.layouts.admin')

@section('title')
	Admin Panel | Client name
@endsection

@section('page-title')
	Client's Details <a href="#" class="btn btn-success ml-1 py-1">Edit</a>
@endsection

@section('content')
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-header">Client's Basic info</div>
						<div class="card-body">
							
							<div class="row">
								<div class="col-md">
									<form action="#">
										<div class="form-group row">
											<label for="name" class="col-md-3">Name</label>
											<input id="name" type="text" name="name" class="form-input col-md" value="John Doe" readonly>
										</div>
										<div class="form-group row">
											<label for="username" class="col-md-3">Userame</label>
											<input id="username" type="text" name="username" class="form-input col-md" value="@john" readonly>
										</div>
										<div class="form-group row">
											<label for="email" class="col-md-3">Email</label>
											<input id="email" type="text" name="email" class="form-input col-md" value="john@mail.com" readonly>
										</div>
										<div class="form-group row">
											<label for="address" class="col-md-3">Address</label>
											<textarea cols="7" id="address" type="text" name="address" class="form-input col-md" readonly></textarea>
										</div>
										<div class="form-group row">
											<label for="phone" class="col-md-3">Phone</label>
											<input id="phone" type="text" name="phone" class="form-input col-md" value="(+213)671847333" readonly>
										</div>
									</form>
								</div>
								<div class="col-md-4 d-flex align-items-center justify-content-center flex-column flex-nowrap">
									<img src="http://via.placeholder.com/200x200" alt="..." class="img-fluid rounded mb-2" width="200" height="200">
									<button class="btn btn-success">Upload new Profile</button>
								</div>
							</div>


						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<div class="card-header">Client's Subscription info</div>
						<div class="card-body">
							
						


						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg">
					<div class="card">
						<div class="card-header d-flex align-items-center">
							<h3 class="h4">Medias List</h3>
						</div>
						<div class="card-body">

							<div class="row mb-4 ml-1 button-group">
								<button class="btn btn-primary mr-2">Add new Media</button>
								<button class="btn btn-danger">Remove Selected Medias</button>
							</div>

							<div class="table-responsive">  
								<table class="table table-striped">
									<thead>
										<tr>
											<th><input type="checkbox" name="media[]" class="form-input mr-2">#</th>
											<th>File name</th>
											<th>Type</th>
											<th>size</th>
											<th>Url</th>
											<th>Active</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">
												<input type="checkbox" name="media[]" class="form-input mr-2">1
											</th>
											<td>
												<div class="m-0 p-0">
													<a href="#">Vid-mobilis-123.mp4</a>
													<p class="m-0 p-0"><small><a href="#" class="text-warning">Deactivate</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
												</div>
											</td>
											<td>Video(MP4)</td>
											<td>100MB</td>
											<td>bachir.dev/medias/user/id/24</td>
											<td>true</td>
										</tr>

										<tr>
											<th scope="row">
												<input type="checkbox" name="media[]" class="form-input mr-2">1
											</th>
											<td>
												<div class="m-0 p-0">
													<a href="#">Vid-mobilis-123.mp4</a>
													<p class="m-0 p-0"><small><a href="#" class="text-success">Activate</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
												</div>
											</td>
											<td>Video(MP4)</td>
											<td>100MB</td>
											<td>bachir.dev/medias/user/id/24</td>
											<td>false</td>
										</tr>

										<tr>
											<th scope="row">
												<input type="checkbox" name="media[]" class="form-input mr-2">1
											</th>
											<td>
												<div class="m-0 p-0">
													<a href="#">Vid-mobilis-123.mp4</a>
													<p class="m-0 p-0"><small><a href="#" class="text-success">Activate</a></small> . <small><a href="#" class="text-danger">delete</a></small></p>
												</div>
											</td>
											<td>Video(MP4)</td>
											<td>100MB</td>
											<td>bachir.dev/medias/user/id/24</td>
											<td>false</td>
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
