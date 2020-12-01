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
          <li class="nav-item ">
            <a class="nav-link" href="index">Home
              <!-- <span class="sr-only">(current)</span> -->
            </a>
          </li>
          <li class="nav-item active">
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
<!-- About us start -->
<div class="container" style="margin-top:75px; ">

    <i><ul vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb" style="background-color: rgba(212,212,206,.5);color:#023246;">
    <li style="color:#404040;"> Current Page:&nbsp;</li>
    <li property="itemListElement" typeof="ListItem" class="first"><a href="index" property="item" typeof="WebPage">
    <span property="name" style="color:#404040;"> Home</span></a>&nbsp;>&nbsp; <meta property="position" content="1"></li> 
    <li class="active last"><span style="-webkit-text-stroke: .2px gold"> About</span></li></ul></i>

    <div class="row">
        <div class="col-md-5">
            <div class="properties-service-v">
                <img src="images/agent.png" alt="admin" class="img-fluid">
            </div>
        </div>
                <!--End of admin photo-->

        <div class="col-md-7 align-self-center">
            <h3>Why Choose Us?</h3>
            <!--Accordion wrapper-->
            <div class="accordion" id="accordionExample">
                <!-- first card -->
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">Wider reach...</button>									
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>simply by sitting in front of your computer you can collect facts regarding various properties across the world by using property websites.<a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>

                <!-- second card -->
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">Quick means of looking for right property...</button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>the quickest means to find the right property is an online search. You can rapidly find unlimited deals and properties within a few seconds.<a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>

                <!-- third card -->
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">Saves time...</button>                     
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Today's world is too busy and people don't have enough time to explore the market to find the house to rent or purchase, for them such property listings and sites are a bonus. They just can login to such websites and seek various properties according to their requirements.<a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>

                <!-- fourth card -->
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">Give more than just Real Estate...</button>                     
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>at online property sites, you will not just receive selling and buying facilities but also profiles regarding some relevant services or facilities.<a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>
                <!-- fifth card -->
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">More convincing...</button>                     
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>Owning an online profile contributes to the builder or developers credibility. People or purchasers who choose rented house gain more belief if you have a listing on the web.<a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>
                <!-- sixth card -->
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix">Effective...</button>                     
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <p>The majority of people find your property profile and possibilities of receiving a tenant, seller, or buyer becomes quite easier.<a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Counters start -->
            <div class="counters overview-bgi" style="background-image: url(images/bg-photo-2.jpg); margin-bottom:100px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="counter-box">
                                <i class="flaticon-tag"></i>
                                <h1 class="counter">500</h1>
                                <h5>Lines of Sale</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="counter-box">
                                <i class="flaticon-badge"></i>
                                <h1 class="counter">254</h1>
                                <h5>Listings For Rent</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="counter-box">
                                <i class="flaticon-call-center-agent"></i>
                                <h1 class="counter">510</h1>
                                <h5>Our Clients</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counters end -->
        </div>
    </div>
</div>



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