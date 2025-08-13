<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required|string|max:255',
            'gender'=>'required|string|max:255',
        ]);
        dd($request->all());

    }
}