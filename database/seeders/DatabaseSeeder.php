<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
      


      $categories = [
        'Technology',
        'Sport',
        'scince',
        'poletics',
        'Health',
        'Entertainement'
      ];

      foreach ($categories as $category) {
        category::create(['name' => $category]);
      }
       
       Post::factory(100)->create(); 



    }
}
