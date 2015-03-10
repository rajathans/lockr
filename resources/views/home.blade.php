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
      		<h3><i class="glyphicon glyphicon-briefcase"></i> Functions</h3>
            <hr>
            
            <ul class="nav nav-stacked">
              <button id="uploadButton" class="btn btn-primary">Upload</button>
              <button id="downloadButton" class="btn btn-primary">Download</button>
            </ul>
            
            <hr>
        
      	</div><!--span 3 ends here -->

        <script type="text/javascript">

        document.getElementById("uploadButton").onclick = function() {
          document.getElementById("fileViewArea").innerHTML = "<input type='text' class='form-control' name='title' placeholder='Enter title of the file' value='{{ old('title') }}'>";
          document.getElementById("fileViewArea").innerHTML += "<input type = 'text' class='form-control' name='description' placeholder = 'Describe the file' value = '{{ old('description') }}>'";
        }

        document.getElementById("downloadButton").onclick = function() {
          alert("You clicked the download button");
        }

        </script>
      
      	<div class="col-md-9" id="fileViewArea">
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