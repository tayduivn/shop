@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
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

                    <form action="admin/slide/delete_all" method="POST" role="form">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th class="text-center"><input type="checkbox" name="checked_id" id="checked_all"></th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Tên</th>
                                    <th class="text-center">Nội dung</th>
                                    <th class="text-center">Hình</th>
                                    <th class="text-center">Link</th>
                                    <th class="text-center">Xóa</th>
                                    <th class="text-center">Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($slide as $sd)
                                <tr class="odd gradeX" align="center">
                                    <td><input type="checkbox" class="item-check" name="id[]" value="{{$sd->id}}"></td>
                                    <td>{{$sd->id}}</td>
                                    <td>{{$sd->name}}</td>
                                    <td>{{$sd->content}}</td>
                                    <td>
                                        <img src="public/upload/slide/{{$sd->images}}" width="400">
                                    </td>
                                    <td>{{$sd->link}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/slide/delete/{{$sd->id}}" onclick="return confirm('Bạn có chắc xóa không?')"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slide/edit/{{$sd->id}}">Sửa</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{csrf_field()}}
                        <a href="admin/slide/add" class="btn btn-primary">Thêm</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</button>
                    </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()