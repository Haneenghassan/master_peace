@extends('layout.master')
@section('title','reservationForm')
@section('reservationForm')

@if( isset($babysitter))
<div class="container" style="margin-top: 5%;background-image: url(photos/31NnfrsEplL._AC_.jpg);">
  <form action="{{route('reservations.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row jumbotron box8">
      <div class="col-sm-12 mx-t3 text-center">
        <h1 style="margin-bottom: -10%;">Reservation Form</h1>
      </div>
  

            <div class="col-sm-6 form-group mb-5">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" id="name-f" placeholder="Enter your first name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="last_name">Last name</label>
              <input type="text" class="form-control" name="last_name" id="name-l" placeholder="Enter your last name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="mobile">Phone Number</label>
              <input type="text" class="form-control" name="mobile" id="Phone_Number" placeholder="Phone Number" required>
            </div>
         
            
            <div class="col-sm-6 form-group mb-5">
                <label for="child_firstname">Child First Name</label>
                <input type="text" class="form-control" name="child_firstname" id="name-cf" placeholder="Enter your Child first name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
                <label for="child_lastname">Child Last Name</label>
                <input type="text" class="form-control" name="child_lastname" id="name-cl" placeholder="Enter your Child Last name." required>
            </div>

            <div class="col-sm-6 form-group mb-5">
                <label for="	child_age">Child Age</label>
                <input type="text" class="form-control" name="child_age" id="DOB" placeholder="Enter your Child Last name." required>
            </div>
            
           


              <div class="col-sm-6 form-group mb-5">
                <label for="first_name">babysitter name</label>
                <input type="text" name="first_name" class="form-control" id="pass" placeholder="{{$babysitter->first_name}} {{$babysitter->last_name}}" disabled>
                <input type="hidden" name="id" class="form-control" value="{{ $babysitter->id }}">

              </div>

            <div class="col-sm-6 form-group mb-5">
              <label for="start_time">start Date</label>
              <input type="datetime-local" name="start_time" class="form-control" id="pass" placeholder="Enter your password." required>
            </div>
          
            <div class="col-sm-6 form-group mb-5">
              <label for="end_time">End Date</label>
              <input type="datetime-local" name="end_time" class="form-control" id="pass" placeholder="Enter your password." required>
            </div>
            {{-- <div class="col-sm-6 form-group mb-5">
              <input type="hidden" value="{{$babysitter->id}}" name="babysitter_id" class="form-control">
            </div> --}}
          
      
            <div class="col-sm-12 form-group mb-5">
                {{-- <a class="buttonyellow float-right"  type="submit"  >Reservation</a> --}}
               <button class="btn btn-primary float-right">Submit</button> 
            </div>
      
          </div>
        </form>
      </div>
    
    @elseif(isset($preschool))
      <div class="container" style="margin-top: 5%;background-image: url(photos/31NnfrsEplL._AC_.jpg);">
        <form action="{{route('Preschoolreservations.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row jumbotron box8">
            <div class="col-sm-12 mx-t3 text-center">
              <h1 style="margin-bottom: -10%;">Reservation Form</h1>
            </div>
        
      
                  <div class="col-sm-6 form-group mb-5">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="name-f" placeholder="Enter your first name." required>
                  </div>
                  <div class="col-sm-6 form-group mb-5">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" name="last_name" id="name-l" placeholder="Enter your last name." required>
                  </div>
                  <div class="col-sm-6 form-group mb-5">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
                  </div>
                  <div class="col-sm-6 form-group mb-5">
                    <label for="mobile">Phone Number</label>
                    <input type="text" class="form-control" name="mobile" id="Phone_Number" placeholder="Phone Number" required>
                  </div>
               
                  
                  <div class="col-sm-3 form-group mb-5">
                      <label for="child_firstname">Child First Name</label>
                      <input type="text" class="form-control" name="child_firstname" id="name-cf" placeholder="Enter your Child first name." required>
                  </div>
                  <div class="col-sm-3 form-group mb-5">
                      <label for="child_lastname">Child Last Name</label>
                      <input type="text" class="form-control" name="child_lastname" id="name-cl" placeholder="Enter your Child Last name." required>
                  </div>
      
                  <div class="col-sm-3 form-group mb-5">
                      <label for="	child_age">Child Age</label>
                      <input type="text" class="form-control" name="child_age" id="DOB" placeholder="Enter your Child Last name." required>
                  </div>
                  
                 
      
      
                    <div class="col-sm-6 form-group mb-5">
                      <label for="first_name">preschool name</label>
                      <input type="text" name="first_name" class="form-control" id="pass" placeholder="{{$preschool->first_name}} {{$preschool->last_name}}" disabled>
                      <input type="hidden" name="id" class="form-control" value="{{$preschool->id }}">
      
                    </div>
      
                  
                
            
                  <div class="col-sm-12 form-group mb-5">
                      {{-- <a class="buttonyellow float-right"  type="submit"  >Reservation</a> --}}
                     <button class="btn btn-primary float-right">Submit</button> 
                  </div>
            
                </div>
              </form>
            </div>

    

    @endif


    <div> 
      <img src="/photos/kc_footer-illustration.png" class="img-fluid " alt="registration">
    </div>

    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>    
</body>
</html>

@endsection