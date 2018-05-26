@extends('front.layout.template')
@section('title')
    Checkout
@endsection
@section('style')
    <style>
        /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
        .StripeElement {
            background-color: white;
            height: 40px;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid transparent;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection

@section('bodyclass')category-page @endsection
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- ./breadcrumb -->
            <!-- page heading-->
            <h2 class="page-heading">
                <span class="page-heading-title2">Checkout</span>
            </h2>
            <!-- ../page heading-->
            <div class="page-content checkout-page">
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <div class="order-detail-content">
                    @if($cartItems->count()>0)
                        <div class="heading-counter warning">Order Details:
                            <span>{{$cartItems->count()}} Item</span>
                        </div>
                        <table class="table table-bordered table-responsive cart_summary">
                            <thead>
                            <tr>
                                <th class="cart_product">Product</th>
                                <th>Description</th>
                                <th>Unit price</th>
                                <th>Qty</th>
                                <th>Total</th>
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
                                    <td class="price"><span>${{$product->price}}</span></td>
                                    <td class="qty">
                                        {{$product->qty}}

                                    </td>
                                    <td class="price">
                                        <span>${{$product->price * $product->qty}}</span>
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
                                <td colspan="4">Subtotal</td>
                                <td colspan="2">${{$cartsubtotal}}</td>
                            </tr>
                            <tr>
                                <td colspan="4">Tax</td>
                                <td colspan="2">${{$carttax}}</td>
                            </tr>
                            <tr>
                                <td colspan="4"><strong>Total</strong></td>
                                <td colspan="2"><strong>${{$carttotal}}</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                    @else
                        <div class="alert alert-info"><p>Cart Is Empty!!</p></div>
                    @endif
                </div>
                <h3 class="checkout-sep">Billing And Shipping Information</h3>
                <div class="box-border">
                    <ul>
                        <li class="row">

                            <div class="col-sm-6">

                                <label for="first_name_1" class="required">First Name</label>
                                <input class="input form-control" type="text" name="" id="first_name_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label for="last_name_1" class="required">Last Name</label>
                                <input class="input form-control" type="text" name="" id="last_name_1">

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="company_name_1">Company Name</label>
                                <input class="input form-control" type="text" name="" id="company_name_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label for="email_address_1" class="required">Email Address</label>
                                <input class="input form-control" type="text" name="" id="email_address_1">

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-xs-12">

                                <label for="address_1" class="required">Address</label>
                                <input class="input form-control" type="text" name="" id="address_1">

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="city_1" class="required">City</label>
                                <input class="input form-control" type="text" name="" id="city_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label class="required">State/Province</label>

                                <div class="custom_select">

                                    <select class="input form-control" name="">

                                        <option value="Alabama">Alabama</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Kansas">Kansas</option>

                                    </select>

                                </div>

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="postal_code_1" class="required">Zip/Postal Code</label>
                                <input class="input form-control" type="text" name="" id="postal_code_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label class="required">Country</label>

                                <div class="custom_select">

                                    <select class="input form-control" name="">

                                        <option value="USA">USA</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Canada">Canada</option>

                                    </select>

                                </div>

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="telephone_1" class="required">Telephone</label>
                                <input class="input form-control" type="text" name="" id="telephone_1">

                            </div><!--/ [col] -->

                            <div class="col-sm-6">

                                <label for="fax_1">Fax</label>
                                <input class="input form-control" type="text" name="" id="fax_1">

                            </div><!--/ [col] -->

                        </li><!--/ .row -->

                    </ul>
                    <button class="button">Continue</button>
                </div>
                <h3 class="checkout-sep">Payment Information</h3>
                <div class="box-border">
                    <ul>
                        <li>
                            <label for="radio_payment_option"><input type="radio" checked name="radio_payment_option"
                                                                     id="radio_cash_on_delivery"
                                                                     onclick="radio_cash_on_delivery()" selected> Cash
                                On Delivery</label>
                        </li>
                        <li>
                            <label for="radio_payment_option"><input type="radio" name="radio_payment_option" id="radio_credit_card" onclick="radio_credit_card()">
                                Credit card</label>
                        </li>
                    </ul>
                    <div id="credit_card">
                        <script src="https://js.stripe.com/v3/"></script>

                        <form action="/charge" method="post" id="payment-form">
                            <div class="form-row">
                                <label for="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-element">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>

                            <button>Submit Payment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('credit_card').style.display ='none';
        function radio_cash_on_delivery(){
            document.getElementById('credit_card').style.display ='none';
        }
        function radio_credit_card(){
            document.getElementById('credit_card').style.display = 'block';
        }

    </script>
    <script>

        // Create a Stripe client.
        var stripe = Stripe('pk_test_6pRNASCoBOKtIshFeQd4XMUh');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
    </script>
    @endsection