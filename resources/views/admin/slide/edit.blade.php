@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>{{$slide->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            @foreach($errors->all() as $err)
                            {{$err}}<br>
                            @endforeach
                        </div>
                        @endif

                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{session('thongbao')}}<br>
                        </div>
                        @endif

                        @if(session('loi'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{session('loi')}}<br>
                        </div>
                        @endif

                        <form action="admin/slide/edit/{{$slide->id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên slide" value="{{$slide->name}}">
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="content" class="form-control ckeditor" rows="5" id="demo">{{$slide->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="link" placeholder="Nhập đường link" value="{{$slide->link}}">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <p><img src="public/upload/slide/{{$slide->images}}" width="500"></p>
                                <input type="file" class="form-control" name="images">
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()