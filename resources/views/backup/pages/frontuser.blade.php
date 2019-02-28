@extends('layout.index')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="span4"></div>
        <div class="span8">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>Thông tin tài khoản</h3>
                </div>
                <div class="panel-body">
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

                    <form action="frontuser" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div>
                            <label>Họ tên</label>
                            <input type="text" class="input-xlarge" placeholder="Họ Tên" name="name" aria-describedby="basic-addon1" value="{{$frontuser->name}}">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" class="input-xlarge" placeholder="Email" name="email" aria-describedby="basic-addon1" value="{{$frontuser->email}}" readonly="">
                        </div>
                        <div>
                            <input type="checkbox" name="changePassword" id="changePassword">
                            <label>Đổi mật khẩu</label>
                        </div>
                        <div>
                            <label>Nhập mật khẩu cũ</label>
                            <input class="input-xlarge password" name="old_password" placeholder="Nhập mật khẩu cũ" type="password" disabled="">
                        </div>
                        <br>
                        <div>
                            <label>Nhập mật khẩu mới</label>
                            <input class="input-xlarge password" name="password" placeholder="Nhập mật khẩu mới" type="password" disabled="">
                        </div>
                        <br>
                        <div>
                            <label>Nhập lại mật khẩu</label>
                            <input class="input-xlarge password" name="passwordAgain" placeholder="Nhập lại mật khẩu" type="password" disabled="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="input-xlarge" name="address" placeholder="Nhập địa chỉ của bạn" value="{{$frontuser->address}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input class="input-xlarge" name="phone" placeholder="Nhập số điện thoại" value="{{$frontuser->phone}}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <label class="radio-inline">
                            <input name="gender" value="1" 
                            @if($frontuser->gender == 1)
                            {{"checked"}}
                            @endif
                            type="radio">Nam
                            </label>
                            <label class="radio-inline">
                            <input name="gender" value="0" 
                            @if($frontuser->gender == 0)
                            {{"checked"}}
                            @endif
                            type="radio">Nữ
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Page Content -->
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $("#changePassword").change(function(){
            if ($(this).is(":checked")) 
            {
                $(".password").removeAttr('disabled');
            }
            else
            {
                $(".password").attr('disabled','');
            }
        });
    });
    
</script>
@endsection