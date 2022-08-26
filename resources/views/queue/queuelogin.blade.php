@extends('layouts.app')

@section('content')
<script src="{{ mix('js/app.js')}}"></script>
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg shadow-lg">
        <div class="flex justify-center">
        <form action="{{route('queuelogin')}}"method="post" class="flex flex-col">
                @csrf
                    <input type="email" placeholder="Email" name="email" class="p-3"/>
                    @error('email')
                        <p class="text-red-300">{{$message}}</p>
                    @enderror
                    <input type="password" placeholder="Password" name="password" class="p-3"/>
                    @error('password')
                        <p class="text-red-300">{{$message}}</p>
                    @enderror
                    @if(session('status'))
                    <p class="text-red-500">{{session('status')}}</p>
                    @endif
                    @if(session('error'))
                    <p class="text-red-500">{{session('error')}}</p>
                    @endif
                    @if(session('invalid_admin_access'))
                    <p class="text-red-500">{{session('invalid_admin_access')}}</p>
                    @endif
            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2"/>
                    <label for="remember">Remember me</label>
                </div>
            </div>
                    <button type="submit" name="submit" class="bg-blue-300 p-3 w-6/12 flex justify-center">Login</button>
                </form>
        </div>
    </div>
</div>   
@endsection