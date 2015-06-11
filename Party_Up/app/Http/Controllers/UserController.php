<?php 
namespace App\Http\Controllers;
use Auth;
use App\Models;
use Request;


/**********************************************
    This Controller Uses Laravel's login,
    logout and register functionality, and
    uses Brad and Daniel's model.
**********************************************/

class UserController extends Model {

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
        return view('edit_user');
    }

    public function postEdit($id) {
        $user = new User($id);
        $user->username = Request::get('username');
        $user->first_name = Request::get('first_name');
        $user->last_name = Request::get('last_name');
        $user->email = Request::get('email');
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

    /**********************************************
        logging in and logging out functionality
        using Laravel.
    **********************************************/

}