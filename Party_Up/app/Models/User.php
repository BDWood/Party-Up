<?php
namespace App\Models;
use DB;

class User extends Model {
    protected static $table = 'user';


    public function delete() {
        DB::delete('delete from user where id = ?' [$this->id]);
    }
}