

<div class="card-body table-full-width table-responsive" style="margin-right: 50px">
    <table class="table table-hover table-info" id="comments">
        <thead>
        <tr>
            <th>Comment</th>


            <th style="float: right">Action</th>
        </tr></thead>
        <tbody>

        @foreach($comments as $comment)
            <tr>


                <td>
                    <small  style="font-weight: bold ;color: #5e5e5e">{{$comment->user->name}}</small>
                    <hr>
                    <p style="color: #062c33 ;font-weight: bold">{{$comment->comment}}</p>
                    <small class="text-warning">{{$comment->created_at}}</small>
                </td>


                <td style="float: right" >
                    <button onclick="$(this).closest('tr').next('tr').slideToggle()" style="margin-right: 5px" class="btn btn-round btn-fill btn-warning">Edit</button>

                    <form action="{{route('comment.delete', ['id'=>$comment->id]) }}" >
{{--                        {{method_field('delete')}}--}}
                        <button type="submit" class="btn btn-round btn-fill btn-danger">delete</button>
                    </form>


                </td>
            </tr>
            <tr style="display: none">
                <td colspan="4">
                    <form action="{{route('comment.update', ['id'=>$comment->id])}}" method="post">
                        @csrf
                        @include('back-end.comments.form',['row' =>$comment])
                        <input type="hidden" value="{{$row ->id}}" name="video_id">
                        <button type="submit" style="float: right" class="btn btn-info btn-fill pull-right">Update Comment </button>
                        <div class="clearfix"></div>
                    </form>

                </td>

            </tr>


        @endforeach

        </tbody>
    </table>
</div>
