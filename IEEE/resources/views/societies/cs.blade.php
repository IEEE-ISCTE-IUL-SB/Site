@extends('layouts.nav')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<section id="societylogosection">
    <img src="{{asset('img/csblack.png')}}" class="societylogo mx-auto">
</section>


<section id="bannersection"></section>

<section id="missionsection">
    <div class="row mission-row" >

        <div class="col">
            <a class="letter2 mission-link" href="#description-section">What is CS?</a>
        </div>
        <div class="col">
            <a class="letter2 mission-link" href="#workshop-section">Workshops</a>
        </div>

    </div>
</section>

<section id="description-section">
    <div class="description-title sections-title letter2">
        What is CS?
    </div>
    <div class="description-group">
        <div class="row justify-content-center description-row">
            <div class="col-lg-8 col-sm-10 col-12 text-muted sections-description">
                With the desire to do better, innovate, discover, (re) learn and contribute the IEEE Computer Society was born. Throughout the years the computer society has been responsible for actively supporting events around the globe, allowing computer science to go further beyond.

                The Computer Society @ ISCTE-IUL aims to evolve by facing problems and by constantly learning. If you are someone who has the desire to integrate teams that aim high or if you are just looking for the right time and place to give birth to your own project, look no further. We want to help you achieving your tech goals while learning along the way.

                Your ideas matter, and so does your help!            </div>
        </div>
        <div class="row justify-content-center description-row">
            <a href="https://www.computer.org/" > <button type="button" style="margin-top:5%;"class="btn btn-csociety mx-auto">Learn more...</button> </a>
        </div>
    </div>
</section>

<section id="workshop-section">
    <h2 class="letter2 sections-title">Workshops</h2>
    <div class="container py-5 text-center event-slider-container">
        @if(count($events) > 0)
        <div class="event-slider owl-carousel">

            @foreach($events as $event)
            <a href="/event/{{$event->id}}">
                <div class="event-card mx-auto">
                    <img class="event-card-img-top event-img" src="{{Voyager::image($event->image1)}}">
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
        @else
        <div class="no-event-warning mx-auto">
            We don't have any workshops to show you yet...
        </div>
        @endif
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

        </script>

</section>

<style>
    #societylogosection {
        display:flex;
        position: relative;
        min-width: 100%;
        margin-bottom: 3.5%;
        margin-top: 2.5%;
    }

    #bannersection {
        background-position: 50% 35%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-image: url('{{asset('img/csocietybackground.jpg')}}');
        filter: brightness(0.5) saturate(1.3);
        height: 53vh;
    }

    #missionsection {
        margin-top: 3rem;
        overflow: hidden;
        margin-bottom: 3rem;
    }

    #description-section {
        padding: 4rem 4rem;
    }

    #workshop-section {
        padding-top: 7rem;
        background: white;
    }

    .societylogo {
        max-width: 480px;
        width: 25%;
        min-width:200px;
        display: block;
    }

    .mission-row {
        text-align: center;
    }

    .mission-link {
        color:dimgrey;
        font-size:145%;
        line-height: 26px;
        transition: .1s;
    }

    .event-slider-container {
        display: flex;
        min-height: 25rem;
    }

    .no-event-warning {
        font-size: 1.2vw;
        margin-top: 8%;
        color: dimgrey;
    }

    .mission-link:hover {
        text-decoration: none;
        color:dimgrey;
        font-size: 160%;
        transition: .1s;
    }

    .description-title {
        margin: 2% auto 2% 0;
    }

    .description-group {
        text-align: center;
        color: black;
    }

    .description-row {
        overflow: hidden;
        margin-top: 2rem;
    }

    .btn-csociety {
        color: #fff;
        background-color: #faa41a;
        border-color: #faa41a;
        font-weight: bold;
        letter-spacing: 0.05em;
        border-radius: 0.3rem;
    }

    .btn-csociety:hover,
    .btn-csociety:active,
    .btn-csociety:focus,
    .btn-csociety.active {
        background: #d28504;
        color: #ffffff;
        border-color: #d28504;
    }

    .event-card {
        overflow: hidden;
        height:26rem;
        transition:0.6s;
        border-radius:15px;
        position:relative;
        display:block;
        outline: none;
        margin-bottom: 16%;
        margin-top: 16%;
        -webkit-box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.2);
        box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.2);
        width:80%;
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

    .card-ellipse {
        position: absolute;
        transition: .3s;
        background-color: white;
        clip-path: ellipse(90% 56% at 49% 57%);
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
        padding-bottom: 0.5rem;
        padding-top: 1.5rem;
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
        -webkit-line-clamp: 2;
        overflow : hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    @media (max-width:1200px) {
        .mission-row {
            font-size: 18px;
        }

        .no-event-warning {
            font-size: 2vw;
        }
    }

    @media (max-width: 1024px) {
        .mission-row {
            font-size: 15px;
        }

        .event-card {
            height: 25rem;
        }

    }


    @media only screen and (min-width: 900px) {

        .sections-title {
            overflow: hidden;
            text-align: center;
            font-size: 270%;
        }

        .sections-description {
            overflow: hidden;
            text-align: center;
            font-size: 130%
        }

        .societylogo {
            max-width: 40%;
            width:26%;
            display: block;
            overflow:hidden;
        }



    }

    @media only screen and (max-width: 900px) {


        .societylogo {
            display: block;
            overflow:hidden;
            width:60%;
        }

        .sections-title{
            overflow:hidden;
            text-align:center;
            font-size:220%;
            overflow:hidden;
            width:100%;
        }

        .sections-description{
            overflow:hidden;
            text-align:center;
            font-size:135%;
        }

        .no-event-warning {
            font-size: 3vw;
        }
    }

    @media (max-width: 768px) {

        #description-section {
            padding: 1rem 1.5rem;
            font-size: 18px;
        }
    }

    @media (max-width: 576px) {
        #missionsection {
            height: 0;
            margin-bottom: 1rem;
            margin-top: 0;
            visibility: hidden;
        }

        .no-event-warning {
            font-size: 4vw;
        }
    }

    @media (max-width: 480px) {

        .mission-row {
            font-size: 16px;
        }

        .sections-description{
            font-size:100%;
        }

        .event-card:hover > .event-card-body > .event-card-body-caption{
            height: 0;
            opacity:0;
        }
    }

    @media(max-width: 390px) {
        .no-event-warning {
            font-size: 5vw;
        }
    }
</style>

@endsection
