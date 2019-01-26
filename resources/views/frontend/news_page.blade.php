
@extends('frontend.layouts.main')

@extends('frontend.menu.page_navigation')

@section('title',$news->title)

@section('content')
<section  id="news-page">
    <div class="news-title">
        <div class="overlay">
            <div class="container">
                <div class="title-box bottom-animated">
                    <h1>{{$news->title}}</h1>
                    <small>Published Date : {{$news->created_at}}</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 content bottom-animated">
                    <p>
                    <a href="{!!asset('storage/news')!!}/{{$news->thumbnail}}" data-rel="lightcase"><img src="{!!asset('storage/news')!!}/{{$news->thumbnail}}" alt="{{$news->title}}"></a>
                    </p>
                    <p>
                        {{$news->content}}
                        
                    </p>                          

            </div>

            <!-- Related Post -->
            <div class="col-md-8 offset-md-2 related-post bottom-animated">
                <h5 class="text-center">You might also like <br/> <strong>one of the following</strong></h5>

             
                <div class="row text-center">

                    @foreach($news_all as $related)
                        <div class="col-md-4">
                            <img src="{!! asset('storage/news')!!}/{{$related->thumbnail}}" alt="{{$related->title}}">
                            <h1><a href="{{route('newsPage',$related->id)}}">{{$related->title}}</a></h1>
                            <span>{{$related->created_at}}</span>
                        </div>
                    @endforeach
                   
                </div>
            </div>
            <!-- End Of Related Post -->
          
        </div>
    </div>
</section>
@endsection

