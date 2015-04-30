@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div id="tools" class="col-md-4" style="background-color:#f8f8f8;">
            <ul class="nav nav-stacked">
              <h5><b>Upload new file</b></h5>
              <form style="background-color:#f8f8f8" action="fileentry/add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="file" name="filefield" style="margin-lef:0px;" class="btn btn-flat">
                <input type="submit" value="Save" data-content="Please wait..." data-toggle="snackbar" data-timeout="3" style="margin-left:30px; margin-top:-10px;" class="btn btn-primary">

                <hr>
                </form>
                    <h5><b>Search for files accodring to name, type etc.</b></h5>
                    <input id="filter" type="text" class="form-control floating-label" placeholder="Search files...">
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
                                <a href="#myDetailsModal_{{ $entry->id }}" data-toggle="modal" class="btn btn-info btn-flat">Details</a>
                                <!-- Modal HTML -->
                                <div id="myDetailsModal_{{ $entry->id }}" class="modal fade"> <!-- asked this mymodal_{{ $entry->id }} thing on stackoverflow-->
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">{{ $entry->original_filename }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p style="margin-top:0px;"><b>ID :</b> {{ $entry->id }}</p>
                                                <p style="margin-top:-45px;"><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b> {{ $entry->filename }} </b></a>(Click to view)</p>
                                                <p style="margin-top:-45px;"><b>Original filename :</b> {{ $entry->original_filename }}</p>
                                                <p style="margin-top:-45px;"><b>Mime type :</b> {{ $entry->mime }}</p>
                                                <p style="margin-top:-45px;"><b>Uploaded on :</b> {{ $entry->created_at }}</p>
                                                <p style="margin-top:-45px;"><b>Permissions :</b> {{ $entry->permissions }}</p>
                                            </div>
                                            <!--<div class="modal-footer" style="margin-top:-20px;">
                                                <a class="btn btn-flat btn-danger" href="{{ route('editentry', [$entry->id]) }}">Edit</a>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#myViewModal_{{ $entry->id }}" data-toggle="modal" class="btn btn-flat btn-danger">Delete</a>
                                <!-- Modal HTML -->
                                <div id="myViewModal_{{ $entry->id }}" class="modal fade"> <!-- asked this mymodal_{{ $entry->id }} thing on stackoverflow-->
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Do you want to delete the file {{ $entry->original_filename }} permanently?</p>
                                                <p class="text-primary" style="margin-top:-40px;">If you click yes, the file will be deleted from our database permanently.</p>
                                            </div>
                                            <div class="modal-footer" style="margin-top:-20px;">
                                                <a class="btn btn-flat btn-danger" href="{{ route('deleteentry', [$entry->id]) }}"><i class="mdi-navigation-check"></i>Confirm</a>
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
@endsection
