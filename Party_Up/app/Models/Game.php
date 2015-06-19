<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Game extends Model {
    protected $table = 'game';

    // public function user() {
    //     return $this->belongsTo('App\User');
    // } 

    public function consoles() {
        return $this->hasMany('App\Models\Console');
    }

    public function user() {
        return $this->belongsToMany('App\User', 'user_game');
    }
}