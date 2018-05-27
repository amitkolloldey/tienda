@extends('front.layout.template')
@section('title')
    Cart
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
                        <th class="cart_product">Product</th>
                        <th>Description</th>
                        <th>Unit price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th class="action">Order Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href="#"><img src="assets/data/product-100x122.jpg" alt="Product"></a>
                        </td>
                        <td class="cart_description">
                            <p class="product-name"><a href="#">Frederique Constant </a></p>
                            <small class="cart_ref">SKU : #123654999</small><br>
                            <small><a href="#">Color : Beige</a></small><br>
                            <small><a href="#">Size : S</a></small>
                        </td>
                        <td class="price"><span>61,19 €</span></td>
                        <td class="qty">
                            <input class="form-control input-sm" type="text" value="1">
                            <a href="#"><i class="fa fa-caret-up"></i></a>
                            <a href="#"><i class="fa fa-caret-down"></i></a>
                        </td>
                        <td class="price">
                            <span>61,19 €</span>
                        </td>
                        <td class="action">
                            <p class="btn btn-success">Completed</p>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="2" rowspan="2"></td>
                        <td colspan="3">Total products (tax incl.)</td>
                        <td colspan="2">122.38 €</td>
                    </tr>
                    <tr>
                        <td colspan="3"><strong>Total</strong></td>
                        <td colspan="2"><strong>122.38 €</strong></td>
                    </tr>
                    </tfoot>
                </table>
                <div class="cart_navigation">
                    <a class="prev-btn" href="#">Continue shopping</a>
                    <a class="next-btn" href="#">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection