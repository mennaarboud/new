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
  <link type="text/css" rel="stylesheet" href="./css/Real Estate.css">


</head>



<body style="background-image: url('images/background.jpg'); background-position: auto; background-size:cover;">
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
          <li class="nav-item ">
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
          <li class="nav-item active">
            <a class="nav-link" href="contact">Contact</a>
          </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          {{-- <!-- Authentication Links --> --}}
          {{-- <!-- Authentication Links --> --}}
          @guest
            @if (Route::has('register'))
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user"></i> Sign Up</a>
          </li>
            @endif

            @else
          <li class="nav-item">
              <a class="nav-link" href="home" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <!-- Contact 1 start -->
    <div class="container" style="margin-top:75px;">

    <i><ul vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb" style="background-color: rgba(212,212,206,.5);color:#023246;">
    <li style="color:#404040;"> Current Page:&nbsp;</li>
    <li property="itemListElement" typeof="ListItem" class="first"><a href="index" property="item" typeof="WebPage">
    <span property="name" style="color:#404040;"> Home</span></a>&nbsp;>&nbsp; <meta property="position" content="1"></li> 
    <li class="active last"><span style="-webkit-text-stroke: .2px gold"> Contact</span></li></ul></i>


        <fieldset style="border:3px solid #023246;">
            <legend style="text-align:center;  width:auto; padding-left: 50px;padding-right: 50px"><h1 style="color:white;">Contact Us</h1></legend>
            <br>
            <div class="row">
                <div class="offset-lg-1 offset-md-3 col-lg-6 col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <form action="#" method="GET" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-md btn-message" style="background-color:#023246; color:white; margin-bottom: 15px">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class=" offset-lg-1 offset-md-3 col-lg-4 offset-md-0 col-md-5">
                    <h3>Contact Info</h3>
                    <div>
                        <div class="media-body">
                            <h5 class="mt-0"><i class="fa fa-map-marker-alt"></i>&nbsp; Office Address</h5>
                            <p style="margin-left:30px;">5<sup>th</sup> Settlement, Cairo, Egypt</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0"><i class="fa fa-phone"></i>&nbsp; Phone Number</h5>
                            <p style="margin-left:30px;">Office<a href="tel:002-0477-8556-552">: XXXX XXXX XXX</a><br>
                            Mobile<a href="tel:+201XXXXXXXXX">: +2 01XXXXXXXXX</a> </p>
                        </div>
                    </div>
                    <div class="media mrg-btn-0">
                        <div class="media-body">
                            <h5 class="mt-0"><i class="fa fa-envelope"></i>&nbsp; Email Address</h5>
                            <p style="margin-left:30px;"><a href="https://mail.google.com/">info@gmail.com</a><br>
                            <a href="index">http://real_estate_website.com</a></p><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    <!-- Contact 1 end -->
</body>




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