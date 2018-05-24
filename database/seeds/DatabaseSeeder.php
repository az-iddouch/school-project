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
        // factory('App\Service', 7)->create();

        DB::table('services')->insert([
            'name' => 'Carte visite',
            'discription' => 'Impression : Quadri recto ou recto verso
            Dimension : 8.5 x 5.5 cm
            Papier : Couché mat 350 g/m²
            Finition : Pelliculage mat oubrillant',
            'image' => '/images/demo/s5.png',
            'default_price' => 1,
            'updated_at' => now()
        ]);
        DB::table('services')->insert([
            'name' => 'Papier a en-tete',
            'discription' => 'Impression : Quadri recto
            Dimension : 21 x 29.7 cm
            Papier : 90 g/m² Laser',
            'image' => '/images/demo/s5.png',
            'default_price' => 2.25,
            'updated_at' => now()
        ]);
        DB::table('services')->insert([
            'name' => 'Flayer',
            'discription' => 'Impression : Quadri recto
            Dimension : 21 x 14.8 cm
            Papier : Couché 115 g/m²',
            'image' => '/images/demo/s5.png',
            'default_price' => 1.5,
            'updated_at' => now()
        ]);
        DB::table('services')->insert([
            'name' => 'Port-documents',
            'discription' => 'Impression : Quadri recto
            Dimension : 44 x 30 cm
            Papier : Couché 300 g/m²
            Finition : pelliculage recto',
            'image' => '/images/demo/s5.png',
            'default_price' => 15,
            'updated_at' => now()
        ]);
        DB::table('services')->insert([
            'name' => 'Invitation',
            'discription' => 'Impression : Quadri recto
            Dimension : 21 x 10 cm
            Papier : Couché 350 g/m²
            Finition : pelliculage recto',
            'image' => '/images/demo/s5.png',
            'default_price' => 5,
            'updated_at' => now()
        ]);
        DB::table('services')->insert([
            'name' => 'Roll-up',
            'discription' => 'Impression : Quadri
            Dimension : 200 x 85 cm
            Support : Bâche
            Finition : montage sur support en aluminium (Inclus)',
            'image' => '/images/demo/s5.png',
            'default_price' => 750,
            'updated_at' => now()
        ]);
        DB::table('services')->insert([
            'name' => 'Bandrole',
            'discription' => 'Impression : Quadri
            Dimension : 100 x 100 cm
            Support : Bâche',
            'image' => '/images/demo/s5.png',
            'default_price' => 750,
            'updated_at' => now()
        ]);

        //options table
        DB::table('options')->insert([
            'label' => 'recto / recto-verso',
            'name' => 'recto-verso',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('options')->insert([
            'label' => 'plastification',
            'name' => 'plastification',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('options')->insert([
            'label' => 'type de papier',
            'name' => 'type_de_papier',
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
        //option_service table 
        DB::table('option_service')->insert([
            'option_id' => 1,
            'service_id' => 1  
        ]);
        DB::table('option_service')->insert([
            'option_id' => 2,
            'service_id' => 1  
        ]);
        DB::table('option_service')->insert([
            'option_id' => 3,
            'service_id' => 1  
        ]);
        DB::table('option_service')->insert([
            'option_id' => 1,
            'service_id' => 3  
        ]);
        DB::table('option_service')->insert([
            'option_id' => 1,
            'service_id' => 4  
        ]);
        DB::table('option_service')->insert([
            'option_id' => 2,
            'service_id' => 4 
        ]);
        DB::table('option_service')->insert([
            'option_id' => 1,
            'service_id' => 5  
        ]);
        DB::table('option_service')->insert([
            'option_id' => 2,
            'service_id' => 5  
        ]);
    }

}
