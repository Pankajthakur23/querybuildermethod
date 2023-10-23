<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
   public function form(){
       return view('form');
   }

   public function submitForm(Request $request){
       Employee::create($request->all());
       return redirect('form');
   }
}
