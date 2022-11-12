@extends('back-end.layout.app')
@section('title') create tags @endsection





@section('content')

    @component('back-end.layout.header',['mynav' => 'Adding tags'])
    @endcomponent



<div class="content">

    <div class="container-fluid ">
        <h4 class="card-title text-info">Creating tags</h4>
        <p class="card-category text-warning">You can Add tags here </p>
        <div class="row ">

            <div class="col-md-8 ">
                <div class="card ">

                    <div class="card-header">
                        <h4 class="card-title text-info">Add New Tag</h4>
                    </div>
                    <div class="card-body pl-5">
                        <form action="{{route('tags.store')}}" method="post">
{{--                            {{method_field('post')}}--}}
                            @include('back-end.tags.form')
                            <button type="submit" class="btn btn-info btn-fill pull-right">Add </button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
{{--            <div class="col-md-4">--}}
{{--                <div class="card card-user">--}}
{{--                    <div class="card-image">--}}
{{--                        <img src="AYKLAM.JPG" alt="...">--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="author">--}}
{{--                            <a href="#">--}}
{{--                                <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">--}}
{{--                                <h5 class="title">Mike Andrew</h5>--}}
{{--                            </a>--}}
{{--                            <p class="description">--}}
{{--                                michael24--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <p class="description text-center">--}}
{{--                            "Lamborghini Mercy--}}
{{--                            <br> Your chick she so thirsty--}}
{{--                            <br> I'm in that two seat Lambo"--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <hr>--}}
{{--                    <div class="button-container mr-auto ml-auto">--}}
{{--                        <button href="#" class="btn btn-simple btn-link btn-icon">--}}
{{--                            <i class="fa fa-facebook-square"></i>--}}
{{--                        </button>--}}
{{--                        <button href="#" class="btn btn-simple btn-link btn-icon">--}}
{{--                            <i class="fa fa-twitter"></i>--}}
{{--                        </button>--}}
{{--                        <button href="#" class="btn btn-simple btn-link btn-icon">--}}
{{--                            <i class="fa fa-google-plus-square"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>





@endsection

