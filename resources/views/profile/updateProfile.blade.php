
@extends('layout.master')
@section('title','Profile Create')
@section('CreateProfile')
@if( isset($babysitter)){
<div class="container" style="margin-top: 5%;background-image: url(photos/31NnfrsEplL._AC_.jpg);">
  <form action="{{route('profile.updateprofile', $babysitter->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row jumbotron box8 mb-5">
      <div class="col-sm-12 mx-t3 text-center">
        <h1 style="margin-bottom: -10%;">Update Profile</h1>
      </div>
  

            <div class="col-sm-6 form-group mb-5">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name" value="{{$babysitter->first_name}}" id="name-f" placeholder="Enter your first name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="last_name">Last name</label>
              <input type="text" class="form-control" name="last_name" value="{{$babysitter->last_name}}" id="name-l" placeholder="Enter your last name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{auth()->user()->email }}" id="email" placeholder="Enter your email." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="mobile">Mobile</label>
              <input type="text" class="form-control" name="mobile" value="{{$babysitter->mobile}}" id="Phone_Number" placeholder="Phone Number" required>
            </div>

            <div class="col-sm-6 form-group mb-5">
              <label for="description">description</label>
              <input type="description" class="form-control" name="description" value="{{$babysitter->description}}" id="description" placeholder="Enter your Descrption." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="img">image</label>
              <input type="file" class="form-control" name="img" value="{{$babysitter->img}}" id="img"  >
            </div>

            
           
            <div class="col-sm-12 form-group mb-5">
              <button class="buttonyellow float-right" style="border: none;background-size: 100% 83%;">Submit</button> 
            </div>
      
          </div>
        </form>
      </div>
    }@elseif(isset($preschool)){

      <div class="container" style="margin-top: 5%;background-image: url(photos/31NnfrsEplL._AC_.jpg);">
        <form action="{{route('profile.updatePreschool', $preschool->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row jumbotron box8 mb-5">
            <div class="col-sm-12 mx-t3 text-center">
              <h1 style="margin-bottom: -10%;">Update Profile</h1>
            </div>
        
      
                  <div class="col-sm-6 form-group mb-5">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" value="{{$preschool->first_name}}" id="name-f" placeholder="Enter your first name." required>
                  </div>
                  <div class="col-sm-6 form-group mb-5">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control" name="last_name" value="{{$preschool->last_name}}" id="name-l" placeholder="Enter your last name." required>
                  </div>
                  <div class="col-sm-6 form-group mb-5">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{auth()->user()->email }}" id="email" placeholder="Enter your email." required>
                  </div>
                  <div class="col-sm-6 form-group mb-5">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" value="{{$preschool->mobile}}" id="Phone_Number" placeholder="Phone Number" required>
                  </div>
      
                  <div class="col-sm-6 form-group mb-5">
                    <label for="description">Description</label>
                    <input type="description" class="form-control" name="description" value="{{$preschool->description}}" id="description" placeholder="Enter your Descrption." required>
                  </div>

                  <div class="col-sm-6 form-group mb-5">
                    <label for="description">Maneger Name</label>
                    <input type="description" class="form-control" name="manegerName" value="{{$preschool->manegerName}}" id="description" placeholder="Enter your Descrption." required>
                  </div>

                  <div class="col-sm-6 form-group mb-5">
                    <label for="img">Profile Picture</label>
                    <input type="file" class="form-control" name="img" value="{{$preschool->img}}" id="img"  >
                  </div>

                  <div class="col-sm-6 form-group mb-5">
                    <label for="img">Preschool images</label>
                    <input type="file" class="form-control" name="images[]" id="image" multiple>
                  </div>
      
                  
                 
                  <div class="col-sm-12 form-group mb-5">
                    <button class="buttonyellow float-right" style="border: none;background-size: 100% 83%;">Submit</button> 
                  </div>
            
                </div>
              </form>
            </div>

    }

    @endif 


    

    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>    
</body>
</html>


    
      
      
      
      <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
      <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>    
    </body>
    </html>
    @endsection