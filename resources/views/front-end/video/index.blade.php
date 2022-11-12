@extends('layouts.app')

@section('content')




    <div class="main" style="margin-top: 70px">
        <h2>
            <span class="text-warning">{{$video->name}}</span>

            <br>
            <small style="color: #5e5e5e;font-weight: bold ">Here You can watch The video You have chosen.. enjoy!</small>
        </h2>
        <div class="row">
            <div class="col-md-12 ">
                <div class="card ">
                    <div class="card-body pl-5">
                        @php $url=getYoutubeId($video->youtube) @endphp
                        @if($url)
                            <iframe width="100%" height="500"
                                    src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allowfullscreen>
                            </iframe>
                        @endif
                    </div>
                </div>
            </div>

        </div>


        <div class="row " style="margin-left: 5px" >
            <div class="col-md-12 ">
                <span style="color: #5e5e5e;font-weight: bold ">
                   Added By : {{$video->user->name}}
                </span>
                <h6 class="text-info" >
                 At :   {{$video->created_at}}
                </h6>
                <h6 style="color: #5e5e5e;font-weight: bold ">
                <span class="text-info"> Description: </span>   {{$video->des}}
                </h6>
                <p>
                        <a href="{{route('front.category',['id'=>$video->cat->id])}}">
                            <span class="badge badge-info">{{$video->cat->name}}</span>

                        </a>


                </p>
                <p  >
                    @foreach($video->tags as $tag)
                        <a href="{{route('front.tag',['id'=>$tag->id])}}">
                    <span class="badge badge-primary">{{$tag->name}}</span>
                        </a>
                    @endforeach

                </p>
                <p>
                    @foreach($video->skills as $skill)
                        <a href="{{route('front.skill',['id'=>$skill->id])}}">
                        <span class="badge badge-warning">{{$skill->name}}</span>
                        </a>
                    @endforeach

                </p>
            </div>
        </div>


        <div class="row" id="comments">
            <div class="col-md-12 ">
                <h4 class="card-title text-primary " >
                    @php $comments=$video->comments @endphp
                    Comments ({{count($comments)}})
                </h4>
                @foreach($video->comments as $comment)
                    <div class="card">
                         <span style="color: #5e5e5e;font-weight: bold ">
                             {{$comment->user->name }}</span>
                        <div class="card-body">   {{$comment->comment }}</div>
                        <h6 class="text-info" >{{$comment->created_at }}</h6>
                        @if(auth()->user())
                        @if((auth()->user()->group =='admin' )|| (auth()->user()->id == $comment->user->id ))
                        <a href="#" onclick="$(this).next('div').slideToggle(1000);return false;">Edit</a>
                            <div class="form-group" style="display: none">
                                <form action="{{route('front.commentUpdate',['id'=>$comment->id])}}" method="post">
                                    @csrf
                                    <textarea name="comment" rows="3" class="form-control"  >{{$comment->comment }}</textarea>
                                    <button class="btn btn-info" type="submit">Edit </button>
                                </form>
                            </div>
                        @endif
                            @endif
                    </div>


                @endforeach


            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ">
            <div class="card">
            <div class="form-group">
                   @if(auth()->user())
            <form action="{{route('front.commentStore',['id'=>$video->id])}}" method="post">
                @csrf
                <textarea name="comment" rows="3" class="form-control" placeholder="Type Your Comment Here" ></textarea>
                <button class="btn btn-primary" type="submit">Add Comment </button>
            </form>
                    @endif
        </div>
        </div>
        </div>
        </div>
    </div>
@endsection
