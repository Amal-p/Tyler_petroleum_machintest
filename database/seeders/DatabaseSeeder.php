<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Language::create([
            'Language' => 'English',
        ]);
        Language::create([
            'Language' => 'Malayalam',
        ]);
        Language::create([
            'Language' => 'Hindi',
        ]);
        Language::create([
            'Language' => 'Thamil',
        ]);
    }
}
