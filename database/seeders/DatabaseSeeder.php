<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(SettingsSeeder::class);
        $this->call(TranslationSeeder::class);
        $this->call(ViewBlockSeeder::class);
        $this->call(SlidersSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(LinksSeeder::class);
    }
}
