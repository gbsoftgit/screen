<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    

	public function index(Request $request)
	{
		return view('admin.index');
	}

	public function login(Request $request)
	{
		return view('admin.auth.login');
	}

	public function register(Request $request)
	{
		return view('admin.auth.register');
	}

	public function password_reset(Request $request)
	{
		return view('admin.auth.passwords.reset');
	}

	// screens functions
	
	public function screen_index(Request $request)
	{
		return view('admin.screen.index');
	}

	public function screen_show(Request $request)
	{
		return view('admin.screen.show');
	}

	public function screen_edit(Request $request)
	{
		return view('admin.screen.edit');
	}

	// clients functions
	
	public function client_index(Request $request)
	{
		return view('admin.client.index');
	}

	public function client_show(Request $request)
	{
		return view('admin.client.show');
	}

	public function client_edit(Request $request)
	{
		return view('admin.client.edit');
	}

	// plans functions
	
	public function plan_index(Request $request)
	{
		return view('admin.plan.index');
	}

	public function plan_show(Request $request)
	{
		return view('admin.plan.show');
	}

	public function plan_edit(Request $request)
	{
		return view('admin.plan.edit');
	}


}
