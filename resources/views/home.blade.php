
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
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>
          <li class="nav-item dropdown ">
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
  <!-- nav. end -->



  {{-- @section('content') --}}
<div class="container" style="margin-top: 80px">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card" >
              <div class="card-header">Home Page</div>

              <div class="card-body">

                @guest
                  @if (Route::has('register'))
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
                    <p style="margin-top: 5px"><small>New User?</small> <a href="{{ route('register') }}">Register Here</a></p>
                  @endif

                  @else
                  <div style="text-align: center">
                  <img src="images/real-estate-logo.png" alt="Real estate logo"></img>
                  <h2>
                    Welcome   
                    <span class="caret" style="-webkit-text-stroke: .5px gold "><b>{{ Auth::user()->name }}</b></span>
                  </h2>
                  You are logged in!<br><br>
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                  class="btn" style="background-color: #023246; color:#f6f6f6; margin-bottom:10px">Log Out</a></div>
                @endguest

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
              </div>
          </div>
      </div>
  </div>
</div>
{{--  endsection  --}}



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