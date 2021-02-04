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
        $recipe->ingridients = json_decode($recipe->ingridients);
        var_dump($recipe->ingridients);
        $array = ["thaz","thaz"];
        $json = json_encode($array);
        var_dump($json);
        $array2 = \json_decode($json);
        var_dump($array2);
        return view('recipe.show', ['recipe'=>$recipe, 'author'=>$author->name]);
    }
}
