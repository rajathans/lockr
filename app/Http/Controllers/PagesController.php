<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	/**public function home() {
		$users = User::all();
		return view('home')->with('users',$users);
	}**/

	public function profile() {
		$name = Auth::user()->name;
		$email = Auth::user()->email;
		$enrollno = Auth::user()->enroll_no;
		$course = Auth::user()->course;
		$majors = Auth::user()->majors;
		$age = Auth::user()->age;
		return view('pages.profile',compact(
			'id',
			'name',
			'email',
			'enrollno',
			'course',
			'majors',
			'age'			
			)
		);
	}

	public function help() {
		return view('pages.help');
	}

	public function upload() {
		
	}

	public function about() {
		return view('errors.503');
	}

	public function privacy() {
		return view('errors.503');
	}
	
}
