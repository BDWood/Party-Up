<?php
namespace App\Http\Controllers;
use App\Models\Game;
use App\User;
use Request;
use DB;
use Auth;

/**********************************************
    This controller will most likely not be
    used until after MVP is finished as
    it is not essential to the project 
    anymore
**********************************************/


class SearchController extends Controller {

    public function view() {
        if(!Auth::check()) {
            return redirect('home');
        } 
        return view('search');
    }

    public function postSearch() {
        
        $sql_fragments = [];
        $bind_params = [];
        

        if (Request::get('region') != NULL) {
            $sql_fragments[] = "user.region = :region";
            $bind_params['region'] = Request::get('region');
        } 

        if (Request::get('age') != NULL) {
            if (Request::get('age') == 'age') {
                $sql_fragments[] = "datediff(now(), date_of_birth)/365 >= 18";
                
            }
        }

        if (Request::get('game_id') != NULL) {
            $sql_fragments[] = 'game.id = :game_id';
            $bind_params['game_id'] = Request::get('game_id');      
        }

        if (Request::get('activity') != 'Any') {
            $sql_fragments[] = 'game_activity.id = :activity';
            $bind_params['activity'] = Request::get('activity');
        }

        if (Request::get('play_style') != NULL) {
            $sql_fragments[] = 'play_style = :play_style';
            $bind_params['play_style'] = Request::get('play_style');
        }

        $sql_condition = implode(" AND ", $sql_fragments);


        $sql = "
            SELECT 
            user_id
            FROM
            user, game, user_game, game_activity 
            WHERE 
            user.id = user_game.user_id and
            game.id = user_game.game_id and
            game.id = game_activity.game_id and
            user_game.active = 1
            " . ($sql_condition ? 'and ' . $sql_condition : '') ;

        // echo($sql);

        $results = DB::select($sql, $bind_params);
        $matching_users = [];
        foreach ($results as $row) {
            $matching_users[] = User::find($row->user_id);
        }
        return view('search_results', ['matching_users' => $matching_users]);
    }

    public function results() {

        return view('search_results');
    }

    public function activities($game_id) {
        $sql = '
            SELECT 
            game_activity.id, activity
            FROM
            game, game_activity 
            WHERE 
            game.id = game_activity.game_id and
            game.id = :game_id
        ';

        $bind_params = [];
        $bind_params['game_id'] = $game_id;
        $results = DB::select($sql, $bind_params);
        return $results;
    }


}