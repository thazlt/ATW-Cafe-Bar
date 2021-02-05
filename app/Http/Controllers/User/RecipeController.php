<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use App\Http\Controllers\RecipeController as Controller;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function create(){
        return view('recipe.create');
    }
    public function store(Request $rq){
        $validated = $rq->validate([
            'name' => ['required', 'max:255'],
            'ingridients' => ['required'],
            'guide' => ['required'],
        ]);
        Recipe::create([
            'name' =>$validated['name'],
            'ingridients' => $validated['ingridients'],
            'guide' => $validated['guide'],
            'validate' => 1,
            'author' => Auth::user()->id,
        ]);
        return redirect('/recipe')->with('mssg', 'We will check the recipe and upload shortly!');

    }
    public function destroy(){

    }
}
