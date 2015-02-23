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

        Theme::submit('Logistics', $user);
        Theme::submit('Rings', $user);
        Theme::submit('Timeless', $user);
        Theme::submit('Gravity', $user);
        Theme::submit('Attraction', $user);
        Theme::submit('Godly', $user);

        $themes = Theme::count();
        $this->command->info("Seeded {$themes} themes.");
    }

}
