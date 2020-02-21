@extends('layouts.app')
@section('content')
    <h3>Ваши статьи</h3>
    @auth
        <a href="{{route('addtext')}}" class="btn btn-success">Добавить новую статью</a>
        <a href="{{route('addCategoriesView')}}" class="btn btn-success">Добавить новую категорию</a>
    @endauth
    @foreach($articles as $article)
        @include('blog.cardblog')
    @endforeach
    {{$articles->links()}}
@endsection
