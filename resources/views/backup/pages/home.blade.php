@extends('layout.index')
@section('content')
<!-- Page Content -->
@include('layout.slide')
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        @include('layout.menu')
        <!-- Sản phẩm bán chạy -->
        <div class="span9">
            <section id="featured" class="row mt40">
                <h1 class="heading1 mt0"><span class="maintext">Sản phẩm bán chạy</span><span class="subtext"> Xem chi tiết dưới đây</span></h1>
                <ul class="thumbnails">
                    @foreach($hotsale_product as $hotpro)
                    <li class="span3" style="height: 400px">
                        <a class="prdocutname" href="product/{{$hotpro->id}}/{{$hotpro->slug}}">{{$hotpro->name}}</a>
                        <div class="thumbnail">
                            <span class="sale tooltip-test">Sale</span>
                            <a href="product/{{$hotpro->id}}/{{$hotpro->slug}}"><img alt="" src="public/upload/product/main_img/{{$hotpro->images}}"></a>
                            <div class="shortlinks">
                                <a class="details" href="product/{{$hotpro->id}}/{{$hotpro->slug}}">XEM CHI TIẾT</a>
                            </div>
                            <div class="pricetag">
                                <span class="spiral"></span><a href="shopping/{{$hotpro->id}}/{{$hotpro->slug}}" class="productcart">GIỎ HÀNG</a>
                                <div class="price">
                                    <div class="pricenew">{{number_format($hotpro->sale_price)}} Đ</div>
                                    <div class="priceold">{{number_format($hotpro->price)}} Đ</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="span3"></div>
        <!-- Sản phẩm mới -->
        <div class="span9">
            <section id="featured" class="row mt40">
                <h1 class="heading1 mt0"><span class="maintext">Sản phẩm mới</span><span class="subtext"> Xem chi tiết dưới đây</span></h1>
                <ul class="thumbnails">
                    @foreach($latest_product as $latestpro)
                    <li class="span3" style="height: 400px">
                        <a class="prdocutname" href="product/{{$latestpro->id}}/{{$latestpro->slug}}">{{$latestpro->name}}</a>
                        <div class="thumbnail">
                            <span class="sale tooltip-test">Sale</span>
                            <a href="product/{{$latestpro->id}}/{{$latestpro->slug}}"><img alt="" src="public/upload/product/main_img/{{$latestpro->images}}"></a>
                            <div class="shortlinks">
                                <a class="details" href="product/{{$latestpro->id}}/{{$latestpro->slug}}">XEM CHI TIẾT</a>
                            </div>
                            <div class="pricetag">
                                <span class="spiral"></span><a href="shopping/{{$latestpro->id}}/{{$latestpro->slug}}" class="productcart">GIỎ HÀNG</a>
                                <div class="price">
                                    <div class="pricenew">{{number_format($latestpro->sale_price)}} Đ</div>
                                    <div class="priceold">{{number_format($latestpro->price)}} Đ</div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </div>
</div>
@endsection