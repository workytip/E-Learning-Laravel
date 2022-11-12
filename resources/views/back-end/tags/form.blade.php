@csrf
<div class="row">
    <div class="col-md-12 px-1">
        <div class="form-group">
            <label> Tsg Name</label>
            <input type="text" name='name' value="{{isset($row)? $row ->name :''}} {{old('name')}}"
                   class="form-control {{$errors->has('name')? 'is-invalid' :''}}  " placeholder="Username" >
            @if ($errors->has('name'))
                <span class="text-danger"> {{$errors->first('name')}}</span>
                @endif

        </div>
    </div>
</div>





    </div>
</div>
