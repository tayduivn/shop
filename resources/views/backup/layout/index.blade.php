<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Baby shop chuyên bán buôn, bán lẻ quần áo trẻ em</title>
        <base href="{{asset('')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
        <link href="public/frontend/css/bootstrap.css" rel="stylesheet">
        <link href="public/frontend/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="public/frontend/css/style.css" rel="stylesheet">
        <link href="public/frontend/css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
        <link href="public/frontend/css/jquery.fancybox.css" rel="stylesheet">
        <link href="public/frontend/css/cloud-zoom.css" rel="stylesheet">
    </head>
    <body>
        <!-- Header Start -->
        <header>
            @include('layout.header')
            <div class="container">
                <div class="headerdetails">
                    <div class="pull-left">
                        <img src="public/frontend/img/toplogo.png" width="70">
                        <p style="display: inline-block; font-size: 15px; color: red; margin-left: 20px">Baby shop chuyên bán buôn, bán lẻ quần áo, đồ trẻ em</p>
                    </div>
                    <div class="pull-right">
                        <ul class="nav topcart pull-left">
                            <li class="dropdown hover carticon ">
                                <a href="cart" class="dropdown-toggle" > GIỎ HÀNG <span class="label label-orange font14">{{$carts->totalQty}} sản phẩm</span>    {{number_format($carts->totalAmount)}}  Đ <b class="caret"></b></a>
                                <ul class="dropdown-menu topcartopen ">
                                    <li>
                                        <form action="cart_update">
                                            <table class="table table-bordered table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>Ảnh</td>
                                                        <td style="text-align: center">Tên sản phẩm</td>
                                                        <td style="text-align: center">Số lượng</td>
                                                        <td width="15%" style="text-align: center">Đơn giá</td>
                                                        <td>Xóa</td>
                                                    </tr>
                                                    @foreach($carts->items as $item)
                                                    <input type="hidden" name="id[]" value="{{$item['id']}}">
                                                    <tr>
                                                        <td>
                                                            <a href=""><img width="50" height="50" src="public/upload/product/main_img/{{$item['image']}}" alt="product" title="product"></a>
                                                        </td>
                                                        <td>
                                                            <a href="#">{{$item['name']}}</a>
                                                        </td>
                                                        <td>
                                                            <input type="number" name="quantity[]" value="{{$item['quantity']}}" style="width: 80%" min="1" max="1000">
                                                        </td>
                                                        <td>
                                                        {{number_format($item['price'])}} Đ
                                                        </td>
                                                        <td>
                                                            <a href="cart_remove/{{$item['id']}}" title="" onclick="return confirm('Bạn có chắc xóa không?')"><i class="icon-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <table class="pull-right">
                                                <tbody>
                                                    <tr>
                                                        <td class="textright"><b>Tổng số tiền:</b></td>
                                                        <td class="textright">{{number_format($carts->totalAmount)}}  Đ </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="" class="btn btn-orange" style="margin-left: 10px">CẬP NHẬT GIỎ HÀNG</button>
                                            <div class="well pull-right buttonwrap span6">
                                                <a class="btn btn-orange" href="cart">Chi tiết giỏ hàng</a>
                                                <a class="btn btn-orange" href="order_check">Tiếp tục mua hàng</a>
                                                <a class="btn btn-orange" href="order_history">Lịch sử đơn hàng</a>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                @include('layout.nav')
            </div>
        </header>
        <!-- Header End -->
        <div class="clearfix"></div>
        <div id="maincontainer">
            <!-- Featured Product-->
            @yield('content')
        </div>
        <!-- /maincontainer -->
        @include('layout.footer')
        <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="public/frontend/js/jquery.js"></script>
        <script src="public/frontend/js/bootstrap.js"></script>
        <script src="public/frontend/js/respond.min.js"></script>
        <script src="public/frontend/js/application.js"></script>
        <script src="public/frontend/js/bootstrap-tooltip.js"></script>
        <script defer src="public/frontend/js/jquery.fancybox.js"></script>
        <script defer src="public/frontend/js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="public/frontend/js/jquery.tweet.js"></script>
        <script src="public/frontend/js/cloud-zoom.1.0.2.js"></script>
        <script type="text/javascript" src="public/frontend/js/jquery.validate.js"></script>
        <script type="text/javascript" src="public/frontend/js/jquery.carouFredSel-6.1.0-packed.js"></script>
        <script type="text/javascript" src="public/frontend/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="public/frontend/js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="public/frontend/js/jquery.ba-throttle-debounce.min.js"></script>
        <script defer src="public/frontend/js/custom.js"></script>
        <!-- <script type="text/javascript" src="public/frontend/js/myscript.js"></script> -->
    </body>
</html>
@yield('script')