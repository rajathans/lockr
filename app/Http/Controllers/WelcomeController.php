<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

	public function welcome() {
		return view('welcome');
	}

}
