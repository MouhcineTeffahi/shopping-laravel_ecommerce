@extends('layout.main')

@section('content')
<div class="container">
<div class="row">
       <div class="col-md-6 col-md-push-3 marge_form_payament">
       <form action="{{route('payment.store')}}" method="POST" id="payment-form">
           {{csrf_field()}}
           <span class="payment-errors"></span>

           <div class="form-group">
               <label>
                   <span>Card Number</span>
                 </label>

                   <input type="text" class="form-control"  data-stripe="number">

           </div>

           <div class="form-group">
               <label>
                   <span>Expiration (MM/YY)</span>
                   </label>
                   <input type="text" class="form-control"  data-stripe="exp_month">
                   <label>
                   <span> / </span>
                 </label>
                   <input type="text" class="form-control"  data-stripe="exp_year">

           </div>

           <div class="form-group">
               <label>
                   <span>CVC</span>
                   </label>
                   <input type="text" class="form-control"  data-stripe="cvc">

           </div>


           <input type="submit" class="btn btn-info" value="Submit Payment">
       </form>
       </div>
   </div>
 </div>
@endsection
