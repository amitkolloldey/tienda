@extends('front.layout.template')
@section('title')
    Shop
@endsection
@section('bodyclass')category-page @endsection
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
                    <!-- category-slider -->
                    <div class="category-slider">
                        <ul>
                            <li>
                                <img src="assets/data/category-slide.jpg" alt="category-slider">
                            </li>
                        </ul>
                    </div>
                    <!-- ./category-slider -->
                    <!-- view-product-list-->
                    <div id="view-product-list" class="view-product-list">
                        <h2 class="page-heading">
                            <span class="page-heading-title">Shop</span>
                        </h2>

                        <ul class="display-product-option">
                            <li class="view-as-grid selected">
                                <span>grid</span>
                            </li>
                            <li class="view-as-list">
                                <span>list</span>
                            </li>
                        </ul>
                        <div class="clearfix">
                            <div class="showing">Showing
                                {{($products->currentpage()-1)*$products->perpage()+1}} to {{($products->currentpage()-1)
                             * $products->perpage() + $products->count()}} of {{$products->total()}} products
                            </div>
                            <div class="sorting">
                                <p class="sort">
                                    <span>Sort by:</span>
                                    <a href="{{ route('shop.products', [ 'sortby' => 'newest_items'])}}">Newest
                                        Items</a>
                                    <a href="{{ route('shop.products', [ 'sortby' => 'best_selling'])}}">Bestselling</a>
                                    <a href="{{ route('shop.products', ['sortby' => 'low_to_high']) }}">Low to High</a>
                                    <a href="{{ route('shop.products', [ 'sortby' => 'high_to_low']) }}">High to Low</a>
                                </p>
                            </div>
                        </div>
                        <!-- PRODUCT LIST -->
                        <div id="productList">
                            <ul class="row product-list grid">
                                @forelse($products as $product)

                                    <li class="col-sx-12 col-sm-4">
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="{{route('single.product',$product->slug)}}">
                                                    <img class="img-responsive" alt="{{$product->name}}"
                                                         src="{{url('storage/'.$product->image)}}"
                                                         width="268"
                                                         height="327"/>
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="{{route
                                                    ('wishlist.product.create',$product->id)}}"></a>
                                                    <a title="Quick view" class="search" href="#" data-toggle="modal"
                                                       data-target="#quickview-{{$product->id}}"></a>
                                                    <!-- Trigger the modal with a button -->

                                                    <!-- Modal -->

                                                </div>
                                                <div class="add-to-cart">
                                                    @if($product->quantity > 0 )
                                                        <a title="Add to Cart"
                                                           href="{{route('cart.product.create',$product->id)}}">Add to
                                                            Cart</a>
                                                    @else
                                                        <h2 title="Sold Out">Sold Out</h2>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"> <a href="{{route('single.product',$product->slug)}}">{{$product->name}}</a></h5>
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
                                @empty
                                    <h2>No Products</h2>
                                @endforelse
                            </ul>
                            <!-- ./PRODUCT LIST -->
                            <div class="clearfix">
                                <div class="showing">Showing
                                    {{($products->currentpage()-1)*$products->perpage()+1}} to {{($products->currentpage()-1)
                             * $products->perpage() + $products->count()}} of {{$products->total()}} products
                                </div>
                                <div class="sorting">
                                    <p class="sort">
                                        <span>Sort by:</span>
                                        <a href="{{ route('shop.products',[ 'sortby' =>
                                    'newest_items'])}}
                                                }}">Newest
                                            Items</a>
                                        <a href="{{ route('shop.products', [ 'sortby' => 'best_selling'])}}">Bestselling</a>
                                        <a href="{{ route('shop.products', ['sortby' => 'low_to_high']) }}">Low to
                                            High</a>
                                        <a href="{{ route('shop.products', [ 'sortby' => 'high_to_low']) }}">High to
                                            Low</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="sortPagiBar">
                            <div class="bottom-pagination">
                                <nav>
                                    {{ $products->appends(request()->input())->links() }}
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- ./view-product-list-->

                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>

@endsection

