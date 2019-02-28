@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        @if(session('thongbao'))
                        <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{session('thongbao')}}
                        </div>
                        @endif

                        <h1 class="page-header">Sản phẩm
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <form action="admin/product/delete_all" method="POST" role="form">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th class="text-center"><input type="checkbox" name="checked_id" id="checked_all"></th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Tên</th>
                                    <th class="text-center">Tên không dấu</th>
                                    <th class="text-center">Hình ảnh</th>
                                    <th class="text-center">Danh mục</th>
                                    <!-- <th class="text-center">Nội dung</th> -->
                                    <th class="text-center">Giá bán</th>
                                    <th class="text-center">Giá khuyến mại</th>
                                    <th class="text-center">Nổi bật</th>
                                    <th class="text-center">Bán chạy</th>
                                    <th class="text-center">Số lượt xem</th>
                                    <th class="text-center">Ngày tạo</th>
                                    <th class="text-center">Xóa</th>
                                    <th class="text-center">Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $pro)
                                <tr class="odd gradeX" align="center">
                                    <td><input type="checkbox" class="item-check" name="id[]" value="{{$pro->id}}"></td>
                                    <td>{{$pro->id}}</td>
                                    <td>
                                        <a href="product/{{$pro->id}}/{{$pro->slug}}" title="">{{$pro->name}}</a>
                                    </td>
                                    <td>{{$pro->slug}}</td>
                                    <td>
                                        <a href="product/{{$pro->id}}/{{$pro->slug}}" title=""><img src="public/upload/product/main_img/{{$pro->images}}" width="100"></a>
                                    </td>
                                    <td>
                                        <form method="POST" action="">
                                            <div class="form-group">
                                                <select class="form-control" name="category">
                                                    <?php menuMulti ($category,$parent_id = 0,$str="---|",$pro['category_id']) ?>
                                                </select>
                                            </div>
                                        </form>
                                    </td>
                                    <!-- <td>{{$pro->content}}</td> -->
                                    <td>{{number_format($pro->price)}} VNĐ</td>
                                    <td>{{number_format($pro->sale_price)}} VNĐ</td>
                                    <td>
                                        @if($pro->status == 1)
                                        {{'Có'}}
                                        @else
                                        {{'Không'}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($pro->hot_sale == 1)
                                        {{'Có'}}
                                        @else
                                        {{'Không'}}
                                        @endif
                                    </td>
                                    <td>{{$pro->view}}</td>
                                     <td>{{$pro->created_at}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$pro->id}}" onclick="return confirm('Bạn có chắc xóa không?')"> Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$pro->id}}">Sửa</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{csrf_field()}}
                        <a href="admin/product/add" class="btn btn-primary">Thêm</a>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</button>
                    </form>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()