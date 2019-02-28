
  <!-- Header -->
  <header id="header">
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-6 hidden-xs"> <span class="phone hidden-xs">{{-- <i class="fa fa-phone fa-lg"></i> <span class="hidden-sm">Any question? Call Us </span> +123.456.789</span>  --}}</div>
            <!-- top links -->
            <div class="headerlinkmenu col-md-7 col-sm-7 col-xs-12"> 
              <!-- Default Welcome Message -->
            {{--   <div class="welcome-msg hidden-xs">Welcome to msg! </div> --}}
              <ul class="links">
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="register_page.html">Sign Up</a></li>
                <li><a href="account_page.html">Log In</a></li>
              </ul>
              {{-- <div class="language-currency-wrapper pull-right">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <span class="lg-fr">English</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a href="#"><span>German</span> </a> </li>
                      <li> <a href="#"><span>Brazil</span> </a> </li>
                      <li> <a href="#"><span>Chile</span> </a> </li>
                      <li> <a href="#"><span>Spain</span> </a> </li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row"> 
          <!-- Header Logo -->
          <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
            <div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" src="public/template/images/logo.png"></a> </div>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-6 col-md-5 top-search"> 
            <!-- Search -->
            <div id="search">
              <form>
                <div class="input-group">
                  <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                    <option>All Categories</option>
                    <option>women</option>
                    <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                    <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                    <option>&nbsp;&nbsp;&nbsp;Top</option>
                    <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                    <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                    <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                    <option>Men</option>
                    <option>Electronics</option>
                    <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                    <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                  </select>
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
            
            <!-- End Search --> 
          </div>
          <div class="col-lg-2 col-sm-3 col-xs-12 top-cart"> 
            <!-- Begin shopping cart trigger  -->
            <div id="shopping-cart-trigger"> <a href="#0" class="cart-icon" title="Shopping Cart" data-toggle="modal" data-target="#modal-cart"> <i class="fa fa-shopping-bag"></i> <span class="cart-num">2</span> </a> </div>
            <!-- End shopping cart trigger --> 
            <a href="account_page.html" class="top-my-account"><i class="fa fa-user"></i></a> 
            {{-- <a href="compare.html" class="top-compare"><i class="fa fa-signal"></i></a> --}} 
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Logo -->
    
    <nav> 
      <!-- Start Menu Area -->
      <div class="menu-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="main-menu">
                <div class="mm-toggle-wrap hidden-lg hidden-md hidden-sm">
                  <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                </div>
                <ul class="hidden-xs">
                  <li class="active custom-menu"><a href="index.html">Trang chủ</a>
                  </li>

                  <?php
                  $menu_lvl1 = DB::table('category')->where('parent_id',0)->get();
                  ?>

                  @foreach($menu_lvl1 as $m1)

                  <li class="megamenu"><a href="category/{{$m1->id}}/{{$m1->slug}}">{{$m1->name}}</a>
                    <?php
                    $menu_lvl2 = DB::table('category')->where('parent_id',$m1->id)->get();
                    ?>

                    @if(count($menu_lvl2) > 0)
                    <div class="mega-menu">
                      <div class="menu-block menu-block-center">
                        <div class="menu-block-1">
                          <ul>
                            @foreach($menu_lvl2 as $m2)
                            <li> <a class="mega-title" href="#">{{$m2->name}} <span class="menu-item-tag menu-item-tag-hot">hot</span></a></li>
                            @endforeach

                          </ul>
                        </div>
                      </div>
                    </div>
                    @endif
                  </li>

                  @endforeach

                  </li>
                  <li class="custom-menu"><a href="blog.html">Giới thiệu</a>
                    <ul class="dropdown">
                      <li> <a href="blog_right_sidebar.html"> Blog &ndash; Right Sidebar </a></li>
                      <li> <a href="blog_left_sidebar.html"> Blog &ndash; Left Sidebar </a></li>
                      <li><a href="blog_full_width.html"> Blog &ndash; Full-Width </a></li>
                      <li><a href="single_post.html"> Single post </a> </li>
                    </ul>
                  </li>
                  <li><a href="contact_us.html">Liên hệ</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- end header --> 