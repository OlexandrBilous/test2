@extends('layouts.app')
@section('content')
<div class="position-ref full-height"> {{--class = flex-center--}}
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Домашняя страница</a>
            @else
                <a href="{{ route('login') }}">Логин</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Регистрация</a>
                @endif
            @endauth
        </div>
    @endif
<div>
    <h3>Статьи</h3>

    @foreach($articles as $article)
        <h4><a href="{{$article->link()}}">{{$article->title}}</a></h4>
        {{$article->content}}
        <h4>{{$article->postdate}}</h4>
        <h3><a href="{{route('article-change', $article)}}">Редактировать</a></h3>
        <h3><a href="{{route('article-delete', $article)}}">Удалить</a></h3>
    @endforeach
    {{$articles->links()}}

    <a href="{{route('aboutone')}}">about</a>
    <a href="{{route('addtext')}}">Create new text</a>

</div>
@endsection
