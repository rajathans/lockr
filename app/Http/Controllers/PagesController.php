<?php namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function home() {
		$users = User::all();
		return view('home')->with('users',$users);
	}

	public function profile() {
		$name = Auth::user()->name;
		$email = Auth::user()->email;
		$enrollno = Auth::user()->enroll_no;
		return view('pages.profile')->with('name',$name)->with('email',$email)->with('enroll_no',$enrollno);
	}

	public function help() {
		return view('pages.help');
	}
	
}
