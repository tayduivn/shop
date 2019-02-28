@include('page.css_heading')

<body class="shop_grid_page">

<div id="page"> 
  
  
  <!-- Header -->
    @include('page.header')
  <!-- end header -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>New Customer</strong></li>
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
          <div class="box-authentication new-customer-box Account Page ">
          
          <form method="post">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="check-title">
                      <h4>New Customer</h4>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>First Name:</label>
                    <div class="input-text">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Last Name:</label>
                    <div class="input-text">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <label>Address:</label>
                    <div class="input-text">
                      <input type="text" name="address" class="form-control">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <label>City/Town:</label>
                    <div class="input-text">
                      <input type="text" name="city" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Email:</label>
                    <div class="input-text">
                      <input type="text" name="email" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label>Phone:</label>
                    <div class="input-text">
                      <input type="text" name="phone" class="form-control">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="billing-checkbox">
                    <label class="inline" for="rememberme">
                      <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                      Sign up for our newsletter! </label></div>
                    <div class="submit-text">
                      <button class="button"><i class="fa fa-user"></i>&nbsp; <span>Register</span></button>
                    </div>
                  </div>
                </div>
              </form>
              
         
       
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