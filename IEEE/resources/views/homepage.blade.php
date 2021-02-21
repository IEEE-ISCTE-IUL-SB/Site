@extends('layouts.nav')

@section('content')


<section style="margin-bottom:0%;background:white;padding-top:0%;padding-bottom:5.2%;background-size: cover;background-position: center;" id="companiesStories" >

      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    
    <div class="pc" >
            <div class="mx-auto " style="  margin-bottom:0%;width:100%;background-color:#F9F9F9;-webkit-box-shadow: 0px 12px 18px 6px rgba(0,0,0,0.08); 
box-shadow: 0px 12px 18px 6px rgba(0,0,0,0.08);">
                <div class="row">
                    <div style="margin-top:0%;width:40%;">
                        <div style="width:100%;">
                            <div class="letter2 workshop" style="
                       padding-top:30%;
                            padding-left:10%;;font-size:340%;margin-left:3%;-webkit-background-clip: text;
                        background-color: white;text-align:left;">
                                            <h1 style=" opacity:60%;">Advancing Technology for Humanity</h1>
                                            <a ><p href="{{ url('/') }}" class="butpro letter2">Junte-te a nós</p></a>
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
        <div class="mobile">
            <div class="mx-auto " style="  margin-bottom:0%;width:100%;background-color:#F9F9F9;-webkit-box-shadow: 0px 12px 18px 6px rgba(0,0,0,0.08); 
                box-shadow: 0px 12px 18px 6px rgba(0,0,0,0.08);">
               
                   
                        <div style="width:100%;">
                            <div class="letter2 workshop" style="
                       padding-top:10%;padding-bottom:10%;
                            padding-left:5%;padding-right:5%;font-size:310%;margin-left:0%;-webkit-background-clip: text;
                        background-color: white;text-align:center;">
                                            <h1 style="margin-bottom:10%;opacity:60%;">Advancing Technology for Humanity</h1>
                                            <a style="text-align:center !important;margin:auto !important;"><p href="{{ url('/') }}"style="text-align:center !important;margin:auto !important;" class="butpro letter2">Junte-te a nós</p></a>
                            </div>
                        </div>
                    

                
                        <img src="{{asset('img/ieee3.jpg')}}"  
                        style="
                             height:auto;
                            width:100%;
                            border-radius:0px;
                            padding-bottom:0%;
                            margin-bottom:-0.3%;"/>
                 
            </div>  
        
         </div>
  


    <style>

@media (min-width: 100px) {

.pc {
    display: block;
}
.mobile {
    display: none;
}
}

@media (max-width: 1000px) {

.pc {
    display: none;
}
.mobile {
    display: block;
}
}



    

.butpro:hover, .butpro:active{
;

    border:1px solid white;
    background: url(img/ieee3.jpg);
    color: white;
    transition:0.1s ease-in all;
    -moz-transition:    all 0.1s  ease-in;
  -webkit-transition: all 0.1s  ease-in;
  -o-transition:      all 0.1s  ease-in;
  -ms-transition:     all 0.1s  ease-in 
    }

    .butpro{
      
        margin-top: 30px;
        
        -webkit-background-clip: text;
        background-size: cover;background-position: center;
        font-size: 17px;
        width: 10pc;
        padding-left:1%;
        padding-right:1%;
        padding-top: 11px;
        padding-bottom: 12px;
        text-align:center;
        border:1px solid #585A5C;
        background:transparent;
        color:#585A5C;
        transition:0.15s ease-in all;
        -moz-transition:    all 0.15s  ease-in;
        -webkit-transition: all 0.15s ease-in;
        -o-transition:      all 0.15s  ease-in;
        -ms-transition:     all 0.15s  ease-in ;

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
    
    <div class="pc container" >
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

     
    <div class="mobile container">
    <h1 class="letter2" style="text-align:center;font-size:45px;color:white;padding-top:20%;letter-spacing:1px;"> Explora as nossas societies</h1>
    <div class="row mx-auto" style="padding-top:10%;text-align:center;">
      
        <div class="col-lg-2 share mx-auto">
        <img class="entity1" src="{{asset('img/cslogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;">
        </div>
        <div class="col-lg-2 share mx-auto ">
        <img class="entity1" src="{{asset('img/MAE.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;">
        </div>
        <div class="col-lg-2 share mx-auto ">
        <img class="entity" src="{{asset('img/raslogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;">
        </div>
        
        <div class="col-lg-2 share mx-auto ">
        <img class="entity" src="{{asset('img/imslogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;">
        </div>
        <div class="col-lg-2 share mx-auto">
        <img class="entity" src="{{asset('img/wielogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;">
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


<div class="container" style="margin-bottom:10%;">
<h2 style="font-family:'font-letter2';font-size:3.5pc;letter-spacing:0.1px;color:rgb(78 81 97);text-align:center;margin-bottom:10%;margin-top:10%;">Membros</h2>
  <div class="members">
    <div class="member">
      <img class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033344/itc-web-course-flexbox/richard.png">
      <h2 class="member-name">Richard Hendricks</h2>
      <span class="member-role">Founder & CEO</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033285/itc-web-course-flexbox/dinesh.png">
      <h2 class="member-name">Dinesh Chugtai</h2>
      <span class="member-role">Senior Programmer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033357/itc-web-course-flexbox/gilfoyle.png">
      <h2 class="member-name">Bertram Gilfoyle</h2>
      <span class="member-role">Chief Systems Architect</span>
    </div>
    <div class="member"><img  class="member-image"  src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/jared.png">
      <h2 class="member-name">Jared Dunn</h2>
      <span class="member-role">Chief Operating Officer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/monica.png">
      <h2 class="member-name">Monica Hall</h2>
      <span class="member-role">Chief Financial Officer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033300/itc-web-course-flexbox/big-head.png">
      <h2 class="member-name">Nelson Bighetti</h2>
      <span class="member-role">Majority Investor</span>

    </div>
  </div>
</div>

<style>

.members {
  display: flex;
  flex-wrap: wrap;
  width: 98%;
}

.member-image{
    box-shadow: 0 0 black;
    border-radius:100px;
}

.member {
  text-align: center;
  flex-basis: 7%;
  padding: 16px;
  box-sizing: border-box;
  margin-bottom: 30px;
}

.member-name {
  margin: 0;
  margin-top: 18px;
  font-weight: 600;
  font-size: 16px;
  color: #333333;
  font-family:'font-letter4';
  letter-spacing:1px;
}

.member-role {
  font-style: normal;
  font-size: 16px;
  font-family:'font-letter4';
  letter-spacing:1px;
}
</style>
@endsection
