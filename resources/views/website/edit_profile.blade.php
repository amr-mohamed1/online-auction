@extends('layout.website.master')
@section('title', 'Edit Profile')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/register.css')}}">
@stop

@section('content')

    <div class="container">
        <div class="row">

          <form action="" method="post">

            <div class="col-xs-12 col-sm-6 col-md-6" id="d1">
              <div>
                <input type="number" value="0" readonly disabled id="supplierid">
              </div>

              <section id="sec1">
                <h1>Personal Information</h1>
                <div id="divfirstname" class="col-sm-12 col-md-6">
                  <label for="firstname">First Name</label>
                  <input type="text" id="firstname" class="forminputs" autofocus required value="First Name">
                </div>

                <div id="divlastname" class="col-sm-12 col-md-6">
                  <label for="lastname">Last Name</label>
                  <input type="text" id="lastname" class="forminputs" required value="Last Name">
                </div>

                <div id="divbirthdate" class="col-sm-12 col-md-6">
                  <label for="birthdate">Birth Date</label>
                  <input type="date" id="birthdate" name="birthdate" class="forminputs" placeholder="MM/DD/YYYY" value="2001-07-25" disabled>
                  <script>
                    birthdate.max = new Date().toISOString().split("T")[0];
                  </script>
                </div>

                <div id="divgender" class="col-sm-12 col-md-6">
                  <label for="gender">Gender</label>
                  <select class="select forminputs" required id="gender" disabled>
                    <option value="" selected disabled hidden>ــــ</option>
                    <option value="1" id="Male" selected>Male</option>
                    <option value="2" id="Female">Female</option>
                  </select>
                </div>

                <div id="divphonenumber" class="col-sm-12 col-md-6">
                  <label for="phonenumber">Phone Number</label>
                  <input type="text" id="phonenumber" class="forminputs" placeholder="#### ### ####" required inputmode="numeric" value="01234567890">
                </div>

                <div id="divhomenumber" class="col-sm-12 col-md-6">
                  <label for="homenumber">Home Number</label>
                  <input type="text" id="homenumber" placeholder="( Optional )"class="forminputs" inputmode="numeric" value="0133123456">
                </div>
              </section>

              <section id="sec2">
                <h1>Address</h1>
                <div id="divcountry" class="col-sm-12 col-md-6">
                  <label for="country">Country</label>
                  <input type="text" id="country" class="forminputs" required value="Qualubia">
                </div>
                <div id="divcity" class="col-sm-12 col-md-6">
                  <label for="city">City</label>
                  <input type="text" id="city" class="forminputs" required value="Benha">
                </div>
                <div id="divpostalcode" class="col-sm-12 col-md-3">
                  <label for="postalcode">Postal Code</label>
                  <input type="text" id="postalcode" class="forminputs" placeholder="# # # # #" required inputmode="numeric" value="12345">
                </div>
                <div id="divstreet" class="col-sm-12 col-md-9">
                  <label for="street">Full Street & Home Address</label>
                  <input type="text" id="street" class="forminputs" required value="kafr-elgazar">
                </div>
              </section>

            </div>

            <div class="col-xs-12 col-sm-6  col-md-6" id="d2">
              <section id="sec3">
                <h1>Account Information</h1>
                <div id="divmail" class="col-sm-12 col-md-12">
                  <label for="mail">Email Address</label>
                  <input type="email" id="mail" class="forminputs" placeholder="username_123 @gmail.com" required inputmode="email" value="email_123@gmail.com">
                </div>
                <div id="divpasswor" class="col-sm-12 col-md-12">
                  <label for="passwor">Password</label>
                  <input type="password" id="passwor" class="forminputs" required value="123456789">
                </div>
                <div id="divpasswor" class="col-sm-12 col-md-12">
                  <label for="confpasswor">Confirm Password</label>
                  <input type="password" id="confpasswor" class="forminputs" required value="123456789">
                </div>
                <div id="divdigitalsign" class="col-sm-12 col-md-12">
                  <label for="digitalsign">Digital Signature</label>
                  <a href="About.html" target="_blank">Learn more</a>
                  <input type="text" id="digitalsign" class="forminputs" placeholder="Enter Your Legal Name" required value="محمد عبدالرحمن السيد عبدالرحمن">
                </div>
                <div id="divprofilepic" class="col-sm-12 col-md-12">
                  <label for="profilepic">Upload Profile Picture</label>
                  <input type="file" id="profilepic" class="forminputs"  accept="image/*" required>
                </div>
                <div id="divsubbutton" class="col-sm-12 col-md-12">
                  <input type="submit" id="subbutton" class="forminputs">
                </div>
              </section>


            </div>
          </form>

        </div>
    </div>

@stop
@section('page-script')

@stop
