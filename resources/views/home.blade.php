@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div id="tools" class="col-md-4" style="background-color:#f8f8f8;">
            <ul class="nav nav-stacked">
                    <a href="#uploadModal" class="btn btn-flat btn-primary btn-group btn-group-justified" data-toggle="modal">Upload new file</a>
                        <div id="uploadModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">Upload new file</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="fileentry/add" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="file" name="filefield" style="margin-lef:0px;" class="btn btn-flat">
                                                    <input type="submit" value="Save" data-content="Please wait..." data-toggle="snackbar" data-timeout="3" style="margin-left:30px; margin-top:-10px;" class="btn btn-default btn-primary">
                                                </form>
                                                <p style="color:DarkSlateGray; margin-top:5px;">Consider changing the name of the file to give it meaning or upload file with a meaningful name,</p>
                                                <p style="color:DarkSlateGray; font-weight:bold; margin-top:-10px;">All document extensions are supported.</p> 
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    <input id="filter" type="text" class="form-control floating-label" placeholder="Search files with name or extension...">
                    <br>
            </ul>
        </div>
        <div class="col-md-8" style="background-color:white">
                <table id="myTable" class="table table-striped table-condensed table-hover table-responsive">
                    <tbody class="searchable" >
                    @foreach ($sharedfiles as $entry)
                        <tr>
                            <td style="margin-top:15px; color:salmon;"><b>{{ $entry->original_filename }}</b></td>
                            <td>
                                <a href="#myDetailsModal_{{ $entry->id }}" data-toggle="modal" class="btn btn-primary btn-group btn-group-justified btn-flat">Details</a>

                                <!-- Modal for file details -->
                                <div id="myDetailsModal_{{ $entry->id }}" class="modal fade"> <!-- asked this mymodal_{{ $entry->id }} thing on stackoverflow-->
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">{{ $entry->original_filename }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <br>
                                                <p style=""><b>ID :</b> {{ $entry->id }}</p>
                                                <p style=""><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b> {{ $entry->filename }} </b></a>(Click to view)</p>
                                                <p style=""><b>Original filename :</b> {{ $entry->original_filename }}</p>
                                                <p style=""><b>Mime type :</b> {{ $entry->mime }}</p>
                                                <p style=""><b>Uploaded on :</b> {{ $entry->created_at }}</p>
                                                <p style=""><b>Permissions :</b> {{ $entry->permissions }}</p>
                                                @if ($entry->sharedwith)
                                                    <p style=""><b>Shared with :</b> {{ $entry->sharedwith }}</p>
                                                @endif

                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ route('getentry', [$entry->filename]) }}" style="margin-bottom:0px;" class="btn btn-flat btn-primary">View</a>
                                                @if ($entry->permissions == Auth::user()->enroll_no)
                                                    <a href="#myShareModal_{{ $entry->id }}" data-toggle="modal" class="btn btn-flat btn-info">Share</a>
                                                @endif
                                                @if ($entry->permissions == Auth::user()->enroll_no)
                                                    <a href="#myViewModal_{{ $entry->id }}" data-toggle="modal" class="btn btn-flat btn-danger">Delete</a>
                                                @else
                                                    <a href="{{ route('removeentry', [$entry->id]) }}" data-content="File removed from shared documents" data-toggle="snackbar" data-timeout="1" class="btn btn-flat btn-danger">Remove</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Modal for file delete -->
                                <div id="myViewModal_{{ $entry->id }}" class="modal fade"> <!-- asked this mymodal_{{ $entry->id }} thing on stackoverflow-->
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <br>
                                                <p>Do you want to delete the file {{ $entry->original_filename }} permanently?</p>
                                                <p class="text-primary" style="">If you click yes, the file will be deleted from our database permanently.</p>
                                            </div>
                                            <div class="modal-footer" style="margin-top:-20px;">
                                                <a data-content="Please wait..." data-toggle="snackbar" data-timeout="3" class="btn btn-flat btn-danger" href="{{ route('deleteentry', [$entry->id]) }}">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--modal to share file-->
                                <div id="myShareModal_{{ $entry->id }}" class="modal fade"> <!-- asked this mymodal_{{ $entry->id }} thing on stackoverflow-->
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">Share {{ $entry->original_filename }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="/fileentry/share" role="form" class="form-horizontal">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <br>
                                                    <input class="form-control floating-label" placeholder="Enter roll number of person to share this file with" name="sharedrollno" type="text" value="">
                                                    <input type="hidden" name="fileid" value="{{ $entry->id }}">
                                                    <input class="btn btn-primary btn-flat" type="submit" value="Submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @foreach ($myfiles as $entry)
                        <tr>
                            <td style="margin-top:15px;"><b>{{ $entry->original_filename }}</b></td>
                            <td>
                                <a href="#myDetailsModal_{{ $entry->id }}" data-toggle="modal" class="btn btn-primary btn-group btn-group-justified btn-flat">Details</a>

                                <!-- Modal for file details -->
                                <div id="myDetailsModal_{{ $entry->id }}" class="modal fade"> <!-- asked this mymodal_{{ $entry->id }} thing on stackoverflow-->
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">{{ $entry->original_filename }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <br>
                                                <p style=""><b>ID :</b> {{ $entry->id }}</p>
                                                <p style=""><b>File name :</b><a href="{{ route('getentry', [$entry->filename]) }}"><b> {{ $entry->filename }} </b></a>(Click to view)</p>
                                                <p style=""><b>Original filename :</b> {{ $entry->original_filename }}</p>
                                                <p style=""><b>Mime type :</b> {{ $entry->mime }}</p>
                                                <p style=""><b>Uploaded on :</b> {{ $entry->created_at }}</p>
                                                <p style=""><b>Permissions :</b> {{ $entry->permissions }}</p>
                                                @if ($entry->sharedwith)
                                                    <p style=""><b>Shared with :</b> {{ $entry->sharedwith }}</p>
                                                @endif

                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ route('getentry', [$entry->filename]) }}" style="margin-bottom:0px;" class="btn btn-flat btn-primary">View</a>
                                                <a href="#myShareModal_{{ $entry->id }}" data-toggle="modal" class="btn btn-flat btn-info">Share</a>
                                                <a href="#myViewModal_{{ $entry->id }}" data-toggle="modal" class="btn btn-flat btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Modal for file delete -->
                                <div id="myViewModal_{{ $entry->id }}" class="modal fade"> <!-- asked this mymodal_{{ $entry->id }} thing on stackoverflow-->
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <br>
                                                <p>Do you want to delete the file {{ $entry->original_filename }} permanently?</p>
                                                <p class="text-primary" style="">If you click yes, the file will be deleted from our database permanently.</p>
                                            </div>
                                            <div class="modal-footer" style="margin-top:-20px;">
                                                <a data-content="Please wait..." data-toggle="snackbar" data-timeout="3" class="btn btn-flat btn-danger" href="{{ route('deleteentry', [$entry->id]) }}">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--modal to share file-->
                                <div id="myShareModal_{{ $entry->id }}" class="modal fade"> <!-- asked this mymodal_{{ $entry->id }} thing on stackoverflow-->
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" style="color:IndianRed; font-weight:bold;">Share {{ $entry->original_filename }}</h4>
                                            </div>
                                            <div class="modal-body">
                                                <br>
                                                <form method="POST" action="/fileentry/share" role="form" class="form-horizontal">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <br>
                                                    <input class="form-control floating-label" placeholder="Enter roll number of person to share this file with" name="sharedrollno" type="text" value="">
                                                    <input type="hidden" name="fileid" value="{{ $entry->id }}">
                                                    <input class="btn btn-primary btn-flat" type="submit" data-content="File shared" data-toggle="snackbar" data-timeout="1"  value="Submit">
                                                </form>
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
