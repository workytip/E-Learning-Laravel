<form action="{{route('comment.store')}}" method="post">
    @csrf
    @include('back-end.comments.form')
    <input type="hidden" value="{{$row ->id}}" name="video_id">
    <button type="submit" style="float: right" class="btn btn-info btn-fill pull-right">Add </button>
    <div class="clearfix"></div>
</form>
