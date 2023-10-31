<!DOCTYPE html>
<html lang="zxx">


<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Shop Cart </title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One:400" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!--== Bootstrap CSS ==-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!--== Font-awesome Icons CSS ==-->
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!--== Pe Icon 7 Min Icons CSS ==-->
  <link href="assets/css/pe-icon-7-stroke.min.css" rel="stylesheet" />
  <!--== Ionicons CSS ==-->
  <link href="assets/css/ionicons.css" rel="stylesheet" />
  <!--== Animate CSS ==-->
  <link href="assets/css/animate.css" rel="stylesheet" />
  <!--== Aos CSS ==-->
  <link href="assets/css/aos.css" rel="stylesheet" />
  <!--== FancyBox CSS ==-->
  <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet" />
  <!--== Slicknav CSS ==-->
  <link href="assets/css/slicknav.css" rel="stylesheet" />
  <!--== Swiper CSS ==-->
  <link href="assets/css/swiper.min.css" rel="stylesheet" />
  <!--== Slick CSS ==-->
  <link href="assets/css/slick.css" rel="stylesheet" />
  <!--== Rangeslider CSS ==-->
  <link href="assets/css/rangeslider.css" rel="stylesheet" />
  <!--== Main Style CSS ==-->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!--wrapper start-->
  <div class="wrapper page-shop-wrapper">


    <!-- header -->

    <?php include 'components/header.php' ?>

    <main class="main-content">
      <!--== Start Page Title Area ==-->
      <section class="page-title-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 m-auto">
              <div class="page-title-content text-center">
                <h2 class="title">Cart</h2>
                <div class="bread-crumbs">
                  <a href="index.php"> Home </a><span class="breadcrumb-sep"> // </span><span class="active"> Cart</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Page Title Area ==-->

      <!--== Start Cart Area Wrapper ==-->
      <section class="product-area cart-page-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 m-auto">
              <div class="section-title text-center">
                <h2 class="title">Cart</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="cart-table-wrap">
                <div class="cart-table table-responsive">
                  <table>
                    <thead>
                      <tr>
                        <th class="width-thumbnail"></th>
                        <th class="width-name">Product</th>
                        <th class="width-price">Price</th>
                        <th class="width-quantity">Quantity</th>
                        <th class="width-subtotal">Subtotal</th>
                        <th class="width-remove"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="product-thumbnail">
                          <a href="product_details.php"><img src="assets/img/shop/details/nav1.jpg" alt="Image" /></a>
                        </td>
                        <td class="product-name">
                          <h5>
                            <a href="product_details.php">Jigsaw Puzzles For Kids</a>
                          </h5>
                        </td>
                        <td class="product-price">
                          <span class="amount">$120.00</span>
                        </td>
                        <td class="cart-quality">
                          <div class="product-details-quality">
                            <input type="number" class="input-text qty text" step="1" min="1" max="100" name="quantity" value="1" title="Qty" placeholder="" />
                          </div>
                        </td>
                        <td class="product-total"><span>$120.00</span></td>
                        <td class="product-remove">
                          <a href="#"><i class="ion-ios-trash-outline"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="product-thumbnail">
                          <a href="product_details.php"><img src="assets/img/shop/details/nav2.jpg" alt="Image" /></a>
                        </td>
                        <td class="product-name">
                          <h5>
                            <a href="product_details.php">Bruder Toys Mini Ships</a>
                          </h5>
                        </td>
                        <td class="product-price">
                          <span class="amount">$120.00</span>
                        </td>
                        <td class="cart-quality">
                          <div class="product-details-quality">
                            <input type="number" class="input-text qty text" step="1" min="1" max="100" name="quantity" value="1" title="Qty" placeholder="" />
                          </div>
                        </td>
                        <td class="product-total"><span>$120.00</span></td>
                        <td class="product-remove">
                          <a href="#"><i class="ion-ios-trash-outline"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="product-thumbnail">
                          <a href="product_details.php"><img src="assets/img/shop/details/nav3.jpg" alt="Image" /></a>
                        </td>
                        <td class="product-name">
                          <h5>
                            <a href="product_details.php">Sassy Crib and Floor Mirror</a>
                          </h5>
                        </td>
                        <td class="product-price">
                          <span class="amount">$120.00</span>
                        </td>
                        <td class="cart-quality">
                          <div class="product-details-quality">
                            <input type="number" class="input-text qty text" step="1" min="1" max="100" name="quantity" value="1" title="Qty" placeholder="" />
                          </div>
                        </td>
                        <td class="product-total"><span>$120.00</span></td>
                        <td class="product-remove">
                          <a href="#"><i class="ion-ios-trash-outline"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="cart-shiping-update-wrapper">
                <div class="cart-shiping-btn continure-btn">
                  <a class="btn btn-link" href="shop.php"><i class="ion-ios-arrow-left"></i> Back To Shop</a>
                </div>
                <div class="cart-shiping-btn update-btn">
                  <a class="btn btn-link" href="shop.php"><i class="ion-ios-reload"></i> Back To Shop</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4"></div>
          </div>
          <div class="row justify-content-center">


            <div class="col-md-12 col-lg-4">
              <div class="grand-total-wrap">
                <div class="grand-total-content">
                  <h3>Subtotal <span>$180.00</span></h3>

                  <div class="shipping-country">
                    <p>Free Delivery On All Products</p>
                  </div>
                  <div class="grand-total">
                    <h4>Total <span>$185.00</span></h4>
                  </div>
                </div>
                <div class="grand-total-btn">
                  <a class="btn btn-link" href="checkout.php">Proceed to checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Cart Area Wrapper ==-->
    </main>

    <!--== Start Footer Area Wrapper ==-->
    <?php include 'components/footer.php'  ?>
    <!--== End Footer Area Wrapper ==-->

    <!--== Scroll Top Button ==-->
    <div class="scroll-to-top">
      <span class="fa fa-angle-double-up"></span>
    </div>

    <!--== Start Product Quick View ==-->
    <aside class="product-quick-view-modal">
      <div class="product-quick-view-inner">
        <div class="product-quick-view-content">
          <button type="button" class="btn-close">
            <span class="pe-7s-close"><i class="lastudioicon-e-remove"></i></span>
          </button>
          <div class="row row-gutter-0">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="thumb">
                <img src="assets/img/shop/quick-view1.jpg" alt="Image" />
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <div class="single-product-info">
                <h4 class="title">Your Products Name Here.</h4>
                <div class="prices">
                  <span class="price">$120.59</span>
                </div>
                <div class="product-rating">
                  <div class="rating">
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="review">
                    <a href="#/">( 5 Customer Review )</a>
                  </div>
                </div>
                <div class="single-product-featured">
                  <ul>
                    <li><i class="fa fa-check"></i> Free Shipping</li>
                    <li><i class="fa fa-check"></i> Support 24/7</li>
                    <li><i class="fa fa-check"></i> Money Return</li>
                  </ul>
                </div>
                <p class="product-desc">
                  Lorem ipsum dolor sit amet, consect adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quisll exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duisol aute irure
                  dolor in reprehenderit.
                </p>
                <div class="quick-product-action">
                  <div class="action-top">
                    <div class="pro-qty">
                      <input type="text" id="quantity" title="Quantity" value="01" />
                    </div>
                    <button class="btn btn-theme">Add to Cart</button>
                    <a class="btn-wishlist" href="#">Add to Wishlist</a>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="title">SKU:</h3>
                  <div class="widget-tags">
                    <span>Ch-256xl</span>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="title">Categories:</h3>
                  <div class="widget-tags">
                    <a href="#">Toys.</a>
                    <a href="#">Dresss</a>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="title">Tag:</h3>
                  <div class="widget-tags">
                    <a href="#">Toys,</a>
                    <a href="#">Dress</a>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="title">Share:</h3>
                  <div class="widget-tags widget-share">
                    <span class="fa fa-facebook"></span>
                    <span class="fa fa-dribbble"></span>
                    <span class="fa fa-pinterest-p"></span>
                    <span class="fa fa-twitter"></span>
                    <span class="fa fa-linkedin"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="canvas-overlay"></div>
    </aside>
    <!--== End Product Quick View ==-->

    <!--== Start Aside Search Menu ==-->
    <div class="search-box-wrapper">
      <div class="search-box-content-inner">
        <div class="search-box-form-wrap">
          <div class="search-note">
            <p>Start typing and press Enter to search</p>
          </div>
          <form action="#" method="post">
            <div class="search-form position-relative">
              <label for="search-input" class="sr-only">Search</label>
              <input type="search" class="form-control" placeholder="Search" id="search-input" />
              <button class="search-button">
                <i class="pe-7s-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
      <!--== End Aside Search Menu ==-->
      <a href="javascript:;" class="search-close"><i class="pe-7s-close"></i></a>
    </div>
    <!--== End Aside Search Menu ==-->

    <!--== Start Sidebar Cart Menu ==-->
    <aside class="sidebar-cart-modal">
      <div class="sidebar-cart-inner">
        <div class="sidebar-cart-content">
          <a class="cart-close" href="javascript:void(0);"><i class="pe-7s-close"></i></a>
          <div class="sidebar-cart-all">
            <div class="cart-header">
              <h3>Shopping Cart</h3>
              <div class="close-style-wrap">
                <span class="close-style close-style-width-1 cart-close"></span>
              </div>
            </div>
            <div class="cart-content cart-content-padding">
              <ul>
                <li class="single-product-cart">
                  <div class="cart-img">
                    <a href="product_details.php"><img src="assets/img/shop/details/nav1.jpg" alt="" /></a>
                  </div>
                  <div class="cart-title">
                    <h4>
                      <a href="product_details.php">Jigsaw Puzzles For Kids
                      </a>
                    </h4>
                    <span> 1 × <span class="price"> $12.00 </span></span>
                  </div>
                  <div class="cart-delete">
                    <a href="#/"><i class="pe-7s-trash icons"></i></a>
                  </div>
                </li>
                <li class="single-product-cart">
                  <div class="cart-img">
                    <a href="product_details.php"><img src="assets/img/shop/details/nav2.jpg" alt="" /></a>
                  </div>
                  <div class="cart-title">
                    <h4>
                      <a href="product_details.php">Bruder Toys Mini Ships
                      </a>
                    </h4>
                    <span> 1 × <span class="price"> $59.00 </span></span>
                  </div>
                  <div class="cart-delete">
                    <a href="#/"><i class="pe-7s-trash icons"></i></a>
                  </div>
                </li>
              </ul>
              <div class="cart-total">
                <h4>Subtotal: <span>$278.90</span></h4>
              </div>
              <div class="cart-checkout-btn">
                <a class="cart-btn" href="shop-cart.php">view cart</a>
                <a class="checkout-btn" href="checkout.php">checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <div class="sidebar-cart-overlay"></div>
    <!--== End Sidebar Cart Menu ==-->

    <!--== Start Side Menu ==-->
    <aside class="off-canvas-wrapper">
      <div class="off-canvas-inner">
        <div class="off-canvas-overlay d-none"></div>
        <!-- Start Off Canvas Content Wrapper -->
        <div class="off-canvas-content">
          <!-- Off Canvas Header -->
          <div class="off-canvas-header">
            <div class="close-action">
              <button class="btn-close"><i class="pe-7s-close"></i></button>
            </div>
          </div>

          <div class="off-canvas-item">
            <!-- Start Mobile Menu Wrapper -->
            <div class="res-mobile-menu">
              <!-- Note Content Auto Generate By Jquery From Main Menu -->
            </div>
            <!-- End Mobile Menu Wrapper -->
          </div>
          <!-- Off Canvas Footer -->
          <div class="off-canvas-footer"></div>
        </div>
        <!-- End Off Canvas Content Wrapper -->
      </div>
    </aside>
    <!--== End Side Menu ==-->
  </div>

  <!--=======================Javascript============================-->

  <!--=== Modernizr Min Js ===-->
  <script src="assets/js/modernizr.js"></script>
  <!--=== jQuery Min Js ===-->
  <script src="assets/js/jquery-main.js"></script>
  <!--=== jQuery Migration Min Js ===-->
  <script src="assets/js/jquery-migrate.js"></script>
  <!--=== Popper Min Js ===-->
  <script src="assets/js/popper.min.js"></script>
  <!--=== Bootstrap Min Js ===-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!--=== jquery Appear Js ===-->
  <script src="assets/js/jquery.appear.js"></script>
  <!--=== jquery Swiper Min Js ===-->
  <script src="assets/js/swiper.min.js"></script>
  <!--=== jquery Fancybox Min Js ===-->
  <script src="assets/js/fancybox.min.js"></script>
  <!--=== jquery Aos Min Js ===-->
  <script src="assets/js/aos.min.js"></script>
  <!--=== jquery Slicknav Js ===-->
  <script src="assets/js/jquery.slicknav.js"></script>
  <!--=== jquery Countdown Js ===-->
  <script src="assets/js/jquery.countdown.min.js"></script>
  <!--=== jquery Tippy Js ===-->
  <script src="assets/js/tippy.all.min.js"></script>
  <!--=== Isotope Min Js ===-->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!--=== Parallax Min Js ===-->
  <script src="assets/js/parallax.min.js"></script>
  <!--=== Slick  Min Js ===-->
  <script src="assets/js/slick.min.js"></script>
  <!--=== jquery Wow Min Js ===-->
  <script src="assets/js/wow.min.js"></script>
  <!--=== jquery Zoom Min Js ===-->
  <script src="assets/js/jquery-zoom.min.js"></script>

  <!--=== Custom Js ===-->
  <script src="assets/js/custom.js"></script>
</body>

</html>