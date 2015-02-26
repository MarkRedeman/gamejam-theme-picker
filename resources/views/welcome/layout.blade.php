<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Francken Gamejam - Pick a theme</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- *****************************************************************************************************************
     BLUE WRAP
     ***************************************************************************************************************** -->
    <div id="blue">
        <div class="container">
            <div class="row">
            <a href="{{ url('/') }}">
                <h3>Francken Gamejam</h3>
            </a>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->




    <!-- *****************************************************************************************************************
     BLOG CONTENT
     ***************************************************************************************************************** -->

     <div class="container mtb">
        <div class="row">
        @include('flash::message')

            <! -- BLOG POSTS LIST -->
            <div class="col-lg-8">
                @yield('content')
            </div><! --/col-lg-8 -->


            <! -- SIDEBAR -->
            <div class="col-lg-4">
                @yield('sidebar')
            </div>
        </div><! --/row -->
     </div><! --/container -->


    <!-- *****************************************************************************************************************
     FOOTER
     ***************************************************************************************************************** -->
     <div id="footerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4>About</h4>
                    <div class="hline-w"></div>
                    <p>Francken Gamejam theme picker</p>

                    @if ($user)
                        <p>
                            You're logged in with the email adress, {{ $user->email }},
                        </p>
                        <a href="/auth/logout">Logout</a>
                    @endif
                </div>
                {{-- <div class="col-lg-4">
                    <h4>Social Links</h4>
                    <div class="hline-w"></div>
                    <p>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                    </p>
                </div> --}}
                {{-- <div class="col-lg-4">
                    <h4>Our Bunker</h4>
                    <div class="hline-w"></div>
                    <p>
                        Some Ave, 987,<br/>
                        23890, New York,<br/>
                        United States.<br/>
                    </p>
                </div>

            </div> --}}<! --/row -->
        </div><! --/container -->
     </div><! --/footerwrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina-1.1.0.js"></script>
    <script src="assets/js/jquery.hoverdir.js"></script>
    <script src="assets/js/jquery.hoverex.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/custom.js"></script>


  </body>
</html>
