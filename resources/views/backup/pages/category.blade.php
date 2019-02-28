@extends('layout.index')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="span12">
        <!-- Category Products-->
        <section id="category">
            <div class="row">
                <!-- Sorting-->
                <h1>{{$category->name}}</h1>
                <div class="sorting well">
                    <form class=" form-inline pull-left" method="GET">
                        Sắp xếp theo :
                        <select class="span2" name="order">
                            <option value="name-asc">Mặc định</option>
                            <option value="name-asc">Tên A-Z</option>
                            <option value="price-asc">Giá tăng dần</option>
                            <option value="price-desc">Giá giảm dần</option>
                        </select>
                        Hiển thị:
                        <select class="span2" name="limit">
                            <option value="">Mặc định</option>
                            <option value="4">4 sản phẩm</option>
                            <option value="6">6 sản phẩm</option>
                            <option value="8">8 sản phẩm</option>
                        </select>
                        Giá từ:
                        <select class="span2" name="price">
                            <option value="0-10000000">Mặc định</option>
                            <option value="0-100000">0 - 100,000 Đ</option>
                            <option value="100000-200000">100,000 - 200,000 Đ</option>
                            <option value="200000-500000">200,000 - 500,000 Đ</option>
                            <option value="500000-10000000">Trên 500,000 Đ</option>
                        </select>
                        <button type="submit">Sắp xếp</button>
                    </form>
                    <div class="btn-group pull-right">
                        <button class="btn" id="list"><i class="icon-th-list"></i>
                        </button>
                        <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                    </div>
                </div>
                <!-- Category-->
                <section id="categorygrid">
                    <ul class="thumbnails grid">
                    @foreach($product as $pro)
                    <li class="span3">
                        <a class="prdocutname" href="product/{{$pro->id}}/{{$pro->slug}}">{{$pro->name}}</a>
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
                            {{$product->appends(request()->only('order','limit','price'))->links()}}
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