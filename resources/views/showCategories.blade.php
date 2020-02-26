@extends('layouts.app')
@section('content')

    <h3>Статьи по категории: {{ $category->category }}</h3>

    @foreach($articles as $article)
        <div class="card mb-3">
            <h5 class="card-header">{{ $article->title }}</h5>
            <div class="card-body">
                <p class="card-text">{{ $article->content }}</p>
                <a href="{{ $article->link() }}" class="btn btn-primary">Читать</a>
            </div>
        </div>
    @endforeach

@endsection
