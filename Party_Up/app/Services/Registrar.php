<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'username' => 'required|max:255|unique:user',
			'email' => 'required|email|max:255|unique:user',
			'password' => 'required|confirmed|min:6',
			'region' => 'required',
			'play_style' => 'required',
			'date_of_birth' => 'required',

		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		// dd($data);
		return User::create([
			'username' => $data['username'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'region' => $data['region'],
			'play_style' => $data['play_style'],
			'date_of_birth' => $data['date_of_birth']
		]);
	}

}
