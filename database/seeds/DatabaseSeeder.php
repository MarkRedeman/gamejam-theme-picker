<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GameJam\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// registering default user
		$user = User::create([
			'email' 	=> env('ADMIN_EMAIL', 'markredeman@gmail.com'),
			'password'  => env('ADMIN_PASSWORD', 'secret')
		]);
		$user->makeAdmin();
		$user->save();

		// $this->call('UserTableSeeder');
	}

}
