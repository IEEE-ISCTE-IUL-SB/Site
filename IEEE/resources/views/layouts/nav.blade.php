<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IEEE</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/three.js/r61/three.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.4/TweenMax.min.js'></script>
        <script src='http://s3-us-west-2.amazonaws.com/s.cdpn.io/40480/OBJLoader.js'></script>

        <script href="https://cdnjs.cloudflare.com/ajax/libs/three.js/r122/three.min.js"></script>
        <script href="https://cdnjs.cloudflare.com/ajax/libs/three.js/r122/three.js" ></script>
        <script href="https://cdnjs.cloudflare.com/ajax/libs/three.js/r122/three.module.js" ></script>
        <script href="https://cdnjs.cloudflare.com/ajax/libs/three.js/r122/three.module.min.js" ></script>

        <script src="//s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic'>

        <link rel="stylesheet" href="css/style.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
                width:100%;
            }

            .text-small {
    font-size: 0.9rem !important;
}


@media only screen and (max-width: 900px) {
  .phone {
    width : 34%;
    margin-left:auto;
    margin-top:-40px;margin-bottom:-40px;

  }
}

@media only screen and (min-width: 900px) {
  .phone {
    width:43%;margin-top:-40px;margin-bottom:-40px;
  }
}
.btnn1,
.navbar-toggler-icon:active{  border: 0px solid black ;   color: #fff; }
        </style>
    </head>
    <body >
            <!-- Demo header-->



<!-- Sticky navbar-->
<header class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light py-3 " style="transition:0.2s;">
        <div class="container">

        <a href="{{ url('/') }}"class="navbar-brand" > <img alt="Logo" class="entity phone" src="{{asset('img/ieee.svg')}}" ></a>
        <button class="navbar-toggler hamburger hamburger--collapse btn btn-light btnn1"data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" >
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a class="nav-link  letter2" href="{{ url('/eventos') }}">Eventos</a></li>
                    <li class="nav-item">
                        <a class="nav-link  letter2" href="{{ url('/projetos') }}">Projetos</a></li>
                        <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle letter2" href="#" data-toggle="dropdown"> Societies  </a>
	    <div class="dropdown-menu dropdown-large" style="margin-left: -15pc;
    margin-top: 1.7pc;
    width: 33pc;
    height: 22pc;
    border:none;
    box-shadow:0px 17px 20px 12px #00000024;">
            <div class="row" style="margin-right: 24px;margin-left: 25px;margin-top:20px;">
                <div class="col dropi letter2" >

                    <a style=" text-decoration-line: none;"href="{{ url('/RAS') }}">
                    <h1 class="soc2" style="font-size:30px;">RAS
                    <h1 style="color:#808080c7;">R&A Society</h1>
                    </h1>
                    </a>
                </div>
                <div class="col dropi " >
                <a style=" text-decoration-line: none;"href="{{ url('/CS') }}">
                    <h1 class="soc2" style="font-size:30px;">CS
                    <h1 style="color:#808080c7;">Computer Society</h1>
                    </a>
                </div>
               <div class="col dropi" >
               <a style=" text-decoration-line: none;"href="{{ url('/IMS') }}">
                    <h1 class="soc2" style="font-size:30px;">IMS
                    <h1 style="color:#808080c7;">I&M Society</h1>
                    </a>
                </div>
                 <div class="col dropi" >
                 <a style=" text-decoration-line: none;"href="{{ url('/WIE') }}">
                    <h1 class="soc2" style="font-size:30px;">WIE
                    <h1 style="color:#808080c7;">WIE Society</h1>
                    </a>
                </div>
                <div class="col dropi" >
                <a style=" text-decoration-line: none;"href="{{ url('/WIE') }}">
                    <h1 class="soc2" style="font-size:30px;">MAE
                    <h1 style="color:#808080c7;">MAE Society</h1>
                    </a>
                </div>
            </div>


            <style>
            .soc{
                color:grey;
                text-decoration-line: none;
            }

            .soc:hover, .soc:active{
                color:#808080c7;
                text-decoration-line: none;
            }

            .soc2{
                color:#333333;
                text-decoration-line: none;
            }

            .soc2:hover, .soc2:active{
                color:#808080c7;
                text-decoration-line: none;
            }


            .dropi{

    padding-left: 14px;
    padding-right: 90px;
    padding-bottom: 42px;
    font-family:"font-letter1";
            }

            </style>
            </div>
                    @guest
      @if (Route::has('register'))
      @if (Route::has('login'))
                 @auth

                    @else
                        <a href="{{ route('login') }}" class="nav-link  letter2" >Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link  letter2" >Register</a>
                            </li>

                        @endif

                    @endif

            @endif
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img class="profile-img" style="width:25px;border-radius:50%;border: #4fad32 solid 1px;" src="/{{ Auth::user()->avatar }}"> {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" id="drop" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href=""</a>
                                    @can('browse_admin')
                                <a class="dropdown-item  letter1" href="{{ url('/admin') }}">
                                    Administração
                                </a>
                                @endcan

                                <a class="dropdown-item  letter1" href="">
                                        Minha Conta
                                    </a>
                                    <form id="logout-form" action="" method="POST" style="display: none;color:black;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

            </li>
            <li class="nav-item">
                        <a class="nav-link  letter2" href="{{ url('/sobrenos') }}">Sobre nós</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<footer class="footer" style="background-color:#333333;">
        <div class="container" >
            <div class="row text-light text-center py-4">
            <div class="container text-center">
      <small>Copyright &copy; IEEE-ISCTE 2021</small>
    </div>
                <div class="col-md-auto col-sm-12 ml-md-auto text-center">
           </div>
            </div>
        </div>
        </div>
    </footer>
<script>

$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() < 50 ) {
            $('.navbar').removeClass('shadow-sm bg-white ');
        } else {
            $('.navbar').addClass('shadow-sm bg-white ');
        }
    });
});

</script>
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


    </body>
</html>