<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
        \App\Models\User::factory(5)->create();

        Listing::factory(20)->create();

        // Listing::create([
        //     'title' => 'Laravel Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Group',
        //     'location' => 'Amsterdam',
        //     'email' => 'mario@raposo.nl',
        //     'website' => 'https://www.google.nl',
        //     'description' => 'Tincidunt augue interdum velit euismod in pellentesque. 
        //     Aliquam sem fringilla ut morbi tincidunt. Malesuada pellentesque elit eget gravida cum sociis natoque. 
        //     Cursus sit amet dictum sit amet justo donec enim. Felis donec et odio pellentesque diam volutpat commodo sed 
        //     egestas. Ut venenatis tellus in metus vulputate eu scelerisque. Ut tellus elementum sagittis vitae et 
        //     leo duis.'
        // ]);

        // Listing::create([
        //     'title' => 'PHP Developer',
        //     'tags' => 'PHP, developer',
        //     'company' => 'Acme Group',
        //     'location' => 'Rotterdam',
        //     'email' => 'mario@henk.nl',
        //     'website' => 'https://www.google.nl',
        //     'description' => 'Aliquam sem fringilla ut morbi tincidunt. Malesuada pellentesque elit eget gravida cum sociis natoque. 
        //     Cursus sit amet dictum sit amet justo donec enim. Felis donec et odio pellentesque diam volutpat commodo sed 
        //     egestas. Ut venenatis tellus in metus vulputate eu scelerisque. Ut tellus elementum sagittis vitae et 
        //     leo duis.'
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
