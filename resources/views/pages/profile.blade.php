@extends('app')

@section('content')
	<h5><b>Name</b> 		: {{ $name }}</h5>
	<h5><b>Roll no</b> 	: {{ $enrollno }}</h5>
	<h5><b>Course</b> 	: {{ $course }}</h5>
	<h5><b>Majored in</b> 	: {{ $majors }}</h5>
	<h5><b>Email ID</b> 	: {{ $email }}</h5>
	<h5><b>Age</b>			: {{ $age }} years</h5>
@stop