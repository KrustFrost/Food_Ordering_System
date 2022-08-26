<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
class OrderSystem extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        if(auth()->user()->is_admin){
            return redirect()->route('home');
          }
        return view('Order.OrderSystem');
    }
    public function store(Request $request, User $user){

        $this->validate($request, [
            'pizza'=>'required',
            'Total_Cost'=>'required',
            'quantity' => 'required|min:1'
        ]);
        if($request->quantity < 1){
            return back();
        }   
        $totalcost = $request->Total_Cost * $request->quantity;
        Order::create([
            'Pizza' => $request->pizza,
            'user_id' => $request->user()->id,
            'total_cost' => $totalcost,
            'ordered_by' => auth()->user()->name,
            'quantity_pizza' => $request->quantity
        ]);
        return back()->with('Success','Your order is on the way!, ');
    }
}