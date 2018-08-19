<!-- Side Navbar -->
<nav class="side-navbar">


	<!-- Sidebar Header-->
	<div class="sidebar-header d-flex align-items-center">
		<div class="avatar">
			<img src="http://via.placeholder.com/100x100" alt="..." class="img-fluid rounded-circle">
		</div>
		<div class="title">
			<h1 class="h4">Rezgui Bachir</h1>
			<p>Super Admin</p>
		</div>
	</div>


	<!-- Sidebar Navigation Menus-->
	<span class="heading">Main</span>
	<ul class="list-unstyled">
		<li class="active">
			<a href="{{ route('admin.index')}}"> <i class="icon-home"></i>Dashboard Home</a>
		</li>
		<li>
			<a href="#"> <i class="icon-screen"></i>Screen Admins</a>
		</li>
		<li>
			<a href="#clientsDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Clients</a>
			<ul id="clientsDropdown" class="collapse list-unstyled ">
				<li><a href="{{route('admin.client.index')}}">All Clients</a></li>
				<li><a href="#">Add New Client</a></li>
				<li><a href="#">Manage Clients</a></li>
			</ul>
		</li>

		<li>
			<a href="#screensDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Screens</a>
			<ul id="screensDropdown" class="collapse list-unstyled ">
				<li><a href="{{route('admin.screen.index')}}">All Screens</a></li>
				<li><a href="#">Add New Screen</a></li>
				<li><a href="#">Manage Screens</a></li>
			</ul>
		</li>

		<li>
			<a href="#plansDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Plans</a>
			<ul id="plansDropdown" class="collapse list-unstyled ">
				<li><a href="{{route('admin.plan.index')}}">All Plans</a></li>
				<li><a href="#">Add New Plan</a></li>
				<li><a href="#">Manage Plans</a></li>
			</ul>
		</li>
		<li>
			<a href="#"> <i class="icon-padnote"></i>Settings</a>
		</li>
		<li>
			<a href="{{route('admin.login')}}"> <i class="icon-interface-windows"></i>Login page </a>
		</li>

	</ul>

</nav>