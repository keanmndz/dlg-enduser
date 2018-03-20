@extends('layout.layout-user')

@section('title','Register')

@section('content')

<!--==========================
      Contact Section
    ============================-->
    <br><br><br>
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">


        <div class="col-lg-5 col-md-8">

        <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Register</h3>
            </div>
          </div>

            <div class="form">
              <div id="sendmessage">Succesfully Registered! Please Verify your E-mail.</div>
              <div id="errormessage"></div>
              <form action="/account" method="post">

                 {{ csrf_field() }}

                            <!-- Last Name -->
                            <div class="form-group">
                    Last Name: <input class="form-control" type="text" name="lname" autofocus required>
                  </div>

                  <!-- First Name -->
                  <div class="form-group">
                    First Name: <input class="form-control" type="text" name="fname" required>
                  </div>

                  <!-- Company -->
                  <div class="form-group">
                    Company Name: <input class="form-control" type="text" name="company" required>
                  </div>

                  <!-- Username -->
                  <div class="form-group">
                    Username: <input class="form-control" type="text" name="username" required>
                  </div>

                  <!-- Password -->
                  <div class="form-group">
                    Password: <input class="form-control" type="password" name="password" disabled>
                  </div>

                  <!-- Address -->
                  <div class="form-group">
                    Address: <input class="form-control" type="text" name="address" required>
                  </div>

                  <!-- Contact -->
                  <div class="form-group">
                    Contact Number: <input class="form-control" type="text" name="contact" required>
                  </div>

                <div class="text-center"><button type="submit" title="Send Message">Register</button></div>
              </form>
            </div>
          </div>

          <div class="col-md-2"></div>

         
<div class="col-lg-5 col-md-8">



        <div class="">
            <div class="contact-about">
              <h3>Login</h3>
            </div>
          </div>

            <div class="form well well-lg">
            <br>
              <div id="sendmessage">Succesfully Registered! Please Verify your E-mail.</div>
              <div id="errormessage"></div> 
              
              <form action="/account" method="post">

              {{ csrf_field() }}

                 <div class="form-group">
                  Email: <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" value="{{ old('email') }}" data-msg="Please enter email" required="" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  Password: <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" data-msg="Please enter password" required="" />
                  <div class="validation"></div>
                </div>
                <div><center><a href="">Forgot Password?</a></center></div><br>
                <div class="text-center"><button type="submit" title="Send Message">Login</button></div>
              </form>
            </div>

            <br><br><div><center>OR<a href="/menu"><h4>Continue as guest</h4></a></center></div> 
          </div>
         


        </div>

      </div>
    </section><!-- #contact -->



@endsection