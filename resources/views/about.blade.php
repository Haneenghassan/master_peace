@extends('layout.master')
@section('title','About Us')
@section('about')


    <div >
        <div class="row justify-content-start">

            <div class="col-4 ms-5">
                <img src="./photos/RSVL-9-2019-MKTG-053-e1576003010784.jpg" class="img-fluid imgsection4 mt-3"  style="height: 80vh;" alt="photojoinus">
            </div>
            <div class="col-6 ms-5 ">
                <img src="./photos/unique-removebg-preview (1).png" class="img-fluid imgsection4 mt-3 " alt="photojoinus">
                <p>
                    The Happy Valley experience revolves around the comfort and security you feel in choosing the best that can be provided for your child and the pride you feel in choosing the best for your child. The possibility of accessing all the options available to your child in an easy and fast way, without the need to make a great effort.               
                 </p> 
                 @if(auth()->user()->is_admin =='2' || auth()->user()->is_admin =='3')
            <div>
                <p  style="font-size: 30px;font-weight: 600;">
                    <a class="buttonyellow"  href="{{route('profile.create')}}"  >Join Us</a>
                </p>
            </div>
            @endif
            </div>
           
        </div>
    </div>

    <div style="margin-left:10%"> 
      <img   style="height: 50vh" src="photos/elephant-and-birds_500px-removebg-preview.png" class="img-fluid " alt="about">
      <img style="height: 50vh" src="photos/elephant-and-birds_500px-removebg-preview.png" class="img-fluid " alt="about">
      <img style="height: 50vh" src="photos/elephant-and-birds_500px-removebg-preview.png" class="img-fluid " alt="about">
    </div>
  <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>
  
@endsection