<?php

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey('sk_test_jO9OVpE95lADuDqnToTkpMMi00Tbldfl4o');

$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'name' => 'Financial Abundance Sessions, 5 days, 2x/day',
    'description' => 'I will do 5 days of sessions, 2 times per day.',
    'images' => [''],
    'amount' => 5,
    'currency' => 'usd',
    'quantity' => 1,
  ]],
  'success_url' => 'https://www.consciousnessproject.net/p/thank-you-for-purchasing.html?session_id={CHECKOUT_SESSION_ID}',
  'cancel_url' => 'https://www.consciousnessproject.net/p/cancel.html',
]);

?>