<?php 
namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Request;


/**********************************************
    This Controller Uses Laravel's login,
    logout and register functionality, and
    uses Brad and Daniel's model.
**********************************************/

class UserController extends Controller {

    public function view() {
        if (!Auth::check()) {
            return redirect('auth/login');
        } 
        $user = Auth::user();
        return view('user', ['user' => $user]);
    }

    /**********************************************
        Auth::check(); returns a boolean value
        and just checks to see if the user is
        logged in, I am currently checking for
        not logged in.
    **********************************************/

    public function create() {
        return view('auth/register');
    }

    public function postCreate() {
        return redirect('home');
    }

    /**********************************************
        This Uses Laravel's register functionality
        to create users and drop them in my DB
    **********************************************/

    public function edit($id) {
        $user = new User($id);
        return view('user_edit', ['user' => $user]);
    }

    public function postEdit($id) {
        $user = new User($id);
        $user->image = Request::get('image');
        $user->email = Request::get('email');
        $user->date_of_birth = Request::get('date_of_birth');
        $user->bio = Request::get('bio');
        $user->play_style = Request::get('play_style');
        $user->region = Request::get('region');
        $user->save();
        return redirect('user');
    }

    /**********************************************
        You can edit Users from the edit_user
        blade file, only Username and the 
        associated email can be changed currently

        ** Ask Daniel about how to change 
            passwords
    **********************************************/

    public function login() {
        return view('auth/login');
    }

    public function logout() {
        Auth::logout();
        return redirect('home');
    }

    public function archive() {
        $user = new User();
        return view('archive', ['user' => $user]);
    }

    /**********************************************
        logging in and logging out functionality
        using Laravel.
    **********************************************/

}