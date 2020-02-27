@extends('layouts.app')
@section('content')
    <div class="container text-center">
        @foreach($categories as $category)
            <a class="p-2 text-muted col-sm" href="{{ $category->link() }}">{{ $category->name }}</a>
        @endforeach
    </div>
    <h3>Статьи</h3>

    @auth
        <a href="{{route('article-menu')}}" class="btn btn-success">Управление статьями</a>
    @endauth
    @foreach($articles as $article)
        @include('blog.cardblogv2')
    @endforeach
    {{$articles->links()}}

@endsection
