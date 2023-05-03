@extends('layout.master')
@section('title','Profile Babysitter')
@section('Profileshow')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<section>
    <div class="contain">
        <div class="box">
            <img class="imageprofile" src="{{URL::asset("/storage/image/$babysitter->img")}}"  alt="">
            <ul>
                <li style="color:#F2F0EF"><span style="color: #F48257;">Name</span> :{{$babysitter->first_name}} {{$babysitter->last_name}}</li>
                <li style="margin-top: 2%;color:#F2F0EF"><span style="color: #F48257;">Contact</span> : {{$babysitter->mobile}}</li>

                <li> 
                  @if(auth()->user()->is_admin =='3')
                  <p  style="font-size: 25px;font-weight: 600;">
                    <a class="buttonyellow" href="{{route('profile.editBabysitter',$babysitter->id)}}">
                      Edit Profile</a>
                    </p>
                    @endif
                    @if(auth()->user()->is_admin =='0')
                    <p  style="font-size: 25px;font-weight: 600;">
                      <a class="buttonyellow"   href="{{route('reservations.show',$babysitter->id)}}">
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
            <li>babysitter</li>
          </ul>
          <ul>
            <h3>Country</h3>
            <li>JORDAN</li>
          </ul>
          <ul>
            <h3>Description</h3>
            <p>{{$babysitter->description}}</p>
          </ul>
          <ul>
            <h3>Contact</h3>
            <li> {{auth()->user()->email}}</li>
          </ul>
          {{-- <ul>
            <p  style="font-size: 30px;font-weight: 600;">
              <a class="buttonyellow"  href="{{route('reservations.show',$babysitter->id)}}">
                Make Reservation</a>
              </p>
            </ul> --}}
          </div>
        </div>
        
        
        
      </section>

      
      @if(auth()->user()->is_admin == '3')
      @if(isset($reservation))
      <section id="explorecourses">
        <div class="title">
          <h2><span style="color: #F48257;">My </span>Reservation</h2>
          
        </div>
        @foreach ($reservations as $reservation)
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

                                              <div class="mb-3">
                                                  <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Reservation Date:</span>
                                                  <span class="bg-light-blue">{{$reservation->start_time}} - {{$reservation->end_time}}</span>
                                              </div>
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
                                    <a type="button" class="btn btn-success " style="margin-left: -5%"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="{{Route('reservations.edit',$reservation->id)}}"><i class="fa fa-edit"></i>Edit</a>
                                   </div>
                                   <div>
                                    <form method="POST" action="{{ route('reservations.destroy', $reservation->id) }}">
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
                                          <form action="{{ route('reservations.update',$reservation->id) }}" method="post"  files=true>
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

{{-- Review Section --}}
        <section id="explorecourses">
        <section class="content-item" id="comments">
          <div class="container">   
            <div class="row">
                  <div class="col-sm-8">   
                      <form method="POST" action="{{ route('reviews.store' ,$babysitter->id) }}">

                        @csrf
                        <input type="hidden" name="babysitter_id" value="{{$babysitter->id }}">
                        <h3 class="pull-left">Add Comment</h3>
                        
                          <fieldset>
                              <div class="row" >
                                 
                                  <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                      <textarea class="form-control"  id="message" name="comment" placeholder="Your message" required=""></textarea>
                                  </div>

                  
                              </div>  	
                          </fieldset>
                          {{-- <button type="submit" class="btn btn-normal btn-block  pull-left" style="background:#F48257;">Submit</button> --}}
                          <p  style="font-size: 25px;font-weight: 600;">
                            <button class="buttonyellow" type="submit" style="border: none">
                              Comment</button>
                            </p>
                          

                      </form>
                      
                      
                      <!-- COMMENT  - START -->
                      @foreach($babysitter->reviews as $review)
                      <div class="media">
                          <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                          <div class="media-body  d-flex flex-column">
                              <h4 class="media-heading">{{$review->user->name}}</h4>
                              <p >{{ $review->comment }}</p>
                              <ul class="list-unstyled list-inline media-detail pull-left">
                                <li><i class="fa fa-calendar"></i>{{ $review->created_at }}</li>
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
        
        @endsection
     