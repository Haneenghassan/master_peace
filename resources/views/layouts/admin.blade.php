<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  {{-- <meta http-equiv="x-ua-compatible" content="ie=edge" /> --}}
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../admincss/mdb.min.css" />

  <!-- Custom styles -->
  <link rel="stylesheet" href="../../admincss/admin.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple ">
            <i class="fas fa-users fa-fw me-3"></i><span>Users </span>
          </a>
          <a href="{{route('admin.preschools.index')}}" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-solid fa-school me-3"></i><span>Preschools</span></a>
          <a  href="{{route('admin.babysitters.index')}}" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fa fa-child-dress  me-3"></i><span>Babysitters</span></a>
          <a href="{{route('admin.contacts.create')}}" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fa fa-envelope me-3" aria-hidden="true"></i><span>Contact</span>
          </a>
          
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="/photos/logo-removebg-preview.png" alt="Bootstrap" width="80" id="logo" height="50" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded"
            placeholder='Search' style="min-width: 225px" />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
         
          <!-- Avatar -->
            <a class="nav-link  hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <span class="d-none d-sm-inline mx-1 fw-semibold text-black">{{Auth::user()->name }}</span>
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                alt="" loading="lazy" />
            </a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="nav-link" href="{route('logout')}"
              onclick="event.preventDefault();
                                this.closest('form').submit();">
               
              </i> {{ __('Log Out') }}</a></li>
            </form>
          
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 58px">
    <section class="mb-4">
      @yield('preschool')
  </section>
    <div class="container pt-4">
        <section class="mb-4">
            @yield('babsyitter')
        </section>
        <section class="mb-4">
            @yield('contact')
        </section>
    </div>
  </main>
  <!--Main layout-->
  <!-- MDB -->
  <script type="text/javascript" src="../../adminjs/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="../../adminjs/admin.js"></script>
  <script src="../../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
<script src="../../bootstrap-5.2.2-dist/js/all.min.js"></script>
<script src="https://kit.fontawesome.com/f9c0f3458b.js" crossorigin="anonymous"></script>

</body>

</html>