@extends('layouts.app')
@section('content')
    <h3>Статьи</h3>

    @auth
        <a href="{{route('article-menu')}}" class="btn btn-success">Управление статьями</a>
    @endauth
    @foreach($articles as $article)
        @include('blog.cardblogv2')
    @endforeach
    {{$articles->links()}}

@endsection
