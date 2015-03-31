@extends('app')
@section('content')
    <div class="container">
    <div class="row">
      <div class="col-md-3">
            <ul class="nav nav-stacked">
              <form action="fileentry/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="filefield" style="margin-lef:0px;" class="btn">
                <input type="submit" value="Save file" style="margin-left:12px;" class="btn">
            </form>
            </ul>
        </div>

        <div class="col-md-9" id="fileViewArea">
           <h5>Roll number <b>{{ $currentUser }}</b> has <b>{{ $count }} file(s)</b></h5>

           @if(count($images))
               <h3><b>Images</b></h3>
                @foreach ($images as $entry)
                <table style="background-color:#f8f8f8; width:inherit;">
                    <tr><td><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b>{{ $entry->filename }} </b></a></td></tr>
                    <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                    <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                    <br>
                </table>
                @endforeach
            @endif

           @if(count($pdfs))
                <h3><b>PDF's</b></h3>
                @foreach ($pdfs as $entry)
                <table style="background-color:#f8f8f8; width:inherit;">
                    <tr><td><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b>{{ $entry->filename }} </b></a></td></tr>
                    <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                    <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                    <br>
                </table>
                @endforeach
            @endif

           @if(count($others))
                <h3><b>Other files</b></h3>
                @foreach ($others as $entry)
                <table style="background-color:#f8f8f8; width:inherit;">
                    <tr><td><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b>{{ $entry->filename }} </b></a></td></tr>
                    <tr><td><b>Type :</b> {{ $entry->mime }}</td></tr>
                    <tr><td><b>Original Filename :</b> {{ $entry->original_filename }}</td></tr>
                    <tr><td><b>Uploaded on :</b> {{ $entry->created_at }}</td></tr>
                    <br>
                </table>
                @endforeach
            @endif

        </div>
  
    </div>
</div>
@endsection
