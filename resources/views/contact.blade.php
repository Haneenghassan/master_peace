@extends('layout.master')
@section('title','Contact Us')
@section('contact')

    <style>
     p ,h1 , h2 , .fa-phone ,.fa-envelope ,.fa-globe {
    color: white;
    }
                                                                
    </style>

    <section >
        <div class="container bg-light mt-4">
            <div class="row justify-content-center ">
              
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Get in touch</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    {{-- <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div> --}}
                                    <form action="{{route('contacts.store')}}" method="POST" enctype="multipart/form-data"> 
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                    placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                    placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="massege" class="form-control" id="message" cols="30"
                                                    rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   
                                                        <p  style="font-size: 30px;font-weight: 600;">
                                                            {{-- <a type="submitt" class="buttonyellow"  href=""  >Send Message</a> --}}
                                                            <button class="btn btn-primary float-right">submit</button>
                                                        </p>
                                                   
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-md-5 p-3" style="background-image: url(/photos/swash_yellow_both.png);">
                                    <h3 style="color: white;margin-top: 30%;">Let's get in touch</h3>
                                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    
                                    <div class=" w-100 d-flex ">
                                        <div class="">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <div class="text pl-3" style="margin-left: 2%;">
                                            <p><span>Phone:</span> <a href="tel://1234567920" style="color: white;">+962770707725</a></p>
                                        </div>
                                    </div>
                                    <div class="w-100 d-flex ">
                                        <div >
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="text pl-3" style="margin-left: 2%;">
                                            <p><span>Email:</span> <a href="#" style="color: white;">HappyVally@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class=" w-100 d-flex " >
                                        <div >
                                            <i class="fa-solid fa-globe"></i>
                                        </div>
                                        <div class="text pl-3" style="margin-left: 2%;">
                                            <p><span>Website:</span> <a href="/landing" style="color: white;">HappyVally.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-left:10%"> 
            <img   style="height: 50vh" src="photos/elephant-and-birds_500px-removebg-preview.png" class="img-fluid " alt="about">
            <img style="height: 50vh" src="photos/elephant-and-birds_500px-removebg-preview.png" class="img-fluid " alt="about">
            <img style="height: 50vh" src="photos/elephant-and-birds_500px-removebg-preview.png" class="img-fluid " alt="about">
          </div>
    </section>


    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>
    @endsection
  
 
                                                    