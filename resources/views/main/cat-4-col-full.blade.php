﻿
@include('page.css_heading')
<body class="shop_grid_page">

<div id="page"> 

  <!-- Header -->
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
            <li><strong>Men </strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 

  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="page-title">
              <h2>Men </h2>
            </div>
            <div class="toolbar column">
              <div class="sorter">
                <div class="short-by">
                  <label>Sort By:</label>
                  <select>
                    <option selected="selected">Position</option>
                    <option>Name</option>
                    <option>Price</option>
                    <option>Size</option>
                  </select>
                </div>
                <div class="short-by page">
                  <label>Show:</label>
                  <select>
                    <option selected="selected">16</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
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
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img09.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-right">Sale</div>
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img08.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-new-label new-right">new</div>
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img07.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img06.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img05.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <!-- .a2 --> 
                
                <!-- b2 -->
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img01.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <!-- .b2 --> 
                
                <!-- c2 -->
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img10.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img11.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <!-- .a1 --> 
                
                <!-- b1 -->
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img12.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <!-- .b1 --> 
                
                <!-- c1 -->
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img13.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img14.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img15.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img16.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img17.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img18.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img19.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="box-hover">
                      <div class="btn-quickview"> <a href="#" data-toggle="modal" data-target="#modal-quickview"><i class="fa fa-search-plus" aria-hidden="true"></i> Quick View</a> </div>
                      <div class="add-to-links" data-role="add-to-links"> <a href="wishlist.html" class="action add-to-wishlist" title="Add to Wishlist"></a> <a href="compare.html" class="action add-to-compare" title="Add to Compare"></a> </div>
                    </div>
                        <a href="single_product.html" class="product-item-photo"> <img class="product-image-photo" src="images/products/img20.jpg" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a></h4> </div>
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
                </li>
              </ul>
            </div>
            <div class="pagination-area ">
              <ul>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Container End --> 

{{--   <div class="container"> 
    <!-- service section -->
    <div class="jtv-service-area">
      <div class="row">
        <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
          <div class="block-wrapper ship">
            <div class="text-des"> <i class="icon-rocket"></i>
              <h3>FREE SHIPPING & RETURN</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
          <div class="block-wrapper return">
            <div class="text-des"> <i class="fa fa-dollar"></i>
              <h3>MONEY BACK GUARANTEE</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </div>
        <div class="col col-md-4 col-sm-4 col-xs-12 no-padding">
          <div class="block-wrapper support">
            <div class="text-des"> <i class="fa fa-headphones"></i>
              <h3>ONLINE SUPPORT 24/7</h3>
              <p>Lorem ipsum dolor sit amet. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  
  <!-- Footer -->
   @include('page.footer')
  <!-- End Footer -->
  

</div>

@include('page.js_footing')
