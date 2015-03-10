<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FilesController extends Controller {

	public function upload() {
		return view('files.upload');
	}

	public function download() {
		return view('files.download');
	}

}
