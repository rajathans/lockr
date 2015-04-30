@extends('app')

@section('content')
	<div class="col-md-6 jumbotron">
    	<h5><b>Name</b> 		: {{ $name }}</h5>
    	<h5><b>Roll no</b> 	: {{ $enrollno }}</h5>
    	<h5><b>Course</b> 	: {{ $course }}</h5>
    	<h5><b>Majored in</b> 	: {{ $majors }}</h5>
    	<h5><b>Email ID</b> 	: {{ $email }}</h5>
    	<h5><b>Date of birth</b>			: {{ $age }}</h5>
	</div>

    <!--@if ($count > 0)
    	<div class="col-md-2">
                <div class="panel status">
                    <div class="panel-heading">
                        <a href="/home" style="text-decoration:none; background-color:white; "><h1 class="panel-title text-center" style="color:IndianRed; background-color:white; font-size:50px; font-weight:bold;">{{ $count }}</h1></a>
                    </div>
                    <div class="panel-body text-center">                        
                        <strong>Total Files</strong>
                    </div>
                </div>
        </div>
     @else
        <h5>You have no files.</h5>
     @endif-->
@stop