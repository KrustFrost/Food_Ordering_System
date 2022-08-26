<?php

namespace App\Http\Controllers\Queue;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Queue\Auth;
use DB;
use App\Models\User;
use App\Models\Order;
use App\Http\App\Http\Middleware\AdminMiddleware;
class QueueController extends Controller
{
    public function index(Order $order){
        $queues = DB::table('orders')->get();
        $queues = DB::table('orders')->paginate(5);
        response()->json([
            'queues' => $queues->toArray(),
        ]);
        return view('queue.queue',[
            'queue' => $queues, 
        ]);
    }
    public function deleteorder(Request $request){
        DB::table('orders')->where('id',$request->submit)->delete();
        return back();
    }
    public function removepizzaorder(Request $request){
        $id = auth()->user()->id;
        DB::table('orders')->where('user_id',$id)->delete();
        return back();
    }
}