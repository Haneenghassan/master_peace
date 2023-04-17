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
          
            <a class="navbar-brand pt-2" href="#">
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Preschool
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">kiddy planet </a></li>
                            <li><a class="dropdown-item" href="#">Cut Kids</a></li>
                            <li><a class="dropdown-item" href="#">Classy kids</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                  </li>
                  </ul>
                  @if (auth()->check())
                  <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        @if(auth()->user()->is_admin == '0')
                      <a class="nav-link" href="{{route('profileuser.index',auth()->user()->id)}}"><i class="fa-solid fa-user"></i>Profile</a></li>
                        @elseif(auth()->user()->is_admin == '2' || auth()->user()->is_admin == '3')
                          <a class="nav-link" href="{{route('profile.indexbaby',auth()->user()->babysitter->id)}}" ><i class="fa-solid fa-user"></i> Profile</a></li>
                           {{-- <button>  <a class="nav-link" >create profile</a></button> --}}
                        @endif
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                      <a class="nav-link" href="route('logout')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                             
                      </i> {{ __('Log Out') }}</a></li>
                      </form>
                      @else
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fa-solid fa-right-to-bracket"></i> Login / Register</a>
                        <ul class="dropdown-menu">
                          
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                        </ul>
                    </li>
                </ul>
                @endif

                {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                  @if (Route::has('login'))
                      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                          @auth
                              <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                          @else
                              <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
      
                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                              @endif
                          @endauth
                      </div>
                  @endif --}}
                

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
                  <i class="fas fa-gem me-3"></i>Company name
                </h6>
                <p>
                  Here you can use rows and columns to organize your footer content. Lorem ipsum
                  dolor sit amet, consectetur adipisicing elit.
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Products
                </h6>
                <p>
                  <a href="#!" class="text-reset">Angular</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">React</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Vue</a>
                </p>
                <p>
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
                <p>
                  <a href="#!" class="text-reset">Pricing</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Orders</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Help</a>
                </p>
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                <p>
                  <i class="fas fa-envelope me-3"></i>
                  info@example.com
                </p>
                <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
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
          <img src="../photos/facebook (1).png" class="img-fluid" alt="...">
          <img src="../photos/instagram (1).png" class="img-fluid" alt="...">
          <img src="../photos/linkedin (1).png" class="img-fluid" alt="...">
        </div>
        <div style="margin-top: 1%;">
          © 2021 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
        
      
      
          
          <script src="../../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
          <script src="../../bootstrap-5.2.2-dist/js/all.min.js"></script>
      
      
      </body>
      
      </html>







    