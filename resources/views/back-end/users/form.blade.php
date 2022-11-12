@csrf
<div class="row">
    <div class="col-md-6 px-1">
        <div class="form-group">
            <label>Username</label>
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
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{isset($row)? $row ->email :''}}  {{old('email')}}" name='email'
                   class="form-control {{$errors->has('email')? 'is-invalid' :''}} " placeholder="Email">
            @if ($errors->has('email'))
                <span class="text-danger"> {{$errors->first('email')}}</span>
            @endif

        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" name='password'
                   class="form-control {{$errors->has('name')? 'is-invalid' :''}} " placeholder="password">

            @if ($errors->has('email'))
                <span class="text-danger"> {{$errors->first('password')}}</span>
            @endif





        </div>
    </div>
</div>


<div class="row">

    <div class="col-md-6 pl-1">
        <div class="form-group">
            <label for="exampleInputEmail1">Group</label>



            <select name="group"  class="form-control {{$errors->has('group')? 'is-invalid' :''}} ">
                <option value="admin" {{isset($row)&& $row->group == 'admin' ?'selected' :''}}  {{old('group')}}>admin</option>
                <option value="user" {{isset($row)&& $row->group == 'user' ?'selected' :''}}  {{old('group')}}>user</option>
            </select>


            @if ($errors->has('group'))
                <span class="text-danger"> {{$errors->first('group')}}</span>
            @endif

        </div>
    </div>
</div>

