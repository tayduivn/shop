@extends('main.index')

@section('main_content')

<!-- Main Slider Area -->
@include('page.slide')
<!-- End Main Slider Area --> 

<div class="home-tab">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12"> 
        <!-- Home Tabs  -->
        
        <div class="tab-info">
          <h3 class="new-product-title pull-left">Featured Products</h3>
          <ul class="nav home-nav-tabs home-product-tabs">
            <li class="active"><a href="#all" data-toggle="tab" aria-expanded="false">Smartphones</a></li>
            <li> <a href="#women" data-toggle="tab" aria-expanded="false">Tablets</a> </li>
            <li> <a href="#men" data-toggle="tab" aria-expanded="false">Laptops</a> </li>
            <li> <a href="#kids" data-toggle="tab" aria-expanded="false">Accessories</a> </li>
          </ul>
          <!-- /.nav-tabs --> 
        </div>
        <div id="productTabContent" class="tab-content">
          <div class="tab-pane active in" id="all">
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="icon-sale-label sale-left">Sale</div>
                  <div class="box-hover">
                    <div class="btn-quickview"> 
                      <a href="#" data-toggle="modal" data-target="#modal-quickview">
                        <i class="fa fa-search-plus" aria-hidden="true"></i> Quick View
                      </a> 
                    </div>
                    <div class="add-to-links" data-role="add-to-links"> 
                      <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> 
                      {{-- <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a>  --}}
                    </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> 
                    <img class="product-image-photo" src="public/template/images/products/img01.jpg" alt="">
                  </a>
                  <div class="jtv-box-timer">
                    <div class="countbox_1 jtv-timer-grid"></div>
                  </div>
                </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4><a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> 
                          <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> 
                            <span class="regular-price"> <span class="price">$125.00</span> </span> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> 
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="icon-new-label new-left">new</div>
                  <div class="box-hover">
                    <div class="btn-quickview"> 
                      <a href="#" data-toggle="modal" data-target="#modal-quickview">
                        <i class="fa fa-search-plus" aria-hidden="true"></i> Quick View
                      </a> 
                    </div>
                    <div class="add-to-links" data-role="add-to-links"> 
                      <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> 
                      <a href="compare.html" class="action add-to-compare" title="Add to Compare">
                      </a> 
                    </div>
                  </div>
                  <div class="slider-items-products">
                    <div id="pro1-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col6"> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img10.jpg" alt="">
                        </a> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img16.jpg" alt="">
                        </a> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img17.jpg" alt="">
                        </a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img04.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img08.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img05.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img09.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img10.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> 
                      <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View
                      </a> 
                    </div>
                    <div class="add-to-links" data-role="add-to-links"> 
                      <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> 
                      <a href="compare.html" class="action add-to-compare" title="Add to Compare">  </a> 
                    </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> 
                    <img class="product-image-photo" src="public/template/images/products/img06.jpg" alt="">
                  </a> 
                </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="women">
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="icon-sale-label sale-left">Sale</div>
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> 
                      <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> 
                      {{-- <a href="compare.html" class="action add-to-compare" title="Add to Compare">   </a>  --}}
                    </div>
                  </div>
                  <div class="slider-items-products">
                    <div id="pro2-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col6"> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img06.jpg" alt="">
                        </a> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img20.jpg" alt="">
                        </a> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img19.jpg" alt="">
                        </a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img07.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="icon-new-label new-left">new</div>
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> 
                      <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> 
                      <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img08.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img11.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $188.80 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $299.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="men">
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="icon-sale-label sale-left">Sale</div>
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img11.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img12.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> 
                      <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> 
                      <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> 
                    </div>
                  </div>
                  <div class="slider-items-products">
                    <div id="pro3-slider" class="product-flexslider hidden-buttons">
                      <div class="slider-items slider-width-col6"> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img14.jpg" alt="">
                        </a> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img15.jpg" alt="">
                        </a> 
                        <a href="single_product.html" class="product-item-photo"> 
                          <img class="product-image-photo" src="public/template/images/products/img05.jpg" alt="">
                        </a> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$275.88</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="icon-new-label new-left">new</div>
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img13.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="kids">
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="icon-sale-label sale-left">Sale</div>
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img16.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img17.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$175.88</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="icon-new-label new-left">new</div>
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img18.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <div class="item-price">
                          <div class="price-box">
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $299.00 </span> </p>
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $399.00 </span> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-item col-md-3 col-sm-6">
              <div class="item-inner">
                <div class="product-thumbnail">
                  <div class="box-hover">
                    <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                    <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                  </div>
                  <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="public/template/images/products/img19.jpg" alt=""></a> </div>
                <div class="pro-box-info">
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title">
                        <h4> <a title="Product Title Here" href="single_product.html">Product Title Here </a></h4>
                      </div>
                      <div class="item-content">
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.99</span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="box-hover">
                    <div class="product-item-actions">
                      <div class="pro-actions">
                        <button onclick="location.href='shopping_cart.html'" class="action add-to-cart" type="button" title="Add to Cart"> <span>Add to Cart</span> </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- prom banner-->
  {{--     <div class="jtv-promotion">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-7 col-xs-12">
          <div class="wrap">
            <div class="wow animated">
              <div class="box jtv-custom">
                <div class="box-content">
                  <div class="promotion-center">
                    <p class="text_medium">Limited Time Only</p>
                    <div class="text_large">
                      <div class="theme-color">25% off</div>
                      Save up</div>
                    <p class="text_small">Electronics for all Phones, Tablets, &amp; Computers.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-5 col-xs-12">
          <div class="add-banner"> <a href="#"><img src="public/template/images/home-banner4.jpg" alt="banner"></a> </div>
        </div>
      </div>
    </div>
  </div> --}}
  
  <!-- Latest news start -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title_block">
          <h3 class="products_title">From The Blog</h3>
        </div>
      </div>
      <div class="latest-post">
        <article class="jtv-entry col-md-6">
          <div class="jtv-post-inner">
            <div class="feature-post images-hover"> <a href="single_post.html"><img src="public/template/images/blog-img8.jpg" alt="image"></a>
              <div class="overlay"></div>
            </div>
            <div class="jtv-content-post">
              <h4 class="title-post"> <a href="single_post.html">Donec massa pellentesque placerat nisl laoreet</a> </h4>
              <ul class="meta-post">
                <li class="day"> <a href="#">May 05, 2016 /</a> </li>
                <li class="author"> <a href="#">Admin /</a> </li>
                <li class="travel"> <a href="#">Men</a> </li>
              </ul>
              <div class="jtv-entry-post excerpt">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisi sapien, accumsan ut molestie a, laoreet eget lorem.</p>
              </div>
              <div class="read-more"><a href="single_post.html"><i class="fa fa-caret-right"></i> Read More</a></div>
            </div>
          </div>
        </article>
        <article class="jtv-entry col-md-6">
          <div class="jtv-post-inner">
            <div class="feature-post images-hover"> <a href="single_post.html"><img src="public/template/images/blog-img9.jpg" alt="image"></a>
              <div class="overlay"></div>
            </div>
            <div class="jtv-content-post">
              <h4 class="title-post"> <a href="single_post.html">Cras pretium arcu ex hendrerit arcu, sit amet faucibus nisl </a> </h4>
              <ul class="meta-post">
                <li class="day"> <a href="#">Sep 13, 2016 /</a> </li>
                <li class="author"> <a href="#">Admin /</a> </li>
                <li class="travel"> <a href="#">Headphone</a> </li>
              </ul>
              <div class="jtv-entry-post excerpt">
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores aut find fault with </p>
              </div>
              <div class="read-more"><a href="single_post.html"><i class="fa fa-caret-right"></i> Read More</a></div>
            </div>
          </div>
        </article>
        <article class="jtv-entry col-md-6">
          <div class="jtv-post-inner">
            <div class="feature-post images-hover"> <a href="single_post.html"><img src="public/template/images/blog-img10.jpg" alt="image"></a>
              <div class="overlay"></div>
            </div>
            <div class="jtv-content-post">
              <h4 class="title-post"> <a href="single_post.html"> Mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum</a> </h4>
              <ul class="meta-post">
                <li class="day"> <a href="#">Oct 12, 2016 /</a> </li>
                <li class="author"> <a href="#">Admin /</a> </li>
                <li class="travel"> <a href="#">Fashion</a> </li>
              </ul>
              <div class="jtv-entry-post excerpt">
                <p>Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec. </p>
              </div>
              <div class="read-more"><a href="single_post.html"><i class="fa fa-caret-right"></i> Read More</a></div>
            </div>
          </div>
        </article>
        <article class="jtv-entry col-md-6">
          <div class="jtv-post-inner">
            <div class="feature-post images-hover"> <a href="single_post.html"><img src="public/template/images/blog-img11.jpg" alt="image"></a>
              <div class="overlay"></div>
            </div>
            <div class="jtv-content-post">
              <h4 class="title-post"> <a href="single_post.html"> Lorem ipsum dolor sit amet, consect adipisicing elit egestas hendrerit </a> </h4>
              <ul class="meta-post">
                <li class="day"> <a href="#">Dec 12, 2016 /</a> </li>
                <li class="author"> <a href="#">Admin /</a> </li>
                <li class="travel"> <a href="#">Fashion</a> </li>
              </ul>
              <div class="jtv-entry-post excerpt">
                <p>Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec. </p>
              </div>
              <div class="read-more"><a href="single_post.html"><i class="fa fa-caret-right"></i> Read More</a></div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>

@include('page.best_sell')

@include('page.banner')

@include('page.quick_view')

@stop()