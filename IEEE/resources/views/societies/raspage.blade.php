@extends('layouts.app')

@section('content')






<section id="societylogosection">
    <img src="{{asset('img/raslogo2.png')}}" class="societylogo">
</section>

<section id="missionsection">
    <div class="row mission-row">
        <div class="col">
            <a class="letter2">Quem somos?<a>
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

<section id="section2" class="py-5 section-2">

    <div class=" ">
    <div class="row">
    <div class="column" style="
  width: 50%">
          <div style="margin-left:3.5%;margin-right:0.9%;margin-top:0.2%;padding:center;height:98.5%;-webkit-box-shadow: 0px 0px 16px 4px rgba(0,0,0,0.24);
                box-shadow:0px 0px 16px 4px rgba(0,0,0,0.24);
                background-color:white;justify-content:center;">
                <div style="padding-top: 25%; text-align:center;">
                <h1 class="letter2" style="font-size: 160%" > kfkifviodksoskcdo</h1>
                <h1 class="letter2" style="font-size: 130%"> olal</h1>
                </div>
        </div>
        </div>
        <div class="column" style=" float: left;
  width: 50%;
  padding: 0px;
  ">
            <img src="{{asset('img/rasSplash.jpg')}}" style="-webkit-box-shadow: 0px 0px 16px 4px rgba(0,0,0,0.24);
                box-shadow:0px 0px 16px 4px rgba(0,0,0,0.24);height:auto;width:100%">
        </div>
    </div>
    </div>


    <script>

    $(".slider").owlCarousel({
                loop: true,
                smartSpeed: 6000,
                autoplay: true,
                autoplayTimeout: 9000, //2000ms = 2s;
                autoplayHoverPause: true,
                loop: true,
                margin: 10,
                nav: true,
                items:3,
                navText: [
                "<i class='fa fa-caret-left' style='outline:none !important;font-size:200%;color:rgba(108, 183, 67, 0.4);'></i>",
                "<i class='fa fa-caret-right'  style='outline:none !important;font-size:200%;color:rgba(108, 183, 67, 0.4);'></i>"
                ],
                autoplay: true,
                autoplayHoverPause: true
               
             
                                                
            });

            $("a.owl-prev ").click(function() {
                    $("div.owl-prev").click();
                })
                $("a.owl-next ").click(function() {
                    $("div.owl-next").click();
                })


    </script> 

  
  
</section>
<section id="section2" class="py-5 section-2"><h2 class="letter2" style="text-align:center;font-size:250%;">Quem Somos?</h2>
    <div class="container py-5 text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">
           
                <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
    </div>
</section>
<section id="section2" class="py-5 section-2"><h2 class="letter2" style="text-align:center;font-size:250%;">Workshops</h2>
    <div class="container py-5 text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">
           
                <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
    </div>
</section>
<section id="section2" class="py-5 section-2"><h2 class="letter2" style="text-align:center;font-size:250%;">Repositório de ideias</h2>
    <div class="container py-5 text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">
           
                <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
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

    #missionsection {
        margin-top: 2rem;
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .societylogo {
        max-width: 40%;
        width:20%;
        display: block;
        margin-left:7%;
        overflow:hidden;
        margin-right: auto;
    }

 

    .mission-row {
        text-align: center;
        overflow:hidden;
        font-size: 120%;
        color:dimgrey;
        overflow:hidden;
      
        margin-bottom: 1%;
    }

    .banner {
        height:100%;
        background-color:red;
        object-fit: cover;


   
    }
</style>


@endsection
