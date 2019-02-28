@extends('layout.index')
@section('content')
<!-- Page Content -->
<!-- Contact Us-->
<div class="container">
    <h1 class="heading1"><span class="maintext">Liên hệ</span><span class="subtext"> Liên hệ với chúng tôi để biết thêm chi tiết</span></h1>
    <div class="row">
        <div class="span3"></div>
        <div class="span9">
            <form class="form-horizontal contactform" method="post" action="contact">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <fieldset>
                    <div class="control-group">
                        <label for="name" class="control-label">Tên <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text"  class="required" id="name" value="" name="name">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="message" class="control-label">Nội dung</label>
                        <div class="controls">
                            <textarea  class="required" rows="6" cols="40" id="message" name="messagee"></textarea>
                        </div>
                    </div>
                    <div class="form-actions span3">
                        <button type="submit" class="btn btn-orange">Gửi</button>
                        <button type="reset" class="btn btn-orange">Làm mới</button>
                    </div>
                </fieldset>
            </form>

            <h3><span class="glyphicon glyphicon-align-left"></span>Thông tin liên hệ</h3>
                        
            <div class="break"></div>
            <h4><span class= "glyphicon glyphicon-home "></span> Địa chỉ : </h4>
            <p>Trụ sở chính: 238 Hoàng Quốc Việt, Cầu Giấy, Hà Nội </p>
            <p>Chi nhánh: 477 Xuân Đỉnh, Bắc Từ Liêm, Hà Nội </p>

            <h4><span class="glyphicon glyphicon-envelope"></span> Email: : </h4>
            <p>vuong313@gmail.com</p>
            <p>vuong313@gmail.com</p>
            <p>vuong313@gmail.com</p>

            <h4><span class="glyphicon glyphicon-phone-alt"></span> Điện thoại : </h4>
            <p>Đường dây nóng: 1900.1000 </p>
            <p>Chăm sóc khách hàng: 0868.422.466 </p>

            <br>
            <h3><span class="glyphicon glyphicon-globe"></span> Bản đồ</h3>
            <div class="break"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6576008156176!2d105.78125685069487!3d21.046381985920164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1544605242516" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- end Page Content -->
@endsection