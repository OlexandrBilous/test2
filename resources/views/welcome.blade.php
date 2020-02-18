@extends('layouts.app')
@section('content')
    <h3>Статьи</h3>

    @foreach($articles as $article)
        @include('blog.cardblog')
    @endforeach
    {{$articles->links()}}

    <a href="{{route('aboutone')}}"class="btn btn-secondary">about</a>
    <a href="{{route('addtext')}}" class="btn btn-success">Create new text</a>

@endsection
