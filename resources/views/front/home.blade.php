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
                            </ul>
                        </div>
                    </div>
                    <div class="header-banner banner-opacity">
                        <a href="{{route('shop.products')}}"><img alt="Funky roots" src="assets/data/ads1.jpg" /></a>
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
                <div class="col-xs-12 col-sm-12 page-top-left">
                    <div class="popular-tabs">
                        <ul class="nav-tab">
                            <li><a data-toggle="tab" href="#tab-3">New products</a></li>
                        </ul>
                        <div class="tab-container">
                            <div id="tab-3" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    @foreach($new_products as $product)
                                        <li>
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <a href="{{route('single.product',$product->slug)}}">
                                                        <img class="img-responsive" alt="{{$product->name}}"
                                                             src="{{url('storage/').'/'.$product->image}}">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="{{route('wishlist.product.create',$product->id)}}"><i class="fa fa-heart-o"></i><br>Wishlist</a>
                                                        <a title="Quick view" class="search" href="#"
                                                           data-toggle="modal"
                                                           data-target="#new-quickview-{{$product->id}}"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        @if($product->quantity > 0 )
                                                            <a title="Add to Cart"
                                                               href="{{route('cart.product.create',$product->id)}}">Add to Cart</a>
                                                        @else
                                                            <h2 title="Sold Out">Sold Out</h2>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="{{route('single.product',$product->slug)}}">{{$product->name}}</a>
                                                    </h5>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="content_price">
                                                        @if($product->sale_price)
                                                            <span class="price product-price">${{$product->sale_price}}</span>
                                                            <span class="price old-price">${{$product->price}}</span>
                                                        @else
                                                            <span class="price product-price">${{$product->price}}</span>
                                                        @endif
                                                    </div>
                                                    <div class="info">
                                                        <p>Code: {{$product->product_code}}</p>
                                                        <p class="availability">Availability:
                                                            @if($product->quantity > 0 )
                                                                <span>In stock</span>
                                                            @else
                                                                <span>Out Of stock</span>
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @foreach($new_products as $product)
                <div id="new-quickview-{{$product->id}}" class="modal fade"
                     role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="tienda_qv_left">
                                            <img src="{{url('storage/'.$product->image)}}"
                                                 alt="{{$product->name}}">
                                        </div>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="tienda_qv_right">
                                            <h2>
                                                <a href="{{route('single.product',$product->slug)}}">{{$product->name}}</a>
                                            </h2>
                                            <p>{{$product->description}}</p>
                                            <div class="add_to_cart">
                                                @if($product->quantity > 0 )
                                                    <a title="Add to Cart"
                                                       href="{{route('cart.product.create',$product->id)}}">Add
                                                        to
                                                        Cart</a>
                                                @else
                                                    <h2 title="Sold Out">Sold Out</h2>
                                                @endif
                                                <a href="{{route('single.product',$product->slug)
                                                                }}">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/fashion.png"
                                />Featured Products</a></div>
                        <span class="toggle-menu"></span>
                    </div><!-- /.container-fluid -->
                    <div id="elevator-1" class="floor-elevator">
                        <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                        <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="product-featured clearfix">
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-4">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        @foreach($featured_products as $product)
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="{{route('single.product',$product->slug)}}">
                                                            <img class="img-responsive" alt="{{$product->name}}"
                                                                 src="{{url('storage/').'/'.$product->image}}">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="{{route('wishlist.product.create',$product->id)}}"><i class="fa fa-heart-o"></i><br>Wishlist</a>
                                                            <a title="Quick view" class="search" href="#"
                                                               data-toggle="modal"
                                                               data-target="#featured-quickview-{{$product->id}}"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            @if($product->quantity > 0 )
                                                                <a title="Add to Cart"
                                                                   href="{{route('cart.product.create',$product->id)}}">Add
                                                                    to
                                                                    Cart</a>
                                                            @else
                                                                <h2 title="Sold Out">Sold Out</h2>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a
                                                                    href="{{route('single.product',$product->slug)}}">{{$product->name}}</a>
                                                        </h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            @if($product->sale_price)
                                                                <span class="price product-price">${{$product->sale_price}}</span>
                                                                <span class="price old-price">${{$product->price}}</span>
                                                            @else
                                                                <span class="price product-price">${{$product->price}}</span>
                                                            @endif
                                                        </div>
                                                        <div class="info">
                                                            <p>Code: {{$product->product_code}}</p>
                                                            <p class="availability">Availability:
                                                                @if($product->quantity > 0 )
                                                                    <span>In stock</span>
                                                                @else
                                                                    <span>Out Of stock</span>
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- tab product -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @foreach($featured_products as $product)
                <div id="featured-quickview-{{$product->id}}" class="modal fade"
                     role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="tienda_qv_left">
                                            <img src="{{url('storage/'.$product->image)}}"
                                                 alt="{{$product->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tienda_qv_right">
                                            <h2>
                                                <a href="{{route('single.product',$product->slug)}}">{{$product->name}}</a>
                                            </h2>
                                            <p>{{$product->description}}</p>
                                            <div class="add_to_cart">
                                                @if($product->quantity > 0 )
                                                    <a title="Add to Cart"
                                                       href="{{route('cart.product.create',$product->id)}}">Add
                                                        to
                                                        Cart</a>
                                                @else
                                                    <h2 title="Sold Out">Sold Out</h2>
                                                @endif
                                                <a href="{{route('single.product',$product->slug)}}">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <!-- featured category fashion -->
        <div class="container">
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-green show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/fashion.png"
                                />On Sale Products</a></div>
                        <span class="toggle-menu"></span>
                    </div><!-- /.container-fluid -->
                    <div id="elevator-1" class="floor-elevator">
                        <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                        <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="product-featured clearfix">
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-4">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        @foreach($sale_products as $product)
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="{{route('single.product',$product->slug)}}">
                                                            <img class="img-responsive" alt="{{$product->name}}"
                                                                 src="{{url('storage/').'/'.$product->image}}">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="{{route('wishlist.product.create',$product->id)}}"><i class="fa fa-heart-o"></i><br>Wishlist</a>
                                                            <a title="Quick view" class="search" href="#"
                                                               data-toggle="modal"
                                                               data-target="#sale-quickview-{{$product->id}}"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            @if($product->quantity > 0 )
                                                                <a title="Add to Cart"
                                                                   href="{{route('cart.product.create',$product->id)}}">Add
                                                                    to
                                                                    Cart</a>
                                                            @else
                                                                <h2 title="Sold Out">Sold Out</h2>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a
                                                                    href="{{route('single.product',$product->slug)}}">{{$product->name}}</a>
                                                        </h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            @if($product->sale_price)
                                                                <span class="price product-price">${{$product->sale_price}}</span>
                                                                <span class="price old-price">${{$product->price}}</span>
                                                            @else
                                                                <span class="price product-price">${{$product->price}}</span>
                                                            @endif
                                                        </div>
                                                        <div class="info">
                                                            <p>Code: {{$product->product_code}}</p>
                                                            <p class="availability">Availability:
                                                                @if($product->quantity > 0 )
                                                                    <span>In stock</span>
                                                                @else
                                                                    <span>Out Of stock</span>
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- tab product -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @foreach($sale_products as $product)
                <div id="sale-quickview-{{$product->id}}" class="modal fade"
                     role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="tienda_qv_left">
                                            <img src="{{url('storage/'.$product->image)}}"
                                                 alt="{{$product->name}}">
                                        </div>

                                    </div>
                                    <div class="col-md-8">
                                        <div class="tienda_qv_right">
                                            <h2>
                                                <a href="{{route('single.product',$product->slug)}}">{{$product->name}}</a>
                                            </h2>
                                            <p>{{$product->description}}</p>
                                            <div class="add_to_cart">
                                                @if($product->quantity > 0 )
                                                    <a title="Add to Cart"
                                                       href="{{route('cart.product.create',$product->id)}}">Add
                                                        to
                                                        Cart</a>
                                                @else
                                                    <h2 title="Sold Out">Sold Out</h2>
                                                @endif
                                                <a href="{{route('single.product',$product->slug)
                                                                }}">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <!-- end featured category fashion -->
        <div class="container">
            <div class="category-featured">
                <nav class="navbar nav-menu nav-menu-blue show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/fashion.png"
                                />Best Seller</a></div>
                        <span class="toggle-menu"></span>
                    </div><!-- /.container-fluid -->
                    <div id="elevator-1" class="floor-elevator">
                        <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                        <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                    </div>
                </nav>
                <div class="product-featured clearfix">
                    <div class="product-featured-content">
                        <div class="product-featured-list">
                            <div class="tab-container">
                                <!-- tab product -->
                                <div class="tab-panel active" id="tab-4">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                        @foreach($best_seller_products as $product)
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block">
                                                        <a href="{{route('single.product',$product->slug)}}">
                                                            <img class="img-responsive" alt="{{$product->name}}"
                                                                 src="{{url('storage/').'/'.$product->image}}">
                                                        </a>
                                                        <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="{{route('wishlist.product.create',$product->id)}}"><i class="fa fa-heart-o"></i><br>Wishlist</a>
                                                            <a title="Quick view" class="search" href="#"
                                                               data-toggle="modal"
                                                               data-target="#quickview-{{$product->id}}"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            @if($product->quantity > 0 )
                                                                <a title="Add to Cart"
                                                                   href="{{route('cart.product.create',$product->id)}}">Add
                                                                    to
                                                                    Cart</a>
                                                            @else
                                                                <h2 title="Sold Out">Sold Out</h2>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a
                                                                    href="{{route('single.product',$product->slug)}}">{{$product->name}}</a>
                                                        </h5>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                            @if($product->sale_price)
                                                                <span class="price product-price">${{$product->sale_price}}</span>
                                                                <span class="price old-price">${{$product->price}}</span>
                                                            @else
                                                                <span class="price product-price">${{$product->price}}</span>
                                                            @endif
                                                        </div>
                                                        <div class="info">
                                                            <p>Code: {{$product->product_code}}</p>
                                                            <p class="availability">Availability:
                                                                @if($product->quantity > 0 )
                                                                    <span>In stock</span>
                                                                @else
                                                                    <span>Out Of stock</span>
                                                                @endif
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- tab product -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- end featured category fashion -->
            <!-- Baner bottom -->
        <div class="container">
            <div class="row banner-bottom">
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="{{route('shop.products')}}"><img alt="ads" class="img-responsive" src="assets/data/ads17.jpg"/></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="banner-boder-zoom">
                        <a href="{{route('shop.products')}}"><img alt="ads" class="img-responsive" src="assets/data/ads18.jpg" /></a>
                    </div>
                </div>
            </div>
            <!-- end banner bottom -->
        </div>
    </div>

@endsection