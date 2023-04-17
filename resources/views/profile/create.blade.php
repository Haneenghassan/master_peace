
{{-- @extends('layout.master')
@section('title','Profile Create')
@section('CreateProfile') --}}

    {{-- <div class="container rounded" style="margin-top: 5%;background-image: url(/photos/swash_blue_full.jpg);">
        <form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="row jumbotron box8 rounded">
              <div class="col-sm-12  text-center">
                  <h1 >Profile Create Form</h1>
              </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your first name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="last_name">Last name</label>
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last Name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="mobile">mobile</label>
              <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter your Mobile." required>
            </div>
            @if(auth()->user()->is_admin == '2')
            <div class="col-sm-6 form-group mb-5">
                <label for="manegerName">Manegar Name</label>
                <input type="text" class="form-control" name="manegerName" id="manegerName" placeholder="Enter your Manegar Name." required>
              </div>
              @endif
              
            <div class="col-sm-6 form-group mb-5">
              <label for="description">description</label>
              <input type="description" class="form-control" name="description" id="description" placeholder="Enter your Descrption." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
                <label for="img">image</label>
                <input type="file" class="form-control" name="img" id="img"  required>
              </div>

              <div class="col-sm-6 form-group mb-5">
                <label for="img">image</label>
                <input type="file" class="form-control" name="images[]" id="image" multiple required>
              </div>
            
            <div class="col-sm-12 form-group mb-5">
               <button class="btn btn-primary float-right">Submit</button>
            </div>
      
          </div>
        </form>
      </div> --}}
     

      <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/all.min.css">
    <title>@yield('title')</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f9c0f3458b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../cssvally/landpage.css">
    <link rel="stylesheet" href="../cssvally/profileuser.css">
    <link rel="stylesheet" href="../cssvally/preschoolspage.css">
    <link rel="stylesheet" href="../cssvally/profile1.css">


</head>

  


<body>
<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container rounded" style="margin-top: 5%;background-image: url(/photos/swash_blue_full.jpg);">
          <form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="row jumbotron box8 rounded">
                <div class="col-sm-12  text-center">
                    <h1 >Profile Create Form</h1>
                </div>
              <div class="col-sm-6 form-group mb-5">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your first name." required>
              </div>
              <div class="col-sm-6 form-group mb-5">
                <label for="last_name">Last name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last Name." required>
              </div>
              <div class="col-sm-6 form-group mb-5">
                <label for="mobile">mobile</label>
                <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter your Mobile." required>
              </div>
              @if(auth()->user()->is_admin == '2')
              <div class="col-sm-6 form-group mb-5">
                  <label for="manegerName">Manegar Name</label>
                  <input type="text" class="form-control" name="manegerName" id="manegerName" placeholder="Enter your Manegar Name." required>
                </div>
                @endif
                
              <div class="col-sm-6 form-group mb-5">
                <label for="description">description</label>
                <input type="description" class="form-control" name="description" id="description" placeholder="Enter your Descrption." required>
              </div>
              <div class="col-sm-6 form-group mb-5">
                  <label for="img">image</label>
                  <input type="file" class="form-control" name="img" id="img"  required>
                </div>
  
                <div class="col-sm-6 form-group mb-5">
                  <label for="img">image</label>
                  <input type="file" class="form-control" name="images[]" id="image" multiple required>
                </div>
        
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
           
              <button class="btn btn-primary float-right">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> --}}
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
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item">
                @if (auth()->check())
                  @if(auth()->user()->is_admin == '0')
                <a class="nav-link" href="{{route('profileuser.index',auth()->user()->id)}}"><i class="fa-solid fa-user"></i>Profile</a></li>
                  @else
                    <a class="nav-link" href="{{route('profile.index',auth()->user()->id)}}" ><i class="fa-solid fa-user"></i> Profile</a></li>
                     {{-- <button>  <a class="nav-link" >create profile</a></button> --}}
                     @endif
                     <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a class="nav-link" href="route('logout')"
                      onclick="event.preventDefault();
                                        this.closest('form').submit();">
                       
                </i> {{ __('Log Out') }}</a></li>
                
                @else
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false"><i class="fa-solid fa-right-to-bracket"></i> Login / Register</a>
                  <ul class="dropdown-menu">
                    
                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                    <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                  </ul>
                  @endif
              </li>
          </ul>

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

<div class="container rounded" style="margin-top: 5%;background-image: url(/photos/swash_blue_full.jpg);">
  <form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="row jumbotron box8 rounded">
        <div class="col-sm-12  text-center">
            <h1 >Profile Create Form</h1>
        </div>
      <div class="col-sm-6 form-group mb-5">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your first name." required>
      </div>
      <div class="col-sm-6 form-group mb-5">
        <label for="last_name">Last name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter your Last Name." required>
      </div>
      <div class="col-sm-6 form-group mb-5">
        <label for="mobile">mobile</label>
        <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter your Mobile." required>
      </div>
      @if(auth()->user()->is_admin == '2')
      <div class="col-sm-6 form-group mb-5">
          <label for="manegerName">Manegar Name</label>
          <input type="text" class="form-control" name="manegerName" id="manegerName" placeholder="Enter your Manegar Name." required>
        </div>
        @endif
        
      <div class="col-sm-6 form-group mb-5">
        <label for="description">description</label>
        <input type="description" class="form-control" name="description" id="description" placeholder="Enter your Descrption." required>
      </div>
      <div class="col-sm-6 form-group mb-5">
          <label for="img">image</label>
          <input type="file" class="form-control" name="img" id="img"  required>
        </div>
          
        @if(auth()->user()->is_admin == '2')
        <div class="col-sm-6 form-group mb-5">
          <label for="img">image</label>
          <input type="file" class="form-control" name="images[]" id="image" multiple required>
        </div>
        @endif
      
      <div class="col-sm-12 form-group mb-5">
         <button class="btn btn-primary float-right">Submit</button>
      </div>

    </div>
  </form>
</div> 

<script src="../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="../bootstrap-5.2.2-dist/js/all.min.js"></script>


</body>

</html>
{{-- @endsection --}}