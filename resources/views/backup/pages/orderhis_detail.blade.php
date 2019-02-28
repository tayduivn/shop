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
            <div class="cart-info">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>STT</th>
                        <th>Ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Tổng số tiền</th>
                    </tr>
                    <?php $total = 0; $totalqty = 0; $i = 1; ?>
                    @foreach($order_detail as $od)
                    <tr>
                        <th>{{$i++}}</th>
                        <th>
                            <img src="public/upload/product/main_img/{{$od->product->images}}" width="100">
                        </th>
                        <th>{{$od->product->name}}</th>
                        <th>{{$od->price}}</th>
                        <th>{{$od->quantity}}</th>
                        <th>{{number_format($od->price*$od->quantity)}} Đ</th>
                    </tr>
                    <?php $total += $od->price*$od->quantity; $totalqty += $od->quantity;  ?>
                    @endforeach
                </table>
            </div>
            <div class="container">
                <div class="pull-right">
                    <div class="span4 pull-right">
                        <table class="table table-striped table-bordered ">
                            <tr>
                                <td>
                                    <span class="extra bold totalamout">Tổng số lượng:</span>
                                </td>
                                <td>
                                    <span class="extra bold totalamout">{{$totalqty}} sản phẩm</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="extra bold totalamout">Tổng số tiền:</span>
                                </td>
                                <td>
                                    <span class="extra bold totalamout">{{number_format($total)}} Đ</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</section>
    
<!-- end Page Content -->
@endsection

