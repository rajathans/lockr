@extends('app')

@section('content')
    <!--<h4>Users</h4>
    <table>
        @foreach ($users as $user)
            <tr><td>{{ $user->name }} </td></tr>
             <tr><td>{{ $user->enroll_no }}</td></tr>
             <tr><td>{{ $user->password }}</td></tr>
             <tr><td>{{ $user->email }}</td></tr>
        @endforeach
    </table> -->
    
    <div class="container">
    <div class="row">
  		<div class="col-md-3">
      		<h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
            <hr>
            
            <ul class="nav nav-stacked">
              <li><a href="javascript:;"><i class="glyphicon glyphicon-cloud-upload"></i>Upload</a></li>
              <li><a href="javascript:;"><i class="glyphicon glyphicon-cloud-download"></i>Download</a></li>
              <li><a href="javascript:;"><i class="glyphicon glyphicon-link"></i>Generate Link</a></li>
              <li><a href="javascript:;"><i class="glyphicon glyphicon-ok-sign"></i>e-Sign</a></li>
            </ul>
            
            <hr>
        
      	</div><!--span 3 ends here -->
      
      	<div class="col-md-9">
      		 <h3><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>  
      		 @foreach($users as $user)
      		 	<tr><td>{{ $user->name }} </td></tr>
      		 	<br>
             	<tr><td>{{ $user->enroll_no }}</td></tr>
              <br>
              <tr><td>{{ $user->course }}</td></tr>
              <br>
              <tr><td>{{ $user->majors }}</td></tr>
             	<br>
              <tr><td>{{ $user->email }}</td></tr>
              <br>
             	<tr><td>{{ $user->password }} (encrypted)</td></tr>             		
      		 @endforeach
      	</div>
  
  	</div>
</div>
@endsection