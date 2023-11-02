<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('students.students');
    }

    public function layout(){
        return view('layout.layout');
    }

    public function create(){
        return view('students.create');
    }
}
