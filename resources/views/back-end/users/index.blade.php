@extends('back-end.layout.app')
@section('title') Users @endsection

@section('content')

    @component('back-end.layout.header',['mynav' => 'Users'])
    @endcomponent

    <!-- problem with rows check it later then extends table here -->
    @component('back-end.shared.table')
    @endcomponent

    <div class="col-md-12 ">
        <div class="card card-plain table-plain-bg">
            <div class="card-header ">
                <h4 class="card-title text-info">Here You Can show Users</h4>
                <p class="card-category text-warning">You can also Control users Edit and Delete</p>
                <a target="_blank" href="{{route('users.create')}}" style="float: right" class="btn btn-round btn-fill btn-info ">
                    Add New User</a>


            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-info">
                    <thead>
                    <tr><th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Group</th>
                        <th>Action</th>
                    </tr></thead>
                    <tbody>

                    @foreach($rows as $row)
                        <tr>
                            <td>
                                {{$row -> id}}
                            </td>


                            <td>
                                {{$row -> name}}
                            </td>


                            <td>
                                {{$row -> email}}
                            </td>
                            <td>
                                {{$row -> group}}
                            </td>
                            <td>
                                {{--                              <!--{{route('users.edit')}} -->--}}
                                <a href="{{route('users.edit',['id'=>$row->id])}}">  <button style="margin-right: 5px" class="btn btn-round btn-fill btn-warning">Edit</button></a>

                                <form action="{{route('users.destroy',['id'=>$row->id])}}" >
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-round btn-fill btn-danger">delete</button>
                                </form>


                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

