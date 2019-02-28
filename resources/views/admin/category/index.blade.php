@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh mục
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

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            @foreach($errors->all() as $err)
                            {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('loi'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{session('loi')}}
                        </div>
                    @endif

                    <form action="admin/category/delete_all" method="POST" role="form">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th class="text-center"><input type="checkbox" name="checked_id" id="checked_all"></th>
                                <th class="text-center">ID</th>
                                <th class="text-center">Tên danh mục</th>
                                <th class="text-center">Tên không dấu</th>
                                <th class="text-center">Danh mục cha</th>
                                <th class="text-center">Xóa</th>
                                <th class="text-center">Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $cat)
                            <tr class="odd gradeX" align="center">
                                <td><input type="checkbox" class="item-check" name="id[]" value="{{$cat->id}}"></td>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->slug}}</td>
                                <td>
                                    @if ($cat['parent_id'] == 0)
                                    {{"Không có"}}
                                    @else
                                    <?php 
                                    $parent = DB::table('category')->where('id',$cat['parent_id'])->first();
                                    echo $parent->name;
                                     ?>
                                     @endif           
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/category/delete/{{$cat->id}}" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/category/edit/{{$cat->id}}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{csrf_field()}}
                        <a href="admin/category/add" class="btn btn-primary">Thêm</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</button>
                    </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()