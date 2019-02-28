@extends('layout.index')

@section('content')

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="span4"></div>
        <div class="span8">

            @if(session('thongbao'))
            <div class="alert alert-success span4">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h3>{{session('thongbao')}}</h3><br>
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

            @if(Auth::user())
                <div class="panel panel-default">
                    @if($carts->totalQty > 0)
                    <div class="panel-heading text-center"><h4>Thông tin tài khoản</h4></div>
                    <div class="panel-body">
                        
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div>
                                <label>Họ tên</label>
                                <input type="text" class="input-xlarge" placeholder="Họ Tên" name="name" aria-describedby="basic-addon1" value="{{Auth::user()->name}}">
                            </div>
                            <div>
                                <label>Email</label>
                                <input type="email" class="input-xlarge" placeholder="Email" name="email" aria-describedby="basic-addon1" value="{{Auth::user()->email}}" readonly="">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="input-xlarge" name="address" placeholder="Nhập địa chỉ của bạn" value="{{Auth::user()->address}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="input-xlarge" name="phone" placeholder="Nhập số điện thoại" value="{{Auth::user()->phone}}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea name="note" class="input-xlarge" rows="3"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <label class="radio-inline">
                                    <input name="gender" value="1" 
                                    @if(Auth::user()->gender == 1)
                                    {{"checked"}}
                                    @endif
                                    type="radio">Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="gender" value="0" 
                                    @if(Auth::user()->gender == 0)
                                    {{"checked"}}
                                    @endif
                                    type="radio">Nữ
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Đặt hàng ngay</button>
                        </form>
                    </div>
                    @else
                    <div class="alert alert-danger span4">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h3>Giỏ hàng của quý khách hiện tại trống</h3>
                    </div>
                    @endif
                </div>
            @else
                <div class="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Quý khách phải đăng nhập mới đặt hàng được</strong>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- end Page Content -->

@endsection


