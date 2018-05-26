@extends('front.layout.template')
@section('title')
Home
@endsection
@section('bodyclass')
    home
@endsection
@section('content')

    <!-- Home slideder-->
    <div id="home-slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 slider-left"></div>
                <div class="col-sm-9 header-top-right">
                    <div class="homeslider">
                        <div class="content-slide">
                            <ul id="contenhomeslider">
                                <li><img alt="Funky roots" src="assets/data/slide.jpg" title="Funky roots" /></li>
                                <li><img alt="Funky roots" src="assets/data/slide.jpg" title="Funky roots" /></li>
                                <li><img  alt="Funky roots" src="assets/data/slide.jpg" title="Funky roots" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-banner banner-opacity">
                        <a href="#"><img alt="Funky roots" src="assets/data/ads1.jpg" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Home slideder-->
    <!-- servives -->
    <div class="container">
        <div class="service ">
            <div class="col-xs-6 col-sm-3 service-item">
                <div class="icon">
                    <img alt="services" src="assets/data/s1.png" />
                </div>
                <div class="info">
                    <a href="#"><h3>Free Shipping</h3></a>
                    <span>On order over $200</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 service-item">
                <div class="icon">
                    <img alt="services" src="assets/data/s2.png" />
                </div>
                <div class="info">
                    <a href="#"><h3>30-day return</h3></a>
                    <span>Moneyback guarantee</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 service-item">
                <div class="icon">
                    <img alt="services" src="assets/data/s3.png" />
                </div>

                <div class="info" >
                    <a href="#"><h3>24/7 support</h3></a>
                    <span>Online consultations</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 service-item">
                <div class="icon">
                    <img alt="services" src="assets/data/s4.png" />
                </div>
                <div class="info">
                    <a href="#"><h3>SAFE SHOPPING</h3></a>
                    <span>Safe Shopping Guarantee</span>
                </div>
            </div>
        </div>
    </div>
    <!-- end services -->

    <div class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 page-top-left">
                    <div class="popular-tabs">
                        <ul class="nav-tab">
                            <li class="active"><a data-toggle="tab" href="#tab-1">BEST SELLERS</a></li>
                            <li><a data-toggle="tab" href="#tab-2">ON SALE</a></li>
                            <li><a data-toggle="tab" href="#tab-3">New products</a></li>
                        </ul>
                        <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="assets/data/bs1.jpg" />
                                            </a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <span class="product-sale">Sale</span>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Sexy Lady</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/bs2.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Perfect Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/bs3.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="group-price">
                                            <span class="product-new">NEW</span>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Fresh Summer</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/bs4.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="assets/data/p48.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="assets/data/p49.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/p50.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/p51.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/p60.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/p61.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/p62.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="assets/data/p63.jpg" /></a>
                                            <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 page-top-right">
                    <div class="latest-deals">
                        <h2 class="latest-deal-title">latest deals</h2>
                        <div class="latest-deal-content">
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":1}}'>
                                <li>
                                    <div class="count-down-time" data-countdown="2015/06/27"></div>
                                    <div class="left-block">
                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/ld1.jpg" /></a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                            <span class="colreduce-percentage">(-10%)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                    <div class="left-block">
                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/ld2.jpg" /></a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                            <span class="colreduce-percentage">(-90%)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="count-down-time" data-countdown="2015/06/27 9:20:00"></div>
                                    <div class="left-block">
                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/ld3.jpg" /></a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                        <div class="content_price">
                                            <span class="price product-price">$38,95</span>
                                            <span class="price old-price">$52,00</span>
                                            <span class="colreduce-percentage">(-20%)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="content-page">
        <div class="container">
            <!-- featured category fashion -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-red show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/fashion.png" />fashion</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-4">Best Seller</a></li>
                                <li><a data-toggle="tab" href="#tab-5">Most Viewed</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-1" class="floor-elevator">
                        <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                        <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads2.jpg" /></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads3.jpg" /></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f1.jpg" /></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-4">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/01_blue-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Blue Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/02_yellow-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Yellow Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/03_cyan-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Cyan Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/04_nice-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/05_flowers-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/06_red-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-5">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/04_nice-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/05_flowers-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/06_red-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/01_blue-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Blue Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/02_yellow-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Yellow Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/03_cyan-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Cyan Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/04_nice-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/05_flowers-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Flowers Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/06_red-dress.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Red Dress</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category fashion -->
            <!-- featured category sports -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-green show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/sports.png" />sports</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-6">Best Seller</a></li>
                                <li><a data-toggle="tab" href="#tab-7">Most Viewed</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Swimming</a></li>
                                <li><a href="#">Climbing</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-2" class="floor-elevator">
                        <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads6.jpg" /></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads7.jpg" /></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f2.jpg" /></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-6">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p14.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p15.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p16.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p14.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p17.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p14.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-7">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>

                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p17.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p16.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p15.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p17.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p14.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p17.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category sports-->

            <!-- featured category electronic -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-orange show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/electronic.png" />electronic</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-8">Best Seller</a></li>
                                <li><a data-toggle="tab" href="#tab-9">Most Viewed</a></li>
                                <li><a href="#">Television</a></li>
                                <li><a href="#">Air Conditional</a></li>
                                <li><a href="#">ARM</a></li>
                                <li><a href="#">Theater</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-3" class="floor-elevator">
                        <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads8.jpg" /></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads9.jpg" /></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f3.jpg" /></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-8">
                                    <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav="true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p18.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p19.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p20.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p18.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p21.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-9">
                                    <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p21.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p21.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p20.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p19.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p18.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category electronic-->
            <!-- featured category Digital -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-blue show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/digital.png" />Digital</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-10">Best Seller</a></li>
                                <li><a data-toggle="tab" href="#tab-11">Most Viewed</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Notebook</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-4" class="floor-elevator">
                        <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads10.jpg" /></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads11.jpg" /></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f4.jpg" /></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-10">
                                    <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p22.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p23.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p24.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p25.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p23.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-11">
                                    <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p25.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p24.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p23.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p23.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p22.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p23.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category Digital-->
            <!-- featured category furniture -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-blue2 show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/furniture.png" />furniture</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-12">Best Seller</a></li>
                                <li><a data-toggle="tab" href="#tab-13">Most Viewed</a></li>
                                <li><a href="#">Television</a></li>
                                <li><a href="#">Air Conditional</a></li>
                                <li><a href="#">Theater</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-5" class="floor-elevator">
                        <a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads12.jpg" /></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads13.jpg" /></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f5.jpg" /></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-12">
                                    <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p26.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p27.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p28.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p29.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p28.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-13">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p29.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p28.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p28.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p27.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p26.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category furniture-->
            <!-- featured category jewelry -->
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-gray show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/jewelry.png" />jewelry</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a data-toggle="tab" href="#tab-14">Best Seller</a></li>
                                <li><a data-toggle="tab" href="#tab-15">Most Viewed</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Notebook</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                    <div id="elevator-6" class="floor-elevator">
                        <a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>
                        <a href="#" class="btn-elevator disabled down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="category-banner">
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads14.jpg" /></a>
                    </div>
                    <div class="col-sm-6 banner">
                        <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads15.jpg" /></a>
                    </div>
                </div>
                <div class="product-featured clearfix">
                    <div class="banner-featured">
                        <div class="featured-text"><span>featured</span></div>
                        <div class="banner-img">
                            <a href="#"><img alt="Featurered 1" src="assets/data/f6.jpg" /></a>
                        </div>
                    </div>
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container autoheight">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-14">
                                    <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p30.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p31.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p32.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p33.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p31.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab product -->
                                <div class="tab-panel" id="tab-15">
                                    <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p33.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p31.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p31.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p32.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p31.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left-block">
                                                <a href="#"><img class="img-responsive" alt="product" src="assets/data/p30.jpg" /></a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Add to Cart" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price">$38,95</span>
                                                    <span class="price old-price">$52,00</span>
                                                </div>
                                                <div class="product-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end featured category jewelry-->

            <!-- Baner bottom -->
            <div class="row banner-bottom">
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="#"><img alt="ads" class="img-responsive" src="assets/data/ads17.jpg" /></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="#"><img alt="ads" class="img-responsive" src="assets/data/ads18.jpg" /></a>
                    </div>
                </div>
            </div>
            <!-- end banner bottom -->
        </div>
    </div>

@endsection