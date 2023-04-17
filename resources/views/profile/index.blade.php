@extends('layout.master')
@section('title','Profileuser')
@section('Profile')



        {{-- Preschool Section --}}
    
    

@foreach ($preschools as $preschool)

  <section>
    <div class="contain">
        <div class="box">
            <img class="imageprofile" src="{{URL::asset("/storage/image/$preschool->img")}}"  alt="">
            <ul style="margin-top: -3%">
                <li>{{$preschool->first_name}} {{$preschool->last_name}}</li>
                <li  style="margin-top: -1%">Contact</li>
                <li style="margin-top: -2%">{{$preschool->mobile}}</i>
            </ul>
            <a  href="{{route('profile.edit',['preschool' =>$preschool['id']])}}" class="btn " type="button" type="submit" style="background-color: #F48257 ;color:white;" >Edit Profile</a>

        </div>
        
        @endforeach
        <div class="About">
            <ul>
                <h1>about</h1>
            </ul>

            <ul>
                <h3>Work</h3>
                @if(auth()->user()->is_admin == '2')
                <li>Preschoole</li>
                @else
                <li>{{auth()->user()->name}}</li>
                @endif
            </ul>
            <ul>
                <h3>Country</h3>
                <li>JORDAN</li>
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
            <?php $rr = $preschool->schoolimgs ?>
            @foreach($rr as $image)
          <div class="carousel-item @if($loop->first) active @endif">
            <img class="d-block w-100" src="{{URL::asset("storage/image/".$image['image'])}}" style="height: 60vh" alt="First slide">
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
  
    <section id="explorecourses">
<div class="title">
    <h2><span style="color: #F48257;">My </span>Reservation</h2>
<a href="./login.html">+ Add Course</a>
</div>
        <div class="container">
            <div class="card">
                <h5 class="card-header">RESERVATIONS</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>image</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>password</th>
                        <th>role</th>
                        <th>action</th>

                      </tr>
                    </thead>
                   
                    <tbody class="table-border-bottom-0">
                      

                      
                      <tr>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                          
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>jjjjjjj</strong></td>
                       
                        {{-- email --}}
                        <td></td>
                        {{-- email --}}


                    {{-- phone  --}}
                    <td></td>
                    {{-- phone  --}}


                    {{-- address --}}
                    <td></td>
                    {{-- address --}}


                    {{-- password --}}
                    <td></td>
                    {{-- password --}}




                        <td><span class="badge bg-label-primary me-1">is admin</span></td>
                        <td>
                          {{-- <a class="dropdown-item" href="{{route('user.edit', $user->id)}}"
                              ><i class='bx bxs-edit'></i> Edit
                            </a> --}}
                            <div>
                            {{-- <button type="submit" class="btn btn-outline-primary" class="button_E_D_U"><a href="{{route('user.edit', $user->id)}}">Edit</a></button> --}}
                            </div>
                          <div>
                              {{-- @csrf
                              @method('DELETE')
                                <a class="dropdown-item" href="{{route('user.destroy',$user->id)}}"
                                ><i class='bx bxs-trash'></i> Delete</a
                              > --}}
                              <br/>
                              {{-- <form action="{{Route('user.destroy',$user->id)}}" method="POST" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-primary" class="button_E_D_U">Delete</button>
                                {{-- <button type="submit">Delete</button> --}}
                              {{-- </form> --}}
                          </div>
                        </td>

                        {{-- <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('user.edit', $user->id)}}">
                                <i class="bx bx-edit-alt me-1" ></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td> --}}
                      </tr>
                      
                    </tbody>
                    {{-- @endforeach --}}
                  </table>
                </div>
              </div>
        </div>
    </section> 


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>



                                                                                   

@endsection