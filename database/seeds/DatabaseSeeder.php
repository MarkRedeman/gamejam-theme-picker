<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GameJam\User;
use GameJam\Theme;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->command->info('Start seeding');

		$this->call('UserSeeder');
		$this->call('ThemesSeeder');
	}

}
