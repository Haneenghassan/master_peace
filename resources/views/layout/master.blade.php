<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap-5.2.2-dist/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../bootstrap-5.2.2-dist/css/all.min.css">
    <title>@yield('title')</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f9c0f3458b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../cssvally/landpage.css">
    <link rel="stylesheet" href="../../cssvally/profileuser.css">
    <link rel="stylesheet" href="../../cssvally/preschoolspage.css">
    <link rel="stylesheet" href="../../cssvally/profile1.css">


</head>

  


<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          
            <a class="navbar-brand pt-2" href="/landing">
                <img src="/photos/logo-removebg-preview.png" alt="Bootstrap" width="120" height="70" id="logo">
            </a>
          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between " id="navbarNavDropdown"  >
                <ul class="nav navbar-nav ">
                  
                   
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/landing">Home</a>
                </li>

                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="/HappyVally" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Preschools
                </a>
                
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/HappyVally">kiddy planet </a></li>
                          
                        </ul>
                </a>
                        
                    </li> --}}
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/preschoolpage">Preschools</a>
                  </li>

                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/babysitterpage">Babysitters</a>
                  </li>

                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/about">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/contacts">Contact</a>
                  </li>
                  </ul>
                  @if (auth()->check())
                  <ul class="nav navbar-nav ">
                    <li class="nav-item">
                        @if(auth()->user()->is_admin == '0')
                      <a class="nav-link" href="{{route('profileuser.show',auth()->user()->id)}}"><i class="fa-solid fa-user"></i>Profile</a></li>
                        @elseif(auth()->user()->is_admin == '3')
                        
                        {{-- check if the babysitter relationship on the current authenticated user is null. If it is not null, we generate the URL for the profile.show route using the id property of the babysitter relationship. If it is null, we set the href attribute to '#' to disable the link. --}}
                          <a class="nav-link" href="{{ auth()->user()->babysitter ? route('profile.show', auth()->user()->babysitter->id) : '#' }}" ><i class="fa-solid fa-user"></i> Profile</a></li>
                          @elseif(auth()->user()->is_admin == '2' )
                          <a class="nav-link" href="{{ auth()->user()->preschool ? route('profile.showPreschool', auth()->user()->preschool->id) : '#' }}" ><i class="fa-solid fa-user"></i> Profile</a></li>
                          @endif
                           <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="nav-link" href="route('logout')"
                            onclick="event.preventDefault();
                                              this.closest('form').submit();">
                             
                            </i> {{ __('Log Out') }}</a></li>
                          </form>
                          @else
                          <li class="nav-item dropdown" style="list-style: none;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa-solid fa-right-to-bracket"></i> Login / Register</a>
                            <ul class="dropdown-menu">
                              
                              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                              <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                            </ul>
                          </li>
                        </ul>
                        @endif
                      
                        
                        
                  </div>

            
                </div>
                
              </nav>
              
    @yield('content')

    @yield('Profile')
    @yield('Profileshow')
    @yield('CreateProfile')
    @yield('Profileuser')
    @yield('preschool')
    @yield('babysitter')
    @yield('reservationForm')
    @yield('about')
    @yield('contact')
    



    <footer class="text-center text-lg-start bg-light " >
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color: #808080;" >
         
        
       
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i>Happy Vally
                </h6>
                <p class="text-black">
                  The Happy Valley experience revolves around the comfort and security you feel in choosing the best that can be provided for your child and the pride you feel in choosing the best for your child. The possibility of accessing all the options available to your child in an easy and fast way, without the need to make a great effort.
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Products
                </h6>
                <p class="text-black">
                  <a href="#!" class="text-reset">Angular</a>
                </p>
                <p class="text-black">
                  <a href="#!" class="text-reset">React</a>
                </p>
                <p class="text-black">
                  <a href="#!" class="text-reset">Vue</a>
                </p>
                <p class="text-black">
                  <a href="#!" class="text-reset">Laravel</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p class="text-black">
                  <a href="#!" class="text-reset ">Pricing</a>
                </p>
                <p class="text-black">
                  <a href="#!" class="text-reset">Settings</a>
                </p>
                <p class="text-black">
                  <a href="#!" class="text-reset">Orders</a>
                </p>
                <p class="text-black">
                  <a href="#!" class="text-reset">Help</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p class="text-black"><i class="fas fa-home me-3"></i> Aqaba,Jordan </p>
                <p class="text-black">
                  <i class="fas fa-envelope me-3 text-black"></i>
                  info@example.com
                </p>
                <p class="text-black"><i class="fas fa-phone me-3 text-black"></i>+ 962 770707725</p>
                <p class="text-black"><i class="fas fa-print me-3 text-black"></i> + 03 2035566</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->
      
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: #808080;">
          <div>
          <img src="../../photos/facebook (1).png" class="img-fluid" alt="...">
          <img src="../../photos/instagram (1).png" class="img-fluid" alt="...">
          <img src="../../photos/linkedin (1).png" class="img-fluid" alt="...">
        </div>
        <div style="margin-top: 1%;">
          © 2023 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">HappyVally.com</a>
        </div>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
        
      
      
          
          <script src="../../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
          <script src="../../bootstrap-5.2.2-dist/js/all.min.js"></script>
      
      
      </body>
      
      </html>







    