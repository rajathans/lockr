<?php namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Fileentry;
use Request;
use Auth;
use Input;
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

	public function home()	{

		$currentUser = Auth::user()->enroll_no;  // store the id of the current user in currentUser
		$files = Fileentry::all()->where('permissions',$currentUser);
		return view('home',compact(
			'currentUser',
			'files'
		));
		}
	 
	public function add() {
	 
		$file = Request::file('filefield');
		$currentUser = Auth::user()->enroll_no;
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$entry = new Fileentry();
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
		$entry->permissions = $currentUser;
		$entry->save();
		 
		return redirect('home');
		}

	public function get($filename) {

			$entry = Fileentry::where('filename', '=', $filename)->firstOrFail();

			if ($entry->permissions == Auth::user()->enroll_no) 
			{
				$file = Storage::disk('local')->get($entry->filename);
				return (new Response($file, 200))->header('Content-Type', $entry->mime);
			}
			else
			{
				return view('errors.404');
			}
		}

	public function delete($id) {

		$file = Fileentry::find($id);
		$file->delete();
		return redirect('home');
		}

	public function edit($id) {

		$file = Fileentry::find($id);


		}

	public function share() {

		//take the fileid and sharedwith roll number and do it
		$fileid = Input::get('fileid');
		$rollnumber = Input::get('sharedrollno');
		
		//add this file to the sharedwith roll no's files
		

	}
}