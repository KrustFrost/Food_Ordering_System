@extends('layouts.app')

@section('content')
<div class="flex justify-center ">
        <div class="w-6/12 bg-white p-6 rounded-lg shadow-lg">
    <form action="{{route('putcashpost')}}" method="post">
    @csrf
        Put Cash:
        <input type="text" name="putcash" Placeholder="$" size="10">
        <button type="submit" name="submit" class="p-2 bg-black rounded-md text-white m-3">Get Receipt</button>
        @error('putcash')
        <p class="text-red-300">{{$message}}</p>
        @enderror</br>
        <p>Total Cost: {{$orders->sum('total_cost')}}</p>
    </form>       
     @if(session('putcash'))
        <p class="text-red-500">{{session('putcash')}}</p>
        @endif
    </div>
</div>
@endsection