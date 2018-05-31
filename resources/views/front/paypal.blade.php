<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Paypal</title>
</head>

<body onload="paypal_submit()">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal_form">
    <input type="hidden" name="upload" value="1">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="{{config('app.paypal_email')}}">
    <input type="hidden" name="item_name" value="{{paypalcartcontent()}}">
    <input type="hidden" name="item_number" value="{{cartqty()}}">
    <input type="hidden" name="amount" value="{{carttotal()}}">
    <input type='hidden' name='cancel_return' value='{{route('order.index')}}'>
    <input type='hidden' name='return' value='{{route('order.index')}}'>
</form>
<script>
    function paypal_submit() {
        document.getElementById('paypal_form').submit();
    }
</script>
</body>

</html>