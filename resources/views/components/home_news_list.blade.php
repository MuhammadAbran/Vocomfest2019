<div class="news-list">
    <img src="{!!asset('storage/news/')!!}/{{$thumbnail}}" alt="{{$alt}}">
    <h1>{{$title}}</h1>
    <small>{{$date}}</small>
    <p class="text-center">
    <a href="{{route('newsPage',$news_id)}}"><button class="btn btn-green">Selengkapnya</button></a>
    </p>
</div>