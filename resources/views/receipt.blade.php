<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{mix('css/receipt.css')}}" rel="stylesheet">
    <title>Receipt Order</title>
</head>
<body>

<div class="receipt">
  <header class="receiptheader">
    <p class="receipttitle">
      Star Dough
    </p>
    <div class="receiptaddress">298 J.Teodoro, Grace Park West,</div>
    <div class="receiptaddress">Caloocan, 1406 Metro Manila</div>
    <p class="receiptdate">
    <p hidden>{{ date_default_timezone_set('Asia/Hong_Kong')}}</p>
        {{ date('m/d/Y h:i:s a', time()) }}
    </p>
  </header>
  @foreach($orders as $order)
  <dl class="receiptlist">
    <div class="receiptlist-row">
      <dt class="receiptitem">{{ $order->Pizza }}</dt>
      <dd class="receiptcost">₱{{ $order->total_cost }}</dd>
    </div>
    Quantity: {{ $order->quantity_pizza }}
    @endforeach
    <div class="receiptlist-row receiptlist-row--total">
        <dt class="receiptitem">Total Cost</dt>
        <dd class="receiptcost">${{$orders->sum('total_cost')}}</div>
  @if(session('cashh'))
    <div class="receiptlist-row">
      <dt class="receiptitem">Cash</dt>

      <dd class="receiptcost">${{session('cashh')}}</dd>

    </div>
    <div class="receiptlist-row">
        <dt class="receiptitem">Change</dt>
        <dd class="receiptcost">
            @php
            $change = session('cashh') - $orders->sum('total_cost');
            echo "$".$change;
            @endphp
        </dd>
    </div>
    @endif
    <button onclick="window.print()">Print</button>
        <p class="receiptpromote">Follow us on Facebook to get more offers</p>
    </div>
  </dl>
</div>
</body>
</html>