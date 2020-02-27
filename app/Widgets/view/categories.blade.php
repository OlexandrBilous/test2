@if($data)

    <div class="categories">

        @foreach($data as $category)
            <a class="p-2 text-muted col-sm" href="{{ $category->link() }}">{{ $category->name }}</a>
        @endforeach

    </div>

@endif
