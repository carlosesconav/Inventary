<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;

class CategorySeeder extends Seeder
{

    public function run()
    {
      category::create([
        'name' => 'tecnologia'
      ]);

      category::create([
        'name' => 'mueble'
      ]);

      category::create([
        'name' => 'electrodomestico'
      ]);

    }
}
