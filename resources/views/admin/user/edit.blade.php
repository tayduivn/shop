@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>{{$user->name}}</small>
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
                        
                        <form action="admin/user/edit/{{$user->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên của bạn" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Nhập địa chỉ email" type="email" value="{{$user->email}}" readonly="">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="changePassword" id="changePassword">
                                <label>Đổi mật khẩu</label>
                            </div>
                            <div class="form-group">
                                <label>Nhập mật khẩu cũ</label>
                                <input class="form-control password" name="old_password" placeholder="Nhập mật khẩu cũ" type="password" disabled="">
                            </div>
                            <div class="form-group">
                                <label>Nhập mật khẩu mới</label>
                                <input class="form-control password" name="password" placeholder="Nhập mật khẩu mới" type="password" disabled="">
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control password" name="passwordAgain" placeholder="Nhập lại mật khẩu" type="password" disabled="">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="address" placeholder="Nhập địa chỉ của bạn" value="{{$user->address}}">
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="phone" placeholder="Nhập số điện thoại" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea name="note" id="inputNote" class="form-control" rows="3">{{$user->note}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <label class="radio-inline">
                                    <input name="gender" value="1" 
                                    @if($user->gender == 1)
                                    {{"checked"}}
                                    @endif
                                    type="radio">Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="gender" value="0" 
                                    @if($user->gender == 0)
                                    {{"checked"}}
                                    @endif
                                    type="radio">Nữ
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <label class="radio-inline">
                                    <input name="level" value="0" 
                                    @if($user->level == 0)
                                    {{"checked"}}
                                    @endif
                                    type="radio">Khách
                                </label>
                                <label class="radio-inline">
                                    <input name="level" value="1" 
                                    @if($user->level == 1)
                                    {{"checked"}}
                                    @endif
                                    type="radio">Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
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

@stop()