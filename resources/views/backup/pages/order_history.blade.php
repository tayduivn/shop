@extends('layout.index')
@section('content')
<!-- Page Content -->

<section id="product">
    <div class="container">
        <!--  breadcrumb --> 
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
                <span class="divider">/</span>
            </li>
            <li class="active"> Shopping Cart</li>
        </ul>
        <h1 class="heading1"><span class="maintext"> ĐƠN HÀNG CỦA BẠN</span><span class="subtext"> Hiển thị chi tiết các đơn hàng của bạn</span></h1>
        <!-- Cart-->
        @if(Auth::user())
            <div class="cart-info">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày tạo</th>
                        <th>Tổng số lượng</th>
                        <th>Tổng số tiền</th>
                        <th>Xem</th>
                    </tr>
                    <?php
                    $od_user = DB::table('orders')->where('user_id',Auth::user()->id)->get();
                     ?>
                    @foreach($od_user as $od)
                    <tr>
                        <th>SHOP_{{$od->id}}</th>
                        <th>{{$od->created_at}}</th>
                        <th>
                            <?php 
                            $totalqty = 0;
                            $order_detail = DB::table('order_detail')->where('order_id',$od->id)->get();
                            foreach ($order_detail as $odt) 
                            {
                                $totalqty += $odt->quantity;
                            }
                             ?>
                             {{$totalqty}} sản phẩm
                        </th>
                        <th>
                            <?php 
                            $total = 0;
                            $order_detail = DB::table('order_detail')->where('order_id',$od->id)->get();
                            foreach ($order_detail as $odt) 
                            {
                                $total += $odt->price*$odt->quantity;
                            }
                             ?>
                             {{number_format($total)}}  Đ
                        </th>
                        <th>
                            <a href="orderhis_detail/{{$od->id}}" title="">Chi tiết</a>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h2 style="text-align: center;">Bạn phải đăng nhập mới xem được lịch sử đơn hàng</h2>
        </div>
        @endif
    </div>
</section>
    
<!-- end Page Content -->
@endsection

