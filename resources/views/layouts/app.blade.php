<!DOCTYPE html>
<html lang="en">
<head>
    <title> LEVI'S | @yield('title') </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add this css File in head tag-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    {!! Html::script('front/js/script.js') !!}
    {!! Html::script('front/js/bootstrap.min.js') !!}
    {!! Html::style('front/css/bootstrap.min.css') !!}
    {!! Html::style('front/css/style.css') !!}

</head>
<body id="app-layout">

    @yield('header')

    {{-- LOGO --}}
    <a href="{{ route('welcome') }}" class="container">
        <img src="{{ asset('front/images/images/log_03.jpg') }}" class="img-responsive col-md-offset-1 logo">
    </a>

    {{-- NavBar --}}
    <nav  class="navbar navbar-default" style=" margin-bottom:0px !important; border:none !important;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only"><a href="#"></a></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav container">
                <li><a href="{{  route('home')  }}">HOME  </a></li>
                <li><a href="index.php">SALE          </a></li>
                <li><a href="index.php">HADNBAGS      </a></li>
                <li><a href="index.php">WALLETS       </a></li>
                <li><a href="index.php">ACCESSORIES   </a></li>
                <li><a href="index.php">MEN'S STORE   </a></li>
                <li><a href="index.php">SHOES         </a></li>
                <li><a href="index.php">CONTACT US    </a></li>
                <li><a href="{{route('register')}}">REGISTER  </a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    @yield('content')



@yield('footer')
    <footer class="foot">
        <div class="container-fluid first">
            <div class="col-md-3 col-xs-3 col1">
                <h3>FEATURE SALE</h3>
                <div class="links">
                    <div>
                        <a href="#">Alexis Hudson</a>
                    </div>
                    <div>
                        <a href="#">American Apparel</a>
                    </div>
                    <div>
                        <a href="#">Ben Sherman</a>
                    </div>
                    <div>
                        <a href="#">Big Buddha</a>
                    </div>
                    <div>
                        <a href="#">Chanel</a>
                    </div>
                    <div>
                        <a href="#">Christian Audigier</a>
                    </div>
                    <div>
                        <a href="#">Coach</a>
                    </div>
                    <div>
                        <a href="#">Cole Haan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-3 col2">
                <h3>MENS STORE</h3>
                <div class="links">
                    <div>
                        <a href="#">Alexis Hudson</a>
                    </div>
                    <div>
                        <a href="#">American Apparel</a>
                    </div>
                    <div>
                        <a href="#">Ben Sherman</a>
                    </div>
                    <div>
                        <a href="#">Big Buddha</a>
                    </div>
                    <div>
                        <a href="#">Chanel</a>
                    </div>
                    <div>
                        <a href="#">Christian Audigier</a>
                    </div>
                    <div>
                        <a href="#">Coach</a>
                    </div>
                    <div>
                        <a href="#">Cole Haan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-3 col3">
                <h3>WOMEN STORE</h3>
                <div class="links">
                    <div>
                        <a href="#">Alexis Hudson</a>
                    </div>
                    <div>
                        <a href="#">American Apparel</a>
                    </div>
                    <div>
                        <a href="#">Ben Sherman</a>
                    </div>
                    <div>
                        <a href="#">Big Buddha</a>
                    </div>
                    <div>
                        <a href="#">Chanel</a>
                    </div>
                    <div>
                        <a href="#">Christian Audigier</a>
                    </div>
                    <div>
                        <a href="#">Coach</a>
                    </div>
                    <div>
                        <a href="#">Cole Haan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-3 col4">
                <h3>QUICK LINKS</h3>
                <div class="links">
                    <div>
                        <a href="#">Alexis Hudson</a>
                    </div>
                    <div>
                        <a href="#">American Apparel</a>
                    </div>
                    <div>
                        <a href="#">Ben Sherman</a>
                    </div>
                    <div>
                        <a href="#">Big Buddha</a>
                    </div>
                    <div>
                        <a href="#">Chanel</a>
                    </div>
                    <div>
                        <a href="#">Christian Audigier</a>
                    </div>
                    <div>
                        <a href="#">Coach</a>
                    </div>
                    <div>
                        <a href="#">Cole Haan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="second">
            <p>Copyright © <?php echo date('Y'); ?> Aditii Team </p>
        </div>
    </footer>

</body>
</html>
