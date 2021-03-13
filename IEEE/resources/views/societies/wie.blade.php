@extends('layouts.nav')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<section id="section1" style="overflow:hidden;margin-top:1%;margin-bottom:2%;       overflow:hidden;">

<div class="pc-wie">
<div class="row" >
<h1 class="letter2"style="
        width:45%;
        padding-top:8%;
        display: block;
        margin-right:0%;
        color:#583e77;
        font-size:350%;
        overflow:hidden;
        margin-left: auto;">Innovate for the humanity's benefit</h1>

            <img style=" max-width: 40%;
          width:26%;
          display: block;
          margin-right:11%;
          overflow:hidden;
          margin-left: auto;"src="{{asset('img/wielogo2.png')}}" />
    </div>
    </div>
            <div class="mobile-wie">
            <div class="row" >
                    <h1 class="letter2"style="
        width:90%;
        text-align:center;
        padding-top:10%;
        padding-bottom:10%;
        display: block;
        color:#583e77;
        font-size:240%;
        overflow:hidden;
        margin-right: auto;
        margin-left: auto;">Innovate for the humanity's benefit</h1>
            <div class="m-auto" style="width:50vw;margin-left:auto;margin-right:auto;margin-top:6vh;">
            <img style="  display: block;
          overflow:hidden;width:100%;
          margin-top:10%;" src="{{asset('img/wielogo2.png')}}" />
            </div>
            </div>
            </div>
</section>

<section id="missionsection" class="showw">
    <div class="row mission-row">

        <div class="col">
            <a class="letter2 mission-link" href="#section2">What is WIE?</a>
        </div>
        <div class="col">
            <a class="letter2 mission-link"  href="#section3">Workshops</a>
        </div>

    </div>
</section>

<section  style="margin-top:4%;margin-bottom:4%; overflow: hidden;width:100%;">
    <div id="bannersection" class="banner-bg out" style="justify-content:center;overflow:hidden;width:100%;">


    </div>
    <div class="mobile-wie"style="position:absolute;justify-content:center;text-align:center;width:100%;margin-left:auto;margin-right:auto;margin-top:-12pc;margin-bottom:15pc;">
    <a href="https://wie.ieee.org/" class="btn-wiesociety">Join us</a>
</div>
   <style>


   .btn-wiesociety{
        font-size:160%;color:white!important;text-decoration:none;text-align:center;margin-top:80vh;border:2px solid white;padding:12px 35px 12px 35px;

   }
   .btn-wiesociety:hover,
   .btn-wiesociety:active,
   .btn-wiesociety:focus,
   .btn-wiesociety.active {

            font-size:160%;color:#333333!important;text-decoration:none;text-align:center;margin-top:80vh;background-color:white;padding:12px 35px 12px 35px;
        }


   </style>
</section>


<section id="section2" class="" style="margin-bottom:10%;">
    <div class="container pc-wie">
        <h2 class="letter2" style="font-size:260%;margin-left:2%;margin-top:2%;margin-right:auto;margin-bottom:5%;color:#484d71;" >What is WIE?</h2>
        <div class="row">
            <div style="width:47%;margin-left:0.25%;">

                <p style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">WiE ISCTE-IUL (Women In Engineering from ISCTE-IUL, Lisbon) is a non-profit affinity WiE group of the IEEE ISCTE-IUL Student Branch. This group was officially born from the initiative of a group of ISCTE-IUL female students, from different study areas related to technology.</p>
                <p style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">We had the official approval to create it on January 1st 2013. The mission of IEEE WIE is to facilitate the global recruitment and retention of women in technical disciplines.IEEE WIE envisions a vibrant community of IEEE women and men collectively using their diverse talents to innovate for the benefit of humanity.</p>
                <p style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">At ISCTE-IUL we wish to promote the role of women as engineers, and inspire and captivate women around the world to embrace a career in science and engineering. WiE isn’t only for women it is for everyone that believes in equal rights independent of gender and that women can be great engineers too.</p>
                <p style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">We also want to try to make society and employers understand that women deserve the same rights that men have. So if you believe women deserve to have exactly the same rights as men, career evolution and respect for their intellect then you belong with us.</p>

            </div>

            <div style="margin:auto;width:46%;">
                <img style="width:110%;margin-top:-28%;"src="{{asset('img/wiebola.png')}}" />
            </div>

        </div>
    </div>
    <div class="container mobile-wie">
        <h2 class="letter2" style="font-size:260%;margin-left:2%;margin-top:2%;margin-right:auto;margin-bottom:5%;color:#484d71;" >What is WIE?</h2>

            <div style="width:100%;">

                <p  style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">WiE ISCTE-IUL (Women In Engineering from ISCTE-IUL, Lisbon) is a non-profit affinity WiE group of the IEEE ISCTE-IUL Student Branch. This group was officially born from the initiative of a group of ISCTE-IUL female students, from different study areas related to technology.</p>
                <p  style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">We had the official approval to create it on January 1st 2013. The mission of IEEE WIE is to facilitate the global recruitment and retention of women in technical disciplines.IEEE WIE envisions a vibrant community of IEEE women and men collectively using their diverse talents to innovate for the benefit of humanity.</p>
                <p style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">At ISCTE-IUL we wish to promote the role of women as engineers, and inspire and captivate women around the world to embrace a career in science and engineering. WiE isn’t only for women it is for everyone that believes in equal rights independent of gender and that women can be great engineers too.</p>
                <p style="letter-spacing:0.7px;color:grey;line-height:120%;font-size:110%;margin-top:2%;">We also want to try to make society and employers understand that women deserve the same rights that men have. So if you believe women deserve to have exactly the same rights as men, career evolution and respect for their intellect then you belong with us.</p>

            </div>

            <div style="margin:auto;width:90%;">
                <img style="width:100%;margin-top:28%;"src="{{asset('img/wiebola.png')}}" />
            </div>


    </div>
</section>



<section id="section3"><h2 class="letter2 sections-title" style="color:#5c4a73">Workshops</h2>
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




    <script>
        $('.banner-bg').css({'webkit-filter':'blur(7px)', 'filter':'blur(7px) brightness(0.5) saturate(1.3)'});
        $(window).on('scroll', function () {

                var pixs = $(document).scrollTop()
                pixs =7 * (350-pixs)/350;
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
        line-height: 25px;
        transition: .1s;
    }

    .mission-link:hover {
        text-decoration: none;
        color: #4F4263;
        font-size: 160%;
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

    @media (max-width: 1200px) {
        .no-event-warning {
            font-size: 2vw;
        }
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

      .pc-wie{
          display:none;
      }
      .mobile-wie{
          display:block;
      }

      .sections-title{
          overflow:hidden;
          text-align:center;
          font-size:220%;
          overflow:hidden;
          width:100%;
      }


        .no-event-warning {
            font-size: 3vw;
        }

    }

    @media only screen and (min-width: 900px) {
      .pc-wie{
          display:block;
      }
      .mobile-wie{
          display:none;
      }
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

    }

    @media (max-width: 768px) {

      #section1 {
          padding-top: 15%;
      }

    }

    @media(max-width: 576px) {
        .no-event-warning {
            font-size: 4vw;
        }
    }

    @media (max-width: 478px) {

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
