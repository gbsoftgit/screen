@extends('admin.layouts.admin')

@section('title')
	Admin Panel | Screen's Details
@endsection

@section('page-title')
	Screen's Details
@endsection

@section('content')
	<section class="tables">   
	    <div class="container-fluid">

			<div class="row">
				<div class="col-lg-8">
					<div id="carousel-screen-img" class="carousel slide row" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="http://via.placeholder.com/800x400?text=Screen-1" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="http://via.placeholder.com/800x400?text=Screen-2" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="http://via.placeholder.com/800x400?text=Screen-3" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carousel-screen-img" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carousel-screen-img" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

					<div class="row">
						<div class="col-lg d-flex align-items-center justify-content-center">
							<!--<ol class="d-flex align-items-center justify-content-center pl-0" style="list-style: none;">
								<li data-target="#carousel-screen-img" data-slide-to="0" class="list-style-none active">
									<img src="http://via.placeholder.com/800x400?text=Screen-1" alt="First slide" class="d-block w-50 img-thumbnail p-0">
								</li>
								<li data-target="#carousel-screen-img" data-slide-to="1" class="list-style-none ">
									<img src="http://via.placeholder.com/800x400?text=Screen-2" alt="First slide" class="d-block w-50 img-thumbnail p-0">
								</li>
								<li data-target="#carousel-screen-img" data-slide-to="2" class="list-style-none ">
									<img src="http://via.placeholder.com/800x400?text=Screen-3" alt="First slide" class="d-block w-50 img-thumbnail p-0">
								</li>
							</ol>!-->
							<div data-target="#carousel-screen-img" data-slide-to="0" class="active">
								<img src="http://via.placeholder.com/800x400?text=Screen-1" alt="First slide" class="img-thumbnail">
							</div>
							<div data-target="#carousel-screen-img" data-slide-to="1">
								<img src="http://via.placeholder.com/800x400?text=Screen-2" alt="Second slide" class="img-thumbnail">
							</div>
							<div data-target="#carousel-screen-img" data-slide-to="2">
								<img src="http://via.placeholder.com/800x400?text=Screen-3" alt="Thirs slide" class="img-thumbnail">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg">
					<div class="card">
						<div class="card-header">Screen's info</div>
						<div class="card-body">hello body</div>
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
