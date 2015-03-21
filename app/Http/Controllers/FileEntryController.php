<?php namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;
use Auth;
use App\User;
use App\Http\Requests;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
 
class FileEntryController extends Controller {
 
/**
* Display a listing of the resource.
*
* @return Response
*/

public function __construct() {
		$this->middleware('auth');
}

public function index()	{

	$currentUser = Auth::user()->enroll_no;  // store the id of the current user in currentUser
	$entries = Fileentry::where('permissions', $currentUser); // use currentUser in the SQL where clause
	return view('home',compact(
		'currentUser',
		'entries'
		)
	);
}
 
public function add() {
 
	$file = Request::file('filefield');
	$extension = $file->getClientOriginalExtension();
	Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
	$entry = new Fileentry();
	$entry->mime = $file->getClientMimeType();
	$entry->original_filename = $file->getClientOriginalName();
	$entry->filename = $file->getFilename().'.'.$extension;
	 
	$entry->save();
	 
	return redirect('fileentry');
}
}