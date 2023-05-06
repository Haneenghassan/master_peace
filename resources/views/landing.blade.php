@extends('layout.master')
@section('title','Home')
@section('content')

    <!-- landing video -->

    <div  id="video" >
        <!-- loop :to make video run for infinity -->
        <video autoplay loop muted >
            <source src="/photos/video.mp4" type="video/mp4">
        </video>
    </div>
    <div>
        <img src="RSVL-9-2019-MKTG-080_web.png" id="photo">
    </div>
    <div>
        <!-- fs:fontsize && text-center:to make text in center page -->
        <h1 class=" fs-1 text-center header ">A HEARTFELT DEDICATION TO <br>  NURTURING INTELLIGENCE.</h1>
    </div>
    {{-- <div class=" register" >
    <form action="{{route('search.store')}}" method="post">
      @csrf
      <input type="text" name="search" class="search" placeholder="Search...">
      <i class="fa-solid fa-magnifying-glass search-icon"></i>
  </form>
    </div> --}}
   @if(!auth()->check())
    <button type="button" class="btn register" ><a id="register" href="{{route('register')}}">
      Register</a></button>
      @else
      <button type="button" class="btn register" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Register</button>
        <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" role="alert">
        You Already Registerd
        </div>
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
    </div>
  </div>
</div>
@endif

    <div class="textsection1">
        <p>Our Services<p>    
            </div>

    <div id="section1" >
        <div class="row g-4 justify-content-md-center">
            <div class="col col-lg-4">
              <div class="card h-100">
                <a class="hyberlinks" href="/preschoolpage">
                <img src="/photos/109-1090866_special-project-preschool-icon-png-transparent-removebg-preview (1).png" class="card-img-top mt-1 " height="260" width="250"  alt="...">
                <div class="card-body">
                  <h5 class="card-text" style="font-size: 2.5rem;text-align: center;">PreSchools</h5>
                </div>
                </a>
              </div>
            </div>
            <div class="col col-lg-4">
                <!-- h-100 act the height -->
              <div class="card h-100">
                <a  class="hyberlinks" href="/babysitterpage">
                <img src="/photos/babysitter.png" class="card-img-top  mt-1 photobabysitter" height="260" width="250" alt="babysittercard">
                <div class="card-body">   
                  <h5 class="card-text" style="font-size: 2.5rem;text-align: center;">Baby Sitters</h5>
                </div>
              </div>
            </a>
            </div>
          
          </div>
    </div>

    <div class="section2">
        <div class="text-center">
            <img src="/photos/Untitled-removebg-preview (1).png" class="rounded" style="width: 38%;" alt="imghappyvally">
          </div>
          <h2 id="headersection2">A HEARTFELT DEDICATION TO NURTURING INTELLIGENCE.</h2>
          <p class="text-center " style="width: 80%; padding-left: 20%;">
            we view children as competent, capable, and rich with ideas,Children observe, investigate, and explore the world around them through play in the art classrooms.our website experience is about the sense of comfort and security you feel when your child is warmly greeted each morning by teachers and friends and the pride you feel in your child’s daily progress and accomplishments.
          <p>
    </div>


     <div class="section3">
    <div class="row text-center" style=" margin-left: 20%;">
      <div class="col-3 text-center peaceofmind">
        <img src="/photos/home.png" class="img-fluid" alt="...">
        <h3 style="color: white;">Peace Of Mind</h3>
        <p style="color: white;">Happy Vally offers parents peace-of-mind with the knowledge that each child will be supported both academically and emotionally in an environment that is always safe, secure, and nurturing</p>
      </div>
      <div class="col-3 text-center peaceofmind ">
        <img src="/photos/heart_icon.png" class="img-fluid" alt="...">
        <h3 style="color: white;">CARING FOR CHILDREN AND FAMILIES</h3>
        <p style="color: white;">Since the family is a child's primary source of love and care, we dedicate ourselves to helping families through every stage of their child's development.</p>
      </div>
      <div class="col-3 text-center peaceofmind ">
        <img src="/photos/globe_icon.png" class="img-fluid" alt="...">
        <h3 style="color: white;">EXCELLENCE IN EDUCATION </h3>
        <p style="color: white;">Since the family is a child's primary source of love and care, we dedicate ourselves to helping families through every stage of their child's development.</p>
      </div>
    </div>
</div>

<div class="section4">
    <div class="row justify-content-start">
        <div class="col-6 ms-5 mt-4">
            <h3>JOIN OUR Family </h3> 
            <p>
                When you join us, you embrace our environment of community. We are proud to cultivate an environment where all pre-schools and peoplewho can represente care can are represented and celebrated in our website. Both your professional and personal aspirations matter to us. Showing appreciation is one of our favorite things to do.
            </p> 
        <div>
            <p  style="font-size: 30px;font-weight: 600;">
                <a class="buttonyellow"  href="{{route('profile.create')}}"  >Join Us</a>
            </p>
        </div>
        </div>
        <div class="col-5 ms-5">
            <img src="/photos/Untitled design.png" class="img-fluid imgsection4 mt-3" alt="photojoinus">
        </div>
    </div>
</div>


<section style="background-image: url(/photos/Swash_Green_Top.png); "  class="testimonials">
  
    <br>
      <div class="heading text-center">
          <h2>What's
              <span>Clients</span>
              Says?</h2>

      </div>
      <div class="container">
          <div class="row text-center">
              <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <!-- Indicators-->
                  <ol class="carousel-indicators">
                    @foreach ($reviews as $key=>$review)

                    <li style="list-style: none;" data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if($loop->first) active @endif"></li>
                    @endforeach
                    
                  </ol>
                  
                  <div class="carousel-inner">
                    <!-- Item-1 -->
                    @foreach ($reviews as $review)    
                          <div class="carousel-item  text-center @if($loop->first) active @endif">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" alt="" class="center-block team">
                            <h3>{{$review->user->first_name}}</h3>
                            <div style="padding-left: 20% ; padding-right:20%">
                            <p class="text-break text-wrap" >{{$review->comment}}</p>
                            </div>
                            </div>
                            
                            @endforeach
                          </div>
                      <a
                          class="carousel-control-prev control"
                          data-target="#carouselExampleIndicators"
                          role="button"
                          data-slide="prev">
                          <span class="fa fa-angle-left icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a
                          class="carousel-control-next control"
                          data-target="#carouselExampleIndicators"
                          role="button"
                          data-slide="next">
                          <span class="fa fa-angle-right icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  </section>

<script src="https://code.jquery.com/jquery-2.1.0.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


@endsection

