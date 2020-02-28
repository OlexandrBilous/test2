@extends('layouts.app')
@section('content')
    <h2>{{$article->title}}</h2>
    <p>{{$article->content}}</p>
    <h4>{{$article->postdate}}</h4>
<h4>Автор: {{$username}}</h4>
    <h5>Категория: {{ $category }}</h5>
    <h4>Комментарии:</h4>

    @foreach($comments as $comment)
        <div class="card mt-2 mb-1">
            <h4 class="card-text"><a href="#">{{ $comment->user->name }}</a>: {{ $comment->comment }}</h4>
            <em>{{$comment->updated_at}}</em>
        </div>
        @endforeach
    @auth()
        <form method="post" action="{{ route('comment') }}">
            <input type="text" class="form-control mb-2" name="comment">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
            <input type="hidden" name="articles_id" value="{{ $article->id }}">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="submit" value="Оставить комментарий">
        </form>
    @endauth
{{--
@yield('comment')
--}}
@endsection
