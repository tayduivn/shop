@extends('layout.index')
@section('content')
<!-- Page Content -->
<div id="maincontainer">
    <section id="product">
        <div class="container">
            <!-- Product Details-->
            <div class="row">
                <!-- Left Image-->
                <div class="span5">
                    <ul class="thumbnails mainimage">
                        <li class="span5">
                            <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="public/upload/product/main_img/{{$product->images}}">
                            <img src="public/upload/product/main_img/{{$product->images}}" alt="" title="">
                            </a>
                        </li>
                        @foreach($images as $img)
                        <li class="span5">
                            <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="public/upload/product/other_img/{{$img->link}}">
                            <img  src="public/upload/product/other_img/{{$img->link}}" alt="" title="">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <span>Di chuyển chuột để phóng to hình</span>
                    <ul class="thumbnails mainimage">
                        <li class="producthtumb">
                            <a class="thumbnail" >
                            <img  src="public/upload/product/main_img/{{$product->images}}" alt="" title="">
                            </a>
                        </li>
                        @foreach($images as $img)
                        <li class="producthtumb">
                            <a class="thumbnail" >
                            <img  src="public/upload/product/other_img/{{$img->link}}" alt="" title="">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Right Details-->
                <div class="span7">
                    <div class="row">
                        <div class="span7">
                            <h1 class="productname"><span class="bgnone">{{$product->name}}</span></h1>
                            <div class="productprice">
                                <div class="productpageprice">
                                    <span class="spiral"></span>{{number_format($product->sale_price)}} Đ
                                </div>
                                <div class="productpageoldprice">{{number_format($product->price)}} Đ</div>
                            </div>
                            <br>
                            <ul class="productpagecart">
                                <li><a class="cart" href="shopping/{{$product->id}}/{{$product->slug}}">GIỎ HÀNG</a>
                                </li>
                            </ul>
                            <!-- Product Description tab & comments-->
                            <div class="productdesc">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#description">Mô tả</a>
                                    </li>
                                    <li><a href="#specification">Đặc điểm</a>
                                    </li>
                                    <li><a href="#review">Bình luận</a>
                                    </li>
                                    <li><a href="#producttag">Đánh giá</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <p>{!!$product->content!!}</p>
                                    </div>
                                    <div class="tab-pane " id="specification">
                                        <ul class="productinfo">
                                            <li>
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th width="30%">Thuộc tính</th>
                                                            <th>Nội dung</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Màu sắc</td>
                                                            <td>
                                                                @foreach($colors as $cl)
                                                                <?php 
                                                                $check1 = strlen(strstr($product->list_attr_id,'|'.$cl->id.'|')) ? 'checked' : '';
                                                                 ?>
                                                                @if($check1)
                                                                 <button type="">{{$cl->name}}</button>
                                                                @endif
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kích cỡ</td>
                                                            <td>
                                                                @foreach($sizes as $sz)
                                                                <?php 
                                                                $check2 = strlen(strstr($product->list_attr_id,'|'.$sz->id.'|')) ? 'checked' : '';
                                                                 ?>
                                                                @if($check2)
                                                                 <button type="">{{$sz->name}}</button>
                                                                @endif
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chất liệu</td>
                                                            <td>
                                                                @foreach($materials as $mt)
                                                                <?php 
                                                                $check3 = strlen(strstr($product->list_attr_id,'|'.$mt->id.'|')) ? 'checked' : '';
                                                                 ?>
                                                                @if($check3)
                                                                 <button type="">{{$mt->name}}</button>
                                                                @endif
                                                                @endforeach
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="tab-pane" id="review">
                                        @if(session('thongbao'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            {{session('thongbao')}}
                                        </div>
                                        @endif

                                        @if(Auth::user())
                                        <h3>Viết bình luận</h3>
                                        <form class="form-vertical" method="POST" action="usercomment/{{$product->id}}">
                                            <fieldset>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <textarea rows="4" class="span3" name="content"></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn btn-primary">Gửi</button>
                                        </form>
                                        @else
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Bạn phải đăng nhập mới gửi được bình luận</strong>
                                        </div>
                                        @endif

                                        @foreach($product->comment as $cm)
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    {{$cm->user->name}}
                                                    <small>{{$cm->created_at}}</small>
                                                </h4>
                                                {{$cm->content}}
                                            </div>
                                        </div>
                                        @endforeach
                                        <li class="pagination pull-right">
                                            
                                        </li>
                                    </div>

                                    <div class="tab-pane" id="producttag">
                                        <p>Tuyệt vời<br>
                                            <br>
                                        </p>
                                        <ul class="tags">
                                            <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sản phẩm liên quan -->
    <section id="related" class="row">
        <div class="container">
            <h1 class="heading1"><span class="maintext">Sản phẩm liên quan</span><span class="subtext"> Xem các sản phẩm có liên quan</span></h1>
            <ul class="thumbnails">
                @foreach($related_product as $p )
                <li class="span3" style="height: 400px">
                    <a class="prdocutname" href="product/{{$p->id}}/{{$p->slug}}">{{$p->name}}</a>
                    <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="product/{{$p->id}}/{{$p->slug}}"><img alt="" src="public/upload/product/main_img/{{$p->images}}"></a>
                        <div class="shortlinks">
                            <a class="details" href="product/{{$p->id}}/{{$p->slug}}">XEM CHI TIẾT</a>
                        </div>
                        <div class="pricetag">
                            <span class="spiral"></span><a href="shopping/{{$p->id}}/{{$p->slug}}" class="productcart">GIỎ HÀNG</a>
                            <div class="price">
                                <div class="pricenew">{{number_format($p->sale_price)}}</div>
                                <div class="priceold">{{number_format($p->price)}}</div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>
<!-- end Page Content -->
@endsection