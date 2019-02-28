<!-- Slider Start-->
<section class="slider">
    <div class="container">
        <div class="flexslider" id="mainslider">
            <ul class="slides">
                @foreach($slide as $sl)
                <li>
                    <img src="public/upload/slide/{{$sl->images}}" alt="" />
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- Slider End-->
<!-- Section Start-->
<section class="container otherddetails">
    <div class="otherddetailspart">
        <div class="innerclass free">
            <h2>Miễn phí vận chuyển</h2>
            Trong nội thành với bán kính dưới 20km 
        </div>
    </div>
    <div class="otherddetailspart">
        <div class="innerclass payment">
            <h2>Thanh toán dễ dàng</h2>
            Bằng tiền mặt, thẻ tín dụng hoặc chuyển khoản 
        </div>
    </div>
    <div class="otherddetailspart">
        <div class="innerclass shipping">
            <h2>Hỗ trợ trực tuyến 24/7</h2>
            Chăm sóc khách hàng mọi lúc mọi nơi 
        </div>
    </div>
    <div class="otherddetailspart">
        <div class="innerclass choice">
            <h2>Mẫu mã đa dạng, kiểu dáng phong phú</h2>
            Hơn 1000 mẫu mã, kiểu dáng các loại 
        </div>
    </div>
</section>
<!-- Section End-->