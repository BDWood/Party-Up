<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;


class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password', 'play_style', 'region', 'date_of_birth'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


    // public function games() {
    //     return $this->hasMany('App\Models\Game');
    // }

    public function getAge() {
    	$dob = new Carbon($this->date_of_birth);
    	$now = Carbon::now();
    	$datediff = ($dob->diff($now)->days/365);
    	return floor($datediff);


    	//Carbon::createFromDate($this->date_of_birth);
    }

	public function games() {
		return $this->belongsToMany('App\Models\Game', 'user_game');
	}

}