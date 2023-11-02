@extends('layout.layout')

@section('title', 'Add Student')

@section('heading', 'ADD NEW STUDENT')

@section('content')


<form>
    <div class="grid gap-6 mb-6 md:grid-cols-3">
 
        {{-- 
            @customInput('text', 'first_name', 'firstName', 'Enter First Name') 
            ($type, $name, $id, $placeholder)
            list($name, $id, $placeholder)
        --}}

        @customInput('text', 'firstName', 'firstName', 'First Name')
        @customInput('text', 'middleName', 'middleName', 'Middle Name')
        @customInput('text', 'surname', 'surname', 'surname')
        {{-- @selectStart('sex', 'sex', 'Select Sex')
            <option selected>Choose Sex</option>
            <option value="F">Female</option>
            <option value="M">Male</option>
        @endSelect --}}


        @customInput('text', 'admNo', 'admNo', 'Admission Number')
        @customInput('text', 'premNo', 'premNo', 'Prem Number')
        @customInput('text', 'formerSchool', 'formerSchool', 'Former School')
    
    </div>

 
    @submitButton('submit','Register Studet')

</form>



@endsection