@extends('layouts.app')
@section('content')
    <h3>Статьи</h3>
    <div class="container text-center">
        @foreach($categories as $category)
            <a class="p-2 text-muted col-sm" href="{{ $category->link() }}">{{ $category->category }}</a>
        @endforeach
    </div>
    @auth
        <a href="{{route('article-menu')}}" class="btn btn-success">Управление статьями</a>
    @endauth
    @foreach($articles as $article)
        @include('blog.cardblogv2')
    @endforeach
    {{$articles->links()}}

@endsection
