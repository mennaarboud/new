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
          <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" href="properties">Properties</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="apartments">Apartments</a>
            <a class="dropdown-item active" href="fur_apartments">Furnished Apartments</a>
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

  <div class="container" style="margin-top:75px;">

  <i><ul vocab="https://schema.org/" typeof="BreadcrumbList" class="breadcrumb" style="background-color: rgba(212,212,206,.5);color:#023246;">
    <li style="color:#404040;"> Current Page:&nbsp;</li>
    <li property="itemListElement" typeof="ListItem" class="first"><a href="index" property="item" typeof="WebPage">
    <span property="name" style="color:#404040;"> Home</span></a>&nbsp;>&nbsp; <meta property="position" content="1"></li>
  
    <li class="active last"><span style="-webkit-text-stroke: .2px gold"> Properties</span></li></ul></i>
  </div>
<!-- ///////////////////end of breadcrumb//////////////////// -->


  <div class="container" style="margin-bottom: 75px;">
          
          @guest
              @if (Route::has('register'))
              <div class="main-title">
                <a class="nav-link" href="index" class="btn" style="background-color: #023246; color:#f6f6f6; border-radius:7px"><h4 style="color:#f6f6f6; margin-top:3px">Log In to set your offer now!</h4></a><hr>
              @endif
          @endguest
              
          {{--  /////adding property form as auth user --}}
          @auth
              @if (Auth::User()->admtype_id == 2)
              <div class="main-title">
                <h1>Make your offer here!</h1>
                <div class="row">
                  <div class=" col-lg-12 col-md-6">
                  <form method="POST" action="/property">
                    @csrf
                    {{--  <input type="hidden" name="_method" value="PUT">  --}}
                    <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Property Name</label>
                      <input type="text" value="{{ $property->name }}" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                    </div></div>
      
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Location</label>
                      <input type="text" value="{{ $property->location }}" name="location" class="form-control" id="exampleFormControlInput1" placeholder="Location">
                    </div></div>
      
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Type</label>
                        <select name="category" class="form-control" id="exampleFormControlSelect1">
                          @foreach ($type as $item)
                            <option 
                              @if ($item->id == $property->type_id)
                                  selected
                              @endif 
                              value="{{ $item->id }}">{{ $item->name }}
                            </option>
                          @endforeach
                        </select>
                    </div></div>
      
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Insert price</label>
                      <input type="text" value="{{ $property->price }}" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                    </div></div>
      
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                          <label for="exampleFormControlInput1"> Description</label>
                          <textarea class="form-control" value="{{ $property->description }}" name="description" id="exampleFormControlInput1" placeholder="Description"></textarea>
                      </div></div>
                    
                    <div class="col text-center">
                    <button type="submit" class="btn" style="background-color: #023246; color:#f6f6f6; display:center">Submit</button>
                    </div></div>
                  </form></div>
              </div><hr>
              @else

              
                  <div class="row">
                    <div class=" col-lg-12 col-md-6">
                      @if(!isset($property->id))
                      <form method = "post" action="PropertyController@store">
                      @else
                       <form method = "post" action="PropertyController@update">
                      @endif
                      @csrf
                      <div class="row">
                      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="name">Property Name</label>
                        <input type="text" name="name" value={{$property->name}} class="form-control" id="name" placeholder="Name">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                      </div></div>
        
                      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" value={{$property->location}} class="form-control" id="location" placeholder="Location">
                        <span class="text-danger">{{ $errors->first('location') }}</span>
                      </div></div>
        
                      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                          <label for="type">Select Type</label>
                          <select name="type" value={{$property->type_id}} class="form-control" id="type">
                            @foreach ($type as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                          </select>
                          <span class="text-danger">{{ $errors->first('type') }}</span>
                      </div></div>
        
                      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                      <div class="form-group">
                        <label for="price">Insert price</label>
                        <input type="text" name="price" value={{$property->price}} class="form-control" id="price" placeholder="Price">
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                      </div></div>
        
                      
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="description"> Description</label>
                            <textarea class="form-control" name="description" value={{$property->description}} id="description" placeholder="Description"></textarea>
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                          </div></div>
                      
                      <div class="col text-center">
                      <input type="hidden" name="id" value="{{{ $property->id }}}">
                      <button type="submit" class="btn" style="background-color: #023246; color:#f6f6f6; display:center">Submit</button>
                      </div></div>
                    </form></div>
                </div><hr>
                {{--  /////end of adding property form  --}}
                @endif
          @endauth


          

  {{--  <div class="row no-gutters">  --}}
    <!-- Featured Properties -->
          <div class="main-title">
              <h1>Featured Properties</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
    <div class="row">
      @foreach ($property as $item)
        <div class="col-lg-3 d-flex align-items-stretch">
          <div class=" card wow fadeInLeft delay-04s property-box-2 " style="justify-content: left; background-color:#D4D4CE; ">
            <img src="{{ $item->image }}" alt="property image" class="img-fluid">
            <div class="card-body d-flex flex-column">
              <h6 class="card-title"> <small><i class="fa fa-map-marker-alt"></i></small> <b>{{ $item->name }}</b><br> &nbsp;&nbsp;&nbsp;<small>North Coast</small></h6>
              <h6 class="price"><i class="fas fa-dollar-sign"></i>&nbsp; {{ $item->price }} EGP <hr></h6>
              <p class="card-text"  style="text-align: justify">{{ $item->description }}</p>
              @auth
                  @if (Auth::User()->admtype_id == 1)
                    <div class=" mt-auto" style="text-align: center;">
                      <form style="display: inline" action="/property/{{ $item->id }}/" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="Edit">
                        <input href="/property/{{ $item->id }}" type="submit" class="btn" style="background-color: #023246; color:#f6f6f6" value="Edit">
                      </form>

                      <form style="display: inline" action="/property/{{ $item->id }}/" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn" style="background-color: #023246; color:#f6f6f6" value="DELETE">
                      </form>
                    </div>
                  @endif
              @endauth
            </div>
          </div>
        </div>
      @endforeach
    </div></div>
       
        {{--  ///////////////////<!-- Footer -->/////////////////////////////  --}}
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