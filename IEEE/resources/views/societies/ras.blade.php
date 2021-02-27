@extends('layouts.nav')

@section('content')





<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<section id="societylogosection">
    <img src="{{asset('img/raslogo2.png')}}" class="societylogo">
</section>

<section id="missionsection" class="showw">
    <div class="row mission-row">

        <div class="col">
            <a href="#section3" class="letter2 mission-link">Quem somos?</a>
        </div>
        <div class="col">
            <a href="#section4" class="letter2 mission-link">Workshops</a>
        </div>

    </div>
</section>

<section id="section2" class="section-2" style="overflow:hidden;">


    <div class="row" style="overflow:hidden;padding-top:1%;padding-bottom:1%;">
    <div class="column side1" >

                <div style="margin-left:5.5%;margin-right:0.1%;margin-top:0.1%;height:99%;
-webkit-box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                        background-color:white;justify-content:center;">
                        <div style="padding-top: 23%; text-align:center;">
                        <a href="http://www.ieee-ras.org/" class="descobre" style="transition:0.7s;font-size:260%;font-family:'font-letter2';" ><h1 class="letter2" style="color:#333333;font-size: 300%" ></h1>
                     Descobre mais</h1> </a>

                </div>

        </div>

        <style>
        .descobre{
            color:#333333;
            text-decoration: none;
        }

        .descobre:hover,
   .descobre:active,
   .descobre:focus,
   .descobre.active{

       color:grey;
       text-decoration: none;
        }
        </style>
        </div>
        <div class="column side2" >
            <img class="side1"src="{{asset('img/rasSplash.jpg')}}" style="-webkit-box-shadow:7px 0px 12px 4px rgba(0,0,0,0.24);
                box-shadow:7px 0px 12px 4px rgba(0,0,0,0.24);height:auto;width:94%;">
            <img class="mobile"src="{{asset('img/rasSplash.jpg')}}" style="width:100%;">
        </div>
    </div>

</section>

<section id="section3">
    <h2 class="letter2 sections-title" >Quem Somos?</h2>
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <p class="text-muted lead sections-description ">É um chapter da IEEE Portugal criado em 2005 cujos seus principais objetivos são promover pesquisa, educação, empreendedorismo e interesse público em Robótica e Automação em Portugal através  de organização de conferências e workshops científicos, competições de robôs educacionais e de pesquisa, reuniões entre empresas e academia e sessões de divulgação de Ciência e Tecnologia aos estudantes.</p>
            </div>
        </div>
    </div>
</section>

<section id="section4"><h2 class="letter2 sections-title">Workshops</h2>
    <div class="container py-5 text-center event-slider-container">

        @if(count($events) > 0)
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
        @else
            <div class="no-event-warning mx-auto">
                Ainda não temos workshops para te mostrar
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

            #section2 {
                padding-top: 3rem;
                background: white;
            }

            #section3, #section4, section5 {
                padding-top: 8rem;
                background: white;
            }

            .mission-link {
                color:dimgrey;
                line-height: 26px;
                transition: .1s;
            }

            .mission-link:hover {
                color:dimgrey;
                text-decoration: none;
                font-size: 110%;
                transition: .1s;
            }

            .event-slider-container {
                display: flex;
                min-height: 25rem;
            }

            .no-event-warning {
                font-size: 1.3vw;
                margin-top: 8%;
                color: dimgrey;
            }

            .event-card {
                overflow: hidden;
                height:26rem;
                transition:0.6s;
                border-radius:1px;
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

            @media (max-width: 1024px) {
                .event-card {
                    height: 25rem;
                }
            }

            @media (max-width: 478px) {

                .event-card:hover > .event-card-body > .event-card-body-caption{
                    height: 0;
                    opacity:0;
                }
            }

        </style>
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
        margin-bottom: 1%;
    }



    @media only screen and (max-width: 900px) {
  .showw {
    display : none;
    overflow:hidden;
  }

  .mobile{
    display:block;
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

  .mobile{
     display:none;
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


}
</style>



@endsection
