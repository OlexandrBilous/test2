<div>
    <h3>{{$title}}</h3>
    <div class="form-group">
        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title" value="{{$article->title}} "  aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('title')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
                    <textarea class="form-control {{$errors->has('content') ? 'is-invalid' : ''}}" name="content"
                              rows="4">{{$article->content}}</textarea>
        @error('content')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <select class="form-control mb-2" name="category_id" >
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

    </select>

    <input type="date" name="postdate" value="{{\Carbon\Carbon::create($article->postdate)}}"
           class="form-control {{$errors->has('postdate') ? 'is-invalid' : ''}} ">
    @error('postdate')
    <div class="text-danger">{{ $message }}</div>
    @enderror



    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
    <input type="submit" class="btn btn-primary" value="{{$title}}">
</div>
