<h1>Recipe</h1>
<p class="mssg">{{ session('mssg') }}</p>
@foreach ($recipes as $recipe)
    <div class="recipe-item">
        <h4><a href="{{url('/recipe/'.$recipe->id)}}">{{$recipe->name}}</a></h4>
    </div>
@endforeach
<a href="{{url("/home")}}"><-Return Home</a>
<br>
<a href="{{url("/user/recipe/create")}}"><-Create new Recipe</a>
