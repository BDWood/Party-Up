<?php
namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    protected static $table = 'friend';


    public function showFriends() {
        
    }

    public function delete() {
        DB::delete('delete from user where id = ?' [$this->id]);
    }
}