@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('article-save', $article) }}" >
        @include('blog.form', ['title' => 'Изменить статью'])
    </form>
@endsection


