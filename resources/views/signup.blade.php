<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f9c0f3458b.js" crossorigin="anonymous"></script>


</head>
<style>
    body {
    
    overflow-x: hidden;
    }

    label {
    font-weight: 600;
    color: #666;
}

.box8{
  box-shadow: 0px 0px 5px 1px #999;
}
.mx-t3{
  margin-top: -3rem;
}
.buttonyellow{
    background: url(photos/button_yellow.png) no-repeat left center transparent;
    background-size: 100% 80%;
    color: #fff !important;
    text-decoration: none;
    padding: 1em 3em 1em;
    display: inline-block;
}
</style>
<body>
    <div class="container" style="margin-top: 5%;background-image: url(photos/31NnfrsEplL._AC_.jpg);">
        <form>
            <div class="row jumbotron box8">
              <div class="col-sm-12 mx-t3 text-center">
                  <img src="photos/s__2_-removebg-preview.png" class="img-fluid " alt="registration" style="margin-bottom: -10%;">
              </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="name-f">First Name</label>
              <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter your first name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="name-l">Last name</label>
              <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter your last name." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="address-1">Phone Number</label>
              <input type="address" class="form-control" name="phone" id="Phone_Number" placeholder="Phone Number" required>
            </div>
            <div class="col-sm-12 form-group mb-5">
              <label for="Child">Number Of Child</label>
              <select  class="form-control custom-select browser-default" required>
                <option value="">-selected-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            </div>
            
            <div class="col-sm-3 form-group mb-5">
                <label for="name-cf">Child First Name</label>
                <input type="text" class="form-control" name="fname" id="name-cf" placeholder="Enter your Child first name." required>
            </div>
            <div class="col-sm-3 form-group mb-5">
                <label for="name-f">Child Last Name</label>
                <input type="text" class="form-control" name="fname" id="name-cl" placeholder="Enter your Child Last name." required>
            </div>

            <div class="col-sm-3 form-group mb-5">
                <label for="DOB">Child DOB</label>
                <input type="text" class="form-control" name="DOB" id="DOB" placeholder="Enter your Child Last name." required>
            </div>
            
            <div class="col-sm-3 form-group mb-5">
            <label for="State">Child Status</label>
            <select class="form-control custom-select browser-default" required>
              <option value="Afghanistan">-selected-</option>
                <option value="Afghanistan">Childs without disabilities.</option>
                <option value="Åland Islands">Childs with disabilities.</option>
            </select>
        </div>

            <div class="col-sm-12 form-group mb-5">
                <label for="image">image of ID</label>
                <input type="file" id="img" name="img" accept="image/*">
                <a class="buttonyellow"  href=""  >Upload</a>
              </div>
          
            <div class="col-sm-12 form-group mb-5">
              <label for="sex">Gender</label>
              <select id="sex" class="form-control browser-default custom-select">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unspesified">Unspecified</option>
              </select>
            </div>
            
            <div class="col-sm-6 form-group mb-5">
              <label for="pass">Password</label>
              <input type="Password" name="password" class="form-control" id="pass" placeholder="Enter your password." required>
            </div>
            <div class="col-sm-6 form-group mb-5">
              <label for="pass2">Confirm Password</label>
              <input type="Password" name="cnf-password" class="form-control" id="pass2" placeholder="Re-enter your password." required>
            </div>
            <div class="col-sm-12 mb-5">
              <input type="checkbox" class="form-check d-inline " id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
              </label>
            </div>
      
            <div class="col-sm-12 form-group mb-5">
                <a class="buttonyellow float-right"  href=""  >Register</a>
              <!-- <button class="btn btn-primary float-right">Submit</button> -->
            </div>
      
          </div>
        </form>
      </div>
      <div> 
          <img src="photos/kc_footer-illustration.png" class="img-fluid " alt="registration" style="margin-bottom: -10%;">
        </div>

    

    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>    
</body>
</html>