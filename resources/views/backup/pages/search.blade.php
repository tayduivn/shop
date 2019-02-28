@extends('layout.index')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="span12">
        <!-- Category Products-->
        <?php 
        function searchcolor($str,$key)
        {
            return str_replace($key,"<span style='color:red;'>$key</span>", $str);
        }
         ?>
        <section id="category">
            <div class="row">
                <h1>Kết quả tìm kiếm : {{$key}}</h1>
                <br>
                <section id="categorygrid">
                    <ul class="thumbnails grid">
                    @foreach($product as $pro)
                    <li class="span3" style="height: 400px">
                        <a class="prdocutname" href="product/{{$pro->id}}/{{$pro->slug}}">{!!searchcolor($pro->name,$key)!!}</a>
                        <div class="thumbnail">
                            <span class="sale tooltip-test">Sale</span>
                            <a href="product/{{$pro->id}}/{{$pro->slug}}"><img alt="" src="public/upload/product/main_img/{{$pro->images}}"></a>
                            <div class="shortlinks">
                                <a class="details" href="product/{{$pro->id}}/{{$pro->slug}}">XEM CHI TIẾT</a>
                            </div>
                            <div class="pricetag">
                                <span class="spiral"></span><a href="shopping/{{$pro->id}}/{{$pro->slug}}" class="productcart">GIỎ HÀNG</a>
                                <div class="price">
                                    <div class="pricenew">{{number_format($pro->sale_price)}} Đ</div>
                                    <div class="priceold">{{number_format($pro->price)}} Đ</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    <div class="clearfix"></div>
                    <div class="pull-right">
                        <ul class="pagination">
                            {{$product->appends(\Request::except('_token'))->render()}}
                        </ul>
                    </div>  
                </section>
            </div>
        </section>
    </div>
</div>
<!-- Pagination -->
<!-- end Page Content -->
@endsection