@extends('layouts.nav')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<section id="section1" style="overflow:hidden;margin-top:1%;margin-bottom:2%;       overflow:hidden;">
<div class="row">
<h1 class="letter2"style="
        width:45%;
        padding-top:10%;
        display: block;
        margin-right:0%;
        color:#583e77;
        font-size:330%;
        overflow:hidden;
        margin-left: auto;">Sê parte da mudança</h1>
            <img class="societylogo"src="{{asset('img/wielogo2.png')}}" />
            </div>
</section>

<section id="missionsection" class="showw">
    <div class="row mission-row">

        <div class="col">
            <a class="letter2 mission-link" href="#section2">Quem somos?<a>
        </div>
        <div class="col">
            <a class="letter2 mission-link" href="#section3">Workshops<a>
        </div>
        <div class="col">
            <a class="letter2 mission-link" href="#section4">Repositório de Ideias <a>
        </div>

    </div>
</section>

<section  style="margin-top:4%;margin-bottom:4%; overflow: hidden;width:100%;">
    <div id="bannersection" class="banner-bg out" style="overflow:hidden;width:100%;">
    </div>
</section>

<section id="section2" class="" style="margin-bottom:10%;">
    <div class="container">
        <h2 class="letter2" style="font-size:260%;margin-left:2%;margin-top:2%;margin-right:auto;margin-bottom:5%;" >Quem Somos?</h2>
        <div class="row">
            <div style="width:47%;margin-left:0.25%;">

                <p  style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">O WiE ISCTE-IUL (Mulheres em Engenharia do ISCTE-IUL, Lisboa) é um grupo sem fins lucrativos com afinidade WiE do Ramo de Estudantes do IEEE ISCTE-IUL. Este grupo nasceu oficialmente por iniciativa de um grupo de alunas do ISCTE-IUL, de diferentes áreas de estudo relacionadas à tecnologia.</p>
                <p  style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">Tivemos a aprovação oficial para criá-lo em 1º de janeiro de 2013. A missão do IEEE WIE é facilitar o recrutamento e retenção global de mulheres em disciplinas técnicas.</p>
                 <p style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">No ISCTE-IUL, desejamos promover o papel das mulheres como engenheiras e inspirar e cativar as mulheres ao redor do mundo a abraçar um carreira em ciência e engenharia.</p>
                 <p style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">WiE não é apenas para mulheres, é para todos que acreditam na igualdade de direitos, independentemente do gênero e que as mulheres também podem ser grandes engenheiras.</p>

            </div>

            <div style="margin:auto;width:46%;">
                <img style="width:110%;margin-top:-28%;"src="{{asset('img/wiebola.png')}}" />
            </div>

        </div>
    </div>
</section>



<section id="section3"><h2 class="letter2 sections-title">Workshops</h2>
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
                    var halfCardWidth = document.getElementsByClassName('event-card').item(0).clientWidth / 2;

                    $(".event-slider").owlCarousel({
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

</section>

<section id="section4"><h2 class="letter2 sections-title">Repositório de ideias</h2>
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">

                <p class="text-muted lead sections-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
    </div>
</section>


    <script>
        $('.banner-bg').css({'webkit-filter':'blur(7px)', 'filter':'blur(7px) brightness(0.5) saturate(1.3)'});
        $(window).on('scroll', function () {

                var pixs = $(document).scrollTop()
                pixs =7 * (240-pixs)/240;
                $('.banner-bg').css({'webkit-filter':"blur("+pixs+"px)", 'filter':"blur("+pixs+"px) brightness(0.7) saturate(1.3)"});


        });;
    </script>

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

    #section1 {
        padding-top: 7%;
        background-size: cover;
        background-position: center;
        padding-bottom:2rem;
    }

    #section2 {
        padding-top: 9rem;
        background: white;
    }

    #section3, #section4 {
        padding-top: 7rem;
        background: white;
    }

    .mission-row {
        text-align: center;
        overflow:hidden;
        color:dimgrey;
        overflow:hidden;overflow:hidden;width:100%;
        margin-bottom: 1%;
    }

    .mission-link {
        color:#4F4263;
        font-size:145%;
        transition: .1s;
    }

    .mission-link:hover {
        text-decoration: none;
        color: #4F4263;
        font-size: 160%;
        transition: .1s;
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

    @media (max-width: 1024px) {

      #section1 {
          padding-top: 12%;
      }

      .event-card {
          height: 25rem;
      }

    }

    @media only screen and (max-width: 900px) {

      .showw {
          display : none;
          overflow:hidden;overflow:hidden;width:100%;
      }

      .societylogo {
          display: block;
          overflow:hidden;width:100%;
          margin-top:10%;
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
          font-size:120%;
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

      #section1 {
          padding-top: 15%;
      }

    }

    @media (max-width: 478px) {

        .event-card:hover > .event-card-body > .event-card-body-caption{
            height: 0;
            opacity:0;
        }
    }

</style>

@endsection
