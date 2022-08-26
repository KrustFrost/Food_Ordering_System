<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }
    public function index(){
        return view('auth.login');
    }
    public function store(CreateLoginRequest $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'is_admin' => 0])){
            return redirect()->route('Order.OrderSystem');
        }else{
            return back()->with('status','Invalid Login');
        }
    }
}