@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin tức
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{session('thongbao')}}
                        </div>
                    @endif

                    <form action="admin/post/delete_all" method="POST" role="form">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th class="text-center"><input type="checkbox" name="checked_id" id="checked_all"></th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Tên</th>
                                    <th class="text-center">Tên không dấu</th>
                                    <th class="text-center">Hình</th>
                                    <th class="text-center">Ngày đăng</th>
                                    <th class="text-center">Xóa</th>
                                    <th class="text-center">Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($post as $p)
                                <tr class="odd gradeX" align="center">
                                    <td><input type="checkbox" class="item-check" name="id[]" value="{{$p->id}}"></td>
                                    <td>{{$p->id}}</td>
                                    <td>
                                        <a href="post/{{$p->id}}/{{$p->slug}}" title="">{{$p->name}}</a>
                                    </td>
                                    <td>{{$p->slug}}</td>
                                    <td>
                                        <a href="post/{{$p->id}}/{{$p->slug}}" title=""><img src="public/upload/post/{{$p->images}}" width="200"></a>
                                    </td>
                                    <th class="text-center">{{$p->created_at}}</th>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/post/delete/{{$p->id}}" onclick="return confirm('Bạn có chắc xóa không?')"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/post/edit/{{$p->id}}">Sửa</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{csrf_field()}}
                        <a href="admin/post/add" class="btn btn-primary">Thêm</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</button>
                    </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()