@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div id="tools" class="col-md-4" style="background-color:#f8f8f8;">
            <ul class="nav nav-stacked">
              <h5><b>Upload new file</b></h5>
              <form style="background-color:#f8f8f8" action="fileentry/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="filefield" style="margin-lef:0px;" class="btn">
                <input type="submit" value="Save" data-content="Please wait..." data-toggle="snackbar" data-timeout="3" style="margin-left:30px; margin-top:-10px;" class="btn btn-primary">
                <hr>
                </form>
                    <h5><b>Search for files accodring to name, type etc.</b></h5>
                    <input id="filter" type="text" class="form-control" placeholder="Search files...">
                <hr>
                
            </ul>
        </div>
        <div class="col-md-8" style="background-color:#f8f8f8;">
                <table id="myTable" class="table table-striped table-hover table-responsive">
                    <tbody class="searchable">
                    @foreach ($files as $entry)
                        <tr>
                            <td><b>{{ $entry->original_filename }}</b></td>
                            <td><a href="{{ route('getentry', [$entry->filename]) }}" class="btn btn-flat btn-primary">View</a></td>
                            <td>
                                <a href="#myModal"data-toggle="modal" class="btn btn-flat btn-danger">Delete</a>
                                <!-- Modal HTML -->
                                <div id="myModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" style="color:IndianRed;">Confirmation</h4>
                                            </div>
                                            <hr>
                                            <div class="modal-body" style="margin-top:-20px;">
                                                <p>Do you want to delete the file <a style="text-decoration:none; font-weight:bold;" href="{{ route('getentry', [$entry->filename]) }}"> {{ $entry->filename }} </a>permanently?</p>
                                                <p class="text-primary" style="margin-top:-40px;"><small>If you click yes, the file will be deleted from our database permanently.</small></p>
                                            </div>
                                            <div class="modal-footer" style="margin-top:-40px;">
                                            <table align="center">
                                                <td>
                                                    <button type="button" class="btn btn-flat btn-primary" data-dismiss="modal">No</button>
                                                </td>
                                                <td>
                                                <a href="{{ route('deleteentry', [$entry->id]) }}" class="btn btn-danger btn-flat" style="width:90px;" data-toggle="modal">Yes</a>
                                                </td>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>   
            </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
    <!--<div class="container">
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
</div>-->
@endsection
