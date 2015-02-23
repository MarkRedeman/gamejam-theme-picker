<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GameJam\User;

class UserSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        // registering default user
        $user = User::Register(
            env('ADMIN_EMAIL', 'markredeman@gmail.com'),
            bcrypt(env('ADMIN_PASSWORD', 'secret'))
        );
        $user->makeAdmin();
        $user->confirm();
        $user->save();

        $this->command->info('Seeded a user');
    }

}
