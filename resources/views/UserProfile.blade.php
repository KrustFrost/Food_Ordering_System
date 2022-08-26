@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{mix('css/userorders.css')}}">
    <div class="flex justify-center ">
        <div class="w-6/12 bg-white p-6 rounded-lg shadow-lg">

        @if(session('cannot_put_cash'))
        <p class="text-red-500">{{session('cannot_put_cash')}}</p>
        @endif
        <p class="text-3xl">Personal Information</p>
        <form action="{{route('Profile')}}" method="post">
        @csrf <p>Your Name:</p>
        <input type="text" name="name" value="{{auth()->user()->name}}" class="p-2 w-4/12 bg-gray-100 rounded-md"/>
        @error('name')
        <p class="text-red-300">{{$message}}</p>
        @enderror<br>
        <p>Email:</p>
        <input type="email" name="email" value="{{auth()->user()->email}}"class="p-2 w-4/12 bg-gray-100 rounded-md"/>
        @error('email')
        <p class="text-red-300">{{$message}}</p>
        @enderror<br>
        <p>Phone Number:</p>
        <input type="tel" name="phone" value="{{auth()->user()->phone}}"class="p-2 w-4/12 bg-gray-100 rounded-md"/>
        @error('phone')
        <p class="text-red-300">{{$message}}</p>
        @enderror<br>
        @if(session('Saved'))
        <p class="text-green-500">{{session('Saved')}}</p>
        @endif
        <button type="submit" name="submit" class="p-2 bg-black rounded-md text-white m-3">Save</button>
        </form>
        @if(auth()->user()->is_admin == 1)
        @else
    @auth
        @if(auth()->user()->is_admin)
        <p>Orders of Customers:</p>
        @foreach($orders as $order)<br>
        <span class="bg-blue-400 p-3 rounded-lg shadow-lg font-serif">{{$order->Pizza}}</span>
        <p><br>Total Cost: ${{$order->total_cost}}</p>
        <p><br>Quantity: {{$order->quantity_pizza}}</p>     
        <br>
        @endforeach
        {{$orders->links()}}
        @else
        @if(auth()->user()->is_admin == 0 )
<div class="flex justify-center bg-transparent">
        <form action="{{route('deleteorder')}}" method="post" class="" >
        @csrf
        @method('delete')
        <div class="board" id="pizz">
    <div class="right" >
        <div class="checkout mt-12"  style="display: block; width: 300px; margin-left: auto; margin-right: auto;">
            <h3>Your Order:</h3>
            <div class="order_pizza overflow-auto h-64">
                 <div class="pizza" style="width: 200px">
                @foreach($orders as $order)
                    <h5>{{$order->Pizza}}</h5>
                    <h5>${{$order->total_cost}} </h5>
                    <h5>Quantity: {{$order->quantity_pizza}} </h5>
                    <button type="submit" name="submit" value="{{$order->id}}" class="bg-red-300 p-2  bg-red-300 p-2 rounded-md transform hover:scale-105 hover:bg-red-600 transition duration-500">Remove</button>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
        </form>  
        </div>
        <form action="{{route('removepizzaorder')}}" class="text-center" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Clear All" class="cursor-pointer bg-red-300 p-2 shadow-lg rounded-md transform hover:scale-105 hover:bg-red-600 transition duration-500">
        </form>
        <div class="text-center">
        <p class="">Payment Method:</p> </br>
        <button class="transform hover:scale-105 transition duration-500"><a href="{{route('putcash')}}" class="p-2 bg-black rounded-md text-white m-1">Cash on Delivery</a></button> 
        <button class="transform hover:scale-105 transition duration-500"><a href="{{route('debitcard')}}" class="p-2 bg-black rounded-md text-white m-1 ">Debit Card</a></button> 
            </div>  
    </div>
</div>  
@else
@endif
</form>
       
        @endif
    @endauth

    @endif
        </div>
</div>
@endsection