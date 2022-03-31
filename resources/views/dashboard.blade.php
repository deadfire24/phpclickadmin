@extends("layouts.app")

@section("content")
    @foreach ($data as $d)
        @foreach ($d as $k=>$v)
            {{$k}} => {{$v}}<br>
        @endforeach
    @endforeach
@endsection