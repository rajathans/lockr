<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NoticesController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		return 'all notices';
	}

	public function create() {
		//get list of providers
		
		//load a view to create a new notice
		return view('notices.create');
	}
}
