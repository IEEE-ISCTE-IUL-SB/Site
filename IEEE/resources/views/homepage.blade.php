@extends('layouts.nav')

@section('content')


<section style="margin-bottom:0%;background:white;padding-top:0%;padding-bottom:5.2%;background-size: cover;background-position: center;" id="companiesStories" >

      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
            <div class="mx-auto " style="  margin-bottom:0%;width:100%;background-color:#F9F9F9;-webkit-box-shadow: -3px 15px 18px -8px rgba(0,0,0,0.19); 
box-shadow: -3px 15px 18px -8px rgba(0,0,0,0.19);">
                <div class="row">
                    <div style="margin-top:0%;width:40%;">
                        <div style="width:100%;">
                            <div class="letter2 workshop" style="
                       padding-top:30%;
                            padding-left:10%;;font-size:340%;margin-left:3%;-webkit-background-clip: text;
                        background-color: white;text-align:left;">
                                            <h1 style=" opacity:60%;">Advancing Technology for Humanity</h1>
                                            <a ><p href="{{ url('/') }}" class="butpro letter2">Ver mais</p></a>
                            </div>
                            
                        </div>
                    </div>            
                    <div style="width:60%;"> 
                        <img src="{{asset('img/ieee3.jpg')}}"  style="
                    height:auto;
                        width:100%;;
                        border-radius:0px;
                        padding-bottom:0%;
                        margin-bottom:-0.3%;"/>
                    </div>
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

$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 400 ) {
            $('.entity1').addClass('animate__animated', 'animate__bounce');
       
    });
});

</script>




    <!-- End Section Slider -->




</section>

<section id="section1" style="background: rgb(123,143,131);
background: linear-gradient(0deg, rgba(123,143,131,1) 5%, rgba(56,99,111,1) 98%, rgba(79,79,79,1) 100%);padding-bottom:15%;">
    <div class="container">
    <h1 class="letter2" style="text-align:center;font-size:45px;color:white;padding-top:10%;letter-spacing:1px;"> Explora as nossas societies</h1>
    <div class="row mx-auto" style="padding-top:10%;padding-left:-10px;">
      
        <div class="col-lg-2 share mx-auto ">
        <img class="entity1" src="{{asset('img/cslogo.png')}}" style="width:95%;margin-top:-40px;margin-bottom:-40px;">
        </div>
        <div class="col-lg-2 share mx-auto ">
        <img class="entity1" src="{{asset('img/MAE.png')}}" style="width:85%;margin-top:-40px;margin-bottom:-40px;">
        </div>
        <div class="col-lg-2 share mx-auto ">
        <img class="entity" src="{{asset('img/raslogo.png')}}" style="width:95%;margin-top:-40px;margin-bottom:-40px;">
        </div>
        
        <div class="col-lg-2 share mx-auto ">
        <img class="entity" src="{{asset('img/imslogo.png')}}" style="width:95%;margin-top:-40px;margin-bottom:-40px;">
        </div>
        <div class="col-lg-2 share mx-auto">
        <img class="entity" src="{{asset('img/wielogo.png')}}" style="width:85%;margin-top:-40px;margin-bottom:-40px;">
        </div>
       
    </div>
        
    </div>
</section>



    <style>
      
    div.owl-next, div.owl-pre v{ visibility: hidden;outline:none !important;}
   
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
