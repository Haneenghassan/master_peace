
@extends('layout.master')
@section('title','Profile Create')
@section('CreateProfile')



<div class="container mb-5" style="margin-top: 5%;background-image: url(photos/31NnfrsEplL._AC_.jpg);">
  <form action="{{route('profile.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row jumbotron box8">
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
        <label for="description">Description</label>
        <input type="description" class="form-control" name="description" id="description" placeholder="Enter your Descrption." required>
      </div>
      <div class="col-sm-6 form-group mb-5">
          <label for="img">Profile Picture</label>
          <input type="file" class="form-control" name="img" id="img"  required>
        </div>

        @if(auth()->user()->is_admin == '2')
        <div class="col-sm-6 form-group mb-5">
          <label for="img">Preschool images</label>
          <input type="file" class="form-control" name="images[]" id="image" multiple required>
        </div>
        @endif

        <div class="col-sm-12 form-group mb-5">
          <button class="buttonyellow float-right" style="border: none;background-size: 100% 83%;">Submit</button> 
        </div>
 
            
          </div>
        </form>
      </div>
    
      
      
      
      <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
      <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>    
    </body>
    </html>
    @endsection