
@include('page.css_heading')

<body class="shop_grid_page">

<div id="page"> 
  
  
  <!-- Header -->
  <!-- Header -->
    @include('page.header')
  <!-- end header -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>My Account</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="box-authentication">
            <h4>Log in</h4>
            <p class="before-login-text">Welcome back! Sign in to your account</p>
            <label for="emmail_login"> Your email or username <span class="required">*</span></label>
            <input id="emmail_login" type="text" class="form-control">
            <label for="password_login">Your password <span class="required">*</span></label>
            <input id="password_login" type="password" class="form-control">
            <p class="forgot-pass"><a href="#">Lost your password?</a></p>
            <button class="button"><i class="fa fa-lock"></i>&nbsp; <span>Login</span></button>
            <label class="inline" for="rememberme">
              <input type="checkbox" value="forever" id="rememberme" name="rememberme">
              Remember me </label>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  
  <!-- Footer -->
    @include('page.footer')
  <!-- End Footer -->

</div>

@include('page.js_footing')