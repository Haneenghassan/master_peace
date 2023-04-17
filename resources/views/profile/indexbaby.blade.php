@extends('layout.master')
@section('title','Profileuser')
@section('Profileshow')


<section>
    <div class="contain">
        <div class="box">
            <img class="imageprofile" src="{{URL::asset("/storage/image/$babysitter->img")}}"  alt="">
            <ul>
                <li>{{$babysitter->first_name}} {{$babysitter->last_name}}</li>
                <li>Contact</li>
                <li> {{$babysitter->mobile}}</li>
            </ul>
        </div>
        <div class="About">
          <ul>
            <h1>about</h1>
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
          {{-- {{dd($babysitter->id)}} --}}
          <ul>
            <p  style="font-size: 30px;font-weight: 600;">
              <a class="buttonyellow"  href="{{route('reservations.show',$babysitter->id)}}">
                Join Me</a>
              </p>
            </ul>
          </div>
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
                            {{-- <th>image</th> --}}
                            <th>first name</th>
                            <th>last name</th>
                            <th>email</th>
                            <th>mobile</th>
                            <th>start time</th>
                            <th>end time</th>
                            <th>child firstname</th>
                            <th>child lastname</th>
                            <th>child age</th>
                            
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
                                  title="Lilian Fuller">
                                  <img src="" alt="Avatar" class="rounded-circle" />
                                </li>
                              </ul>
                              
                            </td>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                            {{-- <td>
                              <a class="dropdown-item" href="{{route('user.edit', $user->id)}}"
                                  ><i class='bx bxs-edit'></i> Edit
                                </a>
                                <div>
                                <button type="submit" class="btn btn-outline-primary" class="button_E_D_U"><a href="{{route('user.edit', $user->id)}}">Edit</a></button>
                                </div>
                              <div>
                                  @csrf
                                  @method('DELETE')
                                    <a class="dropdown-item" href="{{route('user.destroy',$user->id)}}"
                                    ><i class='bx bxs-trash'></i> Delete</a
                                  >
                                  <br/>
                                  <form action="{{Route('user.destroy',$user->id)}}" method="POST" >
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary" class="button_E_D_U">Delete</button>
                                     <button type="submit">Delete</button> 
                                  </form>
                              </div>
                            </td> --}}
    
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
                      
                      </table>
                    </div>
                  </div>
            </div>
        </section>

        @endsection