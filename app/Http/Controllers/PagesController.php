<?php namespace App\Http\Controllers;

use Auth;
use App\Fileentry;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about() {
		return view('pages.about');
	}

	/*public function donate() {
		return view('errors.503');
	}*/

	public function __construct() {
		$this->middleware('auth');
	}

	/*public function home() {
		$users = User::all();
		return view('home')->with('users',$users);
	}*/

	public function profile() {
		$name = Auth::user()->name;
		$email = Auth::user()->email;
		$enrollno = Auth::user()->enroll_no;
		$course = Auth::user()->course;
		$phone = Auth::user()->phone;
		$majors = Auth::user()->majors;
		$age = Auth::user()->age;
		$count = Fileentry::all()->where('permissions',$enrollno)->count();
		$images = Fileentry::whereRaw('mime like ? and permissions = ?', ['%image%',$enrollno])->count();
		$pdfs = Fileentry::whereRaw('mime like ? and permissions = ?', ['%pdf%',$enrollno])->count();
		$others = Fileentry::whereRaw('mime not like ? and mime not like ? and permissions = ?',['%pdf%', '%image%',$enrollno])->count();
		return view('pages.profile',compact(
			'id',
			'name',
			'email',
			'enrollno',
			'course',
			'majors',
			'age',
			'phone'
			)
		);
	}

	public function help() {
		return view('pages.help');
	}

	public function privacy() {
		return view('errors.503');
	}
	
}
