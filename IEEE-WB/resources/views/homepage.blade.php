@extends('layouts.nav')

@section('content')


<section style="margin-bottom:0%;background: url(img/fellowthree.png);background-size: cover;background-position: center;" id="companiesStories" >

      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
    <div class="mx-auto " style="width:95%;">
    <div class="slider owl-carousel mx-auto" style="padding-bottom:1%;" >
    
    <div class="card" style="outline: none;background-color:transparent;border-color:transparent;padding-top: 4%;margin-top: 1%;margin-bottom:2%;width:98%;margin-bottom:10%;">
      <div class="row" style="">
                <div class="col-sm-5 ml-xl-4" style="margin-top:auto;margin-bottom:auto;">
                <h1 class="letter2 workshop" style="background: url(img/title5.png);background-size: cover;background-position: center;padding-bottom: 139px;
    padding-top: 86px;
    padding-left:80px;font-size:3.8pc;margin-left:3%;-webkit-background-clip: text;
  color: transparent;">
                    Vem<br>conhecer-nos
                </h1>
                </div>
                <div class="ml-xl-3 col-sm-6">
                <div style="background-image: url(img/ieee3.jpg);
    -webkit-box-shadow: 0 1px 10px #989898;
    -moz-box-shadow: 0 1px 10px #989898;
    box-shadow: 0 1px 10px #989898;
    background-size: cover;
    background-position: center;
    width: 46pc;
    height: 30pc;
    margin-top: 0%;
    margin-left: -9px;
    padding-top: 17px;
    padding-right: 59px;
    border-radius: 55%;
    padding-left: 101px;">
                </div>
                </div>
      </div>
    </div>



    
    <div class="card" style="outline: none;margin-bottom:10%;background-color:transparent;border-color:transparent;padding-top: 4%;margin-top: 1%;margin-bottom:2%;width:98%;">
      <div class="row" style="">
                <div class="col-sm-5 ml-xl-4" style="margin-top:auto;margin-bottom:auto;">
                <h1 class=" letter2 workshop" style="background: url(img/title6.png);background-size: cover;background-position: center;padding-bottom: 139px;
    padding-top: 86px;
    padding-left:80px;font-size:55px;margin-left:3%;-webkit-background-clip: text;
  color: transparent;">
                     Vê os projetos que temos para ti
                     <a><p href="{{ url('/') }}" class="butpro letter2">Ver mais</p></a>
                </h1>
              
                </div>
                <div class="ml-xl-3 col-sm-6">
                <div style="background-image: url(img/ieee1.jpg);
    -webkit-box-shadow: 0 5px 10px #777;
    -moz-box-shadow: 0 5px 10px #777;
    box-shadow: 0 5px 10px #777;
    background-size: cover;
    background-position: center;
    width: 46pc;
    height: 30pc;
    margin-top: 0%;
    margin-left: -9px;
    padding-top: 17px;
    padding-right: 59px;
    border-radius: 55%;
    padding-left: 101px;">
                </div>
               </div>
      </div>
    </div>





    <div class="card" style="outline: none;margin-bottom:10%;background-color:transparent;border-color:transparent;padding-top: 4%;margin-top: 1%;margin-bottom:2%;width:98%;">
      <div class="row" style="">
                <div class="col-sm-5 ml-xl-4" style="margin-top:auto;margin-bottom:auto;">
                <h1 class="workshop letter2" style="background: url(img/ieee2.jpg);background-size: cover;background-position: center;padding-bottom:139px;
    padding-top: 86px;
    padding-left:80px;font-size:57px;margin-left:0%;-webkit-background-clip: text;
  color: transparent;">
                    Qualquer coisa
                </h1>
                </div>
                <div class="ml-xl-3 col-sm-6">
                <div style="background-image: url(img/ieee2.jpg);
    -webkit-box-shadow: 0 15px 10px #777;
    -moz-box-shadow: 0 15px 10px #777;
    box-shadow: 0 15px 10px #777;
    background-size: cover;
    background-position: center;
    width: 46pc;
    height: 30pc;
    margin-top: 0%;
    margin-left: -9px;
    padding-top: 17px;
    padding-right: 59px;
    border-radius: 55%;
    padding-left: 101px;">
                </div> </div>
      </div>
    </div>




    </div>


    <style>
        .butpro{
        margin-top: 30px;
    color: white;
    -webkit-background-clip: text;
    background-size: cover;background-position: center;
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
        border:1px solid 
#585A5C
;
        background:transparent;
        color:
#585A5C
;
        transition:0.15s ease-in all;
        -moz-transition:    all 0.15s  ease-in;
  -webkit-transition: all 0.15s ease-in;
  -o-transition:      all 0.15s  ease-in;
  -ms-transition:     all 0.15s  ease-in 

    }
    </style>
    <script>

$(".slider").owlCarousel({
                loop: true,
                smartSpeed: 6000,
                autoplay: true,
                autoplayTimeout: 9000, //2000ms = 2s;
                autoplayHoverPause: true,
                loop: true,
                margin:1,
                nav: true,
                items:1,
                autoplay: true,
                autoplayHoverPause: true,
                navText: [
                "<i class='fa fa-caret-left' style='outline:transparent!important;font-size:300%;color:rgba(31, 73, 133, 0.05);margin-right:10%;'></i>",
                "<i class='fa fa-caret-right'  style='outline:transparent !important;font-size:300%;color:rgba(31, 73, 133, 0.05);margin-left:10%;'></i>"
                ],
                                                
            });

         


    </script> 

    

  
        </div> 
    </div> 
 
         
    <style>



    
    
    </style>        

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

<section id="section1" style="background: rgb(123,143,131);
background: linear-gradient(0deg, rgba(123,143,131,1) 5%, rgba(56,99,111,1) 98%, rgba(79,79,79,1) 100%);padding-bottom:15%;">
    <div class="container">
    <h1 class="letter2" style="text-align:center;font-size:45px;color:white;padding-top:10%;letter-spacing:1px;"> Explora as nossas societies</h1>
    <div class="row mx-auto" style="padding-top:10%;padding-left:70px;">
      
        <div class="col-sm-3 share mx-auto">
        
        <img class="entity1" src="{{asset('img/cslogo.png')}}" style="width:85%;margin-top:-40px;margin-bottom:-40px;">
        </div>
        <div class="col-sm-3 share mx-auto">
        <img class="entity" src="{{asset('img/raslogo.png')}}" style="width:85%;margin-top:-40px;margin-bottom:-40px;">
        </div>
        <div class="col-sm-3 share mx-auto">
        <img class="entity" src="{{asset('img/imslogo.png')}}" style="width:85%;margin-top:-40px;margin-bottom:-40px;">
        </div>
        <div class="col-sm-3 share mx-auto">
        <img class="entity" src="{{asset('img/wielogo.png')}}" style="width:55%;margin-top:-40px;margin-bottom:-40px;">
        </div>
    </div>
        
    </div>
</section>

<section id="section2" class="py-5 section-2">

    <div class="container py-5 text-center">
    <h2 class="letter3" style="font-size:300%;text-align:left;color:#575858;">Eventos</h2>
    <div class="mx-auto " style="margin-top:12%;" >
    <div class="slider owl-carousel mx-auto" style="width:100%;">
        <div class="card" style="outline: none;border-color:#86BD55;padding-top: 4%;margin-top: 5%;margin-bottom: 16%;width:95%;">
        <div class="" style="padding-bottom: 264px;">
                    <h1 class="workshop" style="text-align: center;font-size: 50px;color:#86BD55;">
                        Card
                    </h1>
        </div>
        </div>
        <div class="card" style="outline: none;border-color:#86BD55;padding-top: 4%;margin-top: 5%;margin-bottom: 16%;width:95%;">
        <div class="" style="padding-bottom: 264px;">
                    <h1 class="workshop" style="text-align: center;font-size: 50px;color:#86BD55;">
                        Card
                    </h1>
        </div>
        </div>
        <div class="card" style="outline: none;border-color:#86BD55;padding-top: 4%;margin-top: 5%;margin-bottom: 16%;width:95%;">
        <div class="" style="padding-bottom: 264px;">
                    <h1 class="workshop" style="text-align: center;font-size: 50px;color:#86BD55;">
                        Card
                    </h1>
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

    <style>
      
    div.owl-next, div.owl-prev{ visibility: hidden;outline:none !important;}
   
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

    </style>

  
  
</section>



<section id="section2" class="py-5 section-2">

    <div class="container py-5 text-center">
    <h2 class="letter3" style="font-size:300%;text-align:left;color:#575858;">Projetos</h2>
    <div class="mx-auto " style="margin-top:12%;" >
    <div class="slider owl-carousel mx-auto" style="width:100%;">
        <div class="card" style="outline: none;border-color:#86BD55;;padding-top: 4%;margin-top: 5%;margin-bottom: 16%;width:95%;">
        <div class="" style="padding-bottom: 264px;">
                    <h1 class="workshop" style="text-align: center;font-size: 50px;color:#86BD55;">
                        Card
                    </h1>
        </div>
        </div>
        <div class="card" style="outline: none;border-color:#86BD55;padding-top: 4%;margin-top: 5%;margin-bottom: 16%;width:95%;">
        <div class="" style="padding-bottom: 264px;">
                    <h1 class="workshop" style="text-align: center;font-size: 50px;color:#86BD55;">
                        Card
                    </h1>
        </div>
        </div>
        <div class="card" style="outline: none;border-color:#86BD55;padding-top: 4%;margin-top: 5%;margin-bottom: 16%;width:95%;">
        <div class="" style="padding-bottom: 264px;">
                    <h1 class="workshop" style="text-align: center;font-size: 50px;color:#86BD55;">
                        Card
                    </h1>
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

    <style>
      
    div.owl-next, div.owl-prev{ visibility: hidden;outline:none !important;}
   
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

    </style>

  
  
</section>
<section id="section2" class="py-5 section-2">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Newsletter</h2>
                <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
    </div>
</section>



@endsection
