@extends('app')
@section('content')
    <div class="container">
    <div class="row">
      <div class="col-md-3">
            <ul class="nav nav-stacked">
              <form action="fileentry/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="filefield" style="margin-lef:0px;" class="btn">
                <input type="submit" value="Save file" style="margin-left:12px;" class="btn btn-default">
            </form>
            </ul>
        </div>

        <div class="col-md-9" id="fileViewArea">

           @if((count($images) + count($pdfs) + count($others)) == 0)
                <h6>Your account has no files linked to it in the database.</h6>
           @endif

           @if(count($images))
               <h3 style="color:DarkSlateGray;"><b>Images</b></h3>
                @foreach ($images as $entry)
                <table style="background-color:; width:inherit;">
                    <tr><td><b>File name : </b> {{ $entry->filename }}</td></tr>
                    <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                    <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                    <tr style="background-color:white;"><td><a href="{{ route('getentry', [$entry->filename]) }}"><span class="btn btn-default btn-sm">View</span></a><a href="{{ route('deleteentry', [$entry->id]) }}" onclick="return confirm('Delete this file?')"><span class="btn btn-danger btn-sm">Delete</span></a></td></tr>
                    <br>
                </table>
                @endforeach
            @endif

           @if(count($pdfs))
                <h3 style="color:DarkSlateGray;"><b>PDF's</b></h3>
                @foreach ($pdfs as $entry)
                <table style="background-color:; width:inherit;">
                    <tr><td><b>File name :</b> {{ $entry->filename }}</td></tr>
                    <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                    <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                    <tr style="background-color:white;"><td><a href="{{ route('getentry', [$entry->filename]) }}"><span class="btn btn-default btn-sm">View</span></a><a href="{{ route('deleteentry', [$entry->id]) }}" onclick="return confirm('Delete {{ $entry->original_filename }}?')"><span class="btn btn-danger btn-sm">Delete</span></a></td></tr>
                    <br>
                </table>
                @endforeach
            @endif

           @if(count($others))
                <h3 style="color:DarkSlateGray;"><b>Other files</b></h3>
                @foreach ($others as $entry)
                <table style="background-color:; width:inherit;">
                    <tr><td><b>File name :</b> {{ $entry->filename }} </td></tr>
                    <tr><td><b>Type :</b> {{ $entry->mime }}</td></tr>
                    <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                    <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                     <tr style="background-color:white;"><td><a href="{{ route('getentry', [$entry->filename]) }}"><span class="btn btn-default btn-sm">View</span></a><a href="{{ route('deleteentry', [$entry->id]) }}" onclick="return confirm('Delete this file?')"><span class="btn btn-danger btn-sm">Delete</span></a></td></tr>
                    <br>
                </table>
                @endforeach
            @endif

        </div>
  
    </div>
</div>
@endsection
