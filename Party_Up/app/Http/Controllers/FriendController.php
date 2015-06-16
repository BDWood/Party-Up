<?php 
namespace App\Http\Controllers;
use Auth;
use App\Models\Friend;
use Request;

class FriendController extends Controller {

	public function showFriends() {
		$user = new User();
		return view('archive', ['user' => $user]);
	}

}
