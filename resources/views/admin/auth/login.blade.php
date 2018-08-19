@extends('admin.layouts.base')

@section('title')
	Admin Panel | Login
@endsection

@section('content')
	<div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Bachir Dashboard</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" class="form-validate" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input id="email" type="email" name="email" required data-msg="Please enter your username" class="input-material">
                      <label for="email" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="password" class="label-material">Password</label>
                    </div><button type="submit" class="btn btn-primary">Login</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="{{ route('admin.password.reset') }}" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="{{ route('admin.register') }}" class="signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://mbsoft.com/" class="external">MBsoft</a>
        </p>
      </div>
    </div>
@endsection
