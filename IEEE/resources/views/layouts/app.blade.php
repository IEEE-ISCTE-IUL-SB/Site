<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IS - @yield('title')</title>

    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}" defer></script>-->
    
    <script defer src="https://friconix.com/cdn/friconix.js"></script>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap&subset=latin-ext" rel="stylesheet">
    
     Styles -->
    <!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Google Fonts -->
    <link rel="shortcut icon" href="{{ asset('img/IS.png') }}">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hamburgers.css') }}" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />-->
</head>
<body>
<div id="app">
    <nav class="navbar bg-light navbar-light navbar-expand-lg">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('img/IS.png') }}" alt="Logo" title="Logo"> </a>
            <button class="navbar-toggler hamburger hamburger--collapse" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item hvr-grow hvr-underline-from-center"><a href="{{ url('/') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item hvr-grow hvr-underline-from-center"><a href="{{ url('/article/') }}" class="nav-link">Works</a></li>
                    <li class="nav-item hvr-grow hvr-underline-from-center"><a href="{{ url('/team/') }}" class="nav-link">Teams</a></li>
                    <li class="nav-item hvr-grow hvr-underline-from-center"><a href="" class="nav-link">About Us</a></li>
                    <div class="nav-item hvr-grow hvr-underline-from-center">
                        <button class="button1 button4 font-weight-bold" onclick="location.href='{{ url('/article/submit') }}'">Send us your work</button>
                    </div>
                </ul>

            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row text-light text-center py-4">
                <div class="col-sm-10 col-md-8 col-lg-6" style="padding:20px;">
                    <p style="font-size:15px;">Copyright &copy; 2020 Insight Stage - All rights reserved</p>
                </div>
                <div class="col-md-auto col-sm-12 ml-md-auto text-center">
          <div class="my-3">
            <a href="https://www.facebook.com/fista.iscte/" target="_blank"><img class="m-1 social-icon hvr-grow" style="width:20px;" src="{{ asset('img/facebook.svg') }}"></a>
            <a href="https://www.instagram.com/fista.iscte/" target="_blank"><img class="m-1 social-icon hvr-grow" style="width:20px;" src="{{ asset('img/instagram.svg') }}"></a>
            <a href="https://www.linkedin.com/company/fista/" target="_blank"> <img class="m-1 social-icon hvr-grow" style="width:20px;" src="{{ asset('img/linkedin.svg') }}"></a>
          </div>
            </div>
        </div>
        </div>
    </footer>
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    <script src="https://kit.fontawesome.com/a6273b012e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    
    <script>
        if ($('#app').height() < $(window).height()) {
            $('footer').addClass('fixed-bottom');
        } else {
            $('footer').removeClass('fixed-bottom');
        }
        $(window).resize(function() {
            if ($('#app').height() < $(window).height()) {
                $('footer').addClass('fixed-bottom');
            } else {
                $('footer').removeClass('fixed-bottom');
            }
        });
    </script>

    <script>
       $( '#app .navbar-nav a' ).on( 'click', function () {
        	$( '#app .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	        $( this ).parent( 'li' ).addClass( 'active' );
});
    </script>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function() {
            hamburger.classList.toggle("is-active");
        })
          /**
     * https://www.youtube.com/watch?v=R_-oGJBg3nw
     * Cookies fazer;
     */
    </script>
    
  


</body>

</html>