@extends('layouts.app')

@section('page-title')
    Товар: {{ $item->name }}
@endsection

@section('content')

    <div class="alert alert-success">

        <a href="/public/shop" class="btn btn-warning">Назад</a><br>
        <h1>{{ $item->name }}</h1>
        <p>{{ $item->category }}</p>
        <p>{{ $item->description }}</p>
        <a href="#" class="btn btn-info">Купить</a>

    </div>
@endsection
