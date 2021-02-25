@extends('layouts.nav')

@section('content')





<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<section id="societylogosection">
    <img src="{{asset('img/imsblack.png')}}" class="societylogo">
</section>

<section id="missionsection" class="showw">
    <div class="row mission-row">
        <div class="col">
            <a class="letter2 ">Quem somos?<a>
        </div>
        <div class="col">
            <a class="letter2">Workshops<a>
        </div>
        <div class="col">
            <a class="letter2">  Repositório de Ideias <a>

        </div>
        <div class="col">
            <a class="letter2"> Media<a>
        </div>

    </div>
</section>

<section id="section2" class="py-5 section-2" style="overflow:hidden;">


    <div class="row" style="overflow:hidden;padding-bottom:10%;padding-top:1%;">
        <div class="column side1" >
            <img src="{{asset('img/ieee1.jpg')}}" style="-webkit-box-shadow:7px 0px 12px 4px rgba(0,0,0,0.24);
                box-shadow:7px 0px 12px 4px rgba(0,0,0,0.24);height:auto;width:94%;margin-left:2.5%;margin-right:0.1%;">
        </div>
        <div class="column side2" >

            <div style="height:99%;
                        -webkit-box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                        box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                        background-color:white;justify-content:center;">
                <div style="padding-top: 23%; text-align:center;">
                    <h1 class="letter2" style="color:#333333;font-size: 250%" >kfkifviodksoskcdo</h1>
                    <h1 class="letter2" style="color:#333333;font-size: 130%"> olal</h1>
                </div>

            </div>
        </div>
    </div>







</section>
<section id="section2" class="py-5 section-2"><h2 class="letter2 sections-title" >Quem Somos?</h2>
    <div class="container py-5 text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <p class="text-muted lead sections-description ">É um chapter da IEEE Portugal criado em 2005 cujos seus principais objetivos são promover pesquisa, educação, empreendedorismo e interesse público em Robótica e Automação em Portugal através  de organização de conferências e workshops científicos, competições de robôs educacionais e de pesquisa, reuniões entre empresas e academia e sessões de divulgação de Ciência e Tecnologia aos estudantes.</p>
            </div>
        </div>
    </div>
</section>
<section id="section2" class="py-5 section-2"><h2 class="letter2 sections-title">Workshops</h2>
    <div class="container py-5 text-center">

        <div class="event-slider owl-carousel">
            @foreach($events as $event)
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


            @media (max-width:1200px) {
                .mission-row {
                    font-size: 30px;
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
            }

            @media only screen and (min-width: 900px) {

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

            @media (max-width: 480px) {
                .mission-row {
                    font-size: 18px;
                }

                .event-card:hover > .event-card-body > .event-card-body-caption{
                    height: 0;
                    opacity:0;
                }
            }

        </style>
    </div>
</section>

<section id="section2" class="py-5 section-2"><h2 class="letter2 sections-title">Repositório de ideias</h2>
    <div class="container py-5 text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <p class="text-muted lead sections-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>

        <div class="row justify-content-center description-row">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                <button type="button" class="btn btn-imsociety">Junta-te a nós</button>
            </div>
        </div>

    </div>
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

    .banner {
        height:100%;
        background-color:red;
        object-fit: cover;



    }



    @media only screen and (max-width: 900px) {
        .showw {
            display : none;
            overflow:hidden;
        }

        .societylogo {
            max-width: 60%;
            width:100%;
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
            margin-right: -1.5%;
        }

        .side2{

            width: 100%;
            padding: 0px;
            overflow:hidden;
        }
    }

    @media only screen and (min-width: 900px) {
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
            margin-left:7%;
            overflow:hidden;
            margin-right: auto;
        }

        .btn-imsociety {
            color: #fff;
            background-color: #af1e2a;
            border-color: #af1e2a;
            font-weight: bold;
            letter-spacing: 0.05em;
            border-radius: 0.3rem;
        }

        .btn-imsociety:hover,
        .btn-imsociety:active,
        .btn-imsociety:focus,
        .btn-imsociety.active {
            background: #831720;
            color: #ffffff;
            border-color: #831720;
        }


    }
</style>



@endsection
