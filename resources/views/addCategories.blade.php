@extends('layouts.app')
@section('content')

    <form method="post" action="{{ route('addCategoriesForm') }}">
        <div>
            <h3>Добавление категории</h3>
            <div class="form-group">
                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="name"
                       placeholder="Название категории" value="{{old('title')}}"
                       aria-label="Username" aria-describedby="addon-wrapping">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input class="btn btn-primary" type="submit" value="Добавить категорию">
        </div>
    </form>
@endsection
