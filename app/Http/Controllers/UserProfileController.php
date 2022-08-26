<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Arr;
use App\Http\Controllers\Auth;
use App\Http\Requests\CreateUpdateProfileController;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Models\Order;
class UserProfileController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        /*
        variable id is use for referring to the auth user's id 
        */
        $id = auth()->user()->id;
        /*
        variable order is use to for getting the database's table, i use 
        'where' method to reference to select user_id's column in orders database table
        to get the variable id to users table
        */
        $orders = DB::table('orders')->where('user_id',$id)->get();
        return view('UserProfile',[
            'orders' => $orders,

        ]);
    }
    public function orderuser(Request $request){
        $id = auth()->user()->id;
        return view('userorders',[
            'orders' => $orders,
        ]);
    }
    public function removepizzaorder(Request $request){
        DB::table('orders')->where('id',array($request->submit))->delete();
        return back();
    }
    public function update(CreateUpdateProfileController $request){
        $id = auth()->user()->id;
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        $order = DB::table('orders')->where('user_id', $id);
        $order->update([
            'ordered_by' => $request->name
        ]);
        
        return back()->with('Saved','Information Saved');
    }
    public function receipt(){
        if(auth()->user()->is_admin == 1){
            return redirect()->route('home');
        }else{
            $id = auth()->user()->id;   
            $orders = DB::table('orders')->where('user_id', $id)->get();
            $cashh = session('cashh');
            $card_value = session('card_value');
            $d = "";
            if(isset($cashh)){
                $d = DB::table('orders')->where('user_id',$id)->delete();
            }
            if(isset($card_value)){
                $d = DB::table('orders')->where('user_id',$id)->delete();
            }
            return view('receipt',[
                'orders' => $orders,
                'delete' => $d,
            ]);
        }
    }
    public function putcashview(){
        $id = auth()->user()->id;
        $orders = DB::table('orders')->where('user_id', $id)->get();
        return view('putcash',[
            'orders' => $orders,
        ]);
    }
    public function putcash(Request $request){
        if(auth()->user()->is_admin == 1){
            return redirect()->route('home');
        }else{
            $id = auth()->user()->id;
            $putcash = $request->putcash;
            $orders = DB::table('orders')->where('user_id', $id)->get();
                if($request->putcash < $orders->sum('total_cost')){
                    return back()->with("putcash", "Not Enough Money to Buy this Products");
                }else{
                    return redirect()->route('receipt')->with("cashh",$request->putcash);
                }
        }
    }
    public function debitcard(){
        return view('Debitcard');
    }
    public function debitcardpost(Request $request){
            $this->validate($request,[
                "card_number" => 'required|regex:/[0-9]{4}-[0-9]{4}-[0-9]{4}/',
                "expiry_date" => 'required|date',
                "cvv" => 'required',
            ]);
            $datenow = now(); 
            if($request->expiry_date <= $datenow){
                return back()->with('expired','Your Card is Expired');
            }else{
                $id = auth()->user()->id;
                $user = User::findOrFail($id);
                $r = DB::table('orders')->where('ordered_by',auth()->user()->name)->sum('total_cost');
                $b = DB::table('users')->where('id', $id)->get();
                if($b[0]->credit_card_value <= $r){
                    return redirect()->route('debitcard')->with('notenough','Your Credit Card Money is not enough');
                }
                $deduct =  auth()->user()->credit_card_value  - $r;
                DB::table('users')->where('name',auth()->user()->name)->update(['credit_card_value' => $deduct]);
                return redirect()->route('receipt')->with('card_value',"");

            }
    }
}