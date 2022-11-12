@extends('back-end.layout.app')
@section('title') Edit pages @endsection





@section('content')

    @component('back-end.layout.header',['mynav' => 'Edit Page'])
    @endcomponent
    <div class="content">

        <div class="container-fluid ">
            <h4 class="card-title text-info">Editing pages</h4>
            <p class="card-category text-warning">You can Edit pages here </p>
            <div class="row ">

                <div class="col-md-8 ">
                    <div class="card ">

                        <div class="card-header">
                            <h4 class="card-title text-info">Edit pages</h4>
                        </div>
                        <div class="card-body pl-5">           <!-- ,$row ->id -->
                            <form action="{{route('pages.update',['id'=>$row->id])}}" method="post">

                                @include('back-end.pages.form')
                                <button type="submit" class="btn btn-info btn-fill pull-right"> Update </button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection

