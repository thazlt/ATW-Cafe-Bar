<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::create([
            'name' => 'Bloody Mary',
            'ingridients' => '["Vodka"]',
            'guide' => 'drink vodka',
            'author' => 1,
            'validate' => true,
        ]);
    }
}
