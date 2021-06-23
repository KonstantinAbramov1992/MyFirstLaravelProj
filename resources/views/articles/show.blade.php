@extends('layouts.app')

@section('page-title')
    Статья на сайте
@endsection

@section('content')

    <a href="/public/articles" class="btn btn-warning mb-3">Все статьи</a><br>

    @if(Auth::user())
        <a href="/public/home" class="btn btn-success mb-3">В личный кабинет</a><br>
    @endif

    <h1>{{ $article_and_comments[0]->title }}</h1>

    <div>
        <p>{!! $article_and_comments[0]->text !!}</p>
        <p>Дата создания: {{ $article_and_comments[0]->created_at }}</p>
    </div>

    <hr>
    @if(Auth::user())
        @if(Auth::user()->id == $article_and_comments[0]->user_id)
            <a href="/public/articles/{{$article_and_comments[0]->id}}/edit" class="btn btn-warning">Редактировать</a>

            <br><br>
            {!! Form::open(['action' => ['ArticlesController@destroy', $article_and_comments[0]->id], 'method' => 'POST']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Удалить запись', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endif

    @if(count($article_and_comments[1]) > 0)
        @foreach($article_and_comments[1] as $el)
            <div class="alert alert-info">

                <p><b>{{ $el->name }}</b></p>
                <p>{{ $el->text }}</p>
            </div>
        @endforeach
    @else
        <p>На данный момент комментариев нет</p>
    @endif

    @if(Auth::user())
        <h1>Добавить комментарий</h1>
        {!! Form::open(['action' => 'ArticlesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('text', auth()->user()->name . "  Ваш комментарий:") }}
            {{ Form::textarea('text', '', ['class' => 'form-control', 'placeholder' => 'Комментарий']) }}
        </div>
        <input type="text" value="{{ $article_and_comments[0]->id }}" name="article_id" style="display:none">
        {{ Form::submit('Добавить', ['class' => 'btn btn-success']) }}
        {!! Form::close() !!}
    @endif
@endsection
