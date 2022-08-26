@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<div id="order">
<script src="{{ mix('js/app.js')}}"></script>
<script src="https://js.stripe.com/v3"></script>
    <div class="flex justify-center ">
        <div class="w-6/12 bg-white p-6 rounded-lg shadow-lg">
            <ul class="grid grid-cols-1 md:grid-cols-3">
                <li>Quattro Stagioni<br>
                <button type="button" class="bg-blue-500 p-2 rounded-md text-white"><a href="{{route('Order.Quattro_Stagioni')}}">View</a></button>
                <img id="modal_button1" src="{{asset('img/pizza1.jpg')}}" alt="Quattro Stagioni" width="200" class=" rounded-full bg-gray-100 p-5 rounded-md shadow-md origin-center transform hover:rotate-180 hover:scale-110 transition duration-300" style="cursor: zoom-in;">
                </li>

                <li>Marinara<br>
                <button type="button" class="bg-blue-500 p-2 rounded-md text-white "><a href="{{route('Order.Marinara')}}">View</a></button>
                <img id="modal_button2" src="{{asset('img/pizza2.jpg')}}" alt="Marinara" width="200" class="cursor-pointer rounded-full bg-gray-100 p-5 rounded-md shadow-md origin-center transform hover:rotate-180 hover:scale-110 transition duration-300" style="cursor: zoom-in;">
                </li>

                <li>Margherita<br>
                <button type="button" class="bg-blue-500 p-2 rounded-md text-white"><a href="{{route('Order.Margherita')}}">View</a></button>
                <img id="modal_button3" src="{{asset('img/pizza3.jpg')}}" alt="Margherita" width="200" class="cursor-pointer rounded-full bg-gray-100 p-5 rounded-md shadow-md origin-center transform hover:rotate-180 hover:scale-110 transition duration-300" style="cursor: zoom-in;">
                </li>

                <li>Quattro <br>Formaggi<br>
                <button type="button" class="bg-blue-500 p-2 rounded-md text-white"><a href="{{route('Order.Quattro_Formaggi')}}">View</a></button>
                <img id="modal_button4" src="{{asset('img/pizza4.jpg')}}" alt="Quattro Formanggi" width="200" class="cursor-pointer rounded-full bg-gray-100 p-5 rounded-md shadow-md origin-center transform hover:rotate-180 hover:scale-110 transition duration-300" style="cursor: zoom-in;">
                </li>

                <li>Prosciutto <br>Crudo<br>
                <button type="button" class="bg-blue-500 p-2 rounded-md text-white"><a href="{{route('Order.Prosciutto_Crudo')}}">View</a></button>
                <img id="modal_button5"  src="{{asset('img/pizza5.jpg')}}" alt="Prosciutto Crudo" width="200" class="cursor-pointer rounded-full bg-gray-100 p-5 rounded-md shadow-md origin-center transform hover:rotate-180 hover:scale-110 transition duration-300" style="cursor: zoom-in;">
                </li>

               <li>Napoletana or Napoli<br>
               <button type="button" class="bg-blue-500 p-2 rounded-md text-white"><a href="{{route('Order.Napoletana_or_Napoli')}}">View</a></button>
               <img id="modal_button6" src="{{asset('img/pizza6.jpg')}}" class="cursor-pointer rounded-full bg-gray-100 p-5 rounded-md shadow-md origin-center transform hover:rotate-180 hover:scale-110 transition duration-300" style="cursor: zoom-in;">    

                </li>
                </ul>
                </form>
        </div>
    </div>
</div>
</div>
<!-- Main modal -->
<div id="modal" >
<div id="default-modal6" aria-hidden="true" class="hidden   fixed h-modal left-1/4 right-0 top-0 bottom-0 ">
    <div class="w-full max-w-2xl px-4 h-full md:h-auto">
        <!-- Modal content -->
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div  class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                <button id="x6" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 flex flex-col justify-center items-center">
            <img src="{{asset('img/pizza6.jpg')}}" alt="Napoletana or Napoli" width="500" class="">
            </div>

</div>
    </div>
</div>
</div>


<div id="modal" >
<div id="default-modal5" aria-hidden="true" class="hidden   fixed h-modal left-1/4 right-0 top-0 bottom-0 ">
    <div class="w-full max-w-2xl px-4 h-full md:h-auto">

        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div  class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                <button id="x5" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 flex flex-col justify-center items-center">
            <img src="{{asset('img/pizza5.jpg')}}" alt="Napoletana or Napoli" width="500" class="">
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



<div id="modal" >
<div id="default-modal3" aria-hidden="true" class="hidden   fixed h-modal left-1/4 right-0 top-0 bottom-0 ">
    <div class="w-full max-w-2xl px-4 h-full md:h-auto">

        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div  class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                <button id="x3" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 flex flex-col justify-center items-center">
            <img src="{{asset('img/pizza3.jpg')}}" alt="Napoletana or Napoli" width="500" class="">
            </div>

            </div>
        </div>
    </div>
</div>



<div id="modal" >
<div id="default-modal2" aria-hidden="true" class="hidden   fixed h-modal left-1/4 right-0 top-0 bottom-0 ">
    <div class="w-full max-w-2xl px-4 h-full md:h-auto">

        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div  class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                <button id="x2" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 flex flex-col justify-center items-center">
            <img src="{{asset('img/pizza2.jpg')}}" alt="Napoletana or Napoli" width="500" class="">
            </div>

            </div>
        </div>
    </div>
</div>



<div id="modal" >
<div id="default-modal1" aria-hidden="true" class="hidden   fixed h-modal left-1/4 right-0 top-0 bottom-0 ">
    <div class="w-full max-w-2xl px-4 h-full md:h-auto">

        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div  class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-600">
                <button id="x1" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="default-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 flex flex-col justify-center items-center">
            <img src="{{asset('img/pizza1.jpg')}}" alt="Napoletana or Napoli" width="500" class="">
            </div>

            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/pay.js')}}"></script>
<script>
$(document).ready(function(){
// shows the #modal element3
$("#preview6").hide();

$("#modal_button6").click(function(){
  $("#default-modal6").show();
  $('#order').css( 'filter','blur(10px)')
  $('nav').css( 'filter','blur(10px)')
});
$("#x6").click(function(){
  $("#default-modal6").hide();
  $('#order').css( 'filter','blur(0px)')
  $('nav').css( 'filter','blur(0px)')
});



$("#modal_button5").click(function(){
  $("#default-modal5").show();
  $('#order').css( 'filter','blur(10px)')
  $('nav').css( 'filter','blur(10px)')
});
$("#x5").click(function(){
  $("#default-modal5").hide();
  $('#order').css( 'filter','blur(0px)')
  $('nav').css( 'filter','blur(0px)')
});


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


$("#modal_button3").click(function(){
  $("#default-modal3").show();
  $('#order').css( 'filter','blur(10px)')
  $('nav').css( 'filter','blur(10px)')
});
$("#x3").click(function(){
  $("#default-modal3").hide();
  $('#order').css( 'filter','blur(0px)')
  $('nav').css( 'filter','blur(0px)')
});


$("#modal_button2").click(function(){
  $("#default-modal2").show();
  $('#order').css( 'filter','blur(10px)')
  $('nav').css( 'filter','blur(10px)')
});
$("#x2").click(function(){
  $("#default-modal2").hide();
  $('#order').css( 'filter','blur(0px)')
  $('nav').css( 'filter','blur(0px)')
});


$("#modal_button1").click(function(){
  $("#default-modal1").show();
  $('#order').css( 'filter','blur(10px)')
  $('nav').css( 'filter','blur(10px)')
});
$("#x1").click(function(){
  $("#default-modal1").hide();
  $('#order').css( 'filter','blur(0px)')
  $('nav').css( 'filter','blur(0px)')
});
});
</script>
@endsection