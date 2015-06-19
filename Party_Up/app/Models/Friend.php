<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected $table = 'friend';

    public function user() {
        return $this->belongsTo('App\User');
    }
}