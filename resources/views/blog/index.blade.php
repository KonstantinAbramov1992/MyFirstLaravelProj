@extends('layouts.app')

@section('page-title')
    {{ $header }}
@endsection

@section('content')
    @for($i = 0; $i < 4; $i++)
    <div class="alert alert-success">
        <h1>Запись на сайте</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Beatae consequatur cum, debitis ducimus error esse ex facilis ipsum maiores,
            molestiae mollitia nam quas qui quia quisquam ratione rem voluptas voluptatem.</p>
        <button class="btn btn-success">Детальнее</button>
    </div>
    @endfor
@endsection
