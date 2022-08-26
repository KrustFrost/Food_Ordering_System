@extends('layouts.app')

@section('content')
<div class="flex justify-center">
        <div class="break-words  bg-white p-6 rounded-lg shadow-lg flex justify-center p-10">
        <form method="post" autocomplete="off" action="{{route('debitcardpost')}}" class="bg-blue-100 p-10 border-red-300 border-4">
            @csrf
            <div class="bg-gray-100 p-5 rounded-md shadow-lg transition duration-500 ease-in-out hover: transform hover:scale-110">
            <p class="font-bold text-sm mb-2 ml-1">Payment Details:</p> 
            <p class="font-bold text-sm mb-2 ml-1">Card Number:</p>
            <input placeholder="3333-3333-3333" type="text" name="card_number" class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500"></br>
            <p class="font-bold text-sm mb-2 ml-1">Expiry Date:</p>
            <input type="date" name="expiry_date" class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500">
            </br>
            </br>
            <p class="font-bold text-sm mb-2 ml-1">CVC:</p>
            <input type="text" name="Expiration" value="{{date('m/d/Y')}}" hidden>
            <input type="text" placeholder="123" name="cvv" class="bg w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 hover:" /></br></br>
        <input type="submit" value="Pay" class="bg-indigo-500 p-2 text-white cursor-pointer hover:bg-indigo-600">
        <div class="text-center">
        @error('card_number')</br>
            <p class="text-red-300">{{$message}}</p> 
            @enderror
            @error('expiry_date')</br>
            {{$message}}
            @enderror
            @error('cvv')</br>
            {{$message}}
            @enderror
            @if(session('expired'))
            {{session('expired')}}
            @endif
            @if(session('notenough'))
            {{session('notenough')}}
            @endif
            </div>
        </form>
        </div>
        </div>
    </div>
@endsection