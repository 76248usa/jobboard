<!DOCTYPE html>
<html>
<title>Jobboard Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif;
font-weight: lighter;}
</style>
<body class="w3-light-grey">


<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-medium" style="z-index:4">

  <a href="{{route('teacher.index')}}" class="w3-bar-item w3-button"><i class="fa fa-home"></i>Home</a>

  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">

      
                            <!-- <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li> -->
   
                        
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>{{ Auth::user()->name }}</strong></span><br>
      <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
      </form>

    </div>

    


  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="{{route('posts.index')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  All Posts</a>
    <a href="{{route('posts.create')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Create Post</a>
    

    @if($user->name == 'Elzie Crous')



    <a href="{{route('users.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  All Users</a>
    
    <a href="{{route('users.create')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Create User</a>

    @endif

    <a href="{{route('categories.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Categories</a>
    <a href="{{route('applications.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Applications</a>
    <a href="{{route('download')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  Download Resume</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$count_posts}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Posts</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$count_applications}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Applications</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$count_cat}}</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Categories</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>{{$count_users}}</h3>
          
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>

    <div class="w3-container">
    <br>
 
  @yield('content')

    </div>

   </div>

  
      
 
  <br>
  <br>
  

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
   
    <p>Powered by AppsByElsabe</p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
