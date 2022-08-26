<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class OrderListsController extends Controller
{
  public function __construct(){
    $this->middleware(['auth']);
}
    public function QS(){
        if(auth()->user()->is_admin){
            return redirect()->route('home');
          }
        return view('Order.Order_Lists.Quattro_Stagioni');
    }
    public function Mar(){
        if(auth()->user()->is_admin){
            return redirect()->route('home');
          }
        return view('Order.Order_Lists.Marinara');
    }
    public function Margh(){
        if(auth()->user()->is_admin){
            return redirect()->route('home');
          }
        return view('Order.Order_Lists.Margherita');
    }
    public function Nap(){
        if(auth()->user()->is_admin){
            return redirect()->route('home');
          }
        return view('Order.Order_Lists.Napoletana_or_Napoli');
    }
    public function Pro(){
        if(auth()->user()->is_admin){
            return redirect()->route('home');
          }
        return view('Order.Order_Lists.Prosciutto_Crudo');
    }
    public function Form(){
        if(auth()->user()->is_admin){
            return redirect()->route('home');
          }
        return view('Order.Order_Lists.Quattro_Formaggi');
    } 
}