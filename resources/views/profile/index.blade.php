@extends('layout.master')
@section('title','Profile Preschool')
@section('Profile')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


  <section>
    <div class="contain">
      <div class="box">
          <img class="imageprofile" src="{{URL::asset("/storage/image/$preschool->img")}}"  alt="">
          <ul>
            <li style="color:#F2F0EF"><span style="color: #F48257;">Name</span> :{{$preschool->first_name}} {{$preschool->last_name}}</li>
            <li style="margin-top: 2%;color:#F2F0EF"><span style="color: #F48257;">Contact</span> :{{$preschool->mobile}}</li>

            <li> 
              @if(auth()->user()->is_admin == '2')
              <p  style="font-size: 25px;font-weight: 600;">
                <a class="buttonyellow"   href="{{route('profile.editPreschool',$preschool->id)}}">
                  Edit Profile</a>
                </p>
                
                @endif
                @if(auth()->user()->is_admin =='0')
                <p  style="font-size: 25px;font-weight: 600;">
                  <a class="buttonyellow"   href="{{route('Preschoolreservations.show',$preschool->id)}}">
                    Make Reservation</a>
                  </p>
            @endif
              <li>
          </ul>

      </div>
      
      <div class="About">
          <ul style="display: flex;">
            <h1><span style="color: #F48257">A</span> <span style="color:#0D9BA0;margin-left:-5%">B</span> <span style="color:#004AAD;margin-left:-5%">O</span> <span style="color: #E8C7A3;margin-left:-5%">U</span> <span style="color: #00BFEB;margin-left:-5%">T</span></h1>
          </ul>

          <ul>
              <h3>Work</h3>
              <li>Preschoole</li>
          </ul>
          <ul>
              <h3>Country</h3>
              <li>JORDAN</li>
          </ul>
          <ul>
            <h3>Maneger Name</h3>
            <li>{{$preschool->manegerName}}</li>
        </ul>
          <ul>
              <h3>Description</h3>
              <p>{{$preschool->description}}</p>
          </ul>
          <ul>
              <h3>Contact</h3>
              <li> {{auth()->user()->email}}</li>
          </ul>
      </div>
  </div>

      </section>

      <section id="explorecourses">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            
            <div class="carousel-inner">
              <?php  $images=$preschool->schoolimgs ?>
              @foreach($images as $image)
              <div class="carousel-item @if($loop->first) active @endif">
                {{-- create file image by (mkdir image )--}}
                <img class="d-block w-100" src="{{URL::asset('image/'.$image['image'])}}" style="height: 60vh" alt="First slide">
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </section>

      {{-- Reservation Section --}}   
      @if(auth()->user()->is_admin == '2')
         @if(isset($reservation))
      <section id="explorecourses">
        <div class="title">
          <h2><span style="color: #F48257;">My </span>Reservation</h2>
          
        </div>
        @foreach ($reservationspre as $reservation)
            <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card card-white mb-5">

                          <div class="card-body d-flex justify-content-around">
                              <ul class="list-unstyled">
                                  <li class="position-relative booking">
                                      <div class="media d-flex">
                                          <div class="msg-img">
                                              <img id="imguser" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                          </div>
                                          <div class="media-body" style="text-align: left;">
                                            @if ($reservation->status=='pending')
                                              <h5 class="mb-4">{{$reservation->first_name}} {{$reservation->last_name}} <span class="badge rounded-pill bg-warning text-dark " style="margin-left: 2%">{{$reservation->status}}</span></h5>
                                              @elseif($reservation->status=='accepted')
                                              <h5 class="mb-4">{{$reservation->first_name}} {{$reservation->last_name}} <span class="badge rounded-pill bg-success text-dark" style="margin-left: 2%">{{$reservation->status}}</span></h5>
                                              @else
                                              <h5 class="mb-4">{{$reservation->first_name}} {{$reservation->last_name}} <span class="badge rounded-pill bg-danger text-dark" style="margin-left: 2%">{{$reservation->status}}</span></h5>
                                              @endif

                                              {{-- <div class="mb-3">
                                                  <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Reservation Date:</span>
                                                  <span class="bg-light-blue">{{$reservation->start_time}} - {{$reservation->end_time}}</span>
                                              </div> --}}
                                              <div class="mb-3">
                                                <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Mobile:</span>
                                                <span class="bg-light-blue">{{$reservation->mobile}}</span> 
                                            </div>
                                           
                                              <div class="mb-3">
                                                  <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">email:</span>
                                                  <span class="bg-light-blue">{{$reservation->email}}</span> 
                                              </div>
                                              <div class="mb-3">
                                                  <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Child Name:</span>
                                                  <span class="bg-light-blue">{{$reservation->child_firstname}} {{$reservation->child_lastname}}</span>
                                              </div>
                                              <div class="mb-3">
                                                <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Child Age:</span>
                                                <span class="bg-light-blue">{{$reservation->child_age}}</span>
                                            </div>
                                        
                                    </li>
                                  </ul>
                                  <div class="buttons-to-right d-flex">
                                   <div>
                                    <a type="button" class="btn btn-success " style="margin-left: -5%"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="{{Route('Preschoolreservations.edit',$reservation->id)}}"><i class="fa fa-edit"></i>Edit</a>
                                   </div>
                                   <div>
                                    <form method="POST" action="{{ route('Preschoolreservations.destroy', $reservation->id) }}">
                                      @csrf
                                      @method('DELETE')
                                  
                                      <button type="submit" class="btn btn-danger" >Delete</button>
                                  </form>
                                   </div>
                                  </div>
                                  {{-- modal --}}
                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="{{ route('Preschoolreservations.update',$reservation->id) }}" method="post"  files=true>
                                            @method('PUT')
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Status :</label>
                                                <select name="select" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                  <option selected>Select One</option>
                                                  <option value="pending">pending</option>
                                                  <option value="accepted">accepted</option>
                                                  <option value="rejected">rejected</option>
                                                </select>
                                               
                                                
                                               
                                            </div>
                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                            {{-- <a href="{{route('profile.show')}}" class="option-btn" style="border: none; color:#000040 !important"><button style="background-color: yellow !important; color:#000040 !important" class="btn btn-primary">Back To Dashboard</button></a> --}}
                                        </form>
                                            
                                      </div>
              
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="booking"></div>
                  @endforeach
                </div>
        </section> 
      @elseif(!isset($reservation))
      <section id="explorecourses">
          <div class="title">
            <h2><span style="color: #F48257;">My </span>Reservation</h2>
          </div>
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-white mb-5">
                      <div class="alert alert-warning" role="alert">
                        There is no <a  class="alert-link">Reservation</a> Yet.
                      </div>
     
                    </div>
                </div>
            </div>
          </div>
      </section>
      @endif

@endif

<section id="explorecourses">
  <section class="content-item" id="comments">
    <div class="container">   
      <div class="row">
            <div class="col-sm-8">   
                <form method="POST" action="{{ route('reviews.preschoolStore' ,$preschool->id)}}">
                  @csrf
                  <input type="hidden" name="preschool_id" value="{{$preschool->id }}">
                  <h3 class="pull-left">Add Comment</h3>
                  
                    <fieldset>
                        <div class="row" >
                           
                            <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                <textarea class="form-control"  id="message" name="comment" placeholder="Your message" required=""></textarea>
                            </div>

            
                        </div>  	
                    </fieldset>
                    <p  style="font-size: 25px;font-weight: 600;">
                      <button class="buttonyellow" type="submit" style="border: none">
                        Comment</button>
                      </p>
                    

                </form>
                
                
                <!-- COMMENT  - START -->
                @foreach($preschool->reviews as $review)
          
                <div class="media">
                    <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                    <div class="media-body  d-flex flex-column">
                        <h4 class="media-heading">{{$review->user->name}}</h4>
                        <p >{{$review->comment }}</p>
                        <ul class="list-unstyled list-inline media-detail pull-left">
                          <li><i class="fa fa-calendar"></i>{{$review->created_at }}</li>
                        </ul>
                     
                    </div>
                </div>
                @endforeach
                <!-- COMMENT  - END -->

              
                
              
                
              
            
            </div>
        </div>
    </div>
</section>
  </section>

      
    



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>



                                                                                   

@endsection