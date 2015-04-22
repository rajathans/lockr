@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-stacked">
              <h5>Upload new file</h5>
              <form style="background-color:#f8f8f8" action="fileentry/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="filefield" style="margin-lef:0px;" class="btn">
                <input type="submit" value="Save" style="margin-left:12px;" class="btn btn-primary">
                <hr>
                </form>
                <hr>
                    <h5>Search for files accodring to name, type, date etc.</h5>
                    <input id="filter" type="text" class="form-control" placeholder="Search files...">
                <hr>
            </ul>
                </div>
                    <div class="col-md-9">
                <table id="myTable" style="width:;" class="table table-striped">
                     <thead>
                        <tr style="background-color:#f8f8f8;">
                            <th>Filename</th>
                            <th>Type</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr> 
                    </thead>
                    <tbody class="searchable">
                    @foreach ($files as $entry)
                        <tr>
                            <td>{{ $entry->original_filename }}</td>
                            <td>{{ $entry->mime }}</td>
                            <td><a href="{{ route('getentry', [$entry->filename]) }}"><span class="btn btn-primary btn-sm">View</span></a></td>
                            <td>
                                <a href="#myModal" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa fa-trash-o fa-fw"></i> Delete</a>
                                <!-- Modal HTML -->
                                <div id="myModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" style="color:IndianRed;">Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to delete the file {{ $entry->filename }} permanently?</p>
                                                <p class="text-warning"><small>If you click yes, you wont be able to access the document ever again.</small></p>
                                            </div>
                                            <div class="modal-footer">
                                            <table align="center">
                                                <td>
                                                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</button>
                                                </td>
                                                <td>
                                                <a href="{{ route('deleteentry', [$entry->id]) }}" class="btn btn-danger btn-sm" style="width:90px;" data-toggle="modal"><i class="fa fa-trash-o fa-fw"></i>Yes</a>
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
