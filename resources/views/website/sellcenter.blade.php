@extends('layout.website.master')
@section('title', 'Sell Center')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/navbarlogged.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/sellcenter.css')}}">
@stop

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 ">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <form action="" method="" id="imageUploadForm">
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <label for="title">Product Title</label>
                    <input type="text" id="title" name="title" autofocus onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Product Name'" placeholder="Enter Product Name" class="in" required>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" placeholder="Descripe the Product in Detail"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripe the Product in Detail'"class="in" required>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="in" required>
                      <option value="" disabled selected hidden>Select</option>
                      <option value="1">Artwork</option>
                      <option value="2">Book</option>
                      <option value="3">Car</option>
                      <option value="4">Computer & Laptop</option>
                      <option value="5">Electronics</option>
                      <option value="6">Fashion</option>
                      <option value="7">Game</option>
                      <option value="8">Pet</option>
                      <option value="9">Real Estate</option>
                      <option value="10">Ship</option>
                      <option value="11">Software</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <label for="numberitem">Number of Items</label>
                    <input type="number" id="numberitem" name="numberitem" value="1" onfocus="this.value=''" class="in" required>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <label for="condition">Condition</label>
                    <select name="condition" id="condition" class="in" required>
                      <option value="" disabled selected hidden>Select</option>
                      <option value="1">New</option>
                      <option value="2">Almost New</option>
                      <option value="3">Refurbished</option>
                    </select>
                  </div>
              </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6" id="div2">
            <div class="col-xs-12 col-sm-12 col-md-12 ">
              <label for="price">Starting Price (LE)</label>
              <input type="number" id="price" name="price" value="1" onfocus="this.value=''" class="in" required>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 " id="divpic">
              <label for="productpic">Upload Pictures</label>
              <input type="file" id="productpic"  name="productpic" multiple accept="image/*" required>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
              <label for="startdate">Start Date</label>
              <input type="datetime-local" id="startdate" name="startdate" class="in" required>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
              <label for="enddate">End Date</label>
              <input type="datetime-local" id="enddate" name="enddate" class="in" required>
              <script>
                var today = new Date().toISOString().slice(0, 16);
                document.getElementsByName("startdate")[0].min = today;
                document.getElementsByName("enddate")[0].min = today;
              </script>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 ">
              <input type="submit" id="submitbtn" name="submitbtn" value="Sell" class="in" required>
            </div>
          </form>

          </div>
        </div>
      </div>
    </div>

@stop
@section('page-script')
    <script>
        $("#productpic").on("change", function() {
            if ($("#productpic")[0].files.length > 4) {
                alert("You can select only 4 images");
            } else {
                $("#imageUploadForm").submit();
            }
        });

    </script>
@stop
