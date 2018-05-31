@component('mail::message')
Hello {{$order_person}},
Thank you for your order. We will review and confirm your order to be shipped.
<br>
Here is your order details.
<ul style="border: 1px solid #222;">
    <li>
        <strong>Ordered Products:</strong>
        <ul >
            @foreach($order->products as $product)
                <li>{{$product->name}}</li>
                <li>{{$product->quantity}}</li>
            @endforeach
        </ul>
    </li>
    <li><strong>Order ID:</strong> {{$order_id}}</li>
    <li><strong>Order Total Price:</strong> ${{$order_price}}</li>
    <li><strong>Order Status:</strong> {{$order_status}}</li>
    <li><strong>Order Payment:</strong> {{$payment_status}}</li>
</ul>

@component('mail::button', ['url' => route('order.index')])
See Your Order Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
