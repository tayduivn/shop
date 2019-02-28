@extends('layout.index')
@section('content')
<!-- Page Content -->
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        @include('layout.menu')
        <div class="span9">
            <h2 style="text-align: center">{{$posts->name}}</h2>
            <p class="pull-right">Ngày đăng: {{$posts->created_at}}</p>
            <br>
            <br>
            <br>
            <p style="text-align: center">
                <img src="public/upload/post/{{$posts->images}}">
            </p>
            <h3>{!!$posts->content!!}</h3>
        </div>
    </div>
</div>
@endsection