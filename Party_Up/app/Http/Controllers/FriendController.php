<?php 
namespace App\Http\Controllers;
use Auth;
use App\Models\Friend;
use App\Models\User;
use Request;

class FriendController extends Controller {

    /**********************************************
        This is used to show the Archive page
        on the user's profile.
    **********************************************/

	public function showFriends() {

        if (!Auth::check()) {
            return redirect('auth/login');
        }
		$user = new User();
		return view('archive', ['user' => $user]);
	}

    /**********************************************
        This is used to show a single friend 
        and how to contact them and which
        game was played on what activity.
    **********************************************/

    public function showFriend() {
        if (!Auth::check()) {
            return redirect('/auth/login');
        }
        $user = new User();
        return view('archived_user', ['user' => $user]);
    }
}
