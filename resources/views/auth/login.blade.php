@extends('layouts.app')

@section('content')
<script src="{{ asset('js/app.js')}}"></script>
<form action="{{route('login')}}" method="post" class="flex justify-center">
    @csrf
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col w-3/12">
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
        Email
      </label>
      <input type="email" placeholder="Email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"/></br>
      @error('email')
      <p class="text-red-400">{{$message}}</p>
      @enderror
    </div>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input type="password" placeholder="Password" name="password" class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"/>
      @error('password')
      <p class="text-red-400">{{$message}}</p>
      @enderror
      @if(session('status'))
    <p class="text-red-400">{{session('status')}}</p>
    @endif
    </div>
    <div class="flex items-center justify-between">
      <input class="transition duration-300 ease-in-out bg-green-300 hover:bg-green-600 py-2 px-4 rounded-md cursor-pointer " type="submit" >
      </a>
    </div>
</div>
</form>
@endsection