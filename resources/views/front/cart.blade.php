@extends('front.layout.template')
@section('title')
    Cart
@endsection
@section('bodyclass')category-page @endsection
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- page heading-->
            <h2 class="page-heading no-line">
                <span class="page-heading-title2">Shopping Cart Summary</span>
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
                    @if($cartItems->count()>0)
                        <div class="heading-counter warning">Your shopping cart contains:
                            <span>{{$cartItems->count()}} Item</span>
                        </div>
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                        </thead>
                        <tbody>

                        @forelse($cartItems as $product)
                        <tr>
                            <td class="cart_product">
                                <a href="{{$product->model->slug}}"><img src="{{url('storage/'.$product->model->image)
                                }}" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="{{$product->model->slug}}">{{$product->name}} </a></p>
                                <small class="cart_ref">Item Code : #{{$product->model->product_code}}</small><br>
                            </td>
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="price"><span>${{$product->price}}</span></td>
                            <td class="qty">
                                <form action="{{route('cart.update',$product->rowId)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('put')}}
                                    <input name="qty" class="form-control input-sm" type="number" value="{{$product->qty}}"
                                           min="1"
                                           max="{{$product->model->quantity}}"/>
                                    <input type="hidden" value="{{$product->id}}" name="cartItemId">
                                        <button type="submit" class="update_cart">Update</button>

                                </form>

                            </td>
                            <td class="price">
                                <span>${{$product->price * $product->qty}}</span>
                            </td>
                            <td class="action">
                                <form action="{{route('cart.destroy',$product->rowId)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" style="color: red;"><i class="fa fa-trash-o"></i></button>
                                </form>
                            </td>
                        </tr>

                        @empty
                            <tr>
                                <td>Cart Is Empty!!</td>
                            </tr>

                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">Subtotal</td>
                            <td colspan="2">${{$cartsubtotal}}</td>
                        </tr>
                        @if(session()->has('coupon'))
                        <tr>
                            <td colspan="5">Discount ({{session()->get('coupon')['code']}})</td>
                            <td colspan="1">
                                <form action="{{route('coupon.remove')}}" method="post" class="text-center">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="update_cart remove_coupon"
                                            name="remove" title="Remove Coupon">Remove</button>
                                </form>

                            </td>
                            <td colspan="2"> - ${{session()->get('coupon')['discount']}}</td>
                        </tr>
                        <tr>
                            <td colspan="5">New Subtotal</td>
                            <td colspan="2">${{$newcartsubtotal}}</td>
                        </tr>
                        @endif
                        <tr>
                            <td colspan="5">Tax</td>
                            <td colspan="2">${{$carttax}}</td>
                        </tr>
                        <tr>
                            <td colspan="5"><strong>Total</strong></td>
                            <td colspan="2"><strong>${{$carttotal}}</strong></td>
                        </tr>
                        </tfoot>
                    </table>
                        @if(!session()->has('coupon'))
                        <div class="coupon_form">
                            <form action="{{route('coupon.apply')}}" method="post">
                                {{csrf_field()}}
                                <input type="text" name="code" placeholder="Apply Coupon">
                                <button class="btn btn-success" name="apply" type="submit">Apply</button>
                            </form>
                        </div>
                        @endif
                    <div class="cart_navigation">
                        <a class="prev-btn" href="{{route('shop.products')}}">Continue shopping</a>
                        <a class="next-btn" href="{{route('checkout.index')}}">Proceed to checkout</a>
                    </div>
                        @else
                    <div class="alert alert-info"><p>Cart Is Empty!!</p></div>
                        <div class="cart_navigation">
                            <a class="prev-btn" href="{{route('shop.products')}}">Return To Shop</a>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection