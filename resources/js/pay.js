require('./bootstrap');
var stripe = Stripe('pk_test_51IPlxkKVhRwOGKxpczljjurP82uoDmrobgbXnLiwpbzYCOD23hskc2HQJOqcniWvXcdi4nUsxqHbtIqaQxiK8VNL00pqJ9THwJ');
var checkoutButton1 = document.querySelector('#checkout-button1');
$(checkoutButton1).click(function(){
  const $Quat1 = document.getElementById('Quat').value;
  var $Quat2 = parseInt($Quat1, 0);
  stripe.redirectToCheckout({
    lineItems: [{
      // Define the product and price in the Dashboard first, and use the price
      // ID in your client-side code.
      price: 'price_1IQuTWKVhRwOGKxpaQECJDTx',
      quantity: $Quat2,
    }],
    mode: 'payment',
    successUrl: 'http://127.0.0.1:8000/',
    cancelUrl: 'http://127.0.0.1:8000/order'
  });
});
var checkoutButton2 = document.querySelector('#checkout-button2');
$(checkoutButton2).click(function(){
  const $Mar1 = document.getElementById('Mar').value;
  var $Mar2 = parseInt($Mar1, 0);
  stripe.redirectToCheckout({
    lineItems: [{
      // Define the product and price in the Dashboard first, and use the price
      // ID in your client-side code.
      price: 'price_1IQuU9KVhRwOGKxpQmWw4TD3',
      quantity: $Mar2,
    }],
    mode: 'payment',
    successUrl: 'http://127.0.0.1:8000/',
    cancelUrl: 'http://127.0.0.1:8000/order'
  });
});
var checkoutButton3 = document.querySelector('#checkout-button3');
$(checkoutButton3).click(function(){
  const $Marg1 = document.getElementById('Marg').value;
  var $Marg2 = parseInt($Marg1, 0);
  stripe.redirectToCheckout({
    lineItems: [{
      // Define the product and price in the Dashboard first, and use the price
      // ID in your client-side code.
      price: 'price_1IQuVRKVhRwOGKxpKiOpzNts',
      quantity: $Marg2,
    }],
    mode: 'payment',
    successUrl: 'http://127.0.0.1:8000/',
    cancelUrl: 'http://127.0.0.1:8000/order'
  });
});
var checkoutButton4 = document.querySelector('#checkout-button4');
$(checkoutButton4).click(function(){
  const $Forma1 = document.getElementById('Form').value;
  var $Forma2 = parseInt($Forma1, 0);
  stripe.redirectToCheckout({
    lineItems: [{
      // Define the product and price in the Dashboard first, and use the price
      // ID in your client-side code.
      price: 'price_1IQuW8KVhRwOGKxpRdfWHW3r',
      quantity: $Forma2,
    }],
    mode: 'payment',
    successUrl: 'http://127.0.0.1:8000/',
    cancelUrl: 'http://127.0.0.1:8000/order'
  });
});

var checkoutButton5 = document.querySelector('#checkout-button5');
$(checkoutButton5).click(function(){
  const $Pros1 = document.getElementById('Pros').value;
  var $Pros2 = parseInt($Pros1, 0);
  stripe.redirectToCheckout({
    lineItems: [{
      // Define the product and price in the Dashboard first, and use the price
      // ID in your client-side code.
      price: 'price_1IQuWaKVhRwOGKxpOuJXtIDX',
      quantity: $Pros2,
    }],
    mode: 'payment',
    successUrl: 'http://127.0.0.1:8000/',
    cancelUrl: 'http://127.0.0.1:8000/order'
  });
});

var checkoutButton6 = document.querySelector('#checkout-button6');
$(checkoutButton6).click(function(){
  const $Nap1 = document.getElementById('Nap').value;
  var $Nap2 = parseInt($Nap1, 0);
  stripe.redirectToCheckout({
    lineItems: [{
      // Define the product and price in the Dashboard first, and use the price
      // ID in your client-side code.
      price: 'price_1IQuXpKVhRwOGKxpDheWr9CE',
      quantity: $Nap2,
    }],
    mode: 'payment',
    successUrl: 'http://127.0.0.1:8000/',
    cancelUrl: 'http://127.0.0.1:8000/order'
  });
});


