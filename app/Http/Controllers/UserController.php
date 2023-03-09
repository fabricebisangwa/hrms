<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\employee;
use App\Models\department;
use App\Models\job_title;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getAllUsers(){
        return view('welcome',[
           'user'=>User::all(),
           'user_count'=>User::count(),
           'employee_count'=>employee::count(),
           'department_count'=>department::count(),
           //'jobs_count'=>job_title::count()
        ]);
    }
}