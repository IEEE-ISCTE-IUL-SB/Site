@extends('layouts.nav')

@section('content')





<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<section  class="py-5 section-2"  style="overflow:hidden;margin-top:1%;margin-bottom:2%;">
<div class="row">
<h1 class="letter2"style=" 
        width:45%;
        padding-top:7%;
        display: block;
        margin-right:0%;
        color:#333333;
        font-size:330%;
        margin-left: auto;">MAE Societies</h1>
            <img class="societylogo"src="{{asset('img/MAE2.png')}}" />
            </div>
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
            
                <div style="margin-left:5.5%;margin-right:0.1%;margin-top:0.1%;padding:center;height:99%;
-webkit-box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13); 
box-shadow: -3px 0px 19px 5px rgba(0,0,0,0.13);
                        background-color:white;justify-content:center;">
                        <div style="padding-top: 23%; text-align:center;">
                        <h1 class="letter2" style="color:#333333;font-size: 250%" >kfkifviodksoskcdo</h1>
                        <h1 class="letter2" style="color:#333333;font-size: 130%"> olal</h1>
                </div>
         
        </div>
        </div>
        <div class="column side2" >
            <img src="{{asset('img/rasSplash.jpg')}}" style="-webkit-box-shadow:7px 0px 12px 4px rgba(0,0,0,0.24);
                box-shadow:7px 0px 12px 4px rgba(0,0,0,0.24);height:auto;width:94%;">
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
                <div class="event-card mx-auto">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee1.jpg')}}">
                    <div class="card-ellipse">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Event1
                        </div>
                        <div class="event-card-body-caption">
                            Event1 caption
                        </div>
                        <div class="event-card-body-seemore">
                            See more ⇀
                        </div>
                    </div>
                </div>
                <div class="event-card mx-auto">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee2.jpg')}}">
                    <div class="card-ellipse">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Event2
                        </div>
                        <div class="event-card-body-caption">
                            Event2 caption
                        </div>
                        <div class="event-card-body-seemore">
                            See more ⇀
                        </div>
                    </div>
                </div>
                <div class="event-card mx-auto">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee3.jpg')}}">
                    <div class="card-ellipse">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Event3
                        </div>
                        <div class="event-card-body-caption">
                            Event3
                        </div>
                        <div class="event-card-body-seemore">
                            See more ⇀
                        </div>
                    </div>
                </div>
                <div class="event-card mx-auto">
                    <img class="event-card-img-top event-img" src="{{asset('img/ieee2.jpg')}}">
                    <div class="card-ellipse">
                    </div>
                    <div class="event-card-body">
                        <div class="event-card-body-title">
                            Event4
                        </div>
                        <div class="event-card-body-caption">
                            Event4 caption
                        </div>
                        <div class="event-card-body-seemore">
                            See more ⇀
                        </div>
                    </div>
                </div>
            </div>

            <script>
            setTimeout(function() { //items number only activates after window resize unless activated through timeout
                var halfCardWidth = document.getElementsByClassName('event-card').item(0).clientWidth / 2;

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
                    responsive:{
                        0:{
                            items:1,
                        },
                        1024:{
                            items:3,
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

            #section2, #section3 {
                background: white;
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

            .padding-10{
                padding-right:10px;
                padding-left:10px;
            }

            .carousel-title {
                text-align: left;
                font-size:300%;
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
                padding-right: 3%;
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
                width:95%;
                padding-left:2rem;
                position:absolute;
                bottom:0;
            }

            .event-card-body-title {
                text-align: left;
                font-size: 40px;
                font-weight: bold;
            }

            .event-card-body-caption {
                text-align: left;
                font-size: 25px;
                padding-bottom: 0.5rem;
                padding-top: 1.5rem;
                opacity:0;
                transition: .3s;
                -webkit-line-clamp: 2;
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

                .event-container {
                    max-width: 100%;
                }

                .carousel-title {
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
                    opacity: 0;
                }

                #section1 {
                    padding-top: 12%;
                }

                .event-card {
                    height: 24rem;
                }

                .event-container {
                    max-width: 75%;
                }

                .carousel-title {
                    font-size: 6vw;
                }

                #novidadesScreen {
                    font-size: 6vw;
                }
            }

            @media (max-width: 768px) {

                .highlighted-event-slider {
                    padding: 0 3% 0 3%;
                }

                .event-container {
                    padding-top: 8%;
                }

                #section1 {
                    padding-top: 15%;
                }

                .carousel-title {
                    text-align: center;
                    font-size: 7vw;
                }

                #novidadesScreen {
                    font-size: 7vw;
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

                .carousel-title {
                    font-size: 11vw;
                }

                #novidadesScreen {
                    font-size: 11vw;
                }

                .main-title-container {
                    text-align: center;
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
    </div>
</section>

<style>



  #bannersection {
    overflow: hidden;
    clip-path: ellipse(100% 51% at 50% 56%);
    overflow:hidden;width:100%;
        background-position: 10% 20%;
        background-repeat: no-repeat;
        background-attachment: fixed;
     
        background-image: url('{{asset('img/wiemeet2.jpg')}}');
        filter: brightness(0.7) saturate(1.3);
        height: 54vh;
        background-size: cover;
       
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
    }


.mission-row {
        text-align: center;
        overflow:hidden;
        font-size: 120%;
        color:dimgrey;
        overflow:hidden;overflow:hidden;width:100%;
        margin-bottom: 1%;
    }

    @media only screen and (max-width: 900px) {
  .showw {
    display : none;
    overflow:hidden;overflow:hidden;width:100%;
  }

  .societylogo {
    

        width:16%;
        display: block;
     margin-right:auto;
        overflow:hidden;
        margin-left: auto;
    }

    .sections-title{
        overflow:hidden;text-align:center;font-size:220%;overflow:hidden;width:100%;
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
    margin-top: 0;
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
         

    width:20%;
        display: block;
     margin-right:21%;
     margin-top:1%;
     margin-bottom:6%;
        overflow:hidden;
        margin-left: auto;
    }


}
</style>



@endsection
