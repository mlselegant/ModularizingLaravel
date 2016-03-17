<?php namespace App\Modules\Home\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller {

	public function index() {
		$address = array(
			"name" => "Yubaraj Shrestha",
			"address" => "Kathmandu, Nepal",
			"contact" => "9843691143",
			"email" => "companion.krish@outlook.com"
		);

		return view('Home::index', compact('address'));
	}

	public function about() {
		return view('Home::about');
	}

}