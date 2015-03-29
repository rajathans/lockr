@extends('app')
@section('content')
        <div>
           <h3><b> Your Files</b></h3> 
           <h5>Roll number <b>{{ $currentUser }}</b> has <b>{{ $count }} file(s)</b></h5>
           <!--<h5>There are {{ $images }} images and {{ $pdfs }} PDF files.</h5>-->

            @foreach ($entry as $entries)
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
