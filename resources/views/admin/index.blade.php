@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Chào mừng các bạn đến với trang quản trị</h1>
                        <h3>Quyền hạn và chức năng của quản trị viên</h3>
                        <p>1. Quản trị viên được quyền thêm, sửa, xóa danh mục sản phẩm, sản phẩm, tin tức, slide</p> 
                        <p>2. Quản trị viên được quyền xóa bình luận người dùng ở trang quản trị, không được phép sửa hay thêm nội dung bình luận ở trang này. Quản trị viên chỉ được thêm bình luận ở trang người dùng</p>
                        <p>3. Quản trị viên được quyền thêm và xóa người dùng ở trang quản trị, không được phép thay đổi thông tin người dùng ở trang này</p>
                        <p>Quản trị viên có thể thay đổi nội dung thông tin chính mình ở trang người dùng</p>
                        <br>
                        <h3>Quyền hạn và chức năng của người dùng</h3>
                        <p>1. Người dùng chỉ có thể viết bình luận và đặt hàng khi đã đăng nhập</p>
                        <p>2. Người dùng có thể đăng ký tài khoản và thay đổi thông tin, mật khẩu</p>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop()