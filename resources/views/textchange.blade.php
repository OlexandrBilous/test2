@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('article-save', $article) }}" >
        <div>
            <h3>Изменение статьи</h3>
            <div class="form-group">
                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title" value="{{$article->title}} "  aria-label="Username" aria-describedby="addon-wrapping" required>
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                    <textarea class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="content"
                              rows="4">{{$article->content}}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
            <input type="submit" class="btn btn-primary" value="Изменить статью">
        </div>
    </form>
@endsection


