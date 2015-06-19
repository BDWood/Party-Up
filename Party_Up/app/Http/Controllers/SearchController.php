<?php
namespace App\Http\Controllers;
use App\Models\Game;
use Request;
use DB;

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
        
        $sql_fragments = [];
        $bind_params = [];
        $bind_params['name'] = Request::get('');

        if (Request::get('region') == !NULL) {
            $sql_fragments[] = "user.region = :region";
            $bind_params['region'] = Request::get('region');
        } 

        if (Request::get('age') == !NULL) {
            if (Request::get('age') == 'age') {
                $sql_fragments[] = "datediff(now(), date_of_birth)/365 >= 18";
                $bind_params['age'] = Request::get('age');
            }
        }

        $sql_condition = implode(" AND ", $sql_fragments);





        $sql = "
            SELECT datediff(now(), date_of_birth)/365 as age, username, game.name, console.name, 
            play_style, region, game_activity.activity, user_game.active 
            FROM
            user, game, user_game, game_activity 
            WHERE 
            user.id = user_game.user_id and
            game.id = user_game.game_id and
            game.id = game_activity.game_id and
            user_game.active = 1 and
            game_activity.id = :activity and
            game.id = :game_id;
            " . $sql_condition;


        // $sql = 'SELECT user_id FROM
        //             game, user_game 
        //             WHERE 
        //             user.id = :id and
        //             game.id = user_game.game_id and
        //             user_game.active = 1;';
        $results = DB::select($sql, $bind_params);
        $matching_users = [];
        foreach ($results as $row) {
            $matching_users[] = User::find($row['id']);
        }
        return redirect('search_results');
    }

    public function results() {
        return view('search_results');
    }


}