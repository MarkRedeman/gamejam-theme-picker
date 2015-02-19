<?php namespace GameJam\Services;

use GameJam\User;
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
		$rules = [
			'email'    => 'required|email|max:255|unique:users'
		];

		if ($this->passwordIsGiven($data))
		{
			$rules['password'] = 'sometimes|required|min:3';
		}

		return Validator::make($data, $rules);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$email = $data['email'];

		// Use the provided password, otherwise create a random one
		$password = ($this->passwordIsGiven($data))
			? $data['password']
			: str_random(60);

		return User::register($email, bcrypt($password));
	}

	/**
	 * Determines if password was set and not empty
	 * @param  array $data with optional password key
	 * @return boolean true if password key was not empty
	 */
	private function passwordIsGiven($data)
	{
		return (isset($data['password']) and ! empty($data['password']));
	}

}
