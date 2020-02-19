@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('addArticle') }}">
        <div>
            <h3>Добавление статьи</h3>
            <div class="form-group">
                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title"
                       placeholder="Название" value="{{old('title')}}"
                       aria-label="Username" aria-describedby="addon-wrapping">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">

                <input type="date" name="postdate"
                       class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}">
                @error('postdate')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">

                <textarea class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="content"
                          placeholder="Содержимое"
                          rows="4">{{ old('content') }}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="btn btn-primary" type="submit" value="Разместить статью">
        </div>
    </form>
@endsection











