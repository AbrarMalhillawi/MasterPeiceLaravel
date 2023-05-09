

    <link rel="stylesheet" href="CSS/aboutus.css">
      <!-- -----------------------------START SECTION FOR LANDING PAGE --------------------------- -->
      <div class="landingPage">

    
        <div class="Head">
            <nav class="navFlex">
                
                <img class="Logo" src="{{ URL::asset('../PIC/roj4.png') }} " >
                    <ul>

                        <li><a href="/homepage">Home</a></li>
                        <li><a href="/SalonUser">Salonat</a></li>
                        <li><a href="/HomeUser">Home Services</a></li>
                        {{-- <li><a href="">PRODUCT</a></li> --}}
                        <li><a href="/about" style="color:rgb(166, 29, 116);">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                        @if (!Auth::user())
                    <li><a href="/regester">Register</a></li>
                   <li><a href="/login">Login</a></li>

                   @else
                   @if (auth()->user()->role!='User')
                   <li><a href="{{ route('ProfileUser.show', auth()->user()->id) }}">Profile</a></li>   
                  <li><a href="/INFO" target="_blank">Dashboard</a></li>
                   <li><a href="{{route('logout')}}">Logout</a></li>

                   @else

                   <li><a href="{{ route('ProfileUser.show', auth()->user()->id) }}">Profile</a></li>
                   <li><a href="{{route('logout')}}">Logout</a></li>

                   @endif
                   @endif
                    </ul>
                    {{-- search icon in nav bar --}}
                     <div class="SearchBar">   
                        <input class="searchInp" type="text" placeholder="Search...">
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div> 
            </nav>
           
    
      </div>
        <!-- ----------------------------END SECTION FOR LANDING PAGE---------------------------------------- -->
    
    <section id="about">
  
        <!--  Heading  -->
        <div class="about-heading">
              <h1>About Us</h1>
              <hr />
              <p>We are a company that offers unique activities for all age groups</p>
          </div>
        
        <!--  Section 1  -->
        <div class="about-section">
          <div class="about-item who"></div>
          <div class="about-item">
            <h2>Who We Are</h2>
                  <p>Cotton Candy provides an easy and fast platform for booking salon appointments and ordering hairdressers and makeup artists for home online. It also allows its users to search for available appointments in salons and book upcoming appointments easily.</p>
                  <p> We pride ourselves on the quality of service provided and the people's trust in us!</p>
          </div>
        </div>
        <!--  Section 2  -->
        <div class="about-section">
          <div class="about-item process"></div>
          <div class="about-item">

            <h2>Our Process</h2>
            <p>At our site, we believe the process is as important as the outcome. That's why we take great care to ensure that every step of your experience with us is smooth and fast, as we help visitors discover new salons and enjoy a unique beauty experience! Visitors can also compare prices, select the required services with a few clicks and provides the possibility of paying online or paying in a salon.
              First, we will show you the services in an easy and clear manner, and then we will define the requirements to start providing the service so that you are fully aware of the price and the hairdresser according to the service and the degree of submission. Salon evaluation in order to obtain a high degree of confidence and reassurance.</p>
            <p> After completing the reservation, Cotton Candy will send an immediate confirmation via email. Saloncom also provides friendly customer service dedicated to helping in any way they can.</p>
          </div>
        </div>
        <!--  Section 3  -->
        <div class="about-section">
          <div class="about-item contact"></div>
          <div class="about-item">
            <h2>Come Say Hello!</h2>
                <p> At every step, we are committed to providing you with excellent customer service, and keeping you up to date with the latest beauty trends."</p>
                <a href="/contact"><button class="about-btn">Contact Us</button></a>
          </div>
        </div>
    </section>

  <!-- Start Section for footer -->
  @include('component/footer')
  <!-- END Section for footer -->

