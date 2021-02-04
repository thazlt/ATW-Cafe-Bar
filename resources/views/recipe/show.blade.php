<h1>{{$recipe->name}}</h1>
<h4>Author</h4>
<p>{{$author}}</p>
<h4>Ingridients:</h4>
{{echo($recipe->ingridients)}}
{{-- @foreach ($recipe->ingridients as $ingridient)
    <p>{{$ingridient}}</p>
@endforeach --}}
<h4>Guide</h4>
<p>{{$recipe->guide}}</p>
