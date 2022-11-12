@extends('layouts.app')

@section('content')

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Dashboard</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    You are logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<div class="main" style="margin-top: 70px">
    <h2>
        <span class="text-warning">Latest Videos</span>

        <br>
        <small class="text-success">You can find here all The Videos on the website</small>
    </h2>


        <div class="row">
            @foreach($videos as $video)
                <div class="col-md-4">
                    @include('front-end.shared.video-card')

                </div>
            @endforeach

        </div>

    <div class="row">
        <div class="col-md-4">
            {{$videos->links()}}
        </div>
    </div>


</div>
@endsection
