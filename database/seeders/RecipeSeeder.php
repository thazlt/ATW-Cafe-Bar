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
        $recipe = new Recipe();

        $recipe->name = 'Bloody Mary';
        $recipe->ingridients = ["Vodka","Tomato","Soju"];
        $recipe->guide = 'drink vodka';
        $recipe->author = 1;
        $recipe->validate = true;

        $recipe->save();
    }
}
