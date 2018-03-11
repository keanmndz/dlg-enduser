@extends('layout.layout-order')

@section('title','Register')

@section('content')

<br><br><br><br>

<div class="row">



<div class="container col-lg-7">
	<table>
		<tr>
			<th colspan="2"><center><h4>Products</h4></center></th>
		</tr>

		

		
		@foreach($prods as $products)
		@for($i=0; $i<=$products->id; $i=$i+1)
		<tr>
			<td>
			<div class="row">
				<div class="col-lg-6">
					<h5>{{$products->name}}</h5>
					<p>{{$products->price}}</p>
				</div>
				<div class="col-lg-6">
					<select>
						<option>Tray</option>
						<option>Retail</option>
					</select>
				</div>
			</div>
			<div class="text-center"><button type="submit" title="Send Message">Add</button></div>
			</td>
			<td>
			<div class="row">
				<div class="col-lg-6">
					<h5>{{$products->name}}</h5>
					<p>{{$products->price}}</p>
				</div>
				<div class="col-lg-6">
					<select>
						<option>Tray</option>
						<option>Retail</option>
					</select>
				</div>
			</div>
			<div class="text-center"><button type="submit" title="Send Message">Add</button></div>
			</td>
			</tr>
			@endfor
			@endforeach
		

		
	</table>
</div>

<div class="col-lg-3">
	<div class="well">
	<center><h5>Cart</h5></center>
	<table>
		<tr>
			<td>Product</td>
			<td>Quantity</td>
			<td>Price</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Subtotal</td>
		</tr>
		<tr>
			<td>Total</td>
		</tr>
	</table>
	<div class="text-center"><button type="submit" title="Send Message">Checkout</button></div>
	</div>

	
</div>

<div class="col-lg-1"></div>

</div>

<br>

@endsection