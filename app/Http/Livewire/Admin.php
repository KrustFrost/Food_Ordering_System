<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\User;
use \Illuminate\Http\Request;
class Admin extends Component
{
    public function render()
    {   
        $admin = Order::orderBy('id','DESC')->get();
        return view('livewire.admin',[
            'admin' => $admin
        ]);
    }
    public function delete($id){
         dd(Order::where('id',$id)->first()->delete());
    }
}
