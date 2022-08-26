@extends('layouts.app')
@section('content')
<script src="{{ mix('js/app.js')}}"></script>
<script src="https://js.stripe.com/v3"></script>
<div id="order" class="flex justify-center font-sans">
        <div class="w-6/12 bg-white p-6 rounded-lg shadow-lg ">
        @if(session('Success'))
        <p class="animate-bounce text-green-500">{{session('Success')}}<a href="{{route('Profile')}}" class="underline hover:text-green-200">Check your Profile to view your order</a></p>
        @endif
        <div class="grid grid-cols-2">
            <form action="{{route('Order.OrderSystem')}}" method="post">
            @csrf
            @error('pizza')
            <p class="text-red-300">{{$message}}</p>
            @enderror
            <ul class="flex justify-center">
            <div class="m-3">
            <input type="text" value="11" id="cost" name='Total_Cost' disabled hidden/>
            <img id="modal_button4" style="cursor: zoom-in;"  src="{{asset('img/pizza4.jpg')}}" alt="Quattro Formaggi" width="200" class="rounded-full bg-gray-100 p-5 rounded-md shadow-md origin-center transform hover:rotate-180 hover:scale-110 transition duration-300">
                <li>
                <p class="text-center">Quattro Formaggi</p>    
                <p class="text-center">$11</p>
                <div class="text-center">
                <label for="Quat">Quantity:</label></br>
                <input type="number" id="Quat" name="quantity" class="bg-gray-300 p-3 w-28"><br>
                @error('quantity')
            <p class="text-red-300">{{$message}}</p>
            @enderror
            </div>
            <div class="text-center">
            <input type="text" value="Quattro Formaggi" id="cost" name='pizza' id="pizza" hidden/>
            <input type="submit"  class="m-2 p-2 bg-green-500 text-white rounded-md hover:bg-green-700 cursor-pointer" value="Order">
            </div>
                </li>
                </ul>
            </form>
            <img src="{{asset('img/de_ing4.jpg')}}"  alt="details and Ingredients" class="transform hover:scale-105 transition duration-300">
            </div>
        </div>
    </div>
</div>         
</div>

<div id="modal" >
<div id="default-modal4" aria-hidden="true" class="hidden   fixed h-modal left-1/4 right-0 top-0 bottom-0 ">
    <div class="w-full max-w-2xl px-4 h-full md:h-auto">

        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div  class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                <button id="x4" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 flex flex-col justify-center items-center">
            <img src="{{asset('img/pizza4.jpg')}}" alt="Napoletana or Napoli" width="500" class="">
            </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
    $("#modal_button4").click(function(){
  $("#default-modal4").show();
  $('#order').css( 'filter','blur(10px)')
  $('nav').css( 'filter','blur(10px)')
});
$("#x4").click(function(){
  $("#default-modal4").hide();
  $('#order').css( 'filter','blur(0px)')
  $('nav').css( 'filter','blur(0px)')
});
});
</script>


<script src="{{ mix('js/pay.js')}}"></script>
@endsection