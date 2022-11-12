@extends('layouts.app')

@section('content')




    <div class="main" style="margin-top: 70px">
        <h2>
            <span class="text-warning">{{$cat->name}}</span>

            <br>
            <small  style="color: #5e5e5e;font-weight: bold ">You can find here all The Videos For this Category</small>
        </h2>
        <div class="col-md-10 col-md-offset-1">

            <div class="row">
                @foreach($videos as $video)
                    <div class="col-md-4">
                        @include('front-end.shared.video-card')
                    </div>
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
{{--                {{$video->links()}}--}}
                {{$videos->links()}}
            </div>
        </div>


    </div>
@endsection
