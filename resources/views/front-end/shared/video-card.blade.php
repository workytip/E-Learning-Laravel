<div class="card" style="width:20em ;">
    <img class="card-img-top" src="{{url('uploads/'.$video->image)}}" alt="Card image" style="height: 200px">
    <div class="card-body">
        <h6 class="card-title text-primary">{{$video->name}}</h6>
        <small>{{$video->created_at}}</small>
        <a href="{{route('front.video' ,['id'=>$video->id])}}" class="btn btn-primary">Watch Now!</a>
    </div>
</div>
