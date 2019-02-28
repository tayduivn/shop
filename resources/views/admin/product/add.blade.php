@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">sản phẩm
                            <small>Thêm</small>
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
                                                    <?php menuMulti ($cat,$parent_id = 0,$str="---|",old('category')) ?>
                                                </select>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Tên sản phẩm</th>
                                        <th>
                                            <div class="form-group">
                                                <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                                            </div> 
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Chọn ảnh chính</th>
                                        <th>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="images">
                                            </div>  
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Chọn ảnh phụ</th>
                                        <th>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="other_images[]" multiple>
                                            </div>  
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Nội dung</th>
                                        <th>
                                            <div class="form-group">
                                                <textarea name="content" class="form-control ckeditor" rows="5" id="demo">{{ old('content') }}</textarea>
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Màu sắc</th>
                                        <th>
                                            @foreach($colors as $cl)
                                            <div class="checkbox" style="display: inline-block">
                                                <label>
                                                    <input type="checkbox" name="list_attr_id[]" value="{{$cl->id}}">
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
                                            <div class="checkbox" style="display: inline-block">
                                                <label>
                                                    <input type="checkbox" name="list_attr_id[]" value="{{$sz->id}}">
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
                                            <div class="checkbox" style="display: inline-block">
                                                <label>
                                                    <input type="checkbox" name="list_attr_id[]" value="{{$mt->id}}">
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
                                                <input class="form-control" name="price" placeholder="" value="{{ old('price') }}">
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Giá Khuyến mại</th>
                                        <th>
                                            <div class="form-group">
                                                <input class="form-control" name="sale_price" placeholder="" value="{{ old('sale_price') }}">
                                            </div>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Nổi bật</th>
                                        <th>
                                            <div class="form-group">
                                                <label class="radio-inline">
                                                    <input name="status" value="1" checked="" type="radio">Có
                                                </label>
                                                <label class="radio-inline">
                                                    <input name="status" value="0" type="radio">Không
                                                </label>
                                            </div> 
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Bán chạy</th>
                                        <th>
                                            <div class="form-group">
                                                <label class="radio-inline">
                                                    <input name="hot_sale" value="0" checked="" type="radio">Không
                                                </label>
                                                <label class="radio-inline">
                                                    <input name="hot_sale" value="1" type="radio">Có
                                                </label>
                                            </div> 
                                        </th>
                                    </tr>

                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-default">Thêm</button>
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