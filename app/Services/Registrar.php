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
			'name' => 'required|max:255',
			'enroll_no' => 'required|max:11|unique:users',
			'course' => 'required',
			'majors' => 'required',
			'age' => 'required',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
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
		return User::create([
			'name' => $data['name'],
			'enroll_no' => $data['enroll_no'],
			'course' => $data['course'],
			'majors' => $data['majors'],
			'age' => $data['age'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
