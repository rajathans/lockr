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
                <input type="submit" value="Save file" style="margin-left:12px;" class="btn">
            </form>
            </ul>
            <hr>
        </div>

        <div class="col-md-9" id="fileViewArea">
           <h3><b> Your Files</b></h3> 
           <h5>Roll number <b>{{ $currentUser }}</b> has <b>{{ $count }} file(s)</b></h5>

           <h3>Images</h3>
            @foreach ($images as $entry)
            <table style="background-color:#f8f8f8; width:inherit;">
                <tr><td><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b>{{ $entry->filename }} </b></a></td></tr>
                <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                <br>
            </table>
            @endforeach

            <h3>PDF's</h3>
            @foreach ($pdfs as $entry)
            <table style="background-color:#f8f8f8; width:inherit;">
                <tr><td><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b>{{ $entry->filename }} </b></a></td></tr>
                <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                <br>
            </table>
            @endforeach

            <h3>Other files</h3>
            @foreach ($others as $entry)
            <table style="background-color:#f8f8f8; width:inherit;">
                <tr><td><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b>{{ $entry->filename }} </b></a></td></tr>
                <tr><td><b>Type :</b> {{ $entry->mime }}</td></tr>
                <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                <br>
            </table>
            @endforeach

        </div>
  
    </div>
</div>
@endsection
