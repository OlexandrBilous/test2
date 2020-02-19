@extends('layouts.app')
@section('content')
    <h3>Статьи</h3>
    @auth
        <a href="{{route('addtext')}}" class="btn btn-success">Добавить новую статью</a>
    @endauth
    @foreach($articles as $article)
        @include('blog.cardblog')
    @endforeach
    {{$articles->links()}}
@endsection
