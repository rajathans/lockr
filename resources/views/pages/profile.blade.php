@extends('app')

@section('content')
	<div class="col-md-6 shadow-z-1" style="background-color:white;">
    	<h5><b>Name</b> 		: {{ $name }}</h5>
    	<h5><b>Roll no</b> 	: {{ $enrollno }}</h5>
    	<h5><b>Course</b> 	: {{ $course }}</h5>
    	<h5><b>Majored in</b> 	: {{ $majors }}</h5>
    	<h5><b>Email ID</b> 	: {{ $email }}</h5>
    	<h5><b>Date of birth</b>			: {{ $age }}</h5>
        <h5><b>Phone number</b>         : {{ $phone }}</h5>
	</div>
@stop