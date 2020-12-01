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
          <li class="nav-item">
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
          <li class="nav-item active">
          <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user"></i> Sign Up</a>
          </li>
          @endif

          @else
          <li class="nav-item">
            <a class="nav-link" href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
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

  <!-- /////////////////////////////////////////////////////////////////////////////// -->
  <center>
  <div class="container" style="margin-top:80px; margin-bottom:80px;">

  <i><ul vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb" style="background-color: rgba(212,212,206,.5);color:#023246;">
  <li style="color:#404040;"> Current Page:&nbsp;</li>
  <li property="itemListElement" typeof="ListItem" class="first"><a href="index" property="item" typeof="WebPage">
  <span property="name" style="color:#404040;"> Home</span></a>&nbsp;>&nbsp; <meta property="position" content="1"></li> 
  <li class="active last"><span style="-webkit-text-stroke: .2px gold"> Sign Up</span></li></ul></i>

      <fieldset style="border:3px solid #023246; " >
          <legend style="text-align:center;  width:auto; padding-left: 50px;padding-right: 50px"><h1 style="color:white;">Registeration</h1></legend>
          <br>

            <div class="row">
              <form class="px-5 offset-lg-3 col-lg-6 " name="form1" method="post" action="{{ route('register') }}">
                @csrf
              {{-- <label for="name"> User Name</label><br> --}}
              <input placeholder="User Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror<br>
              {{-- <label for="email">Email</label><br> --}}
              <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror<br>
                  
              {{-- <label for="password"> Password   </label><br> --}}
              <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror<br>


              {{-- <label for="Confirm Password"> Password Confirmation </label><br> --}}
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror<br>


              {{-- <label for="address">Address</label><br> --}}
              <input placeholder="Address" id="address" type="text" class="form-control" name="address" required autocomplete="address"><br>
              {{-- <label for="contact">Mobile</label><br> --}}
              <input placeholder="Mobile" id="contact" type="text" class="form-control" name="contact" required autocomplete="contact"><br>
          

              <button type="submit" style="background-color:#023246; color:white">
                {{ __('Register') }}
              </button><p> Register Now</p>
              
            
              </form></div>
      </fieldset>
  </div>
  </center>
  
  
  <footer class="py-3 fixed-bottom" style="background-color:#023246; color:white">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Real Estate Website 2020</p>
      </div>
  </footer>

</body>
</html>