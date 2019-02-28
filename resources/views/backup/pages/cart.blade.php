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
        <h1 class="heading1"><span class="maintext"> GIỎ HÀNG CỦA BẠN</span><span class="subtext"> Hiển thị chi tiết các sản phẩm của bạn có trong giỏ hàng</span></h1>
        <!-- Cart-->
        <form method="" action="cart_update">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="cart-info">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th class="image" style="text-align: center;">Hình ảnh</th>
                        <th class="name" style="text-align: center">Tên sản phẩm</th>
                        <th class="quantity" width="15%" style="text-align: center;">Số lượng</th>
                        <th class="total" style="text-align: center;" width="10%">Xóa</th>
                        <th class="price" style="text-align: center" width="10%">Đơn giá</th>
                        <th class="total" style="text-align: center" width="10%">Tổng số tiền</th>
                    </tr>
                    @foreach($carts->items as $item)
                    <input type="hidden" name="id[]" value="{{$item['id']}}">
                    <tr>
                        <td class="image" style="text-align: center;"><a href="#"><img alt="" src="public/upload/product/main_img/{{$item['image']}}" width="100"></a></td>
                        <td  class="name"><a href="#">{{$item['name']}}</a></td>
                        <td class="quantity" style="text-align: center;">
                            <input class="span1" type="number" size="1" value="{{$item['quantity']}}" name="quantity[]" min="1" max="1000">
                        </td>
                        <td class="total" style="text-align: center">
                            <a href="cart_remove/{{$item['id']}}" onclick="return confirm('Bạn có chắc xóa không?')"><i class="icon-remove"></i></a>
                        </td>
                        <td class="price" style="text-align: center;">{{number_format($item['price'])}} Đ</td>
                        <td class="total" style="text-align: center;">{{number_format($item['price']*$item['quantity'])}} Đ</td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="container">
                <button type="" class="btn btn-orange">CẬP NHẬT GIỎ HÀNG</button>
                <div class="pull-right">
                    <div class="span4 pull-right">
                        <table class="table table-striped table-bordered ">
                            <tr>
                                <td><span class="extra bold totalamout">Tổng số lượng :</span></td>
                                <td><span class="bold totalamout">{{$carts->totalQty}} sản phẩm</span></td>
                            </tr>
                            <tr>
                                <td><span class="extra bold totalamout">Tổng số tiền :</span></td>
                                <td><span class="bold totalamout">{{number_format($carts->totalAmount)}} Đ</span></td>
                            </tr>
                        </table>
                        <a href="order_check" class="btn btn-orange pull-right">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
    
<!-- end Page Content -->
@endsection

