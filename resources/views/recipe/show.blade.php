<h1>{{$recipe->name}}</h1>
<h4>Author</h4>
<p>{{$author}}</p>
<h4>Ingridients:</h4>
<ol>
    @foreach ($recipe->ingridients as $ingridient)
    <li>{{$ingridient}}</li>
    @endforeach
</ol>
<h4>Guide</h4>
<p>{{$recipe->guide}}</p>
