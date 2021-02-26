@extends('layouts.nav')

@section('content')

<section class="event-title-block">
    <div class="main-title-container">
        <div id="mainEventTitle">
            Eventos
        </div>
    </div>

    <div class="ellipse-transition">
        <a href="#section1"><i id="scrollButton" class="fa fa-chevron-down"></i></a>
    </div>

    <style>
        #mainEventTitle {
            color: white;
            font-size: 5vw;
            padding-left: 15vw;
            padding-top: 5vh;
            letter-spacing: 3px;
            text-align: center;
            font-weight: bolder;
            display: inline-block;
        }

        .event-title-block {
            position: relative;
            padding-bottom:25%;
            padding-top:10%;
            overflow: hidden;
        }

        .event-title-block:before {
            position: absolute;
            top: 0;
            left: 0;
            background-image: url('{{asset('img/IscteEventTitleBlock.jpg')}}');
            background-size: 100%;
            background-repeat: no-repeat;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            filter: brightness(1);
        }

        .ellipse-transition {
            background: white;
            text-align: center;
            border-radius: 50%;
            position: absolute;
            bottom: 0;
            padding-top:25px;
            height:200px;
            transform: translateY(50%) translateX(-5%);
            width:110%;
        }

        #scrollButton {
            font-size: 3vw;
            color: #5e5e5e;
            transform: scale(1.1, 1);
            transition: .2s;
        }

        #scrollButton:hover {
            transform: scale(1.2, 1.1) translateY(8px);
            transition: .2s;
        }
    </style>
</section>

<section id="section1">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <h2 id="novidadesScreen" class="letter3">
        Novidades
    </h2>
    <div class="highlighted-event-container">
        <div class="mx-auto">
            <div class="highlighted-event-slider owl-carousel mx-auto">

                @foreach($highlights as $event)
                <a class="highlighted-event-link" onclick="highlightedEventLink(this, {{$event->id}})">
                    <div class="highlighted-event-card">

                        <img class="highlighted-event-img" src="{{$event->image1}}">

                        <div class="highlighted-event-body-bg"></div>

                        <div class="highlighted-event-card-body">
                            <div class="highlighted-event-body-title">
                                {{$event->event_name}}
                            </div>
                            <div class="highlighted-event-body-description text-wrap text-truncate">
                                {{$event->event_description}}
                            </div>
                            <div class="date-time-location-carousel row">
                                <div class="date-time-col"><i class="fas fa-clock"></i> {{ date('H:i', strtotime($event->event_time)) }} GMT</div> <div class="date-time-col"><i class="far fa-calendar"></i> {{ date('d/m/y', strtotime($event->event_date))}} </div> <div class="col location-carousel"><i class="fas @if(strcasecmp($event->event_location, 'Online') != 0) fa-map-marker-alt @else fa-globe @endif icon"> </i> {{$event->event_location}}</div>
                            </div>
                            <div class="highlighted-event-card-body-seemore">
                                See more ⇀
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>



            <style>

                .owl-carousel {
                    display: flex !important;
                    align-items: center;
                }

                .main-title-container {
                    text-align: left;
                }

                #novidadesScreen {
                    font-size:70px;
                    text-align:center;
                    color:#26233C;
                    margin-bottom: 75px;
                }

                .highlighted-event-container {
                    width: 100%;
                    height: 50%;
                    margin-bottom: 100px;
                }

                .highlighted-event-card {
                    outline: none;
                    overflow: hidden;
                    margin-bottom:10%;
                    background-color:transparent;
                    border-color: transparent;
                    display: flex;
                    margin-left: auto;
                    margin-right: auto;
                    align-self: center;
                    border-radius:8px;
                    position:relative;
                    height:45vh;
                    max-width: 60vw;
                    transform: scale(0.7, 0.7);
                    transition: .3s;
                }

                .center > a >.highlighted-event-card {
                    transform: scale(1, 1);
                    transition: .3s;
                }

                .center > a > .highlighted-event-card > .highlighted-event-body-bg,
                .center > a > .highlighted-event-card > .highlighted-event-card-body {
                    opacity: 1;
                    transition: .3s;
                }

                .center > a > .highlighted-event-card > .highlighted-event-img {
                    filter: brightness(1);
                    transition: .3s;
                }

                .highlighted-event-card-body {
                    position: absolute;
                    opacity: 0;
                    height:20%;
                    width:90%;
                    margin:2rem;
                    bottom:0;
                    transition: .3s;
                }

                .highlighted-event-body-bg {
                    background: linear-gradient(0deg, rgba(0,0,0,0.8), rgba(255,255,255,0));
                    opacity: 0;
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                    height: 35%;
                    transition: .3s;
                }

                .highlighted-event-card:hover > .highlighted-event-body-bg {
                    height: 50%;
                    transition: .3s;
                }

                .highlighted-event-img {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                    filter: blur(2px) grayscale(25%);
                    width: 100%;
                    object-fit: cover;
                    transition: .3s;
                }

                .highlighted-event-slider {
                    max-height: 45%;
                }

                .highlighted-event-body-title {
                    color:#fff;
                    font-size: 38px;
                    height:10%;
                    font-weight: bold;
                    transition: .3s;
                }

                .highlighted-event-body-description {
                    color:#fff;
                    text-align: left;
                    font-size: 20px;
                    margin-bottom:1rem;
                    -webkit-line-clamp: 2;
                    overflow : hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    height:2.5rem;
                    opacity:0;
                    transition: .3s;
                }

                .date-time-location-carousel {
                    color:#fff;
                    height:7%;
                    margin-left: 0.3rem;
                    justify-content: space-between;
                    transition: .3s;
                }

                .date-time-col {
                    width: 45%;
                    transition:.3s;
                }

                .location-carousel {
                    overflow: hidden;
                    max-width:60%;
                    width:1.3rem;
                    max-height: 1rem;
                    transition:.3s;
                }

                .highlighted-event-card:hover,  > .highlighted-event-card-body > .date-time-location-carousel > .location-carousel{
                    width: 40%;
                    transition:.3s;
                }

                .highlighted-event-card:hover > .highlighted-event-card-body > .date-time-location-carousel > .date-time-col{
                    width: 30%;
                    transition: .3s;
                }

                .highlighted-event-card:hover > .highlighted-event-card-body{
                    height: 30%;
                    transition: .3s;
                }


                .highlighted-event-card:hover > .highlighted-event-card-body > .highlighted-event-body-description{
                    padding-top: 2.5rem;
                    margin-bottom: 1.5rem;
                    height: 5rem;
                    opacity: 1;
                    transition: .3s;
                }

                .highlighted-event-card:hover > .highlighted-event-img{
                    transform: scale(1.1, 1.1);
                    transition: .3s;
                }

                .highlighted-event-card-body-seemore {
                    color: white;
                    text-align: right;
                    font-size: 18px;
                    padding-top: 2rem;
                    opacity:0;
                    transition: .3s;
                    overflow : hidden;
                    display: -webkit-box;
                    -webkit-box-orient: vertical;
                    position: absolute;
                    bottom: 0;
                    right: 0;
                }

            </style>

            <script>
                var $eventSlider = $(".highlighted-event-slider");

                setTimeout(function() {
                    $eventSlider.owlCarousel({
                        loop: true,
                        smartSpeed: 1000,
                        autoplay: true,
                        autoplayTimeout: 9000, //2000ms = 2s;
                        autoplayHoverPause: true,
                        loop: true,
                        margin: 0,
                        center: true,
                        mouseDrag: true,
                        responsive:{
                            0:{
                                items:1,
                                margin:0,
                            },
                            1300:{
                                items:3,
                            },
                        },
                    });
                }, 10);


                $eventSlider.children().each( function( index ) {
                    $(this).attr( 'data-position', index ); // NB: .attr() instead of .data()
                });

                $(document).on('click', '.owl-item>a', function() {
                    // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
                    $eventSlider.trigger('to.owl.carousel', [$(this).data("position"), $eventSlider.smartSpeed] );
                });

                function highlightedEventLink(element, event_id) {
                    if (element.parentElement.classList.contains("center")) {
                        window.location.href = ("evento/".concat(event_id))
                    }
                }

            </script>

        </div>
    </div>

    <script>
        $(function () {
            $(window).on('scroll', function () {
                if ( $(window).scrollTop() > 400 ) {
                    $('.entity1').addClass('animate__animated', 'animate__bounce');

            });
        }))
    </script>




    <!-- End Section Slider -->



</div>
</section>


<section id="section2" class="py-5 section-2">

    <div class="cardDivider"></div>

    <div class="container event-container text-center">
        <h2 class="letter3 carousel-title">
            Próximos Eventos
        </h2>

        <div>
            <div class="event-slider owl-carousel">
                @foreach($nextevents as $event)
                    <a href="/evento/{{$event->id}}">
                        <div class="event-card mx-auto">
                            <img class="event-card-img-top event-img" src="{{$event->image1}}">
                            <div class="card-ellipse">
                            </div>
                            <div class="event-card-body">
                                <div class="event-card-body-title">
                                    {{$event->event_name}}
                                </div>
                                <div class="event-card-body-caption">
                                    {{$event->event_description}}
                                </div>
                                <div class="event-card-body-seemore">
                                    See more ⇀
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</section>

<section id="search-section" style="background: #23384f;padding-bottom:6%">
    <div class="container" style="text-align:center;">
        <h1 class="search-title"> PROCURA POR MAIS EVENTOS </h1>

            <div class="row justify-content-center">

                <form class="search-form" id="search-form" method="post" action="/search">
                    @csrf
                    <div class="input-group search-group-align">
                        <input type="text" class="search-input" id="search" name="searchtext" placeholder="Workshops..." autocomplete="off">
                        <label onclick="submitSearchForm()" class="search-label" for="search"><i class="fa fa-search" style="margin-left:-160%;margin-top:20%;"></i></label>
                    </div>
                </form>
            </div>
            <div class="event-tag-row row">
                @foreach ($highlightedtags as $tag)
                <a class="event-tag-button wedge-tag" href="/search/{{$tag->tag_name}}"> {{$tag->tag_name}} </a>
                @endforeach
            </div>

    </div>
</section>

<section id="section3" class="py-5 section-2">
    <div class="cardDivider" style="margin-left: 10%;margin-top: 5rem;"></div>

    <div class="container event-container text-center">
        <h2 class="letter3 carousel-title">
            Últimos eventos
        </h2>

        <div>
            <div class="event-slider owl-carousel">

                @foreach($pastevents as $event)
                <a href="/evento/{{$event->id}}">
                    <div class="event-card mx-auto">
                        <img class="event-card-img-top event-img" src="{{$event->image1}}">
                        <div class="card-ellipse">
                        </div>
                        <div class="event-card-body">
                            <div class="event-card-body-title">
                                {{$event->event_name}}
                            </div>
                            <div class="event-card-body-caption">
                                {{$event->event_description}}
                            </div>
                            <div class="event-card-body-seemore">
                                See more ⇀
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>
        </div>

    </div>


        <script>
            setTimeout(function() { //items number only activates after window resize unless activated through timeout
                $(".event-slider").owlCarousel({
                    smartSpeed: 1000,
                    autoplay: true,
                    autoplayTimeout: 9000, //2000ms = 2s;
                    autoplayHoverPause: true,
                    margin: 25,
                    nav: false,
                    responsive:{
                        0:{
                            items:1,
                            loop: ( $('.owl-carousel > *').length > 1),
                        },
                        1024:{
                            items:3,
                            loop: ( $('.owl-carousel > *').length > 3),
                        },
                    },
                });
            }, 10);

            $("a.owl-prev ").click(function() {
                    $("div.owl-prev").click();
                })
                $("a.owl-next ").click(function() {
                    $("div.owl-next").click();
                })


            function submitSearchForm() {
                document.getElementById("search-form").submit();
            }

        </script>

        <style>
            div.owl-next, div.owl-prev{
                visibility: hidden;
                outline:none !important;
            }

            #section2, #section3 {
                background: ghostwhite;
            }

            #section1 {
                padding-top: 7%;
                background: linear-gradient(0deg, rgba(248,248,255,1) 0%, rgba(248,248,255,1) 25%, rgba(255,255,255,1) 100%);
                background-size: cover;
                background-position: center;
                padding-bottom:2rem;
            }

            #section2 {
                padding-bottom: 60px;
            }

            #section3 {

            }

            .search-title {
                font-weight: bold;
                color:white;
                font-size:2.5vw;
                padding-top:10%;
                padding-bottom:10%;
                letter-spacing:1px;
            }

            .event-tag-row {
                margin: .3rem 0 1.5rem;
                justify-content: center;
            }

            .event-tag-button {
                border-radius: 1px;
                padding: .5rem .6rem;
                margin: .3rem;
                color:white;
                background: #6d89a4;
                transition: .2s;
            }

            .event-tag-button:hover {
                background: #48748f;
                transform: scale(1.1);
                margin: .3rem .5rem;
                transition: .2s;
            }


            a.event-tag-button{
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;

                text-decoration: none;
                color: white;
            }

            .wedge-tag {
                -webkit-clip-path: polygon(calc(100% - 10px) 0, 100% 0, 100% 100% , 0 100%,  100% 10px);
                clip-path: polygon(10px 0, 100% 0, 100% 100% , 0 100%, 0 10px);
            }

            .search-form {
                max-width: 80%;
                margin-top: 2%;
                margin-top: 2%;
                position: relative;
            }

            .search-label {
                position: absolute;
                right: 2%;
                top: 50%;
                transform: translatey(-50%);
                color: #A7A8A7;
                transition: all 0.2s ease;
            }

            .search-input {
                width: 100%;
                padding: 8px 30px 8px 12px;
                border: 2px solid rgba(0, 0, 0, 0.01);
                outline: none;
                font-size: 16px;
                -webkit-box-shadow: 0px 0px 24px 12px rgba(0,0,0,0.2);
                box-shadow: 0px 0px 24px 12px rgba(0,0,0,0.2);
                color: #A7A8A7;
                font-weight: bold;
                letter-spacing: 0.5px;
                border-radius: 40px;
                transition: all 0.2s ease;
                padding-left:5%;
            }

            .search-input:focus {
                border-color:white;
            }

            .search-input:focus + label {
                transform: scale(1.05) translatey(-50%);
                color: :#7e7e7e;
            }

            .search-input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: #7e7e7e;
                opacity: 1; /* Firefox */
            }

            .search-group-align {
                margin-left: auto;
                margin-right:0;
                position:relative;
                width:40vw;
                height:50px;
                margin-top:-12%;
                margin-bottom:auto;
            }

            .carousel-title {
                text-align: left;
                font-size:3.5vw;
                color:#26233C;
            }

            .event-container {
                max-width: 72%;
                padding: 5%;
            }

            .event-card {
                overflow: hidden;
                height:30rem;
                transition:0.6s;
                border-radius:1px;
                position:relative;
                display:block;
                outline: none;
                margin-bottom: 16%;
                margin-top: 16%;
                -webkit-box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.2);
                box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.2);
                width:90%;
             }

            .event-card:hover {
                -webkit-box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.4);
                box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.4);
            }

            .event-card:hover > .event-card-body{
                transition: .3s;
                height:45%;
            }

            .event-card:hover > .card-ellipse{
                transition: .3s;
                height:53%;
            }

            .event-card:hover > .event-img{
                transition: .3s;
                transform:translateY(-30px);
                transform:scale(1.1, 1.1);
                filter:brightness(50%);
            }

            .event-card:hover > .event-card-body > .event-card-body-description{
                transition: .3s;
                transform:translateY(-50px);
                opacity:1;
            }

            .card-ellipse {
                position: absolute;
                transition: .3s;
                background-color: white;
                clip-path: ellipse(90% 56% at 49% 57%);
                /*clip-path: polygon(13% 0%, 100% 0, 100% 100%, 0 100%, 0% 18%);*/
                height: 45%;
                width: 100%;
                bottom: 0;
                -webkit-box-shadow: -10px 0 30px 5px #222;
                box-shadow: -10px 0 30px 5px #222;
            }

            .event-card:hover > .event-card-body > .event-card-body-caption{
                transition: .3s;
                transform:translateY(-0.5rem);
                opacity:1;
            }

            .event-card:hover > .event-card-body > .event-card-body-seemore{
                transition: .3s;
                margin-right: 3%;
                opacity:1;
            }

            .event-img {
                object-fit: cover;
                transition: .3s;
                height:65%;
            }

            .event-card-body {
                background:transparent;
                color: black;
                transition: .3s;
                height:35%;
                width:100%;
                padding-left:2rem;
                padding-right:2rem;
                position:absolute;
                bottom:0;
            }

            .event-card-body-title {
                text-align: left;
                font-size: 32px;
                font-weight: bold;
            }

            .event-card-body-caption {
                text-align: left;
                font-size: 20px;
                margin-bottom: 0.5rem;
                margin-top: 1.5rem;
                line-height: 21px;
                height: 66px;
                opacity:0;
                transition: .3s;
                -webkit-line-clamp: 3;
                text-overflow: ellipsis;
                overflow : hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
            }

            .event-card-body-seemore {
                text-align: right;
                font-size: 18px;
                margin-bottom: 1rem;
                padding-top: 1.8rem;
                border-bottom: 1px solid black;
                padding-bottom: 1px;
                opacity:0;
                transition: .3s;
                overflow : hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                position: absolute;
                bottom: 0;
                right: 0;
            }

            .cardDivider {
                box-sizing:border-box;
                width:90%;
                height:8px;
                background: #26233C;
            }

            @media (max-width: 1500px) {

                .event-container {
                    max-width: 95%;
                }
            }

            @media (max-width: 1200px) {

                .highlighted-event-slider {
                    padding: 0 8% 0 8%;
                }

                #mainEventTitle {
                    font-size: 6vw;
                    padding-left: 10vw;
                }

                .highlighted-event-body-title {
                    font-size: 36px;
                }

                .event-container {
                    max-width: 100%;
                }

                .carousel-title, .search-title {
                    font-size: 5vw;
                }

                #novidadesScreen {
                    font-size: 5vw;
                }
            }

            @media (max-width: 1024px) {

                #mainEventTitle {
                    font-size: 8vw;
                }

                .event-title-block {
                    padding-bottom: 20%;
                }

                .ellipse-transition {
                    visibility: hidden;
                }

                .highlighted-event-body-title {
                    font-size: 32px;
                }

                .highlighted-event-card:hover > .highlighted-event-card-body > .highlighted-event-body-description {
                    height: 4rem;
                    margin-bottom: 0.5rem;
                    padding-top: 1.5rem;
                }

                #section1 {
                    padding-top: 12%;
                }

                .event-card {
                    height: 25rem;
                }

                .event-container {
                    max-width: 75%;
                }

                .carousel-title, .search-title {
                    font-size: 6vw;
                }

                #novidadesScreen {
                    font-size: 6vw;
                }

                .search-group-align {
                    position:relative;
                    width:100%;
                    height:50px;
                    margin-top:auto;
                    margin-bottom:auto;
                    margin-left: auto;
                    margin-right:auto;
                }
            }

            @media (max-width: 768px) {

                .highlighted-event-slider {
                    padding: 0 3% 0 3%;
                }

                .highlighted-event-card {
                    max-width: 90%;
                    height: 60vh;
                }

                .highlighted-event-container {
                    margin-bottom: 0;
                }

                .event-container {
                    padding-top: 8%;
                }

                #section1 {
                    padding-top: 15%;
                }

                .carousel-title, .search-title {
                    text-align: center;
                    font-size: 7vw;
                }

                .date-time-location-carousel {
                    visibility: hidden;
                }

                .highlighted-event-card-body {
                    margin: 1rem;
                }

                .highlighted-event-card:hover > .highlighted-event-card-body > .highlighted-event-body-description {
                    opacity: 0;
                    height:0;
                }

                .highlighted-event-card:hover > .highlighted-event-card-body > .highlighted-event-card-body-seemore{
                    transition: .3s;
                    border-bottom: 1px solid white;
                    opacity:1;
                }

                .highlighted-event-card:hover > .highlighted-event-card-body{
                    height: 25%;
                }

                #novidadesScreen {
                    font-size: 7vw;
                    margin-bottom: 30px;
                }
            }

            @media (max-width: 570px) {

                .event-container {
                    max-width: 95%;
                }

                .event-title-block::before {
                    filter: brightness(0.6);
                }

                #mainEventTitle {
                    font-size: 12vw;
                    padding-left: 0;
                }

                .carousel-title, .search-title {
                    font-size: 10vw;
                }

                #novidadesScreen {
                    font-size: 10vw;
                }

                .main-title-container {
                    text-align: center;
                }
            }

            @media (max-width: 478px) {

                .event-card:hover > .event-card-body > .event-card-body-caption{
                    height: 0;
                    opacity:0;
                }
            }
        </style>

</section>



@endsection
