@extends('layout.main')

@section('content')

<div class="container">
<div class="check">
<div class="col-md-9 cart-items">
 <h1>My Shopping Bag (2)</h1>
 <script>$(document).ready(function(c) {
 	$('.close1').on('click', function(c){
 		$('.cart-header').fadeOut('slow', function(c){
 			$('.cart-header').remove();
 		});
 		});
 	});
  </script>
  @foreach($cartItems as $cartItem)
 <div class="cart-header">
   <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
      {{csrf_field()}}
      {{method_field('DELETE')}}
      <div class="close1"><button class="btn btn-denger">X</button> </div>
    </form>
   <div class="cart-sec simpleCart_shelfItem">
      <div class="cart-item cyc">
         <img src="{{URL::asset('image/pic1.jpg')}}" class="img-responsive" alt=""/>
      </div>

      <h3>{{$cartItem->name}}</h3>

        Price : ${{$cartItem->price}}



              {!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
              {{ csrf_field() }}

              <span class="qty_marge">
                Qty :  <input style="width: 35px;" name="qty" type="text" value="{{$cartItem->qty}}">
              </span>

                <div class="espace_select">



                    Size : {!! Form::select('size', ['small'=>'Small','medium'=>'Medium','large'=>'Large'] , $cartItem->options->has('size')?$cartItem->options->size:'' ) !!}

                  </div>

            <input type="submit" style="float:left" class="button success small btn btn-success" value="OK">
            {!! Form::close() !!}




      <div class="delivery">
         <p>Service Charges : Rs.100.00</p>
         <span>Delivered in 2-3 bussiness days</span>
         <div class="clearfix"></div>
          </div>

       <div class="clearfix"></div>

    </div>
 </div>
 @endforeach

</div>
<div class="col-md-3 cart-total">
 <a class="continue" href="#">Continue to basket</a>
 <div class="price-details">
   <h3>Price Details</h3>
   <span>Items</span>
   <span class="total1">{{Cart::count()}}</span>
   <span>Sub Total</span>
   <span class="total1">$ {{Cart::subtotal()}}</span>
   <span>Tax</span>
   <span class="total1">$ {{Cart::tax()}}</span>
   <div class="clearfix"></div>
 </div>
 <ul class="total_price">
   <li class="last_price"> <h4>Grand Total</h4></li>
   <li class="last_price"><span>$ {{Cart::total()}}</span></li>
   <div class="clearfix"> </div>
 </ul>


 <div class="clearfix"></div>
 <a class="order" href="{{url('/checkout')}}">Checkout</a>
 <div class="total-item">
   <h3>OPTIONS</h3>
   <h4>COUPONS</h4>
   <a class="cpns" href="#">Apply Coupons</a>
   <p><a href="#">Log In</a> to use accounts - linked coupons</p>
 </div>
</div>
</div>
</div>

@endsection
