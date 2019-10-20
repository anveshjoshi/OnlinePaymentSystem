@foreach($field as $payer) @endforeach
<pre>Hi, {{$payer['payer_name']}}<br>
You have a new payment inquiry from {{$payer['sender_name']}}.
<p>Your order id is {{$payer['order_id']}}<br>
    Your TIN is {{$payer['tin']}} </p>
<p>Click the following link for payment</p>
    <a href="{{ url('/check_invoice') }}">Check Invoice</a></pre>