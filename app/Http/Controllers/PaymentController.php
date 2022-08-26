<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function paymentProcess(Request $request){
      \Stripe\Stripe::setApiKey('sk_test_51IPlxkKVhRwOGKxpNc9C59kn9m9wfneICjUTB46DjcEIDrD4eaC9MGt0Zu7t0fAl9YZytKrixX74ZG5MJ1waN7JD00JdEk5Qx2');
      $customer = \Stripe\Customer::create([
        'email' => 'prdangeles19@gmail.com',
        'source' => $_POST['stripeToken'],
      ]);
      $totalcost = array_sum($request->Total_Cost);
      $charge = \Stripe\Charge::create([
        'customer' => $customer->id,
        'description' => 'Custom t-shirt',
        'amount' => $totalcost,
        'currency' => 'usd',
      ]);
      redirect()->route('Order.OrderSystem');
    }
}
