<div class="headerstrip">
    <div class="container">
        <div class="row">
            <div class="span12">
                <!-- <a href="index-2.html" class="logo pull-left"><img src=""></a> -->
                <!-- Top Nav Start -->
                <div class="pull-right">
                    <div class="navbar" id="topnav">
                        <div class="navbar-inner">
                            <ul class="nav" >
                                @if(!Auth::user())
                                <li><a class="home" href="loginuser">Đăng nhập</a></li>
                                <li><a class="shoppingcart" href="register">Đăng ký</a></li>
                                @else
                                <li><a class="myaccount" href="frontuser">{{Auth::user()->name}}</a></li>
                                <li><a class="checkout" href="logoutuser">Đăng xuất</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Top Nav End -->
                <div class="pull-left">
                    <form class="form-search top-search form-inline" method="GET" action="search">
                        <input type="text" class="input-medium search-query" placeholder="Nhập từ khóa tìm kiếm" name="key">
                        <button type="submit" style="height: 35px">Tìm kiếm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>