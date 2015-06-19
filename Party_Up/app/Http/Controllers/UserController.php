<?php 
namespace App\Http\Controllers;
use App\User;
use Auth;
use Request;
use App\Models\Game;


/**********************************************
    This Controller Uses Laravel's login,
    logout and register functionality.
**********************************************/

class UserController extends Controller {

    public function view() {
        if (!Auth::check()) {
            return redirect('auth/login');
        } 
        $user = Auth::user();

        $games = $user->games;

        return view('user', ['user' => $user, 'games' => $games]);
    }

    public function postActivityStatus($id) {
        $user = User::find($id);
        $active = Game::find();
        if ($active == 0) {
            $user->games()->where('active', '=', '1')->save($active);
        }
        $user->games()->save($active);
        return redirect('post');
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

    // public function postCreate() {
    //     return redirect('home');
    // }

    /**********************************************
        This Uses Laravel's register functionality
        to create users and drop them in my DB
    **********************************************/

    public function edit($id) {
        
        if(!Auth::check()) {
            return redirect('home');
        }

        $user = User::find($id);
        return view('user_edit', ['user' => $user]);
    }

    public function postEdit($id) {
        $user = User::find($id);
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

    public function addGames($id) {
        if (!Auth::check()) {
            return redirect('home');
        }
        $user = User::find($id);
        $games = Game::all();
        return view('games', ['user' => $user, 'games' => $games]);
    }

    public function postAddGames($id) {
        $user = User::find($id);
        $game = Game::find(Request::get('game'));
        $user->games()->save($game);
        // $user->games->console = Request::get('console');
        $user->save();
        return redirect('user');
    }

    /**********************************************
        To add games and consoles to your user
        profile for active.
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

    public function archive() {
        if (!Auth::check()) {
            return redirect('home');
        }
        $user = new User();
        return view('archive', ['user' => $user]);
    }

    /**********************************************
        Eventually goes to Friends page. 
    **********************************************/

}