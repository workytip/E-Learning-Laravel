@csrf
<div class="row">
    <div class="col-md-6 px-1">
        <div class="form-group">
            <label>Category Name</label>
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
            <label for="exampleInputEmail1">Description</label>
            <input type="text" name='meta_des' value="{{isset($row)? $row ->meta_keywords :''}}  {{old('meta_des')}}"
                   class="form-control {{$errors->has('meta_des')? 'is-invalid' :''}} " placeholder="Description">

            @if ($errors->has('meta_des'))
                <span class="text-danger"> {{$errors->first('meta_des')}}</span>
            @endif





        </div>
    </div>
</div>
