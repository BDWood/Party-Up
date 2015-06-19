<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Console extends Model {
    protected $table = 'console';

    public function game() {
        return $this->belongsTo('App\Models\Game');
    } 

}