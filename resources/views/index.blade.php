<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Real Estate YAT Project</title>

  <link rel="shortcut icon" href="images/real-estate-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
  <link type="text/css" rel="stylesheet" href="css/Real Estate.css">


</head>



<body style="background-color:#f6f6f6;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#023246; color:white">
    <div class="container">
      <img src="images/real-estate-logo.png" alt="Real estate logo"></img>
      <a class="navbar-brand" href="index">Real Estate</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index">Home
              <!-- <span class="sr-only">(current)</span> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" href="properties">Properties</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="apartments">Apartments</a>
                <a class="dropdown-item" href="fur_apartments">Furnished Apartments</a>
                <a class="dropdown-item" href="#">Villas</a>
                <a class="dropdown-item" href="#">Chalets</a>
                <a class="dropdown-item" href="#">Buildings</a>
                <a class="dropdown-item" href="#">Others</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


          {{-- <!-- Authentication Links --> --}}
          @guest
            @if (Route::has('register'))
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user"></i> Sign Up</a>
          </li>
            @endif

            @else
          <li class="nav-item">
              <a  class="nav-link" href="home" aria-haspopup="true" aria-expanded="false" v-pre>
                  Welcome  &#8220; {{ Auth::user()->name }} <span class="caret"></span> &#8221;
              </a>
          </li>
          <li class="nav-item">
            
            <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                    {{ __('Logout') }}
            </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
          </li>
            @endguest
           

        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container" style="margin-top:75px;">
    <!-- breadcrumb bar -->
    <i><ul vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb" style="background-color: rgba(212,212,206,.5);color:#023246;">
    <li style="color:#404040;"> Current Page:&nbsp;</li>
    <li class="active last" style="color:#404040;"><span style="-webkit-text-stroke: .2px gold"> Home</span></li></ul></i>
    <!-- end of breadcrumb bar -->
    
    <!-- carousel & log in -->
      <div class="row">
        <div class="col-lg-3">
          <div  style="text-align:center; background-color:#D4D4CE; padding: 5px; margin-top:25px">
          <h2 class="my-4" ><span style="-webkit-text-stroke: .5px gold "><b>Real</b></span> Estate</h2>

          <form method="post" action="{{route('login')}}" style="margin-left: 15px; margin-right:15px">
            @csrf
            @guest
            @if (Route::has('register'))
          {{-- <label >Email</label><br> --}}
          <br><input placeholder="Your Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <br>
          {{-- <label>password</label><br> --}}
          <input placeholder="Your Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          
          <br>
          <input name="submit" type="submit" value="Log in" style="background-color:#023246; color:white">
          {{-- @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
          @endif --}}
          <br>
          <p style="margin-top: 5px"><small>New User?</small> <a href="{{ route('register') }}">Register Here</a></p>
            @endif

            @else
            <hr>
            <img src="images/real-estate-logo.png" alt="Real estate logo"></img>
            <h2>
              Welcome   
              <span class="caret" style="-webkit-text-stroke: .5px gold "><b>{{ Auth::user()->name }}</b></span>
            </h2>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            class="btn" style="background-color: #023246; color:#f6f6f6; margin-bottom:10px">Log Out</a>
              @endguest
          </form> 
                 
          </div>
        </div>
        <div class="col-lg-9">
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <img class="d-block img-fluid" src="images/Apartment.jpg" alt="First slide">
                  <div class="carousel-caption d-none d-md-block mb-4" style="padding: 5px; background-color:rgba(0, 0, 0, 0.5); size:auto;">
                    <h5 style="color:white;">Looking for an...</h5>
                    <h5 style="color:white;"><b>Apartment or Furnished Apartment ?</b></h5>
                  </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/villa.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block mb-4" style="padding: 5px; background-color:rgba(0, 0, 0, 0.5); color:white; size:auto;">
                    <h5 style="color:white;">Or you can get a...</h5>
                    <h5 style="color:white;"><b>Villa ?</b></h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/chalet.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block mb-4" style="padding: 5px; background-color:rgba(0, 0, 0, 0.5); color:white; size:auto;">
                    <h5 style="color:white;">Also, you can find a...</h5>
                    <h5 style="color:white;"><b>Chalet</b></h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="images/buildings.jpg" alt="fourth slide">
                <div class="carousel-caption d-none d-md-block mb-4" style="padding: 5px; background-color:rgba(0, 0, 0, 0.5); color:white; size:auto;">
                    <h5 style="color:white;">Even you need a...</h5>
                    <h5 style="color:white;"><b>Building</b></h5>
                </div>
              </div>
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
        </div>
      </div>
      <hr>
  </div>
  <div class="container">
        <!-- Special Offers -->
          <div class="main-title">
              <h1>Special Offers</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
  <div class="row no-gutters">
        <!-- card one -->
        <div class="col-lg-3"><div class="col-lg-12">
          <div class=" card wow fadeInLeft delay-04s property-box-2" style="background-color:#D4D4CE; ">
            <div class="card-img-body">
              <img src="images/property-3.jpg" alt="property-3" class="img-fluid">
            </div>
            <div class="card-body">
              <h6 class="card-title"> <small><i class="fa fa-map-marker-alt"></i></small> <b>Chalet,</b><br> &nbsp;&nbsp;&nbsp;<small>North Coast</small></h6>
              <h6 class="price"><i class="fas fa-dollar-sign"></i>&nbsp; 3,000,000 EGP</h6><hr>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <a href="#" class="btn" style="background-color: #023246; color:#f6f6f6">Details</a>
            </div>
          </div></div></div>
        <!-- end of card one -->

        <!-- card two -->
        <div class="col-lg-3"><div class="col-lg-12">
          <div class=" card wow fadeInLeft delay-04s property-box-2" style="background-color:#D4D4CE;">
            <div class="card-img-body">
              <img src="images/property-9.jpg" alt="property-9" class="img-fluid">
            </div>
            <div class="card-body">
              <h6 class="card-title"> <small><i class="fa fa-map-marker-alt"></i></small><b> Building,</b><br> &nbsp;&nbsp;&nbsp;<small>New Cairo</small></h6>
              <h6 class="price"><i class="fas fa-dollar-sign"></i>&nbsp; 27,000,000 EGP</h6><hr>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <a href="#" class="btn" style="background-color: #023246; color:#f6f6f6">Details</a>
            </div>
          </div></div></div>
        <!-- end of card two -->
        <!-- card three -->
        <div class="col-lg-3"><div class="col-lg-12">
          <div class=" card wow fadeInLeft delay-04s property-box-2" style="background-color:#D4D4CE; ">
            <div class="card-img-body">
              <img src="images/property-1.jpg" alt="property-1" class="img-fluid">
            </div>
            <div class="card-body">
              <h6 class="card-title"> <small><i class="fa fa-map-marker-alt"></i></small><b> Furnished Apartment,</b><br> &nbsp;&nbsp;&nbsp;<small>Damietta</small></h6>
              <h6 class="price"><i class="fas fa-dollar-sign"></i>&nbsp; 1,500,000 EGP</h6><hr>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <a href="#" class="btn" style="background-color: #023246; color:#f6f6f6">Details</a>
            </div>
          </div></div></div>
        <!-- end of card three -->
        <!-- card four -->
        <div class="col-lg-3"><div class="col-lg-12">
          <div class=" card wow fadeInLeft delay-04s property-box-2" style="background-color:#D4D4CE; ">
            <div class="card-img-body">
              <img src="images/apart.jpg" alt="apart" class="img-fluid">
            </div>
            <div class="card-body">
              <h6 class="card-title"> <small><i class="fa fa-map-marker-alt"></i></small> <b>Apartment,</b><br> &nbsp;&nbsp;&nbsp;<small>El Shorouk</small></h6>
              <h6 class="price"><i class="fas fa-dollar-sign"></i>&nbsp; 2,500,000 EGP</h6><hr>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
              <a href="#" class="btn" style="background-color: #023246; color:#f6f6f6">Details</a>
            </div>
          </div></div></div>
        <!-- end of card four -->
    </div>
  </div>



<!-- Testimonial 2 start -->
<div class="testimonial-2 overview-bgi" style="background-image: url(images/testimonial-property.jpg)">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-lg-2 col-lg-8">
                <div class="testimonial-inner">
                    <header class="testimonia-header">
                        <h1>Our Staff</h1>
                    </header>
                    <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="images/avatar-2.jpg" alt="avatar-2" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                        </p>
                                        <div class="author-name">
                                            Emma Connor
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="avatar" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                        </p>
                                        <div class="author-name">
                                            Martin Smith
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <div class="avatar">
                                            <img src="images/avatar-3.jpg" alt="avatar-3" class="img-fluid rounded">
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae.
                                        </p>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
                            <span class="slider-mover-left" aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
                            <span class="slider-mover-right" aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br/><br/><br/><br/>
<!-- Testimonial 2 end -->




<!-- Footer -->
<footer class="py-3 fixed-bottom" style="background-color:#023246; color:white">
    <div class="container" >
      <p class="m-0 text-center text-white" style="border-bottom: honeydew 1px">Copyright &copy; Real Estate Website 2020</p>

      <div class="offset-lg-5 offset-md-5 offset-xs-5 col-lg-2 col-md-2 col-xs-2">
        <ul class="media-list d-flex justify-content-center justify-content-md-between">
          <li data-wow-delay="1s" class="wow fadeIn" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
            <a target="_blank" href="https://www.facebook.com/">
            <img src="images/facebook.png" style="max-width: 18px;"></a></li>
          <li data-wow-delay="1s" class="wow fadeIn" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
            <a target="_blank" href="https://www.instagram.com/">
            <img src="images/instagram.png" style="max-width: 18px;"></a></li>
          <li data-wow-delay="1s" class="wow fadeIn" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
            <a target="_blank" href="https://www.youtube.com/">
            <img src="images/youtube.png" style="max-width: 18px;"></a></li>
          <li data-wow-delay="1s" class="wow fadeIn" style="visibility: visible; animation-delay: 1s; animation-name: fadeIn;">
            <a target="_blank" href="https://www.linkedin.com/">
            <img src="images/linkedin.png" style="max-width: 18px;"></a></li>
        </ul>
      </div>
    </div>
    <!-- /.container -->
  
  </footer>

  </body>
  </html>