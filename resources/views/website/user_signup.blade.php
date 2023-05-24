@extends('layout.website.master')
@section('title', 'User Sign Up')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/register.css')}}">
@stop


@section('content')


    <div class="container">
        <div class="row">

          <form action="{{route('register_user')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-xs-12 col-sm-6 col-md-6" id="d1">
              <div>
                <input type="number" value="0" readonly disabled id="supplierid">
              </div>

              <section id="sec1">
                <h1>Personal Information</h1>
                <div id="divfirstname" class="col-sm-12 col-md-6">
                  <label for="first_name">First Name</label>
                  <input type="text" id="first_name" name="first_name" class="forminputs" autofocus required>
                    @error('first_name')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div id="divlastname" class="col-sm-12 col-md-6">
                  <label for="last_name">Last Name</label>
                  <input type="text" id="last_name" name="last_name" class="forminputs" required>
                    @error('last_name')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div id="divbirthdate" class="col-sm-12 col-md-6">
                  <label for="birthdate">Birth Date</label>
                  <input type="date" id="birthdate" name="birthday" class="forminputs" placeholder="MM/DD/YYYY">
                  <script>
                    birthdate.max = new Date().toISOString().split("T")[0];
                  </script>
                    @error('birthday')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div id="divgender" class="col-sm-12 col-md-6">
                  <label for="gender">Gender</label>
                  <select class="select forminputs" name="gender" required id="gender">
                    <option value="" selected disabled hidden>ــــ</option>
                    <option value="Male" id="Male">Male</option>
                    <option value="Female" id="Female">Female</option>
                  </select>
                    @error('gender')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div id="divphonenumber" class="col-sm-12 col-md-6">
                  <label for="phone">Phone Number</label>
                  <input type="text" id="phone" name="phone" class="forminputs" placeholder="#### ### ####" required inputmode="numeric">
                    @error('phone')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div id="divhomenumber" class="col-sm-12 col-md-6">
                  <label for="home_number">Home Number</label>
                  <input type="text" id="home_number" name="home_number" placeholder="( Optional )"class="forminputs" inputmode="numeric">
                    @error('home_number')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>
              </section>

              <section id="sec2">
                <h1>Address</h1>
                <div id="divcountry" class="col-sm-12 col-md-6">
                  <label for="country">Country</label>
                  <input type="text" id="country" name="country" class="forminputs" required>
                    @error('country')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div id="divcity" class="col-sm-12 col-md-6">
                  <label for="city">City</label>
                  <input type="text" id="city" name="city" class="forminputs" required>
                    @error('city')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div id="divpostalcode" class="col-sm-12 col-md-3">
                  <label for="postal_code" >Postal Code</label>
                  <input type="text" id="postal_code" name="postal_code" class="forminputs" placeholder="# # # # #" required inputmode="numeric">
                    @error('postal_code')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div id="divstreet" class="col-sm-12 col-md-9">
                  <label for="address">Full Street & Home Address</label>
                  <input type="text" id="address" name="address" class="forminputs" required>
                    @error('address')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>
              </section>

            </div>

            <div class="col-xs-12 col-sm-6  col-md-6" id="d2">
              <section id="sec3">
                <h1>Account Information</h1>
                <div id="divmail" class="col-sm-12 col-md-12">
                  <label for="mail">Email Address</label>
                  <input type="email" id="mail" name="email" class="forminputs" placeholder="username_123 @gmail.com" required inputmode="email">
                    @error('email')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div id="divpasswor" class="col-sm-12 col-md-12">
                  <label for="passwor">Password</label>
                  <input type="password" id="password" name="password" class="forminputs" required>
                    @error('password')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div id="divpasswor" class="col-sm-12 col-md-12">
                  <label for="confpasswor">Confirm Password</label>
                  <input type="password" id="password_confirmation" name="password_confirmation" class="forminputs" required>
                    @error('password_confirmation')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div id="divdigitalsign" class="col-sm-12 col-md-12">
                  <label for="digitalsign">Digital Signature</label>
                  <a href="{{route('about')}}" target="_blank">Learn more</a>
                  <input type="text" id="digital_signature" name="digital_signature" class="forminputs" placeholder="Enter Your Legal Name" required>
                    @error('digital_signature')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div id="divprofilepic" class="col-sm-12 col-md-12">
                  <label for="profilepic">Upload Profile Picture</label>
                  <input type="file" id="profile_image" name="profile_image" class="forminputs"  accept="image/*" required>
                    @error('profile_image')
                    <p class="help text-danger">{{ $message }}</p>
                    @enderror
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

