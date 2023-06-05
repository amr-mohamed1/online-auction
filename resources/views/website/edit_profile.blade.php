@extends('layout.website.master')
@section('title', 'Edit Profile')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/register.css')}}">
@stop

@section('content')

    <div class="container">
        <div class="row">

          <form action="{{route('edit_profile_data',auth()->user()->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-xs-12 col-sm-6 col-md-6" id="d1">
              <div>
                <input type="number" value="0" readonly disabled id="supplierid">
              </div>

              <section id="sec1">
                <h1>Personal Information</h1>
                <div id="divfirstname" class="col-sm-12 col-md-6">
                  <label for="firstname">First Name</label>
                  <input type="text" name="firstname" class="forminputs" autofocus required value="{{auth()->user()->first_name}}">
                </div>

                <div id="divlastname" class="col-sm-12 col-md-6">
                  <label for="lastname">Last Name</label>
                  <input type="text" name="lastname" class="forminputs" required value="{{auth()->user()->last_name}}">
                </div>

                <div id="divbirthdate" class="col-sm-12 col-md-6">
                  <label for="birthdate">Birth Date</label>
                  <input type="date" id="birthdate" name="birthdate" class="forminputs" placeholder="MM/DD/YYYY" value="{{auth()->user()->birthday}}">
                  <script>
                    birthdate.max = new Date().toISOString().split("T")[0];
                  </script>
                </div>

                <div id="divgender" class="col-sm-12 col-md-6">
                  <label for="gender">Gender</label>
                  <select class="select forminputs" required name="gender">
                    <option value="" selected disabled hidden>ــــ</option>
                    <option {{auth()->user()->gender == 'Male' ? "selected" : ''}} value="Male" id="Male">Male</option>
                    <option {{auth()->user()->gender == 'Female' ? "selected" : ''}} value="Female" id="Female">Female</option>
                  </select>
                </div>

                <div id="divphonenumber" class="col-sm-12 col-md-6">
                  <label for="phonenumber">Phone Number</label>
                  <input type="text" name="phone" class="forminputs" placeholder="#### ### ####" required inputmode="numeric" value="{{auth()->user()->phone}}">
                </div>

                <div id="divhomenumber" class="col-sm-12 col-md-6">
                  <label for="homenumber">Home Number</label>
                  <input type="text" name="home_number" placeholder="( Optional )"class="forminputs" inputmode="numeric" value="{{auth()->user()->home_number}}">
                </div>
              </section>

              <section id="sec2">
                <h1>Address</h1>
                <div id="divcountry" class="col-sm-12 col-md-6">
                  <label for="country">Country</label>
                  <input type="text" name="country" class="forminputs" required value="{{auth()->user()->country}}">
                </div>
                <div id="divcity" class="col-sm-12 col-md-6">
                  <label for="city">City</label>
                  <input type="text" name="city" class="forminputs" required value="{{auth()->user()->city}}">
                </div>
                <div id="divpostalcode" class="col-sm-12 col-md-3">
                  <label for="postalcode">Postal Code</label>
                  <input type="text" name="postal_code" class="forminputs" placeholder="# # # # #" required inputmode="numeric" value="{{auth()->user()->postal_code}}">
                </div>
                <div id="divstreet" class="col-sm-12 col-md-9">
                  <label for="street">Full Street & Home Address</label>
                  <input type="text" name="address" class="forminputs" required value="{{auth()->user()->address}}">
                </div>
              </section>

            </div>

            <div class="col-xs-12 col-sm-6  col-md-6" id="d2">
              <section id="sec3">
                <h1>Account Information</h1>
                <div id="divmail" class="col-sm-12 col-md-12">
                  <label for="mail">Email Address</label>
                  <input type="email" name="email" class="forminputs" placeholder="username_123 @gmail.com" required inputmode="email" value="{{auth()->user()->email}}">
                </div>
                <div id="divpasswor" class="col-sm-12 col-md-12">
                  <label for="passwor">Password</label>
                  <input type="password" name="password" class="forminputs" required value="">
                </div>
                <div id="divdigitalsign" class="col-sm-12 col-md-12">
                  <label for="digitalsign">Digital Signature</label>
                  <a href="About.html" target="_blank">Learn more</a>
                  <input type="text" name="digital_signature" class="forminputs" placeholder="Enter Your Legal Name" required value="{{auth()->user()->digital_signature}}">
                </div>
                <div id="divprofilepic" class="col-sm-12 col-md-12">
                  <label for="profilepic">Upload Profile Picture</label>
                  <input type="file" name="image" class="forminputs"  accept="image/*">
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
