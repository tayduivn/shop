@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        @if(session('thongbao'))
                        <div class="alert alert-success">
                        {{session('thongbao')}}
                        </div>
                        @endif

                        <h1 class="page-header">Thuộc tính Sản phẩm
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <form action="admin/product/attribute_delete_all" method="POST" role="form">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th class="text-center"><input type="checkbox" name="checked_id" id="checked_all"></th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Tên thuộc tính</th>
                                    <th class="text-center">Kiểu thuộc tính</th>
                                    <th class="text-center">Giá trị</th>
                                    <th class="text-center">Ngày tạo</th>
                                    <!-- <th class="text-center">Xóa</th> -->
                                    <!-- <th class="text-center">Sửa</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($attribute as $att)
                                <tr class="odd gradeX" align="center">
                                    <td><input type="checkbox" class="item-check" name="id[]" value="{{$att->id}}"></td>
                                    <td>{{$att->id}}</td>
                                    <td>{{$att->name}}</td>
                                    <td>{{$att->type}}</td>
                                    <td>{{$att->value}}</td>
                                    <td>{{$att->created_at}}</td>
                                    <!-- <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/attribute_delete/{{$att->id}}" onclick="return confirm('Bạn có chắc xóa không?')"> Xóa</a></td> -->
                                    <!-- <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/attribute_edit/{{$att->id}}">Sửa</a></td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{csrf_field()}}
                        <a href="admin/product/attribute_add" class="btn btn-primary">Thêm</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</button>
                    </form>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()