@extends('layout.main')

@section('content')

<div class="content_top">
	<h3 class="m_1">Latest Products</h3>
	<div class="container">
	   <div class="box_1">
	       <div class="col-md-12">
			    <div class="section group">
            @forelse($shirts->chunk(4) as $chunk)
              @foreach($chunk as $shirt)
						<div class="col-md-3 simpleCart_shelfItem">
							<div class="shop-holder">
		                         <div class="product-img">
		                                <img width="225" height="265" src="{{url('image',$shirt->image)}}" class="img-responsive"  alt="item4"></a>
                                    <div class="rectangle_color">
                                    <a href="{{route('cart.addItem',$shirt->id)}}">
                                        Add 
                                    </a>
                                  </div>
		                            	                         </div>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">

		                            <div><a href="{{route('shirt')}}" rel="tag">{{$shirt->name}}</a></div>
		                            <span class="amount item_price">${{$shirt->price}}</span>
		                    </div>
						</div>
            @endforeach
          @empty
           <h3>No Shirts</h3>
         @endforelse
						<div class="clearfix"></div>
				</div>
		</div>

	</div>
</div>

@endsection
