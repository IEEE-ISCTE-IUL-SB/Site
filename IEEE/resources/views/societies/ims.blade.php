@extends('layouts.nav')

@section('content')





<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<section id="societylogosection">
    <img src="{{asset('img/imsblack.png')}}" class="societylogo">
</section>

<section id="missionsection" class="showw pc">
    <div class="row mission-row">

        <div class="col">
            <a href="#description-section" class="letter2 mission-link">What is IMS?</a>
        </div>
        <div class="col">
            <a href="#workshop-section" class="letter2 mission-link">Workshops</a>
        </div>

    </div>
</section>


<style>

.request{
    outline: none;
    border-radius: 40px;
    font-size: 17px;
    padding-top: 19px;
    font-family:'font-letter1';
    padding-bottom: 16px;
    padding-left: 33px;
    padding-right: 31px;
    color: white;
    background:rgb(189,100,86);
    border: 2px transparent;
    transition:0.2s ease;
    box-shadow: 1px 6px 20px #00000014;
  }

  .request:hover ,.request:active{
    outline: none;
    border-radius: 40px;
    font-size: 17px;
    font-family:'font-letter1';
    transition:0.2s ease;
    padding-top: 19px;
    padding-bottom: 16px;
    padding-left: 33px;
    padding-right: 31px;
    color: rgb(189,100,86)!important;
    background:white;
    border-color: #8B5148;
    box-shadow: 1px 6px 20px #00000014;
  }




</style>
<section id="section2" class="py-5 section-2" style="overflow:hidden;">


    <div class="row" style="overflow:hidden;padding-bottom:10%;padding-top:1%;">

        <div class="col-6 side1">
            <img src="{{asset('img/ieee1.jpg')}}" style="-webkit-box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                        box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);height:auto;width:100%;;margin-right:0.1%;">
        </div>

        <div class="pc">
            <div class="col-6 side2">
                <div style="height:99.5%;
                            --webkit-box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                            box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                            background-color:white;
                            justify-content:center;">
                    <div style="padding-top: 23%; text-align:center;">
                        <h1 class="letter2" style="color:#2b2b2b;font-size: 210%" >Are you curious about Intrumentation and Measurement?</h1>
                        <a href="/" > <button type="button" style="margin-top:5%;"class="btn btn-imsociety mx-auto">Learn more</button> </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="side2 mobile">

        <div class="mobile-who">
            <img src="{{asset('img/ieee1.jpg')}}" style="-webkit-box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                        box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);height:auto;width:100%;;margin-right:0.1%;">
        </div>

                <div style="height:99.5%;
                            --webkit-box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                            box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                            background-color:white;
                            justify-content:center;">
                    <div style="padding-top: 23%; text-align:center;">
                        <h1 class="letter2" style="color: #2b2b2b;font-size: 210%;margin-left: 10%;
    margin-right: 10%;" >Are you curious about Intrumentation and Measurement?</h1>
                        <a href="https://ieee-imspt.org/" > <button type="button" style="margin-top:5%;"class="btn btn-imsociety mx-auto">Learn more</button> </a>
                    </div>
                </div>

        </div>
    </div>





    <section id="description-section">
    <div class="pc-who">
    <div class="container m-auto">
        <h2 class="letter2 who">What is IMS?</h2>

            <div class="row">

                <div class="col who-side1">
                    <p class="who-side1-p">
                        The IEEE Instrumentation and Measurement Society is dedicated to the development and use of electrical and electronic instruments and equipment to measure, monitor and/or record physical phenomena.
                    </p>
                    <p class="who-side1-p">
                        The fields of interest include metrology, analog and digital electronic instruments, systems and standards for measuring and recording electrical quantities (in both frequency and time domains), instrumentation and transducers for measurement of non-electrical variables, calibration and uncertainty, instruments with automated control and analysis functions, safety instrumentation, and new technology applications.                    </p>
                </div>

                <div class="col-6 who-side2">
                    <img style="width:100%;border-radius:30pc;" src="{{asset('img/imsmeet.jpg')}}" />
                </div>

            </div>
        </div>
        </div>
        <div class="mobile-who">
        <div class="container m-auto">
        <h2 class="letter2 who"  >What is IMS?</h2>
                <div class=""style="width:100%">
                    <p style=" letter-spacing:0.7px;color:grey;width:100%;line-height:110%;font-size:90%;margin-top:10%;text-align:center;">
                        The IEEE Instrumentation & Measurement Society focuses on the development and use of electric and electronic instruments and other equipments to measure, monitor and register physical phenomena.
                    </p>
                </div>

        </div>
        <div class="" style="width:100%;margin-top:10%;">
                    <img style="width:100%;" src="{{asset('img/imsmeet.jpg')}}" />
                </div>
                <div class="container m-auto">

<div class=""style="width:100%">
<p style=" letter-spacing:0.7px;color:#333333;width:100%;line-height:110%;font-size:120%;margin-top:20%;text-align:center;">
    I&M touches on fields like:
    </p>
    <p style=" color:grey;width:100%;margin-top:13%;line-height:110%;display: list-item;list-style-type: disc;font-size:90%;list-style-position: inside;"> Metrology </p>
    <p style=" color:grey;width:100%;margin-top:13%;line-height:110%;display: list-item;list-style-type: disc;font-size:90%;list-style-position: inside;"> Systems and standards for measuring and recording electrical quantities (in both frequency and time domains) </p>
    <p style=" color:grey;width:100%;margin-top:13%;line-height:110%;display: list-item;list-style-type: disc;font-size:90%;list-style-position: inside;"> Instrumentation and transducers for measurement of non-electrical variables </p>
    <p style=" color:grey;width:100%;margin-top:13%;line-height:110%;display: list-item;list-style-type: disc;font-size:90%;list-style-position: inside;"> Safety instrumentation, and new technology applications </p>

</div>

</div>
    </div>
</section>

</section>

<section id="workshop-section" class="py-5 section-2"><h2 class="letter2 sections-title">Workshops</h2>

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

        <style>

            div.owl-next, div.owl-prev{
                visibility: hidden;
                outline:none !important;
            }

            #section2{
                background: white;
                padding-bottom: 60px;
            }

            #section1 {
                padding-top: 7%;
                background: linear-gradient(0deg, rgba(248,248,255,1) 0%, rgba(248,248,255,1) 25%, rgba(255,255,255,1) 100%);
                background-size: cover;
                background-position: center;
                padding-bottom:2rem;
            }

            #missionsection {
                overflow: hidden;
            }

            #description-section {
                padding: 4rem 4rem;
            }

            #workshop-section, #idea-section {
                padding-top: 7rem;
                background: white;
            }

            .mission-link {
                color:dimgrey;
                line-height: 28px;
                font-size:145%;

                transition: .1s;
            }

            .mission-link:hover {
                text-decoration: none;
                color:dimgrey;
                font-size:160%;
                transition: .1s;
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
                position:absolute;
                bottom:0;
                letter-spacing:1px;
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
                padding-top: 2rem;
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

            .no-event-warning {
                font-size: 1.2vw;
                margin-top: 8%;
                color: dimgrey;
            }


            @media (max-width:1200px) {
                .mission-row {
                    font-size: 30px;
                }

                .no-event-warning {
                    font-size: 2vw;
                }
            }

            @media (max-width: 1024px) {
                .mission-row {
                    font-size: 26px;
                }

                .event-card {
                    height: 25rem;
                }

            }

            @media only screen and (max-width: 900px) {

                .who{
                    font-size:190%;margin-left:auto;margin-top:5%;margin-right:auto;margin-bottom:5%;text-align:center;
                }

                .who-side1{
                    width:100%
                }

                .who-side2{

                    width:100%;margin-top:0vh;
                }


                .societylogo {
                    display: block;
                    overflow:hidden;width:100%;
                    margin-top:10%;
                }

                .sections-title{
                    overflow:hidden;text-align:center;font-size:220%;overflow:hidden;width:100%;
                }

                .sections-description{
                    overflow:hidden;
                    text-align:center;
                    font-size:135%;
                }

                .mission-link {
                    color:dimgrey;
                    font-size:192%;
                    line-height: 28px;
                    transition: .1s;
                }

                .mission-link:hover {
                    text-decoration: none;
                    color:dimgrey;
                    font-size: 160%;
                    transition: .1s;
                }

                .no-event-warning {
                    font-size: 3vw;
                }
            }

            @media only screen and (min-width: 900px) {

                .who{
                    font-size:240%;margin-left:0%;margin-top:5%;margin-right:auto;margin-bottom:5%;
                }

                .who-side1{
                    width:55%
                }
                .who-side2{
                    display:block;
                    width:45%;margin-top:0vh;
                }

                .who-side1-p{
                    letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;margin-right:10vw;
                }
                .sections-title{
                    overflow:hidden;
                    text-align:center;
                    font-size:270%;
                }

                .sections-description{
                    overflow:hidden;
                    text-align:center;
                    font-size:120%
                }

                .societylogo {
                    max-width: 40%;
                    width:26%;
                    display: block;
                    margin-right:11%;
                    overflow:hidden;
                    margin-left: auto;
                }

            }

            @media (max-width: 768px) {
                .mission-row {
                    font-size: 22px;
                }

                #description-section {
                    padding: 1rem 1.5rem;
                    font-size: 18px;
                }
            }

            @media(max-width: 576px) {
                .no-event-warning {
                    font-size: 4vw;
                }
            }

            @media (max-width: 480px) {
                .mission-row {
                    font-size: 18px;
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
</section>



<style>
    #societylogosection {
        position: relative;
        min-width: 40%;
        padding-top: 10%;
        padding-bottom: 10%;
        overflow:hidden;
        margin-bottom: 1%;
    }


    .mission-row {
        text-align: center;
        overflow:hidden;
        font-size: 120%;
        max-width: 100%;
        color:dimgrey;
        overflow:hidden;

        margin-bottom: 1%;
    }




    @media only screen and (max-width: 900px) {
        .showw {
            display : none;
            overflow:hidden;
        }

        .pc{
            display:none;
        }

        .mobile{
            display:block;
        }
        .pc-who{
            display:none;
        }
        .mobile-who{
            display:block;
        }

        .societylogo {
            justify-content:center;
            text-align:center;
            width:80%;
            display: block;
            margin-left:auto;
            overflow:hidden;
            margin-top:10%;
            margin-right: auto;
        }

        .sections-title{
            overflow:hidden;text-align:center;font-size:220%;
        }

        .sections-description{
            overflow:hidden;text-align:center;font-size:120%;
        }


        .side1{
            display:none;
            overflow:hidden;

        }

        .side2{

            width: 100%;
            text-align:center;
            justify-content:center;
            overflow:hidden;
        }
    }

    @media only screen and (min-width: 900px) {
        .pc{
            display:none;
        }
        .pc-who{
            display:block;
        }
        .mobile-who{
            display:none;
        }
        .showw{
            display : inline ;
            margin-top: 2rem;
            overflow: hidden;
            margin-bottom: 2rem;

        }

        .sections-title{
            overflow:hidden;text-align:center;font-size:270%;
        }

        .sections-description{
            overflow:hidden;text-align:center;font-size:120%;
        }

        .side1{
            display:block;
            width: 50%;

        }

        .side2{
            display:block;
            float: left;
            width: 50%;
            padding: 0px;
        }

        .societylogo {
            max-width: 40%;
            width:20%;
            display: block;
            margin-left:auto;
            overflow:hidden;
            margin-right: auto;
        }

        .btn-imsociety {
            color: #92353D;
            background-color: white;
            border-color: #92353D;
            font-weight: bold;
            letter-spacing: 0.05em;
            border-radius: 0.3rem;
        }

        .btn-imsociety:hover,
        .btn-imsociety:active,
        .btn-imsociety:focus,
        .btn-imsociety.active {
            background: #92353D;
            color: #ffffff;
            border-color: #831720;
        }


    }
</style>



@endsection
