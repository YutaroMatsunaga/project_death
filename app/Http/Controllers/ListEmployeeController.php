<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListEmployeeController extends Controller
{
	public function index() {
		return view('list_employee');
	}
}
