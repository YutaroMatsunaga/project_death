<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ListEmployeeController extends Controller
{
	public function index() {

		$employee_all = Employee::all();

		// DBから取得してきたデータ（$employee_all）をViewへ（employeeとして）受け渡す
		return view('list_employee', ['employees' => $employee_all]);
	}
}
