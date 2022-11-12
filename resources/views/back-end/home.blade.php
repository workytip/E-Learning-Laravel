@extends('back-end.layout.app')
@section('title') Home @endsection


@push('css')

{{--    <style>--}}
{{--        p{color:pink !important;}--}}
{{--    </style>--}}

@endpush



@section('content')

     @component('back-end.layout.header',['mynav' => 'Home Page'])
      @endcomponent
    <h3 class="text-danger"> This page is allowed for admins only!!</h3>

@endsection
@push('js')

    <script>
     //   alert('Hi');
    </script>

@endpush
