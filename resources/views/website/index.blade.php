@extends('layout.website.master')
@section('title', 'Home')

@section('page-styles')
    <link rel="stylesheet" href="{{asset('website/css/about.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/home.css')}}">
@stop


@section('content')



    <div class="container" id="first-sec">
        <div class="row">
          <div class="col-sm-12 col-sm-push-1 col-md-7 col-lg-7 col-xl-7 hidden-xl hidden-lg hidden-md" id="bigphoto">
            <img src="{{asset('website/images/home-photo.png')}}" alt="auction-artwork">
          </div>

          <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 " id="writings">
            <h1>ONLINE AUCTION</h1>
            <p>A safe, easy and simple-to-use online auction site that provides
              you with the ability to buy products , display and sell your products
              in an auction that has a specific start and end time. The sale process
              takes place through trusted and signed contracts among seller, buyer, and supplier.<br></p>
            <p id="job">The site provides job opportunities for young people as delivery workers.</p>
            <button type="button" name="more" id="morebtn" class="btns" onclick="window.location.href='html/About.html'">Learn More</button>

            <button type="button" name="login" id="loginbtn" class="btns" onclick="window.location.href='html/Login.html'">Login</button>
            <button type="button" name="signup" id="signupbtn" class="btns" onclick="window.location.href='html/Signup.html'">Signup</button>

          </div>

          <div class="col-sm-12 col-sm-push-1 col-md-7 col-lg-7 col-xl-7 hidden-sm hidden-xs " id="bigphoto">
            <img src="{{asset('website/images/home-photo.png')}}" alt="auction-artwork">
          </div>
        </div>
    </div>

    <div class="container-fluid" id="about-sec">

      <main>
        <section id="section1" data-nav="Section 1" class="your-active-class">
          <div class="landing__container">
            <h2>What is &#8220;AUCTION&#8221; ?</h2>
            <p>An auction is a way to sell products within a specified period
              in a specific location and geographical area in which people are
              present to participate in the auction. It is a method of buying / selling
              products through public negotiations to
              determine the real market value of the product at that time, or we can say
              it is a sales event where potential buyers make competitive offers on products auctions.</p>

            <p>The auction makes it competitive between customers to buy products, which makes it more enthusiastic and brings great benefit to sellers. It allows us to display this commodity and make people estimate its purchase price and rush to buy, which increases the possibility of selling it at a price more than the estimated price. </p>
          </div>
        </section>
        <section id="section2" data-nav="Section 2">
          <div class="landing__container">
            <h2>What is ONLINE AUCION ?</h2>
            <p>In contrast to the public auction, which requires the presence of the person or his representative in reality in a specific place and time, online auction applications can be participated in from anywhere around the world, and anyone can start an auction and sell a product from his place without the need to gather people in a unified place. It allows us to participate in auctions via the Internet from wherever place we are in at the appointed time for bidding, so it helps us to overcome geographical restrictions.</p>
          </div>
        </section>
        <section id="section3" data-nav="Section 3">
          <div class="landing__container">
            <h2>Why to use our ONLINE&nbsp;AUCTION website ?</h2>
            <p>We developed an online auction application adding some AI methods in order to facilitate
              the sale of products at the best possible price and to make it competitive between buyers
              in a specific period of time until they obtain the product from their places.</p>

            <p>The website will allow the users to access the auctions using an online portal using any
              type of electronic devices which means overcoming the geographical obstacles. The users
              can start their own auctions for free and sell whatever they want. There is no schedule
              constraint that means bidder can bid anytime and from anywhere. The system enables the
              user to participate in the auction to buy products. The bidding can be made on a global
              level, so that there will be a lot of people who can join and participate in the auction</p>

              <p>We use decision-making tools that help the user purchase the best product that suits him,
                through a recommendation system that recommends suitable products to the user that he
                may like, and also through customer ratings of the product and the seller. Our
                recommendation system will recommend products to the user depending on his previous
                search results and depending on the feedback given to the products.</p>

                <p>Buying / selling through our app provides you with the necessary security means through
                  contracts between seller , buyer , and supplier. No one will know about this contract
                  except the customer, seller, and the supplier. The system provides complete privacy in
                  terms of your data. </p>

          </div>
        </section>
        <section id="section4" data-nav="Section 4">
            <div class="landing__container">
              <h2>We solve Unemployment problems</h2>
              <p>Our system also helps solve the problem of unemployment and provides work for people,
                as our system allows the user to create an account as a supplier which allows him to
                freelance with us as a delivery agent using his own transportation vehicle. The supplier
                receives offers to deliver orders, and he can reject or accept the offer. Upon acceptance
                of the offer, a contract is signed between him and the seller and the buyer using their
                digital signature.
                </p>
            </div>
          </section>
          <section id="section5" data-nav="Section 5" >
            <div class="landing__container" id="law-sec">
              <h2>LAWS</h2>
              <p>Enter your personal information correctly so that you can log in to the site.</p>

              <p>Your participation in one of the auctions is your own responsibility, and your signature is placed on the purchase agreement contract between you and the seller. If you buy a product, you cannot undo it. If you win in one of the auctions and want to withdraw, this will be with the consent of the seller, otherwise he can take legal action against you.</p>

              <p>You can sell your products through the site, but you cannot sell offensive and sexual products, as this will lead to your permanent ban from the site. </p>

              <p>If you are going to register on the site to work as a deliveryman, you must have the vehicle in which you will deliver the orders</p>

              <p>In the event that you are registered as a delivery agent, you can accept or reject the requests that are submitted to you. If you agree to deliver one of the orders, you are obligated to deliver it, and your signature will be placed on the sales contract. The conductor is responsible for delivering the order to the buyer and delivering the money to the seller.</p>

            </div>
          </section>
      </main>

    </div>



@stop
@section('page-script')

@stop
