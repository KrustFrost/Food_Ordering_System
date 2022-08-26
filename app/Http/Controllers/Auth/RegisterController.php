<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\Auth;
class RegisterController extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }
    public function index(){
        return view('auth.register');
        
    }
    public function store(CreateRegisterRequest $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => ($request->phone),
            'credit_card_value' => 0,
            'is_admin' => 0,
        ]);
            return redirect()->route('Order.OrderSystem');
    }
}
