
@extends('layout.master')
@section('title','Profileuser')
@section('Profileuser')

@if(!$reservations->isEmpty())
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
                                                
                                                @if(null !== $reservation->start_time && $reservation->end_time)
                                                <div class="mb-3">
                                                    <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Reservation Date:</span>
                                                    <span class="bg-light-blue">{{$reservation->start_time}} - {{$reservation->end_time}}</span>
                                                </div>
                                                @endif
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
                                              
                                              @if(null !==$reservation->babysitter)
                                              <div class="mb-3">
                                                <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Babysitter Name</span>
                                                <span class="bg-light-blue">{{$reservation->babysitter->first_name}} {{$reservation->babysitter->last_name}}</span>
                                            </div>
                                            @endif
                                            
                                            @if(null !==$reservation->preschool)
                                            <div class="mb-3">
                                              <span class="mr-2 d-block d-sm-inline-block mb-2 mb-sm-0">Preschool Name</span>
                                              <span class="bg-light-blue">{{$reservation->preschool->first_name}} {{$reservation->preschool->last_name}}</span>
                                          </div>
                                          @endif
                                          
                                      </li>
                                    </ul>
                                    <div class="buttons-to-right d-flex">
                                     {{-- <div>
                                      <a type="button" class="btn btn-success " style="margin-left: -5%"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="{{Route('reservations.edit',$reservation->id)}}"><i class="fa fa-edit"></i>Edit</a>
                                     </div> --}}
                                     <div>
                                      <form method="POST" action="{{ route('reservations.destroy', $reservation->id) }}">
                                        @csrf
                                        @method('DELETE')
                                    
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                                     </div>
                                    </div>
                                   
                                        
                                              
                                        </div>
                
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="booking"></div>
                    @endforeach
                  </div>
          </section>
          @else
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
          
        
    
@endsection




