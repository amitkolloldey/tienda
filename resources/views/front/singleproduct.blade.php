@extends('front.layout.template')
@section('title') {{$product->name}} @endsection
@section('bodyclass')product-page @endsection
@section('content')

    <div class="columns-container">
        <div class="container" id="columns">
            <!-- row -->
            <div class="row">
                <!-- Left colunm -->
            @include('front.partials.shopsidebar')
            <!-- ./left colunm -->
                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-9" id="center_column">
                    <!-- Product -->

                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src='{{url('storage/'.$product->image)
                                        }}'>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false"
                                            data-margin="20" data-loop="true">
                                            @foreach(json_decode($product->gallery,true) as $gallery_image)
                                                <li>
                                                    <a href="#" data-image="{{asset('storage/'.$gallery_image)}}">
                                                        <img id="product-zoom"
                                                             src="{{asset('storage/'.$gallery_image)}}"/>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name">{{$product->name}}</h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="comments-advices">
                                        <a href="#">Based on 3 ratings</a>
                                        <a href="#"><i class="fa fa-pencil"></i> write a review</a>
                                    </div>
                                </div>
                                <div class="product-price-group">
                                    @if($product->sale_price)
                                        <span class="price product-price">${{$product->sale_price}}</span>
                                        <span class="price old-price">${{$product->price}}</span>
                                        <span class="discount">{{floor(($product->price - $product->sale_price)
                                        *100/$product->price)}}%</span>
                                    @else
                                        <span class="price product-price">${{$product->price}}</span>
                                    @endif
                                </div>
                                <div class="info-orther">
                                    <p>Code: {{$product->product_code}}</p>
                                    <p class="availability">Availability:
                                        @if($product->quantity > 0 )
                                            <span>In stock</span>
                                        @else
                                            <span>Out Of stock</span>
                                        @endif
                                    </p>
                                </div>
                                <div class="product-desc">
                                    {{$product->description}}
                                </div>
                                <form action="{{route('cart.single.product.create',$product->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('POST')}}
                                    <div class="form-option">
                                        <div class="attributes">
                                            <div class="attribute-label">Qty:</div>
                                            <div class="attribute-list product-qty">
                                                <div class="qty">
                                                    <input name="qty" class="form-control input-sm" type="number"
                                                           value="1"
                                                           min="1"
                                                           max="{{$product->quantity}}"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-action">
                                        <div class="button-group">
                                            @if($product->quantity > 0 )
                                                <button title="Add to Cart" class="btn-add-cart">Add to
                                                    Cart
                                                </button>
                                            @else
                                                <h2 title="Sold Out" class="btn-add-cart">Sold Out</h2>
                                            @endif
                                        </div>
                                        <div class="button-group">
                                            <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                                <br>Wishlist</a>
                                            <a class="compare" href="#"><i class="fa fa-signal"></i>
                                                <br>
                                                Compare</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="true" data-toggle="tab" href="#product-detail">Product Details</a>
                                </li>
                                <li class="">
                                    <a aria-expanded="false" data-toggle="tab" href="#information">information</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#reviews" aria-expanded="false">reviews</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#extra-tabs" aria-expanded="false">Extra Tabs</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#guarantees" aria-expanded="false">guarantees</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    {{$product->description}}
                                </div>
                                <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td width="200">Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr>
                                            <td>Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td>Properties</td>
                                            <td>Colorful Dress</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab">
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Jame</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet
                                                convallis
                                                pulvinar
                                            </div>
                                        </div>
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Author</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet
                                                convallis
                                                pulvinar
                                            </div>
                                        </div>
                                        <p>
                                            <a class="btn-comment" href="#">Write your review !</a>
                                        </p>
                                    </div>

                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis
                                        pulvinar,
                                        justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a
                                        libero. Vestibulum
                                        eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at
                                        lacus ac velit
                                        ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci.
                                        Aenean
                                        tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl
                                        sagittis
                                        vestibulum. Aliquam eu nunc.</p>
                                </div>
                                <div id="guarantees" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis
                                        pulvinar,
                                        justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a
                                        libero. Vestibulum
                                        eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at
                                        lacus ac velit
                                        ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci.
                                        Aenean
                                        tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl
                                        sagittis
                                        vestibulum. Aliquam eu nunc.</p>
                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at
                                        lacus ac velit
                                        ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./tab product -->
                    @if($related_products->count() > 0)
                        <!-- box product -->
                            <div class="page-product-box">
                                <h3 class="heading">Related Products</h3>
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true"
                                    data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true"
                                    data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                    @foreach($related_products as $product)
                                        <li>
                                            <div class="product-container">
                                                <div class="left-block">
                                                    <a href="{{route('single.product',$product->slug)}}">
                                                        <img class="img-responsive" alt="{{$product->name}}"
                                                             src="{{url('storage/').'/'.$product->image}}">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="#"></a>
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
                            <!-- ./box product -->
                            @foreach($related_products as $product)
                                <div id="quickview-{{$product->id}}" class="modal fade"
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
                        @endif
                    </div>
                    <!-- Product -->
                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>
@endsection
