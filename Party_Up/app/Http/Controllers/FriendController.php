<?php 
namespace App\Http\Controllers;
use Auth;
use App\Models\Friend;
use App\Models\User;
use Request;

class FriendController extends Controller {



	public function showFriends() {

        if (!Auth::check()) {
            return redirect('auth/login');
        }
		$user = new User();
		return view('archive', ['user' => $user]);
	}

}
