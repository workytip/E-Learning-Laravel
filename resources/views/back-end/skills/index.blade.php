@extends('back-end.layout.app')
@section('title') Skills @endsection

@section('content')

    @component('back-end.layout.header',['mynav' => 'Skills'])
    @endcomponent

    <!-- problem with rows check it later then extends table here -->
    @component('back-end.shared.table')
    @endcomponent

    <div class="col-md-12 ">
        <div class="card card-plain table-plain-bg">
            <div class="card-header ">
                <h4 class="card-title text-info">Here You Can show skills</h4>
                <p class="card-category text-warning">You can also Control skills Edit and Delete</p>
                <a target="_blank" href="{{route('skills.create')}}" style="float: right" class="btn btn-round btn-fill btn-info ">
                    Add New skills</a>


            </div>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-info">
                    <thead>
                    <tr><th>ID</th>
                        <th class="col-md-6" >Name</th>

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
                                {{--                              <!--{{route('users.edit')}} -->--}}
                                <a href="{{route('skills.edit',['id'=>$row->id])}}">  <button style="margin-right: 5px" class="btn btn-round btn-fill btn-warning">Edit</button></a>

                                <form action="{{route('skills.destroy',['id'=>$row->id])}}" >
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

