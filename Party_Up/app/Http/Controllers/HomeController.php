<?php 
namespace App\Http\Controllers;
use Auth;

class HomeController extends Controller {

/**********************************************
    Using Laravel's Controller to 
    show my Homepage
**********************************************/

	public function index()
	{
		if (Auth::check()) {
			return redirect('user');
		}
		return view('home');
	}
	

}
