<?php

namespace App\Http\Controllers\Queue;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;
class Queuelogin extends Controller
{
    public function __construct(){
        $this->middleware('guest');
    }
    public function index(){
        return view('queue.queuelogin');
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'is_admin' => 1],$request->remember)) {
            return redirect()->route('admin');
        }else{
            return back()->with('invalid_admin_access','Invalid Login');
        }
    }
}
