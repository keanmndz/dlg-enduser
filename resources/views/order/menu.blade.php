@extends('layout.layout-order')

@section('title','Register')

@section('content')

<br><br><br><br>

<div class="row">



<div class="container col-lg-6">
	<table>
		<tr>
			<th colspan="2"><center><h4>Products</h4></center></th>
		</tr>

		
		@foreach($prods as $products)
		@if($products->id % 2 != 0)
		<tr>
		<td>
			<div class="row">
				<div class="col-lg-6">
					<h5>{{$products->name}}</h5>
					<p>Php {{$products->price}}.00</p>
				</div>
				<div class="col-lg-6">
					<select>
						<option>Tray</option>
						<option>Retail</option>
					</select>
				</div>
			</div>
			<div class="text-center">
			<form method="POST" action="/menu">
              <input type="hidden" name="product_id" value="{{$products->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-fefault add-to-cart">
                 <i class="fa fa-shopping-cart"></i>
                    Add to cart
               </button>
             </form></div>
			</td>
			@endif
			
			@if($products->id %2 == 0)
			<td>
			<div class="row">
				<div class="col-lg-6">
					<h5>{{$products->name}}</h5>
					<p>Php {{$products->price}}.00</p>
				</div>
				<div class="col-lg-6">
					<select>
						<option>Tray</option>
						<option>Retail</option>
					</select>
				</div>
			</div>
			<div class="text-center">
			<form method="POST" action="/menu">
              <input type="hidden" name="product_id" value="{{$products->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-fefault add-to-cart">
                 <i class="fa fa-shopping-cart"></i>
                    Add to cart
               </button>
             </form>
             </div>
			</td>
			</tr>
			@endif
			@endforeach
		

		
	</table>
</div>

<div class="col-lg-4">

	<div class="">
	<table>
		<tr>
			<th colspan="5"><center><h4>Cart</h4></center></th>
		</tr>
		<tr>
			<td><a href="">Product</a></td>
			<td><a href="">Price</a></td>
			<td><a href="">Qty</a></td>
			<td><a href="">Subtotal</a></td>
			<td></td>
		</tr>

		<tr>
		@foreach($cart as $item)
                    <tr>
                        <td class="cart_description">
                            <p>{{$item->name}}</p>
                        </td>
                        <td class="cart_price">
                            <p>${{$item->price}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_down" href='{{url("menu?product_id=$item->id&decrease=1")}}'> - </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_up" href='{{url("menu?product_id=$item->id&increment=1")}}'> + </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">${{$item->subtotal}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href='{{url("menu/remove?product_id=$item->id")}}'><i class="fa fa-times"></i></a>
                        </td>
                        
                    </tr>
                    @endforeach
                    </tr>

		<tr>
		</tr>
	</table>
<br>
	<center><form method="POST" action="/checkout">
	<input type="hidden" name="product_id" value="{{$products->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-fefault add-to-cart">
                    Checkout
               </button>
             </form></center>
           

	
	</div>

	
</div>

<div class="col-lg-1"></div>

</div>

<br>

@endsection