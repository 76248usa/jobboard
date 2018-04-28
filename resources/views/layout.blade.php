

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>School Distric Page</title>

    <!-- Bootstrap core CSS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jO --><!-- t6vLEHfe/ --><!-- JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  -->

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://d2i2zd9axwkr7h.cloudfront.net/company/sites/css/149119/secure/bd4a0474ae0011e7b444fa76f3078542.css" />
    

    <link rel="stylesheet" href="https://d2i2zd9axwkr7h.cloudfront.net/career-sites/784572dbff40d5587882fdd04d6c9bbd223f9952/index.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script>
  var AddCSS = (function(){
    function ready(fn) {
      if (document.readyState !== 'loading') {
        fn();
      } else {
        document.addEventListener('DOMContentLoaded', function listener(){
          document.removeEventListener('DOMContentLoaded', listener);
          fn();
        });
      }
    }


    function addStylesheet(href){
      var link = document.createElement('link');
      link.rel = 'stylesheet';
      link.href = href;

      ready(function(){
        document.head.appendChild(link);
      });
    }

    return function(stylesheets){
      if(!stylesheets){
        return;
      }

      if(stylesheets.constructor === Array){
        stylesheets.forEach(function(href){
          addStylesheet(href);
        });
      } else {
        var href = stylesheets;
        addStylesheet(href);
      }
    };
  })();

  AddCSS([
    'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
    'https://fonts.googleapis.com/css?family=Nunito'
  ]);
</script>
    
<style>
  .primary-color {
    color: #02548E;
  }

  .primary-color-lighter:hover, .primary-color-lighter:focus {
    color: #3670;
  }

  .primary-background-color {
    background-color:  #02548E;
  }

  .primary-background-color-lighter:hover, .primary-background-color-lighter:focus {
    background-color: #3670;
  }

  .primary-border-color {
    border-color: #02548E;
  }

  .secondary-color {
    color: #02548E;
  }

  .secondary-fill {
    fill: #02548E;
  }

  .secondary-background-color {
    background-color:  #02548E;
  }

</style>




  </head>

  <body>

    <nav class="navbar navbar-default navbar-static-top">
                <div class="container">


                    <div class="collapse navbar-collapse" id="app-navbar-collapse">

                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>

                            @endif
                        </ul>



                    </div>
                </div>
            </nav>

            

      @yield('content')

    <!-- <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">

          </div>
           <div class="col-4 text-center">

          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">





             

          </div>
        </div>
      </header>



      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic">Keller School District</h1><h2><i>an exceptional district in which to learn, work, and live</i></h2>
          <p class="lead my-3">As part of the KISD team, you will find a rewarding career, diverse experiences and unwavering commitment to our students through collaboration with talented and dedicated colleagues with a shared sense of purpose.

          KISD offers many career opportunities to develop and grow while making a real difference in our students’ lives.</p>
        </div>
      </div> -->

      <section id="section-three" class="section areYouRight">
<div class="row">
<div class="columns small-12 text-center">
<h2 class="areYouRight">Are You Right for Keller?</h2>
</div>
</div>
<div class="row">
<div class="columns small-12 medium-4">
<div onclick="" class="service">
<h4 class="service-heading">I am student focused.</h4>
<p class="service-description">In KISD, our students are at the heart of what we do. Our students' learning experiences and their outcomes are what drives our daily actions and decision-making.</p>
</div>
</div>
<div class="columns small-12 medium-4">
<div onclick="" class="service">
<h4 class="service-heading">I empower and collaborate.</h4>
<p class="service-description">We encourage and enable each other&rsquo;s growth. We have an open environment to share our thoughts, hear different perspectives, and ultimately make student informed decisions.</p>
</div>
</div>
<div class="columns small-12 medium-4">
<div onclick="" class="service">
<h4 class="service-heading">I am accountable.</h4>
<p class="service-description">We own our outcomes. We invest our time, energy, and effort to see things through.</p>
</div>
</div>
</div>
<div class="row">
<div class="columns small-12 medium-4">
<div onclick="" class="service">
<h4 class="service-heading">I am innovative.</h4>
<p class="service-description">In KISD, we are not satisfied with the status quo. We embrace change; we encourage unconventional thinking and creativity. We see opportunity for learning in every moment.</p>
</div>
</div>
<div class="columns small-12 medium-4">
<div onclick="" class="service">
<h4 class="service-heading">I believe in life-long learning.</h4>
<p class="service-description">We are committed to continuous growth and development, striving to be the best in our field.</p>
</div>
</div>
<div class="columns small-12 medium-4">
<div onclick="" class="service">
<h4 class="service-heading">I believe that regardless of the role, the work we do matters.</h4>
<p class="service-description">It takes a diverse group of passionate people to deliver an educational experience that is truly unique to KISD.</p>
</div>
</div>
</div>
</section>


      <!-- <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Featured post</a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Post title</a>
              </h3>
              <div class="mb-1 text-muted">Nov 11</div>
              <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
      </div> -->
    </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-12 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
           
          </h3>

          <div class="blog-post">
            <br><br>
            <h2 <div style="text-align:center" class="blog-post-title">Career Openings</h2><br>
           

            <p>We put a tremendous amount of thought into the people we hire. We have a rigorous application process, ensuring that we continue to hire only those individuals who demonstrate uncompromising dedication. Discover how you can apply your passions at Keller ISD.</p>
            <hr>
            <br>
            <!-- <blockquote>
              <p>An exceptional district in which to learn, work, and live
              </p>
            </blockquote> -->
           <br>

           <section id="section-four" class="alt">
<div class="section alt row">
<div class="columns small-12 text-center">
<h2 class="body-h2">Who We Are Looking For</h2>
<p class="body-p">It takes a diverse and talented team to continuously deliver the level of service and compassion our community has come to expect from Keller Independent School District.</p>
</div>
</div>
<div id="callouts" class="row">
<div id="teachers" class="columns small-12 large-6 text-center">
<h3 class="callout">Educators</h3>
<a href="{{route('teacher.index')}}" class="ghostCTA">Teach With Us</a></div>
<div class="columns small-12 large-6">
<div class="row">
<div id="healthcare" class="columns small-12 medium-6 large-6 text-center callout-sm">
<h3>Healthcare Professionals</h3>
<a href="http://jobs.kellerisd.net/healthcare-professionals" class="ghostCTA">Thrive With Us</a></div>
<div id="admin" class="columns small-12 medium-6 large-6 text-center callout-sm">
<h3>Administrative Professionals</h3>
<a href="http://jobs.kellerisd.net/administrative-professionals" class="ghostCTA">Lead With Us</a></div>
</div>
<div class="row">
<div id="edupara" class="columns small-12 medium-6 large-6 text-center callout-sm">
<h3>Educational &amp; Clerical Paraprofessionals</h3>
<a href="http://jobs.kellerisd.net/paraprofessionals" class="ghostCTA">Grow With Us</a></div>
<div id="ops" class="columns small-12 medium-6 large-6 text-center callout-sm">
<h3>Facilities, Operations, &amp; Child Nutrition</h3>
<a href="http://jobs.kellerisd.net/facilities-operations-nutrition" class="ghostCTA">Excel With Us</a></div>
</div>
</div>
</div>



            <h2 style="text-align: center">Find the right career for you</h2><br>

            <div style="text-align:center" >
            

              @if(count($categories)>0)
                @foreach($categories as $category)

             <ul>

              <li><a href="#">{{$category->name}}</a></li>
              <!-- <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li> -->
            </ul>

              @endforeach

            @endif
          </div>
          <br><br>
<!-- 
           

            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <pre><code>Example code block</code></pre>
            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <ol>
              <li>Vestibulum id ligula porta felis euismod semper.</li>
              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
            </ol>
            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
          </div><!/.blog-post -->

         <!-- <! <div class="blog-post">
            <h2 class="blog-post-title">Another blog post</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          </div><! /.blog-post -->

         <!--  <div class="blog-post">
            <h2 class="blog-post-title">New feature</h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
          </div><!/.blog-post -->

         <!--  <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav> -->

        </div><!-- /.blog-main -->

        <!-- <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          






          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div> 
        </aside> --><!-- /.blog-sidebar --> 

      </div><!-- /.row -->

    </main><!-- /.container -->

    include(partials.footer)

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
