@extends('front.layout.template')
@section('title')
    Orders
@endsection
@section('bodyclass')category-page @endsection
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading no-line">
                <span class="page-heading-title2">Your Orders</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content page-order">
                <div class="order-detail-content">
                    @if (Session::has('order_message'))
                        <div class="alert alert-info">{{ Session::get('order_message') }}</div>
                    @endif
                    <table class="table table-bordered table-responsive cart_summary">
                        <thead>
                        <tr>
                            <th class="cart_product">Order Id</th>
                            <th>Products</th>
                            <th>Payment Method</th>
                            <th>Discount</th>
                            <th>Subtotal</th>
                            <th>Tax</th>
                            <th>Total</th>
                            <th>Note</th>
                            <th>Payment Status</th>
                            <th>Order Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($orders as $order)
                        <tr>
                            <td class="price">
                                <span>{{$order->id}}</span>
                            </td>
                            <td class="price order_product">
                                <ul>
                                    @foreach($order->products as $product)
                                    <li><span><a href="{{$product->slug}}"><img src="{{url('storage')
                                    .'/'.$product->image}}" alt="{{$product->name}}"></a></span><span><a
                                                    href="{{$product->slug}}">{{$product->name}}</a></span></li>
                                    @endforeach
                                </ul>

                            </td>
                            <td class="price">
                                <span>{{ucfirst(str_replace('_',' ',$order->payment_option))}}</span>
                            </td>
                            <td class="price">
                                <span>${{$order->billing_discount}}</span>
                            </td>
                            <td class="price">
                                <span>${{$order->billing_subtotal}}</span>
                            </td>
                            <td class="price">
                                <span>${{$order->billing_tax}}</span>
                            </td>
                            <td class="price">
                                <span>${{$order->billing_total}}</span>
                            </td>
                            <td class="price">
                                <span>{{$order->error ? $order->error : 'None'}}</span>
                            </td>
                            <td class="price">
                                <span>{{ucfirst(str_replace('_',' ',$order->payment_status))}}</span>
                            </td>
                            <td class="price">
                                <span>{{ucfirst(str_replace('_',' ',$order->order_status))}}</span>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                You have No Order
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection