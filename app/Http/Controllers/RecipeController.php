<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;

class RecipeController extends Controller
{
    public function index(){
        $recipes = Recipe::latest()->get();
        return view('recipe.index',[
            'recipes' => $recipes,
        ]);
    }

    public function show($id){
        $recipe = Recipe::findOrFail($id);
        $author = User::findOrFail($recipe->author);
        var_dump($recipe->ingridients);
        return view('recipe.show', ['recipe'=>$recipe, 'author'=>$author->name]);
    }
}
