@extends('layout.layout-account')

@section('title','Account')

@section('content')

<br><br><br><br>

<div class="row">

  <div class="col-md-1"></div>
  
  <div class="col-md-4">
    <img src="{{ asset('img/user.png') }}" height="200px">
  </div>

  <div class="col-md-4">
    <h3>Name</h3>
    <p>Company</p>
    <p>Address</p>
    <p>Contact Number</p>

  </div>

  <div class="col-md-7" ></div>

  <br>

  <div class="col-md-1"></div>

  <div class="col-md-8">
    <table>
      <th colspan="4">Orders</th>
      <tr>
        <td>Order Date</td>
        <td>Items</td>
        <td>Total</td>
        <td>Action</td>
      </tr>
    </table>
  </div>
  

</div>



@endsection