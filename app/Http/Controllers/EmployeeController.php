<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){
        $employee = Employee::all();
        return view('index',['employee'=>$employee]);
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|unique:employees,email',
            'phone'=>'required|string|max:255',
            'gender'=>'required|string|max:255',
        ]);
        $employee = Employee::create($request->all());
        return redirect()->route('index')->with('success','Employee created successfully');

    }
    public function edit($id){
        $employee = Employee::findOrFail($id);
        return view('edit',['employee'=>$employee]);
    }

   public function update(Request $request, $id){
    $request->validate([
        'name'=>'required|string|max:255',
        'email'=>'required|email|unique:employees,email,'.$id,
        'phone'=>'required|string|max:255',
        'gender'=>'required|string|max:255',
    ]);
    $employee = Employee::findorfail($id);
    $employee->update($request->all());
    return redirect()->route('index')->with('success','Employee updated successfully');
   }

   public function delete($id){
    $employee = Employee::findorfail($id);
    $employee->delete();
    return redirect()->route('index')->with('success','Employee deleted successfully');
   }
}