@extends('app')

@section('content')
	<h5>Name 		: {{ $name }}</h5>
	<h5>Roll no 	: {{ $enrollno }}</h5>
	<h5>Course  	: {{ $course }}</h5>
	<h5>Majored in 	: {{ $majors }}</h5>
	<h5>Email ID 	: {{ $email }}</h5>
	<h5>Age			: {{ $age }}</h5>
@stop