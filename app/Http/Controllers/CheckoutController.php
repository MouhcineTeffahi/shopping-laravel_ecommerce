<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Stripe_CardError;
use Stripe\Stripe_InvalidRequestError;
use Stripe\Error\Card;



class CheckoutController extends Controller
{
    public function step1()
    {
      if(Auth::check()){

        return redirect()->route('checkout.shipping');
      }

      return redirect('login');
    }


    public function shipping(){

      return view('front.shipping-info');
    }

    public function payment(){

      return view('front.payment');
    }

    public function storePayment(Request $request)
    {

        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey("sk_test_C09bzmaur1D2odRx6YhYNuDH");

        // Token is created using Stripe.js or Checkout!
        // Get the payment token submitted by the form:
        $token = $request->stripeToken;

        // Charge the user's card:S
        try
        {
          $charge = \Stripe\Charge::create(array(
            "currency" => "usd",
            "source" => $token,
            "description" => "Example charge",

          ));

        }
        catch(\Stripe\Error\Card $e)
        {
          //The card has been declined
          dd('Invalid request error');
        }



    }
}
