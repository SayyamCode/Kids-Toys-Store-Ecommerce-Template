<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Shop -</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
                                <h2 class="title">Product</h2>
                                <div class="bread-crumbs"><a href="index.php"> Home </a><span class="breadcrumb-sep"> // </span><span class="active"> Product</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Page Title Area ==-->

            <!--== Start Shop Area Wrapper ==-->
            <div class="product-area product-grid-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-0 order-lg-1">
                            <div class="shop-toolbar-wrap">
                                <div class="product-showing-status">
                                    <p class="count-result"><span>12 </span> Product Found of <span> 30</span></p>
                                </div>
                                <div class="product-view-mode">
                                    <nav>
                                        <div class="nav nav-tabs active" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="column-three-tab" data-bs-toggle="tab" data-bs-target="#column-three" type="button" role="tab" aria-controls="column-three" aria-selected="true"><i class="fa fa-th"></i></button>

                                            <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fa fa-list"></i></button>

                                            <button class="nav-link" id="column-two-tab" data-bs-toggle="tab" data-bs-target="#column-two" type="button" role="tab" aria-controls="column-two" aria-selected="true"><i class="fa fa-th-large"></i></button>
                                        </div>
                                    </nav>
                                </div>
                                <div class="product-sorting-menu product-sorting">
                                    <span class="current">Sort By : <span> Default <i class="fa fa-angle-down"></i></span></span>
                                    <ul>
                                        <li class="active"><a href="shop.php" class="active">Sort by Default</a></li>
                                        <li><a href="shop.php">Sort by Popularity</a></li>
                                        <li><a href="shop.php">Sort by Rated</a></li>
                                        <li><a href="shop.php">Sort by Latest</a></li>
                                        <li><a href="shop.php">Sort by Price: <i class="lastudioicon-arrow-up"></i></a></li>
                                        <li><a href="shop.php">Sort by Price: <i class="lastudioicon-arrow-down"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="column-three" role="tabpanel" aria-labelledby="column-three-tab">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/1.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/2.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Baby Play Sets</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/3.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Jigsaw Puzzles For Kids</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/4.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Abstract Girl Dress</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/5.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Bruder Toys Mini Ships</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/6.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Abstract Boy Dress</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/7.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy Pink</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/8.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Toys Box For Baby</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/9.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy Brown</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/10.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Newborn Kit Set</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/11.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Classic Fisher Gift</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/12.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Sassy Crib and Floor Mirror</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                                    <div class="row">
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/1.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/2.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Baby Play Sets</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/3.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Jigsaw Puzzles For Kids</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/4.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Abstract Girl Dress</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/5.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Bruder Toys Mini Ships</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/6.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Abstract Boy Dress</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/7.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy Pink</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/8.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Toys Box For Baby</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/9.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy Brown</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/10.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Newborn Kit Set</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/11.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Classic Fisher Gift</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-12 product-items-list">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/12.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Sassy Crib and Floor Mirror</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt integer. Sed adipiscing vehicula.</p>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="column-two" role="tabpanel" aria-labelledby="column-two-tab">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/1.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/2.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Baby Play Sets</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/3.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Jigsaw Puzzles For Kids</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/4.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Abstract Girl Dress</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/5.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Bruder Toys Mini Ships</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/6.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Abstract Boy Dress</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/7.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy Pink</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/8.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Toys Box For Baby</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/9.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Funskool Teddy Brown</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/10.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Newborn Kit Set</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/11.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Classic Fisher Gift</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Start Product Item -->
                                            <div class="product-item">
                                                <div class="product-thumb">
                                                    <img src="assets/img/shop/12.png" alt="Image">
                                                    <div class="product-action">
                                                        <a class="action-quick-view" href="shop-cart.php"><i class="ion-ios-cart"></i></a>
                                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-heart"></i></a>
                                                        <a class="action-quick-view" href="#"><i class="ion-shuffle"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <h4 class="title"><a href="product_details.php">Sassy Crib and Floor Mirror</a></h4>
                                                    <div class="prices">
                                                        <span class="price">$190.12</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination-area mb-md-50">
                                        <nav>
                                            <ul class="page-numbers justify-content-end">
                                                <li>
                                                    <a class="page-number active" href="#">1</a>
                                                </li>
                                                <li>
                                                    <a class="page-number" href="#">2</a>
                                                </li>
                                                <li>
                                                    <a class="page-number" href="#">3</a>
                                                </li>
                                                <li>
                                                    <a class="page-number next" href="#">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 order-1 order-lg-0">
                            <div class="sidebar-area shop-sidebar-area">
                                <div class="widget-item">
                                    <div class="widget-title">
                                        <h3 class="title">Product Categories</h3>
                                    </div>
                                    <div class="widget-body">
                                        <div class="widget-categories">
                                            <ul>
                                                <li><a href="shop.php">Accesasories <span>(6)</span></a></li>
                                                <li><a href="shop.php">Computer <span>(4)</span></a></li>
                                                <li><a href="shop.php">Covid-19 <span>(2)</span></a></li>
                                                <li><a href="shop.php">Electronics <span>(6)</span></a></li>
                                                <li><a href="shop.php">Frame Sunglasses <span>(12)</span></a></li>
                                                <li><a href="shop.php">Furniture <span>(7)</span></a></li>
                                                <li><a href="shop.php">Genuine Leather <span>(9)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Shop Area Wrapper ==-->
        </main>

        <!--== Start Footer Area Wrapper ==-->
        <?php include 'components/footer.php'  ?>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

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
                                <img src="assets/img/shop/quick-view1.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-product-info">
                                <h4 class="title">Jigsaw Puzzles For Kids</h4>
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
                                <p class="product-desc">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisll exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duisol aute irure dolor in reprehenderit.</p>
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
                            <input type="search" class="form-control" placeholder="Search" id="search-input">
                            <button class="search-button"><i class="pe-7s-search"></i></button>
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
                                        <a href="product_details.php"><img src="assets/img/shop/details/nav1.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h4><a href="product_details.php">Jigsaw Puzzles For Kids </a></h4>
                                        <span> 1 × <span class="price"> $12.00 </span></span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#/"><i class="pe-7s-trash icons"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="product_details.php"><img src="assets/img/shop/details/nav2.jpg" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h4><a href="product_details.php">Bruder Toys Mini Ships </a></h4>
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
    <!--=== RangeSlider  Min Js ===-->
    <script src="assets/js/rangeSlider.js"></script>
    <!--=== jquery Zoom Min Js ===-->
    <script src="assets/js/jquery-zoom.min.js"></script>

    <!--=== Custom Js ===-->
    <script src="assets/js/custom.js"></script>

</body>

</html>