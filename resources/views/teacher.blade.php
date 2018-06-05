<!DOCTYPE html>
<html>
<title>AppsByElsabe Jobboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="{{asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif;
font-weight: lighter;} 
h3{
  color: white;
}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
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

#myNavbar {
  color: white;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 60%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
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





    <a href="{{route('teacher.index')}}" class="w3-bar-item w3-button"><i class="fa fa-home"></i>HOME</a>

    @if(Auth::check())

      @if(Auth::user()->role_id)


    <a href="http://localhost:8888/jobboard/public/admin" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ADMIN</a>

      @endif

    @endif

    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">





    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">WHERE <span class="w3-hide-small">YOU FIND YOUR DREAM JOB</span>

 </div>


  
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h2 class="w3-center">FIND THOUSANDS OF JOBS AND POST YOUR APPLICATION</h2>
  <p class="w3-center"><em>Employers find your perfect candidate here. Through our alogorithms 
  we bring you the best applicants.</em></p>
  <br><br>
    <div class="w3-center">
    
    </div>
   


  <div class="w3-row">



    <!-- Hide this text on small devices -->
    
  </div>
  
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">


</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <h3><i>Fill out the application and land your dream job today!</i></h3>
  </div>
</div>


<!-- Modal for full size images on click-->



<!-- Third Parallax Image with Portfolio Text -->


<!-- Container (Contact Section) -->

<!-- Footer -->
<footer class="w3-center w3-grey w3-padding-64 w3-opacity w3-hover-opacity-off">
 
  <div class="w3-large w3-section">


<i class="fa fa-search" style="font-size:28px"></i>
<input type="text" id="myInput" onkeyup="myFunction()" 
placeholder="Search for jobs for example, 'pharmacist' or 'engineer' " title="Type in a name">

<br>
<br>

<table id="myTable">

 <tr class="header">
    <th style="width:20%;">Title</th>
    <th style="width:20%;">Category</th>
    <th style="width:20%;">Location</th>
    <th style="width:20%;">Body</th>
    <th style="width:20%;">Posted</th>
  </tr>

  @if($posts)

  @foreach($posts as $post)

  <tr>
    <td><a href = "{{route('home.post', $post->id)}}">{{$post->title}}</a></td>
    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
    <td>{{$post->location}}</td>
    <td>{{strip_tags(str_limit($post->body, 20))}}</td>
    <td>{{$post->created_at->diffForHumans()}}</td>
  </tr>

  @endforeach

  @endif

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
