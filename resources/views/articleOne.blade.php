@extends('layouts.app')
@section('content')
    <h2>{{$article->title}}</h2>
    <p>{{$article->content}}</p>
    <h4>{{$article->postdate}}</h4>
@endsection
