
@include('page.css_heading')

<body class="cms-index-index cms-home-page">

<div id="page"> 
  {{--Header--}}
  @include('page.header')
  
  <!-- main container -->
  @yield('main_content')

  
  <!-- Footer -->
    @include('page.footer')

  <!-- End Footer -->
  
  {{--Hộp giỏ hàng--}}
    @include('page.model_cart')

</div>

@include('page.js_footing')
