@extends('front.layout.template')
@section('title')
    Wishlist
@endsection
@section('bodyclass')category-page @endsection
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- page heading-->
            <h2 class="page-heading no-line">
                <span class="page-heading-title2">Wishlist</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content page-order">
                @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="alert-danger alert">{{ $error }}</div>
                    @endforeach
                @endif
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <div class="order-detail-content">
                    @if($products->count()>0)
                        <div class="heading-counter warning">Your Wishlist contains:
                            <span>{{$products->count()}} Item</span>
                        </div>
                        <table class="table table-bordered table-responsive cart_summary">
                            <thead>
                            <tr>
                                <th class="cart_product">Product</th>
                                <th>Description</th>
                                <th>Avail.</th>
                                <th>Unit price</th>
                                <th  class="action"><i class="fa fa-trash-o"></i></th>
                            </tr>
                            </thead>
                            <tbody>

                            @forelse($products as $product)
                                <tr>
                                    <td class="cart_product">
                                        <a href="{{route('single.product',$product->product->slug)}}"><img src="{{url
                                        ('storage/'
                                        .$product->product->image)
                                }}" alt="{{$product->product->name}}"></a>
                                    </td>
                                    <td class="cart_description">
                                        <p class="product-name"><a href="{{route('single.product',$product->product->slug)}}">{{$product->product->name}} </a></p>
                                        <small class="cart_ref">Item Code : #{{$product->product->product_code}}</small><br>
                                    </td>
                                    <td class="cart_avail"><span class="label label-success">In stock</span></td>
                                    <td class="price">
                                        <span>${{$product->product->price}}</span>
                                    </td>
                                    <td class="action">
                                        <form action="{{route('wishlist.product.remove',$product->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" style="color: red;"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td>Your Wishlist Is Empty!!</td>
                                </tr>

                            @endforelse
                            </tbody>
                        </table>

                        <div class="cart_navigation">
                            <a class="prev-btn" href="{{route('shop.products')}}">Continue shopping</a>
                            <a class="next-btn" href="{{route('wishlist.cart_create')}}">Add All To Cart</a>
                        </div>
                    @else
                        <div class="alert alert-info"><p>Wishlist Is Empty!!</p></div>
                        <div class="cart_navigation">
                            <a class="prev-btn" href="{{route('shop.products')}}">Return To Shop</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection