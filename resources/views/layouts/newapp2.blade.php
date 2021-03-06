<!DOCTYPE html>
<html>
<title>AppsByElsabe Jobboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif;
font-weight: lighter;
font-size: 1.25em;
;}

h3{
  color: white;
}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
    
}

p {
  font-size: 12px;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url("http://localhost:8888/jobboard/public/images/copy1 copy.jpg");
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("http://localhost:8888/jobboard/public/images/copy1 copy.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("http://localhost:8888/jobboard/public/images/copy1 copy.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>

@if (Auth::guest())
                                <a class="w3-bar-item w3-button w3-hide-small" href="{{ route('login') }}">LOGIN</a>
                                <a class="w3-bar-item w3-button w3-hide-small" href="{{ route('register') }}">REGISTER</a>
                            @else
                                
                                    <a class="w3-bar-item w3-button w3-hide-small" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                   
                                            <a class="w3-bar-item w3-button w3-hide-small" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                LOGOUT
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        
                                  
                                

                            @endif




    <a href="{{route('teacher.index')}}" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i> FIND A JOB</a>

    @if(Auth::check())

      @if(Auth::user()->role_id)
    <a href="http://localhost:8888/jobboard/public/admin" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ADMIN</a>
      @endif
      
    @endif
    
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> POST A JOB</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>





  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">POST A JOB</a>
    
  </div>
</div>

<!-- First Parallax Image with Logo Text -->


<!-- Container (About Section) -->


<div class="w3-row w3-center w3-dark-grey w3-padding-16">

 @yield('content')

</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     @yield('content3')
  </div>
</div>
<!-- Modal for full size images on click-->

<!-- Third Parallax Image with Portfolio Text -->

<!-- Container (Contact Section) -->

<!-- Footer -->
<footer class="w3-center w3-grey w3-padding-64 w3-opacity w3-hover-opacity-off">
 
  <div class="w3-large w3-section">
   
    @yield('content2')

  </div>

  <p>Powered by AppsByElsabe</a></p>   
</footer>
 
<!-- Add Google Maps -->
<script>

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
