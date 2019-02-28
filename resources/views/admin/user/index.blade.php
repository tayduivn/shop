@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
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

                    <form action="admin/user/delete_all" method="POST" role="form">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th class="text-center"><input type="checkbox" name="checked_id" id="checked_all"></th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Tên</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Địa chỉ</th>
                                    <th class="text-center">Số điện thoại</th>
                                    <th class="text-center">Giới tính</th>
                                    <th class="text-center">Quyền</th>
                                    <th class="text-center">Xóa</th>
                                    <!-- <th class="text-center">Sửa</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $u)
                                <tr class="odd gradeX" align="center">
                                    <td><input type="checkbox" class="item-check" name="id[]" value="{{$u->id}}"></td>
                                    <td>{{$u->id}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->address}}</td>
                                    <td>{{$u->phone}}</td>
                                    <td>
                                        @if($u->gender == 1)
                                        {{"Nam"}}
                                        @else
                                        {{"Nữ"}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($u->level == 1)
                                        {{"Admin"}}
                                        @else
                                        {{"Khách"}}
                                        @endif
                                    </td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/delete/{{$u->id}}" onclick="return confirm('Bạn có chắc xóa không?')"> Xóa</a></td>
                                    <!-- <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/{{$u->id}}">Sửa</a></td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{csrf_field()}}
                        <a href="admin/user/add" class="btn btn-primary">Thêm</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</button>
                    </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()