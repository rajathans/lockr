@extends('app')
@section('content')
     
    <div class="container">
    <div class="row">
      <div class="col-md-3">
          <h3><i class="glyphicon glyphicon-briefcase"></i> Upload Files</h3>
            <hr>
            
            <ul class="nav nav-stacked">
              <form action="fileentry/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="filefield" style="margin-lef:0px;" class="btn">
                <input type="submit" value="Save" style="margin-left:12px;" class="btn">
            </form>
            </ul>
            
            <hr>
        
        </div>

        <div class="col-md-9" id="fileViewArea">
           <h3><i class="glyphicon glyphicon-dashboard"></i> Your Files</h3> 
           <h5>Current user has roll number <b>{{ $currentUser }}</b></h5> 
           
            @foreach ($entries as $entry)
            <table>
                <tr><td>File ID : {{ $entry->id }}</td></tr>
                <tr><td>File name : <a href="{{ route('getentry', [$entry->filename]) }}"><b>{{ $entry->filename }} </b></a></td></tr>
                <tr><td>Type : {{ $entry->mime }}</td></tr>
                <tr><td>Original Filename : {{ $entry->original_filename }}</td></tr>
                <tr><td>Uploaded on : {{ $entry->created_at }}</td></tr>
                <tr><td>Permissions : {{ $entry->permissions }}</td></tr>
                <br>
            </table>
            @endforeach
            
        </div>
  
    </div>
</div>
@endsection
