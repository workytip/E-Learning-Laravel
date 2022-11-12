@csrf
<div class="row">
    <div class="col-md-6 px-1">
        <div class="form-group">
            <label>Video Name</label>
            <input type="text" name='name' value="{{isset($row)? $row ->name :''}} {{old('name')}}"
                   class="form-control {{$errors->has('name')? 'is-invalid' :''}}  " placeholder="Username" >
            @if ($errors->has('name'))
                <span class="text-danger"> {{$errors->first('name')}}</span>
                @endif

        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Category Key word</label>
            <input type="text" value="{{isset($row)? $row ->meta_keywords :''}}  {{old('meta_keywords')}}" name='meta_keywords'
                   class="form-control {{$errors->has('meta_keywords')? 'is-invalid' :''}} " placeholder="meta keywords">
            @if ($errors->has('meta_keywords'))
                <span class="text-danger"> {{$errors->first('meta_keywords')}}</span>
            @endif

        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">meta Description</label>
            <input type="text" name='meta_des' value="{{isset($row)? $row ->meta_keywords :''}}  {{old('meta_des')}}"
                   class="form-control {{$errors->has('meta_des')? 'is-invalid' :''}} " placeholder="Description">

            @if ($errors->has('meta_des'))
                <span class="text-danger"> {{$errors->first('meta_des')}}</span>
            @endif





        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name='des' value="{{isset($row)? $row ->meta_keywords :''}}  {{old('des')}}"
                   class="form-control {{$errors->has('des')? 'is-invalid' :''}} " placeholder="Description">

            @if ($errors->has('des'))
                <span class="text-danger"> {{$errors->first('des')}}</span>
            @endif

        </div>


    </div>
</div>


<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Youtube</label>
            <input type="url" name='youtube' value="{{isset($row)? $row ->youtube :''}}  {{old('youtube')}}"
                   class="form-control {{$errors->has('youtube')? 'is-invalid' :''}} " placeholder="youtube">

            @if ($errors->has('youtube'))
                <span class="text-danger"> {{$errors->first('youtube')}}</span>
            @endif

        </div>
    </div>
</div>


<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Video Status</label>



            <select name="publish"  class="form-control {{$errors->has('publish')? 'is-invalid' :''}} ">
                <option value="1" {{isset($row)&& $row->publish == 1 ?'selected' :''}}  {{old('publish')}}>published</option>
                <option value="0" {{isset($row)&& $row->publish == 0 ?'selected' :''}}  {{old('publish')}}>hidden</option>
            </select>


            @if ($errors->has('publish'))
                <span class="text-danger"> {{$errors->first('publish')}}</span>
            @endif

        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Video Category</label>

            <select name="cat_id"  class="form-control {{$errors->has('cat_id')? 'is-invalid' :''}} ">
                @foreach($categories as $category )
                <option value="{{$category->id}}" {{isset($row)&& $row->cat_id == $category->id ?'selected' :''}}  {{old('cat_id')}}>
                    {{$category->name}}</option>
                @endforeach
            </select>

            @if ($errors->has('cat_id'))
                <span class="text-danger"> {{$errors->first('cat_id')}}</span>
            @endif

        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label >Image</label>
            <input type="file" name='image'  {{old('image')}}" >

            @if ($errors->has('image'))
                <span class="text-danger"> {{$errors->first('image')}}</span>
            @endif

        </div>



    </div>
</div>


{{--<div class="row">--}}

{{--    <div class="col-md-6 pl-1">--}}
{{--        <div class="form-group">--}}
{{--            <label for="exampleInputEmail1"> Skills</label>--}}

{{--            <select name="skills[]"  class="form-control {{$errors->has('cat_id')? 'is-invalid' :''}} " multiple style="height: 100px">--}}
{{--                @foreach($skills as $skill )--}}
{{--                    <option value="{{$skill->id}}"   {{old('skills[]')}}>--}}
{{--                        {{$skill->name}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}

{{--            @if ($errors->has('skills[]'))--}}
{{--                <span class="text-danger"> {{$errors->first('skills[]')}}</span>--}}
{{--            @endif--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

