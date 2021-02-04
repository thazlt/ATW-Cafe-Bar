<h1>Recipe</h1>
@foreach ($recipes as $recipe)
    <div class="recipe-item">
        <h4><a href="{{url('/recipe/'.$recipe->id)}}">{{$recipe->name}}</a></h4>
    </div>
@endforeach
