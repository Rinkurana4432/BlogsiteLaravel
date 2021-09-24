<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller{
	public function index(){
			 $empal = Employee::where('role', '=', 1)->get();
			
			$data = ['empal' => $empal];
			return view('employee.index',$data);
	}
	
	
	public function addEmp(Request $request){
		if ($request->isMethod('post')){
			dd($request->all());
		}
		return view('employee.add');
	}
	
}
