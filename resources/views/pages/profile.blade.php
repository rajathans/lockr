@extends('app')

@section('content')
	<div class="col-md-3">
	<h5><b>Name</b> 		: {{ $name }}</h5>
	<h5><b>Roll no</b> 	: {{ $enrollno }}</h5>
	<h5><b>Course</b> 	: {{ $course }}</h5>
	<h5><b>Majored in</b> 	: {{ $majors }}</h5>
	<h5><b>Email ID</b> 	: {{ $email }}</h5>
	<h5><b>Age</b>			: {{ $age }} years</h5>
	</div>

	<div class="col-md-2">
            
            <div class="panel status">
                <div class="panel-heading">
                    <a href="/home" style="text-decoration:none;"><h1 class="panel-title text-center" style="color:IndianRed; background-color:#f8f8f8; font-size:50px; font-weight:bold;">{{ $count }}</h1></a>
                </div>
                <div class="panel-body text-center">                        
                    <strong>Total Files</strong>
                </div>
            </div>
            </div>

    <div class="col-md-2">
            <div class="panel status">
                <div class="panel-heading">
                    <a href="/home" style="text-decoration:none;"><h1 class="panel-title text-center" style="color:IndianRed; background-color:#f8f8f8; font-size:50px; font-weight:bold;">{{ $pdfs }}</h1></a>
                </div>
                <div class="panel-body text-center">                        
                    <strong>PDFs</strong>
                </div>
            </div>
            </div>
    <div class="col-md-2">
            <div class="panel status">
                <div class="panel-heading">
                    <a href="/home" style="text-decoration:none;"><h1 class="panel-title text-center" style="color:IndianRed; background-color:#f8f8f8; font-size:50px; font-weight:bold;">{{ $images }}</h1></a>
                </div>
                <div class="panel-body text-center">                        
                    <strong>Images</strong>
                </div>
            </div>
     </div>
@stop