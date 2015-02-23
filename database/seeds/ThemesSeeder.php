<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GameJam\User;
use GameJam\Theme;

class ThemesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->truncate();
        // registering default user
        $user = User::first();

        Theme::submit('Logistics', $user)->removeVote($user);
        Theme::submit('Rings', $user)->removeVote($user);
        Theme::submit('Timeless', $user)->removeVote($user);
        Theme::submit('Gravity', $user)->removeVote($user);
        Theme::submit('Attraction', $user)->removeVote($user);
        Theme::submit('Godly', $user)->removeVote($user);

        Theme::submit('Logistics 1', $user)->removeVote($user);
        Theme::submit('Rings 1', $user)->removeVote($user);
        Theme::submit('Timeless 1', $user)->removeVote($user);
        Theme::submit('Gravity 1', $user)->removeVote($user);
        Theme::submit('Attraction 1', $user)->removeVote($user);
        Theme::submit('Godly 1', $user)->removeVote($user);

        Theme::submit('Logistics 2', $user)->removeVote($user);
        Theme::submit('Rings 2', $user)->removeVote($user);
        Theme::submit('Timeless 2', $user)->removeVote($user);
        Theme::submit('Gravity 2', $user)->removeVote($user);
        Theme::submit('Attraction 2', $user)->removeVote($user);
        Theme::submit('Godly 2', $user)->removeVote($user);

        Theme::submit('Logistics 3', $user)->removeVote($user);
        Theme::submit('Rings 3', $user)->removeVote($user);
        Theme::submit('Timeless 3', $user)->removeVote($user);
        Theme::submit('Gravity 3', $user)->removeVote($user);
        Theme::submit('Attraction 3', $user)->removeVote($user);
        Theme::submit('Godly 3', $user)->removeVote($user);

        Theme::submit('Logistics 3 1', $user)->removeVote($user);
        Theme::submit('Rings 3 1', $user)->removeVote($user);
        Theme::submit('Timeless 3 1', $user)->removeVote($user);
        Theme::submit('Gravity 3 1', $user)->removeVote($user);
        Theme::submit('Attraction 3 1', $user)->removeVote($user);
        Theme::submit('Godly 3 1', $user)->removeVote($user);

        Theme::submit('Logistics 3 2', $user)->removeVote($user);
        Theme::submit('Rings 3 2', $user)->removeVote($user);
        Theme::submit('Timeless 3 2', $user)->removeVote($user);
        Theme::submit('Gravity 3 2', $user)->removeVote($user);
        Theme::submit('Attraction 3 2', $user)->removeVote($user);
        Theme::submit('Godly 3 2', $user)->removeVote($user);

        $themes = Theme::count();

        $this->command->info("Seeded {$themes} themes.");
    }

}
