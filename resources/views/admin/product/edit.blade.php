@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">sản phẩm
                            <small>{{$product->name}}</small>
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

                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10%">Tiêu đề</th>
                                        <th class="text-center">Nội dung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <th>Danh mục</th>
                                        <th>
                                            <div class="form-group">
                                                <select class="form-control" name="category">
                                                    <option value="">---Mời bạn chọn danh mục---</option>
                                                    <?php menuMulti ($category,$parent_id = 0,$str="---|",$product['category_id']) ?>
                                                </select>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>
                                            <div class="form-group">
                                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{$product->name}}">
                                            </div> 
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Ảnh gốc</th>
                                        <th>
                                            <div class="form-group">
                                                <p>
                                                    <img src="public/upload/product/main_img/{{$product->images}}" width="100">
                                                </p>
                                                <input type="file" class="form-control" name="images">
                                            </div>  
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Ảnh phụ</th>
                                        <th>
                                            @foreach($product->product_images as $img)
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                                 <div class="thumbnail">
                                                     <img src="public/upload/product/other_img/{{$img->link}}" alt=""> 
                                                 </div>
                                                 <div class="caption text-center">
                                                     <a href="admin/product/delete_images/{{$img->id}}" title="" onclick="return confirm('Bạn có chắc xóa không?')">Xóa ảnh này</a>
                                                     <input type="file" name="other_images[{{$img->id}}]" value="">
                                                 </div>
                                             </div>
                                             @endforeach 
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Thêm ảnh khác</th>
                                        <th>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="new_images[]" multiple>
                                            </div>  
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Nội dung</th>
                                        <th>
                                            <div class="form-group">
                                                <textarea name="content" class="form-control ckeditor" rows="5" id="demo">{{$product->content}}</textarea>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Màu sắc</th>
                                        <th>
                                            @foreach($colors as $cl)
                                            <?php 
                                            $check1 = strlen(strstr($product->list_attr_id,'|'.$cl->id.'|')) ? 'checked' : '';
                                             ?>
                                            <div class="checkbox" style="display: inline-block">
                                                <label>
                                                    <input type="checkbox" name="list_attr_id[]" value="{{$cl->id}}" {{$check1}}>
                                                    {{$cl->name}}
                                                </label>
                                            </div>
                                            @endforeach
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Kích cỡ</th>
                                        <th>
                                            @foreach($sizes as $sz)
                                            <?php 
                                            $check2 = strlen(strstr($product->list_attr_id,'|'.$sz->id.'|')) ? 'checked' : '';
                                             ?>
                                            <div class="checkbox" style="display: inline-block">
                                                <label>
                                                    <input type="checkbox" name="list_attr_id[]" value="{{$sz->id}}" {{$check2}}>
                                                    {{$sz->name}}
                                                </label>
                                            </div>
                                            @endforeach
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Chất liệu</th>
                                        <th>
                                            @foreach($materials as $mt)
                                            <?php 
                                            $check3 = strlen(strstr($product->list_attr_id,'|'.$mt->id.'|')) ? 'checked' : '';
                                             ?>
                                            <div class="checkbox" style="display: inline-block">
                                                <label>
                                                    <input type="checkbox" name="list_attr_id[]" value="{{$mt->id}}" {{$check3}}>
                                                    {{$mt->name}}
                                                </label>
                                            </div>
                                            @endforeach
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Giá bán</th>
                                        <th>
                                            <div class="form-group">
                                                <input class="form-control" name="price" placeholder="" value="{{$product->price}}">
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Giá khuyến mại</th>
                                        <th>
                                            <div class="form-group">
                                                <input class="form-control" name="sale_price" placeholder="" value="{{$product->sale_price}}">
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Nổi bật</th>
                                        <th>
                                            <div class="form-group">
                                                <label class="radio-inline">
                                                    <input name="status" value="1" 

                                                    @if($product->status == 1)
                                                    {{"checked"}}
                                                    @endif

                                                    type="radio">Có
                                                </label>
                                                <label class="radio-inline">
                                                    <input name="status" value="0"

                                                    @if($product->status == 0)
                                                    {{"checked"}}
                                                    @endif

                                                     type="radio">Không
                                                </label>
                                            </div> 
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Bán chạy</th>
                                        <th>
                                            <div class="form-group">
                                                <label class="radio-inline">
                                                    <input name="hot_sale" value="0" 

                                                    @if($product->hot_sale == 0)
                                                    {{"checked"}}
                                                    @endif

                                                    type="radio">Không
                                                </label>
                                                <label class="radio-inline">
                                                    <input name="hot_sale" value="1"

                                                    @if($product->hot_sale == 1)
                                                    {{"checked"}}
                                                    @endif

                                                     type="radio">Có
                                                </label>
                                            </div> 
                                        </th>
                                    </tr>

                                </tbody>
                            </table>
                
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- end row -->

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">

                        @if(session('thongbao'))
                        <div class="alert alert-success">
                        {{session('thongbao')}}
                        </div>
                        @endif

                        <h1 class="page-header">Bình luận</h1>
                    </div>
                    <!-- /.col-lg-12 -->

                    <form action="admin/comment/delete_all" method="POST" role="form">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th class="text-center"><input type="checkbox" name="checked_id" id="checked_all"></th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Người dùng</th>
                                    <th class="text-center">Nội dung</th>
                                    <th class="text-center">Ngày đăng</th>
                                    <th class="text-center">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product->comment as $cm)
                                <tr class="odd gradeX" align="center">
                                    <td><input type="checkbox" class="item-check" name="id[]" value="{{$cm->id}}"></td>
                                    <td>{{$cm->id}}</td>
                                    <td>{{$cm->user->name}}</td>
                                    <td>{{$cm->content}}</td>
                                    <td>{{$cm->created_at}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/delete/{{$cm->id}}/{{$product->id}}" onclick="return confirm('Bạn có chắc xóa không?')"> Xóa</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</button>
                    </form>
                    
                </div>
                <!-- end row -->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()