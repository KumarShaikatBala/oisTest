<?php

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
        \App\Financial_organization::firstOrCreate([
            'name' => 'City Bank',
            'short_name'=>'city',
            'address'=>'city',
        ]);
    }
}
