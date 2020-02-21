<div class="card mb-2">
    <div class="card-body">
        <h5 class="card-title"><a href="{{$article->link()}}">{{$article->title}}</a></h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$article->postdate}}</h6>
        <p class="card-text">{{$article->content}}</p>
        <a href="{{route('article-change', $article)}}" class="btn btn-primary">Редактировать</a>
        <a href="{{route('article-delete', $article)}}" class="btn btn-danger">Удалить</a>


    </div>
</div>

