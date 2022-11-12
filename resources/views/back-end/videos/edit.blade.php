@extends('back-end.layout.app')
@section('title') Edit videos @endsection





@section('content')

@component('back-end.layout.header',['mynav' => 'Edit Video'])
@endcomponent
<div class="content">

    <div class="container-fluid ">
        <h4 class="card-title text-info">Editing videos</h4>
        <p class="card-category text-warning">You can Edit videos here </p>
        <div class="row ">

            <div class="col-md-12 ">
                <div class="card ">

                    <div class="card-header">
                        <h4 class="card-title text-info">Edit videos</h4>
                        <div class="card ">
                            <div class="card-body pl-5">
                                @php $url=getYoutubeId($row->youtube) @endphp
                                @if($url)
                                    <iframe width="220" height="250"
                                            src="https://www.youtube.com/embed/{{$url}}" frameborder="3" allowfullscreen>
                                    </iframe>
                                @endif
                                <div style="float: right ;border: 3px solid gray">
                                <img src="{{url('uploads/'.$row->image)}}" style="width: 250px ; height: 250px ;margin-top: 0px ">
                                </div>
                            </div>
                        </div>








                    <div class="card-body pl-5">
                       <!-- ,$row ->id -->
                        <form action="{{route('videos.update',['id'=>$row->id])}}" method="post" enctype="multipart/form-data">

                            @include('back-end.videos.form')
                            <div class="row">

                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Skills</label>

                                        <select name="skills[]"  class="form-control {{$errors->has('cat_id')? 'is-invalid' :''}} " multiple style="height: 100px">
                                            @foreach($skills as $skill )
                                                <option value="{{$skill->id}}"{{in_array($skill->id,$selectedSkills)? 'selected':''}}   {{old('skills[]')}}>
                                                    {{$skill->name}}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('skills[]'))
                                            <span class="text-danger"> {{$errors->first('skills[]')}}</span>
                                        @endif

                                    </div>
                                </div>

                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Tags</label>

                                        <select name="tags[]"  class="form-control  " multiple style="height: 100px">
                                            @foreach($tags as $tag )
                                                <option value="{{$tag->id}}"{{in_array($tag->id,$selectedTags)? 'selected':''}}   {{old('skills[]')}}>
                                                    {{$tag->name}}</option>
                                            @endforeach
                                        </select>

                                        @if ($errors->has('tags[]'))
                                            <span class="text-danger"> {{$errors->first('tags[]')}}</span>
                                        @endif

                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right"> Update </button>
                            <div class="clearfix"></div>
                        </form>


                    </div>

                </div>
            </div>





        </div>
    </div>
</div>








<div class="container-fluid ">
    <h4 class="card-title text-info">Creating Comments</h4>
    <p class="card-category text-warning">You can Edit comments here </p>
    <div class="row ">

        <div class="col-md-12 ">
            <div class="card ">

                <div class="card-header">
                    <h4 class="card-title text-info">Edit Comments</h4>

                </div>
                <div class="card-body pl-5">
                    <div class="row">


                        @include('back-end.comments.create')
                    </div>
                        <div class="row">
                        @include('back-end.comments.index')

                        </div>



                </div>

            </div>
        </div>


    </div>
</div>


@endsection

