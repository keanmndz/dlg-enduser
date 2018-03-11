@extends('layout.layout-order')

@section('title','Register')

@section('content')

<br><br><br><br>

<section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">


        <div class="col-lg-5 col-md-8">

        <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Details</h3>
            </div>
          </div>

            <div class="form">
              <div id="sendmessage">Succesfully Registered! Please Verify your E-mail.</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                 <div class="form-group">
                  <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" data-rule="minlen:2" data-msg="Please enter at least 2 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" data-rule="minlen:2" data-msg="Please enter at least 2 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="mname" id="mname" placeholder="Middle Name" data-rule="minlen:2" data-msg="Please enter at least 2 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="company" id="company" placeholder="Company" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="address" id="address" placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="+639*********" data-rule="minlen:11" data-msg="Please enter at least 11 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="row">
                <div class="text-center"><button type="submit" title="Send Message">Cancel</button></div>
                <div class="text-center"><button type="submit" title="Send Message">Continue</button></div>
                </div>
              </form>
            </div>
          </div>

		<div class="col-md-2"></div>

            <div class="well well-lg col-md-4">
            <center><h5>Order Summary</h5></center>

            <table>
            	<tr>
            		<td>Product</td>
            		<td>Price</td>
            	</tr>
            	<tr>
            		<td></td>
            		<td></td>
            	</tr>
            	<tr>
            		<td>Subtotal</td>
            		<td></td>
            	</tr>
            	<tr>
            		<td>Total</td>
            		<td></td>
            	</tr>
            </table>

          </div>

          </div>
          </div>


<br>

@endsection