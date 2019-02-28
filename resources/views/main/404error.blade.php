@include('page.css_heading')

<body class="404error_page">
<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

<div id="page"> 
  
  <!-- Header -->
  @include('page.header')
  <!-- end header --> 
  
  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>404 Error </strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!--Container -->
  <div class="error-page">
    <div class="container">
      <div class="error_pagenotfound"> <strong>4<span id="animate-arrow">0</span>4 </strong> <br />
        <b>Oops... Page Not Found!</b> <em>Sorry the Page Could not be Found here.</em>
        <p>Try using the button below to go to main page of the site</p>
        <br />
        <a href="index.html" class="button-back"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; Go to Back</a> </div>
      <!-- end error page notfound --> 
      
    </div>
  </div>
  <!-- Container End --> 
  <!-- our clients Slider -->
  
 <!-- Footer -->
  @include('page.footer')
  <!-- End Footer -->
  

</div>

@include('page.js_footing')