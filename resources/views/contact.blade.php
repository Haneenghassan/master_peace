<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/all.min.css">
    <title>contact</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f9c0f3458b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./cssvally/about.css">
</head>

<style>
    p ,h1 , h2 , .fa-phone ,.fa-envelope ,.fa-globe {
        color: white;
    }

    .navbar {padding: 0;}

    
</style>


<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <a class="navbar-brand pt-2" href="#">
                <img src="logo-removebg-preview.png" alt="Bootstrap" width="120" height="70" id="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between " id="navbarNavDropdown">
                <ul class="nav navbar-nav ">


                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Preschool
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">kiddy planet </a></li>
                            <li><a class="dropdown-item" href="#">Cut Kids</a></li>
                            <li><a class="dropdown-item" href="#">Classy kids</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-user"></i>Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa-solid fa-right-to-bracket"></i> Login / Register</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><a class="dropdown-item" href="#">Register</a></li>
                        </ul>
                    </li>
                </ul>


            </div>


        </div>

    </nav>



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
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
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
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                        rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   
                                                        <p  style="font-size: 30px;font-weight: 600;">
                                                            <a class="buttonyellow"  href=""  >Send Message</a>
                                                        </p>
                                                   
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-md-5 p-4" style="background-image: url(/photos/swash_yellow_both.png);">
                                    <h3 style="color: white;">Let's get in touch</h3>
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
                                            <p><span>Website:</span> <a href="#" style="color: white;">HappyVally.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.2-dist/js/all.min.js"></script>
    
  
  </body>
  
  </html>