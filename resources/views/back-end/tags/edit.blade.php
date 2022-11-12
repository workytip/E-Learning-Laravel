@extends('back-end.layout.app')
@section('title') Edit Tags @endsection





@section('content')

    @component('back-end.layout.header',['mynav' => 'Edit Tags'])
    @endcomponent
    <div class="content">

        <div class="container-fluid ">
            <h4 class="card-title text-info">Editing Tag</h4>
            <p class="card-category text-warning">You can Edit Tags here </p>
            <div class="row ">

                <div class="col-md-8 ">
                    <div class="card ">

                        <div class="card-header">
                            <h4 class="card-title text-info">Edit Tags</h4>
                        </div>
                        <div class="card-body pl-5">           <!-- ,$row ->id -->
                            <form action="{{route('tags.update',['id'=>$row->id])}}" method="post">

                                @include('back-end.tags.form')
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

