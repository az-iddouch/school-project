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
        factory('App\Service', 7)->create();

        DB::table('options')->insert([
            'name' => 'recto-verso',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('options')->insert([
            'name' => 'plastification',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('options')->insert([
            'name' => 'type de papier',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //sub-options
        DB::table('suboptions')->insert([
            'name' => 'pelliculage brillant',
            'price' => 0.5,
            'option_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suboptions')->insert([
            'name' => 'pelliculage mat',
            'price' => 0.5,
            'option_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suboptions')->insert([
            'name' => 'recto',
            'price' => 0,
            'option_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suboptions')->insert([
            'name' => 'recto-verso',
            'price' => 0.5,
            'option_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suboptions')->insert([
            'name' => 'couché mat',
            'price' => 0,
            'option_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suboptions')->insert([
            'name' => 'bristol',
            'price' => 0.12,
            'option_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('suboptions')->insert([
            'name' => 'bristol toilé',
            'price' => 0.20,
            'option_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

}
