@extends('layouts.app')

@section('page-title')
    Магазин
@endsection

@section('content')
    <h1>Все товары в магазине</h1>

    @if(count($items) > 0)
        @foreach($items as $el)
            <div class="alert alert-success">
                <h2>{{ $el->name }}</h2>
                <p>Категория: {{ $el->category }}</p>
                <p>Цена: {{ $el->price }} рублей</p>
                <a href="/public/shop/{{ $el->id }}" class="btn btn-success">Подробнее</a>
            </div>
        @endforeach
        {{ $items->links() }}
    @else
        <p>На данный момент товаров нет</p>
    @endif
@endsection
