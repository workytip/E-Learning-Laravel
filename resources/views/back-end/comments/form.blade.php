 <div class="col-md-12 ">
        <div class="form-group">
            <label >Comment</label>
            <textarea  type="text" rows="2" cols="50" name='comment'
                   class="form-control {{$errors->has('comment')? 'is-invalid' :''}} " placeholder="">{{isset($row)? $row->comment :''}}  {{old('comment')}}
            </textarea>
            @if ($errors->has('comment'))
                <span class="text-danger"> {{$errors->first('comment')}}</span>
            @endif
        </div>
    </div>

