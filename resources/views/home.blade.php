@extends('app')
@section('content')
     
    <div class="container">
    <div class="row">
      <div class="col-md-3">
          <h3><i class="glyphicon glyphicon-briefcase"></i> Functions</h3>
            <hr>
            
            <ul class="nav nav-stacked">
              <form action="fileentry/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="filefield" class="btn btn-link">
                <input type="submit" class="btn btn-link">
            </form>
            </ul>
            
            <hr>
        
        </div>

        <div class="col-md-9" id="fileViewArea">
           <h3><i class="glyphicon glyphicon-dashboard"></i> Files</h3> 
           <h6>Current user has roll number {{ $currentUser }}</h6> 
            <table>
              @foreach ($entries as $entry)
                <tr><td>{{ $entry->id }}</td></tr>
                <tr><td><a href="{{ route('getentry', [$entry->filename]) }}"> {{ $entry->filename }} </a></td></tr>
                <tr><td>{{ $entry->mime }}</td></tr>
                <tr><td>{{ $entry->original_filename }}</td></tr>
                <tr><td>{{ $entry->permissions }}</td></tr>
              @endforeach
          </table>
        </div>
  
    </div>
</div>
@endsection
