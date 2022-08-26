@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/splide.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/splide-core.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/css/themes/splide-skyblue.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="flex justify-center">
@if(session('adminprevent'))
                    <p class="text-red-500">{{session('adminprevent')}}</p>
            @endif
    <div class="w-8/12 bg-white p-6 rounded-lg shadow-lg">
<div id="image-slider" class="splide">
  <div class="splide__track">
		<ul class="splide__list">
			<li class="splide__slide">
            <div id="star_dough" >
            <div class="flex justify-center">
            <img src="{{asset('img/Logo.jpg')}}" class="transform hover:scale-105 hover:shadow-lg transition duration:500"  alt="Pizza by the Sea"/>
            </div>
            </div>
            <div class="p-5 flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
			</li>
			<li class="splide__slide bg-gray-300">
            <div class="flex justify-center">
                <img id="delivery_service" width="400" class="transform hover:scale-105 transition duration:500" src="{{asset('img/deliveryguy.png')}}" alt="Delivery Guy" width="300"/>
                </div>
                <div class="flex justify-center">
                <p class="text-xl font-extrabold">
                Our Delivery Service is fast and <br>
                efficient so no worries on going on us <br>
                to get our pizza!
                </p> 
                </div>
			</li>
			<li class="splide__slide bg-gray-300 shadow-lg flex justify-center">
            <div class="rounded-lg p-3 flex flex-col">
            <img id="pizza_quality" width="450" class="transform hover:scale-105 transition duration:500"  src="{{asset('img/Pizzalogo.png')}}" alt="Delivery Guy" width="350"/>
            <div class="flex justify-center">
            <p class="text-lg font-extrabold">
            Your pizzas are always expected to be always <br>
            hot whenever we delivered it to you because we <br>
            want the customer 
            </p>
            </div>
            <div class="flex justify-center">
            <p class="bg-yellow-300 h-10 p-2 w-full font-extrabold font-serif text-xl border-4 rounded-lg border-red-300">To taste the experience of our great pizza!</p>
            </div>
            </div>
		</ul>
  </div>
</div>
</div>
</div>
<div class="flex justify-center">
<footer class="grid grid-cols-1 md:grid-cols-2  bg-black w-9/12 rounded-t-md text-white">
        <div class="grid grid-cols-1  p-5 flex justify-betwwen font-serif">
        <p class="text-2xl transform hover:translate-x-4 transition transition-duration-300">@Copyright 2021</p>
        <p>Follow us on <b class="underline hover:text-blue-400">Facebook  </b><i class="fa fa-facebook-f hover:text-blue-400"style="font-size:20px" aria-hidden="true"></i></p>
        <p>Follow us on <b class="underline hover:text-blue-200">Twitter </b>  <i class="fa fa-twitter hover:text-blue-200"></i></p>
</div>
        <div class="text-sm md:text-lg">
        <p class="text-4x1 font-extrabold transform hover:translate-x-4 transition transition-duration-300 ">Contacts:</p>
        <p class="transform hover:translate-x-4 transition transition-duration-300">Email: abc@example.com</p>
        <p class="transform hover:translate-x-4 transition transition-duration-300">Contact Number: 0445-322-445</p>
        <p class="transform hover:translate-x-4 transition transition-duration-300">Address: 298 J.Teodoro, Grace Park West,</br> Caloocan, 1406 Metro Manila</p>
        </div>
        
        <hr style="padding: 10px; margin-left: 10px; margin-right: 10px">
    </div>
</div>
</footer>

</div>



<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.9/dist/js/splide.min.js"></script>
<script>

    $( document ).ready(function() {

        $("#star_dough").hide().slideDown(800);
        $("#delivery_service").hide().slideDown(800);
        $("#pizza_quality").hide().slideDown(800);
});
document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#image-slider' ).mount();
  } );
</script>
@endsection