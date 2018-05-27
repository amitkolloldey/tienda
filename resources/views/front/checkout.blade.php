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
                @if($cartItems->count()>0)
                    <div class="order-detail-content">

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
                                        <p class="product-name"><a
                                                    href="{{$product->model->slug}}">{{$product->name}} </a></p>
                                        <small class="cart_ref">Item Code : #{{$product->model->product_code}}</small>
                                        <br>
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

                    </div>
                    <div class="box-border">
                        @if(count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert-danger alert">{{ $error }}</div>
                            @endforeach
                        @endif
                        <form action="{{route('checkout.store')}}" id="payment-form" method="POST">
                            {{csrf_field()}}
                            <h3 class="checkout-sep">Billing And Shipping Information</h3>
                            <ul>
                                <li class="row">

                                    <div class="col-sm-6">

                                        <label for="first_name" class="required">First Name</label>
                                        <input class="input form-control" type="text" name="first_name"
                                               id="first_name">

                                    </div><!--/ [col] -->

                                    <div class="col-sm-6">

                                        <label for="last_name" class="required">Last Name</label>
                                        <input class="input form-control" type="text" name="last_name" id="last_name">

                                    </div><!--/ [col] -->

                                </li><!--/ .row -->

                                <li class="row">


                                    <div class="col-sm-12">

                                        <label for="email_address" class="required">Email Address</label>
                                        <input class="input form-control" type="email" name="email_address"
                                               id="email_address">

                                    </div><!--/ [col] -->

                                </li><!--/ .row -->


                                <li class="row">

                                    <div class="col-sm-6">

                                        <label for="city" class="required">City</label>
                                        <input class="input form-control" type="text" name="city" id="city">

                                    </div><!--/ [col] -->

                                    <div class="col-sm-6">

                                        <label class="required">Country</label>

                                        <div class="custom_select">

                                            <select name="country" class="countries order-alpha input form-control"
                                                    id="countryId">
                                                <option value="">Select Country</option>
                                            </select>

                                        </div>

                                    </div><!--/ [col] -->

                                </li><!--/ .row -->

                                <li class="row">

                                    <div class="col-sm-6">

                                        <label for="post_code" class="required">Zip/Postal Code</label>
                                        <input class="input form-control" type="text" name="post_code" id="post_code">

                                    </div><!--/ [col] -->

                                    <div class="col-sm-6">

                                        <label class="required">State</label>

                                        <div class="custom_select">
                                            <select name="state" class="states order-alpha input form-control"
                                                    id="stateId">
                                                <option value="">Select State</option>
                                            </select>

                                        </div>

                                    </div><!--/ [col] -->

                                </li><!--/ .row -->
                                <li class="row">

                                    <div class="col-xs-12">

                                        <label for="address" class="required">Address</label>
                                        <textarea class="input form-control" type="text" name="address" id="address"
                                        ></textarea>

                                    </div><!--/ [col] -->

                                </li><!--/ .row -->
                                <li class="row">

                                    <div class="col-sm-6">

                                        <label for="phone" class="required">Telephone</label>
                                        <input class="input form-control" type="tel" name="phone" id="phone">

                                    </div><!--/ [col] -->

                                    <div class="col-sm-6">

                                        <label for="alt_phone">Alternative Phone</label>
                                        <input class="input form-control" type="tel" name="alt_phone" id="alt_phone">

                                    </div><!--/ [col] -->

                                </li><!--/ .row -->

                            </ul>
                            <br>
                            <h3 class="checkout-sep">Payment Information</h3>
                            <ul>
                                <li>
                                    <label for="payment_option"><input type="radio" checked name="payment_option"
                                                                       id="cash_on_delivery"
                                                                       onclick="radio_cash_on_delivery()" selected
                                                                       value="cod">
                                        Cash
                                        On Delivery</label>
                                </li>
                                <li>
                                    <label for="payment_option"><input type="radio" name="payment_option"
                                                                       id="credit_card_option"
                                                                       onclick="radio_credit_card
                                                                       ()" value="stripe"> Credit card</label>
                                </li>
                            </ul>

                            <div id="credit_card">

                                <div class="form-row">
                                    <label for="name_on_card">
                                        Cardholder Name
                                    </label>
                                    <div id="name_on_card">
                                        <input type="text" class="input form-control" name="name_on_card">
                                    </div>

                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
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


                            </div>
                            <hr>
                            <div class="cart_navigation">
                                {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
                                <button class="next-btn" type="submit" id="complete-order">Complete Order</button>
                            </div>
                        </form>
                    </div>
                @else
                    <div class="alert alert-info"><p>Cart Is Empty!!</p></div>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! NoCaptcha::renderJs() !!}
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        document.getElementById('credit_card').style.display = 'none';

        function radio_cash_on_delivery() {
            document.getElementById('credit_card').style.display = 'none';
        }

        function radio_credit_card() {
            document.getElementById('credit_card').style.display = 'block';

            // Create a Stripe client.
            var stripe = Stripe('pk_test_En0qw8rM8y1PNnTSI3CXU41I');

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
            var card = elements.create('card', {style: style, hidePostalCode: true});

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function (event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                // Disable the submit button to prevent repeated clicks
                document.getElementById('complete-order').disabled = true;
                var options = {
                    name: document.getElementById('name_on_card').value,
                    address_line1: document.getElementById('address').value,
                    address_city: document.getElementById('city').value,
                    address_state: document.getElementById('stateId').value,
                    address_zip: document.getElementById('post_code').value
                };
                stripe.createToken(card, options).then(function (result) {
                    if (result.error) {
                        // Inform the user if there was an error
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                        // Enable the submit button
                        document.getElementById('complete-order').disabled = false;
                    } else {
                        // Send the token to your server
                        stripeTokenHandler(result.token);
                    }
                });

                function stripeTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', token.id);
                    form.appendChild(hiddenInput);
                    // Submit the form
                    form.submit();
                }
            });
        }

    </script>

    <script src="//geodata.solutions/includes/countrystate.js"></script>
@endsection