@extends('app')
@section('content')
     
    <div class="container">
    <div class="row">
      <div class="col-md-3">
          <h3><b> Toolbox</b></h3>
            <hr>
            
            <ul class="nav nav-stacked">
              <form action="fileentry/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="filefield" style="margin-lef:0px;" class="btn">
                <input type="submit" value="Save" style="margin-left:12px;" class="btn">
            </form>
            <form class="navbar-form navbar-left" role="search">
                          <div class="form-group">
                            <input type="text" class="form-control" style="width:100%;" placeholder="Search files">
                          </div>
                        </form>
            </ul>
            
            <hr>
        
        </div>

        <div class="col-md-9" id="fileViewArea">
           <h3><b> Your Files</b></h3> 
           <h5>Current user has roll number <b>{{ $currentUser }}</b></h5> 
           
            @foreach ($entries as $entry)
            <table style="background-color:#f8f8f8; width:inherit;">
                <tr><td><b>File ID :</b> {{ $entry->id }}</td></tr>
                <tr><td><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b>{{ $entry->filename }} </b></a></td></tr>
                <tr><td><b>Type :</b> {{ $entry->mime }}</td></tr>
                <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                <tr><td><b>Permissions</b> : {{ $entry->permissions }}</td></tr>
                <br>
            </table>
            @endforeach
            
        </div>
  
    </div>
</div>
@endsection
