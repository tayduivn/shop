@extends('layout.index')
@section('content')
<!-- Account Login-->
@if(count($errors) > 0)
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @foreach($errors->all() as $err)
    {{$err}}<br>
    @endforeach
</div>
@endif
@if(session('thongbao'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('thongbao')}}<br>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="span12">
            <h1 class="heading1"><span class="maintext">Đăng nhập</span><span class="subtext">Đăng nhập để biết được chi tiết thông tin tài khoản của bạn</span></h1>
            <section class="newcustomer">
                <h2 class="heading2">Khách hàng mới</h2>
                <div class="loginbox">
                    <h4 class="heading4"> Đăng ký tài khoản</h4>
                    <p>Đăng ký tài khoản giúp bạn mua hàng được thuận tiện, nhanh chóng. Bạn có thể cập nhật thông tin cá nhân sau khi đăng nhập</p>
                    <br>
                    <p>Sau khi đăng nhập, bạn có thể gửi bình luận sản phẩm, gửi ý kiến cá nhân của mình. Qua đó chúng tôi sẽ tiếp thu ý kiến và phục vụ quý khác được tốt hơn</p>
                    <br>
                    <br>
                    <a href="register" class="btn btn-orange">Tiếp tục</a>
                </div>
            </section>
            <section class="returncustomer">
                <h2 class="heading2">KHÁCH HÀNG CŨ</h2>
                <div class="loginbox">
                    <h4 class="heading4">Tôi đã có tài khoản</h4>
                    <form class="form-vertical" method="POST">
                        <fieldset>
                            <div class="control-group">
                                <label  class="control-label">Địa chỉ email:</label>
                                <div class="controls">
                                    <input type="email"  class="span3" name="email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label  class="control-label">Mật khẩu:</label>
                                <div class="controls">
                                    <input type="password"  class="span3" name="password">
                                </div>
                            </div>
                            <a class="" href="#">Quên mật khẩu</a>
                            <br>
                            <br>
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-orange">Đăng nhập</button>
                        </fieldset>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!-- Sidebar End-->
</div>
@endsection