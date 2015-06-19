<?php
namespace App\Http\Controllers;
use App\Models\Game;
use Request;

/**********************************************
    This controller will most likely not be
    used until after MVP is finished as
    it is not essential to the project 
    anymore
**********************************************/


class SearchController extends Controller {

    public function view() {
        return view('search');
    }

    public function postSearch() {
        return redirect('search_results');
    }

    public function results() {
        return view('search_results');
    }


}