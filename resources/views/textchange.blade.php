@extends('layouts.ArticleEditorStyle')
@section('content')

            <form method="post" action="{{ route('article-save', $article) }}" >
                <div>
                    <h3>Изменение статьи</h3>
                    <input type="text" name="title" value="{{$article->title}}" required>
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea name="content"  rows="4" required>{{$article->content}}</textarea>
                    @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                    <input type="submit" value="Отправить">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </form>
  @endsection


