@extends('layouts.nav')

@section('content')

<section id="eventTitleBlock" class="eventTitleBlock">
    <div style="text-align: left;">
        <div id="mainEventTitle">
            Eventos
        </div>
    </div>


    <style>
        #mainEventTitle {
            color: white;
            font-size: 75px;
            padding-left: 4rem;
            text-align: center;
            display: inline-block;
        }

        .eventTitleBlock {
            background-image: url('{{asset('img/IscteEventTitleBlock.jpg')}}');")
            background-size: 100%;
            padding-bottom:35%;
            padding-top:10%;
        }
    </style>
</section>

<section style="padding-bottom:150px;background: transparent;background-size: cover;background-position: center;">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <div class="" style="clip-path: ellipse(68% 56% at 49% 97%);margin-top: -20%;padding-top: 20%;background: white;"> </div>
    <h2 class="letter3" style="font-size:70px; text-align:center;color:#26233C; margin-bottom: 75px;">
        Novidades
    </h2>
    <div class="container highlighted-event-container">
        <div class="mx-auto">
            <div class="highlighted-event-slider owl-carousel mx-auto">
                <div class="highlighted-event-card">
                    <img class="highlighted-event-img" src="{{asset('img/ieee1.jpg')}}">
                    <div class="carousel-trapezoid">
                    </div>
                    <div class="highlighted-event-card-body">
                        <div class="highlighted-event-body-title">
                            Destaque1
                        </div>
                        <div class="highlighted-event-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tristique nulla eu mi pellentesque, eget placerat eros commodo. Fusce cursus ipsum ac vestibulum rhoncus. Morbi sed sollicitudin mi. Quisque placerat eros sit amet lorem interdum, nec facilisis tortor lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras hendrerit tellus elit. Nullam sit amet ante lectus. Etiam maximus tincidunt nibh vitae commodo. Donec placerat, elit in placerat tempus, libero risus tincidunt arcu, ac condimentum felis justo at risus. Etiam posuere erat vel vulputate placerat. Suspendisse nec aliquam nisl, et lacinia dolor. Vestibulum nisl ligula, gravida ac maximus vitae, egestas nec tellus.
                        </div>
                        <div class="date-time-location-carousel row">
                            <div class="date-time-col"><i class="fa fa-clock-o"></i> 12:00</div> <div class="date-time-col"><i class="fa fa-calendar-o"></i> 12/12/2020</div> <div class="col location-carousel"><i class="fa fa-map"></i> Av. das Forças Armadas, 1649-026 Lisboa</div>
                        </div>
                    </div>
                </div>

                <div class="highlighted-event-card">
                    <img class="highlighted-event-img" src="{{asset('img/ieee2.jpg')}}">
                    <div class="carousel-trapezoid">
                    </div>
                    <div class="highlighted-event-card-body">
                        <div class="highlighted-event-body-title">
                            Destaque2
                        </div>
                        <div class="highlighted-event-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tristique nulla eu mi pellentesque, eget placerat eros commodo. Fusce cursus ipsum ac vestibulum rhoncus. Morbi sed sollicitudin mi. Quisque placerat eros sit amet lorem interdum, nec facilisis tortor lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras hendrerit tellus elit. Nullam sit amet ante lectus. Etiam maximus tincidunt nibh vitae commodo. Donec placerat, elit in placerat tempus, libero risus tincidunt arcu, ac condimentum felis justo at risus. Etiam posuere erat vel vulputate placerat. Suspendisse nec aliquam nisl, et lacinia dolor. Vestibulum nisl ligula, gravida ac maximus vitae, egestas nec tellus.
                        </div>
                        <div class="date-time-location-carousel row">
                            <div class="date-time-col"><i class="fa fa-clock-o"></i> 12:00</div> <div class="date-time-col"><i class="fa fa-calendar-o"></i> 12/12/2020</div> <div class="col location-carousel"><i class="fa fa-map"></i> Av. das Forças Armadas, 1649-026 Lisboa</div>
                        </div>
                    </div>
                </div>

                <div class="highlighted-event-card">
                    <img class="highlighted-event-img" src="{{asset('img/ieee3.jpg')}}">
                    <div class="carousel-trapezoid">
                    </div>
                    <div class="highlighted-event-card-body">
                        <div class="highlighted-event-body-title">
                            Destaque3
                        </div>
                        <div class="highlighted-event-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tristique nulla eu mi pellentesque, eget placerat eros commodo. Fusce cursus ipsum ac vestibulum rhoncus. Morbi sed sollicitudin mi. Quisque placerat eros sit amet lorem interdum, nec facilisis tortor lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras hendrerit tellus elit. Nullam sit amet ante lectus. Etiam maximus tincidunt nibh vitae commodo. Donec placerat, elit in placerat tempus, libero risus tincidunt arcu, ac condimentum felis justo at risus. Etiam posuere erat vel vulputate placerat. Suspendisse nec aliquam nisl, et lacinia dolor. Vestibulum nisl ligula, gravida ac maximus vitae, egestas nec tellus.
                        </div>
                        <div class="date-time-location-carousel row">
                            <div class="date-time-col"><i class="fa fa-clock-o"></i> 12:00</div> <div class="date-time-col"><i class="fa fa-calendar-o"></i> 12/12/2020</div> <div class="col location-carousel"><i class="fa fa-map"></i> Av. das Forças Armadas, 1649-026 Lisboa</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



            <style>
                .butpro{
                    margin-top: 30px;
                    color: white;
                    -webkit-background-clip: text;
                    background-size: cover;
                    background-position: center;
                    background: url(img/ieee3.jpg);
                    font-size: 17px;
                    width: 114px;
                    border:1px solid white;
                    padding-left: 19px;
                    padding-right: 0px;
                    padding-top: 11px;
                    padding-bottom: 12px;
                    transition:0.1s ease-in all;
                    -moz-transition:    all 0.1s  ease-in;
                  -webkit-transition: all 0.1s  ease-in;
                  -o-transition:      all 0.1s  ease-in;
                  -ms-transition:     all 0.1s  ease-in
                }

            .butpro:hover, .butpro:active{
                border:1px solid #585A5C;
                background:transparent;
                color: #585A5C;
                transition:0.15s ease-in all;
                -moz-transition:    all 0.15s  ease-in;
                -webkit-transition: all 0.15s ease-in;
                -o-transition:      all 0.15s  ease-in;
                -ms-transition:     all 0.15s  ease-in
            }

            .carousel-trapezoid {
                position: absolute;
                transition: .3s;
                background-color: #1b4b72;
                transform: skewX(6deg);
                transform-origin: bottom left;
                height: 100%;
                width: 38%;
                left: 0;
                -webkit-box-shadow: 7px 0 30px 5px #333;
                box-shadow: 7px 0 30px 5px #333;
            }

            .highlighted-event-container {
                width: 85%;
                height:550px;
                margin-bottom: 100px;
            }

            .highlighted-event-card {
                outline: none;
                overflow: hidden;
                margin-bottom:10%;
                background-color:transparent;
                border-color: transparent;
                width:100%;
                height:550px;
                display: flex;
                border-radius:8px;
                position:relative;
            }

            .highlighted-event-card-body {
                background:transparent;
                position: absolute;
                height:100%;
                width:28%;
                margin-top:2rem;
                margin-left:2rem;
                left:0;
                transition: .2s;
            }

            .highlighted-event-img {
                max-width: 70%;
                position: absolute;
                height: 100%;
                right:0;
                object-fit: cover;
                transition: .2s;
            }

            .highlighted-event-slider {
                max-height: 450px;
            }

            .highlighted-event-body-title {
                color:#fff;
                font-size: 48px;
                height:10%;
                transition: .2s;
                font-weight: bold;
            }

            .highlighted-event-body-description {
                color:#fff;
                text-align: left;
                font-size: 20px;
                padding-top: 1.5rem;
                margin-bottom:2.3rem;
                -webkit-line-clamp: 12;
                overflow : hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                height:70%;
            }

            .date-time-location-carousel {
                color:#fff;
                height:7%;
                margin-left: 0.3rem;
                transition: .2s;
                justify-content: space-between;
            }

            .date-time-col {
                width: 45%;
                transition:.2s;
            }

            .location-carousel {
                overflow: hidden;
                max-width:1.3rem;
                max-height: 1.3rem;
                transition:.2s;
            }

            .highlighted-event-card:hover > .highlighted-event-card-body > .date-time-location-carousel > .location-carousel{
                max-width: 60%;
                transition:.2s;
            }

            .highlighted-event-card:hover > .highlighted-event-card-body > .date-time-location-carousel > .date-time-col{
                width: 20%;
                transition: .2s;
            }

            .highlighted-event-card:hover > .carousel-trapezoid{
                width: 70%;
                transition: .2s;
            }

            .highlighted-event-card:hover > .highlighted-event-card-body{
                width: 60%;
                transition: .2s;
            }


            .highlighted-event-card:hover > .highlighted-event-card-body > .highlighted-event-body-description{
                transition: .2s;
                padding-top: 2rem;
            }

            .highlighted-event-card:hover > .highlighted-event-img{
                filter: brightness(50%);
                transform: translateX(50px);
                transition: .2s;
            }

            </style>

            <script>
                setTimeout(function() {
                    $(".highlighted-event-slider").owlCarousel({
                        loop: true,
                        smartSpeed: 1000,
                        autoplay: true,
                        autoplayTimeout: 9000, //2000ms = 2s;
                        autoplayHoverPause: true,
                        loop: true,
                        margin: 15,
                        items: 1,
                    });
                }, 10);
            </script>

        </div>
    </div>

    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ( $(window).scrollTop() > 400 ) {
                    $('.entity1').addClass('animate__animated', 'animate__bounce');

            });
        });
    </script>




    <!-- End Section Slider -->



</div>
</section>

<div class="cardDivider"></div>

<section id="section2" class="py-5 section-2">

    <div class="container event-container text-center">
        <h2 class="letter3" style="font-size:300%;text-align:left;color:#26233C;">
            Esta semana
        </h2>

        <div class="mx-auto" >
            <div class="event-slider owl-carousel mx-auto">
                <div class="event-card">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee1.jpg')}}">
                    <div class="card-trapezoid">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Event1
                        </div>
                        <div class="event-card-body-caption">
                            Event1 caption
                        </div>
                        <div class="event-card-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet turpis posuere elit facilisis, sit amet vulputate lacus molestie. Mauris vel mi scelerisque, volutpat orci blandit, pulvinar lorem. Donec ullamcorper quam eu vulputate venenatis. Duis dignissim leo in dui euismod finibus. Fusce elementum tortor sit amet ante tempor auctor. Aenean urna tortor, blandit a sodales vitae, rutrum eu magna. Praesent
                        </div>
                    </div>
                </div>
                <div class="event-card">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee2.jpg')}}">
                    <div class="card-trapezoid">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Event2
                        </div>
                        <div class="event-card-body-caption">
                            Event2 captionn
                        </div>
                        <div class="event-card-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet turpis posuere elit facilisis, sit amet vulputate lacus molestie. Mauris vel mi scelerisque, volutpat orci blandit, pulvinar lorem. Donec ullamcorper quam eu vulputate venenatis. Duis dignissim leo in dui euismod finibus. Fusce elementum tortor sit amet ante tempor auctor. Aenean urna tortor, blandit a sodales vitae, rutrum eu magna. Praesent
                        </div>
                    </div>
                </div>
                <div class="event-card">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee3.jpg')}}">
                    <div class="card-trapezoid">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Event3
                        </div>
                        <div class="event-card-body-caption">
                            Event3
                        </div>
                        <div class="event-card-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet turpis posuere elit facilisis, sit amet vulputate lacus molestie. Mauris vel mi scelerisque, volutpat orci blandit, pulvinar lorem. Donec ullamcorper quam eu vulputate venenatis. Duis dignissim leo in dui euismod finibus. Fusce elementum tortor sit amet ante tempor auctor. Aenean urna tortor, blandit a sodales vitae, rutrum eu magna. Praesent
                        </div>
                    </div>
                </div>
                <div class="event-card">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee2.jpg')}}">
                    <div class="card-trapezoid">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Event4
                        </div>
                        <div class="event-card-body-caption">
                            Event4 caption
                        </div>
                        <div class="event-card-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet turpis posuere elit facilisis, sit amet vulputate lacus molestie. Mauris vel mi scelerisque, volutpat orci blandit, pulvinar lorem. Donec ullamcorper quam eu vulputate venenatis. Duis dignissim leo in dui euismod finibus. Fusce elementum tortor sit amet ante tempor auctor. Aenean urna tortor, blandit a sodales vitae, rutrum eu magna. Praesent
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="newsletterSection" style="background: rgb(123,143,131);
background: #9797aa ;padding-bottom:15%;margin-bottom: 100px"">
    <div class="container">
        <h1 class="letter2" style="text-align:center;font-size:45px;color:white;padding-top:10%;letter-spacing:1px;"> NEWSLETTER INFO</h1>
    </div>
</section>

<section id="section3" class="py-5 section-2">
    <div class="cardDivider" style="margin-left: 10%"></div>

    <div class="container event-container text-center" id="cardCarroussel2">
        <h2 class="letter3" style="font-size:300%;text-align:right;color:#26233C;">
            Últimos Eventos
        </h2>

        <div class="mx-auto" >
            <div class="event-slider owl-carousel mx-auto">
                <div class="event-card">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee1.jpg')}}">
                    <div class="card-trapezoid">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Notícia1
                        </div>
                        <div class="event-card-body-caption">
                            Notícia1 caption
                        </div>
                        <div class="event-card-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet turpis posuere elit facilisis, sit amet vulputate lacus molestie. Mauris vel mi scelerisque, volutpat orci blandit, pulvinar lorem. Donec ullamcorper quam eu vulputate venenatis. Duis dignissim leo in dui euismod finibus. Fusce elementum tortor sit amet ante tempor auctor. Aenean urna tortor, blandit a sodales vitae, rutrum eu magna. Praesent
                        </div>
                    </div>
                </div>
                <div class="event-card">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee2.jpg')}}">
                    <div class="card-trapezoid">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Notícia2
                        </div>
                        <div class="event-card-body-caption">
                            Notícia2 caption
                        </div>
                        <div class="event-card-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet turpis posuere elit facilisis, sit amet vulputate lacus molestie. Mauris vel mi scelerisque, volutpat orci blandit, pulvinar lorem. Donec ullamcorper quam eu vulputate venenatis. Duis dignissim leo in dui euismod finibus. Fusce elementum tortor sit amet ante tempor auctor. Aenean urna tortor, blandit a sodales vitae, rutrum eu magna. Praesent
                        </div>
                    </div>
                </div>
                <div class="event-card">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee3.jpg')}}">
                    <div class="card-trapezoid">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Notícia3
                        </div>
                        <div class="event-card-body-caption">
                            Notícia3 caption
                        </div>
                        <div class="event-card-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet turpis posuere elit facilisis, sit amet vulputate lacus molestie. Mauris vel mi scelerisque, volutpat orci blandit, pulvinar lorem. Donec ullamcorper quam eu vulputate venenatis. Duis dignissim leo in dui euismod finibus. Fusce elementum tortor sit amet ante tempor auctor. Aenean urna tortor, blandit a sodales vitae, rutrum eu magna. Praesent
                        </div>
                    </div>
                </div>
                <div class="event-card">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee2.jpg')}}">
                    <div class="card-trapezoid">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Notícia4
                        </div>
                        <div class="event-card-body-caption">
                            Notícia4 caption
                        </div>
                        <div class="event-card-body-description text-wrap text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet turpis posuere elit facilisis, sit amet vulputate lacus molestie. Mauris vel mi scelerisque, volutpat orci blandit, pulvinar lorem. Donec ullamcorper quam eu vulputate venenatis. Duis dignissim leo in dui euismod finibus. Fusce elementum tortor sit amet ante tempor auctor. Aenean urna tortor, blandit a sodales vitae, rutrum eu magna. Praesent
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <script>
            setTimeout(function() { //items number only activates after window resize unless activated through timeout
                $(".event-slider").owlCarousel({
                    loop: true,
                    smartSpeed: 1000,
                    autoplay: true,
                    autoplayTimeout: 9000, //2000ms = 2s;
                    autoplayHoverPause: true,
                    loop: true,
                    margin: 25,
                    nav: false,
                    items: 3,
                });
            }, 10);

            $("a.owl-prev ").click(function() {
                    $("div.owl-prev").click();
                })
                $("a.owl-next ").click(function() {
                    $("div.owl-next").click();
                })

        </script>

        <style>
            div.owl-next, div.owl-prev{
                visibility: hidden;
                outline:none !important;
            }


            .event-container {
                max-width:70%;
                padding-bottom: 60px;
                padding-top: 60px;
            }

            .event-card {
                overflow: hidden;
                height:30rem;
                background:#fff;
                transition:0.6s;
                border-radius:7px;
                position:relative;
                display:flex;
                outline: none;
                border-color:#266682;
                margin-bottom: 16%;
                margin-top: 16%;
                width:95%;
             }

            .event-card:hover > .event-card-body{
                transition: .3s;
                height:58%;
            }

            .event-card:hover > .card-trapezoid{
                transition: .3s;
                height:68%;
            }

            .event-card:hover > .event-img{
                transition: .3s;
                transform:translateY(-50px);
                filter:brightness(50%);
            }

            .event-card:hover > .event-card-body > .event-card-body-description{
                transition: .3s;
                transform:translateY(-50px);
                opacity:1;
            }

            .card-trapezoid {
                position: absolute;
                transition: .3s;
                background-color: #1b4b72;
                transform: skewY(-5deg);
                transform-origin: bottom right;
                height: 48%;
                width: 100%;
                bottom: 0;
                -webkit-box-shadow: -10px 0 30px 5px #222;
                box-shadow: -10px 0 30px 5px #222;
            }

            .event-card:hover > .event-card-body > .event-card-body-caption{
                transition: .3s;
                transform:translateY(50px);
                opacity:0;
            }

            .event-img {
                object-fit: cover;
                transition: .3s;
                height:65%;
            }

            .event-card-body {
                background:transparent;
                transition: .3s;
                height:40%;
                width:95%;
                padding-left:1.5rem;
                position:absolute;
                bottom:0;
            }

            .event-card-body-title {
                color:#fff;
                text-align: left;
                font-size: 40px;
                font-weight: bold;
            }

            .event-card-body-caption {
                color:#fff;
                text-align: left;
                font-size: 25px;
                padding-bottom: 0.5rem;
                opacity:1;
                transition: .3s;
                -webkit-line-clamp: 2;
                overflow : hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-box-orient: vertical;
            }

            .event-card-body-description {
                color:#fff;
                text-align: left;
                font-size: 19px;
                padding-bottom: 0.35rem;
                padding-top: 0.5rem;
                opacity:0;
                transition: .3s;
                -webkit-line-clamp: 7;
                overflow : hidden;
                text-overflow: ellipsis;
                display: -webkit-box;
                -webkit-box-orient: vertical;
            }

           .owl-prev, .owl-next{
               position: absolute !important;
               outline:none !important;
           }

            .owl-prev{
               top: 40%;
               outline:none !important;
               left: -30px;
            }

            .owl-next{
               top: 40%;
               outline:none !important;
               right: -30px;
            }

            #cardCarroussel2 {
                padding-top: 3rem;
            }

            .cardDivider {
                box-sizing:border-box;
                width:90%;
                height:8px;
                background: #26233C;
            }
        </style>

</section>



@endsection
