@extends('layouts.nav')

@section('content')


<<<<<<< HEAD
<section style="margin-bottom:0%;background: url(img/background4.png);background-size: cover;background-position: center;" id="companiesStories" >

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
    width: auto;
    margin-top: 0%;
    margin-left: 11px;
    padding-top: 70%;
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
     -webkit-box-shadow: 0 1px 10px #989898;
    -moz-box-shadow: 0 1px 10px #989898;
    box-shadow: 0 1px 10px #989898;
    background-size: cover;
    background-position: center;
    width: auto;
    margin-top: 0%;
    margin-left: 11px;
    padding-top: 70%;
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
     -webkit-box-shadow: 0 1px 10px #989898;
    -moz-box-shadow: 0 1px 10px #989898;
    box-shadow: 0 1px 10px #989898;
    background-size: cover;
    background-position: center;
    width: auto;
    margin-top: 0%;
    margin-left: 11px;
    padding-top: 70%;
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
                autoplayTimeout: 12000, //2000ms = 2s;
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
=======
<section style="margin-bottom:0%;background:white;padding-top:0%;padding-bottom:5.2%;background-size: cover;background-position: center;" id="companiesStories" >

      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <div class="pc" >
            <div class="mx-auto " style="  margin-bottom:0%;width:100%;background-color:#F9F9F9;-webkit-box-shadow: 0px 12px 18px 6px rgba(0,0,0,0.08);
box-shadow: 0px 12px 18px 6px rgba(0,0,0,0.08);overflow:hidden;">
                <div class="row">
                    <div style="margin-top:0%;width:40%;">
                        <div style="width:100%;">
                            <div class="letter2 workshop" style="
                       padding-top:30%;
                            padding-left:10%;;font-size:340%;margin-left:3%;-webkit-background-clip: text;
                        background-color: white;text-align:left;">
                                            <h1 style=" opacity:60%;padding-right:2vw;">Advancing Technology for Humanity</h1>
                                            <a><p href="{{ url('/') }}" class="butpro letter2">Junta-te a nós</p></a>
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
                                            <a style="text-align:center !important;margin:auto !important;"><p href="{{ url('/') }}"style="text-align:center !important;margin:auto !important;" class="butpro">Junte-te a nós</p></a>
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


</section>
    <style>






    .butpro:hover, .butpro:active{
        border:1px solid  rgb(133,133,133);
        background: rgb(133,133,133);
background: linear-gradient(180deg, rgba(133,133,133,1) 39%, rgba(133,133,133,1) 100%);
        color: white;font-size: 17px;
        transition:0.2s;

}

    .butpro{
        margin-top: 30px;
        -webkit-background-clip: text;
        background-size: cover;background-position: center;
        font-size: 17px;
        font-family:'font-letter2';
        width: 10pc;
        padding-left:1vw;
        padding-right:1vw;
        padding-top: 1.3vh;
        padding-bottom: 1.3vh;
        text-align:center;
        border:1px solid #585A5C;
        background:transparent;
        color:#585A5C;
        transition:0.2s ;



}

    .member-image{
        box-shadow: 0 0 black;
        border-radius: 100px;
        padding: 16px;
        width: 10pc;
        margin:auto;text-align: center;
    }

    .member-title{
        font-family:'font-letter2';letter-spacing:0.1px;color:rgb(78 81 97);text-align:center;margin-bottom:10%;margin-top:10%;
    }


    @media  (min-width: 100px){

    .pc {
        display: block;
    }
    .mobile {
        display: none;
    }


    .member-image{
        width: 10pc;

    }
    .member-title{
            font-size:3.5pc;
        }
    }

    @media (max-width: 1000px) {

        .pc {
            display: none;

        }
        .mobile {
            display: block;
        }
        .member-image{
        width: 9pc;
        }

        .member-title{
            font-size:2.5pc;
        }
    }
    </style>

>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")




<<<<<<< HEAD
    <!-- End Section Slider -->



</div>
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





=======




<section id="section1" style="background: rgb(94,97,103);
background: linear-gradient(0deg, rgba(94,97,103,1) 14%, rgba(81,87,101,1) 31%, rgba(72,80,99,1) 50%, rgba(65,75,98,1) 97%, rgba(52,59,77,1) 100%);padding-bottom:15%;">


    <div class="pc container" >
    <h1 class="letter2" style="text-align:center;font-size:45px;color:white;padding-top:10%;letter-spacing:1px;"> Explora as nossas societies</h1>
    <div class="row mx-auto" style="padding-top:10%;padding-left:-10px;">

        <div class="col-lg-2 share mx-auto ">

            <a href="{{ url('/CS') }}"> <img class="entity1" src="{{asset('img/cslogo.png')}}" style="width:95%;margin-top:-40px;margin-bottom:-40px;"> </a>
        </div>

        <div class="col-lg-2 share mx-auto ">
            <a href="{{ url('/RAS') }}"> <img class="entity" src="{{asset('img/raslogo.png')}}" style="width:95%;margin-top:-40px;margin-bottom:-40px;"> </a>

        </div>

        <div class="col-lg-2 share mx-auto ">

            <a href="{{ url('/IMS') }}"> <img class="entity" src="{{asset('img/imslogo.png')}}" style="width:95%;margin-top:-40px;margin-bottom:-40px;"> </a>
        </div>
        <div class="col-lg-2 share mx-auto">
            <a href="{{ url('/WIE') }}"> <img class="entity" src="{{asset('img/wielogo.png')}}" style="width:85%;margin-top:-40px;margin-bottom:-40px;"> </a>

        </div>

    </div>

    </div>


    <div class="mobile container">
    <h1 class="letter2" style="text-align:center;font-size:45px;color:white;padding-top:20%;letter-spacing:1px;"> Explora as nossas societies</h1>
    <div class="row mx-auto" style="padding-top:10%;text-align:center;">

        <div class="col-lg-2 share mx-auto">
        <a href="{{ url('/CS') }}"> <img class="entity1" src="{{asset('img/cslogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;"></a>
        </div>

        <div class="col-lg-2 share mx-auto ">
        <a href="{{ url('/RAS') }}"><img class="entity" src="{{asset('img/raslogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;"></a>
        </div>

        <div class="col-lg-2 share mx-auto ">
        <a href="{{ url('/IMS') }}"> <img class="entity" src="{{asset('img/imslogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;"></a>
        </div>
        <div class="col-lg-2 share mx-auto">
        <a href="{{ url('/WIE') }}"> <img class="entity" src="{{asset('img/wielogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;"></a>
        </div>

    </div>

    </div>
</section>



<div class="container" style="margin-bottom:10%; ">
    <h2 class="member-title">Membros</h2>
      <div class="members">

      @foreach($members as $member)
        <div class="member">
          <img class="pc member-image" src="{{asset($member->image)}}" >
          <img class="mobile member-image" src="{{asset($member->image)}}" >
          <h2 class="member-name">{{$member->member_name}}</h2>
          <span class="member-role">{{$member->member_role}}</span>
        </div>
      @endforeach


      </div>
</div>

<style>

.members {
  display: flex;
  flex-wrap: wrap;
  margin:auto;
  text-align: center;
  overflow:hidden;

}

.member {
  text-align: center;
  flex-basis: 7%;
  box-sizing: border-box;
  margin-bottom: 30px;
  margin:auto;text-align: center;

}

.member-name {
  margin: 0;
  margin-top: 18px;
  font-weight: 600;
  font-size: 16px;
  color: #333333;
  font-family:'font-letter4';
  letter-spacing:1px;overflow:hidden;
}

.member-role {
    font-style: normal;
    font-size: 16px;
    line-height: 18px;
    font-family:'font-letter4';
    letter-spacing:1px;overflow:hidden;
}
</style>
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
@endsection
