@extends('layouts.nav')

@section('content')


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


</section>
    <style>






    .butpro:hover, .butpro:active{
        border:1px solid white;
        background: url(img/ieee3.jpg);
        color: white;
        transition:0.2s ease-in all;
        -moz-transition:    all 0.2s  ease-in;
        -webkit-transition: all 0.2s  ease-in;
        -o-transition:      all 0.2s  ease-in;
        -ms-transition:     all 0.2s  ease-in
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
        transition:0.3s ease-in all;
        -moz-transition:    all 0.3s  ease-in;
        -webkit-transition: all 0.3s ease-in;
        -o-transition:      all 0.3s  ease-in;
        -ms-transition:     all 0.3s  ease-in ;


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









<section id="section1" style="background: rgb(94,97,103);
background: linear-gradient(0deg, rgba(94,97,103,1) 14%, rgba(81,87,101,1) 31%, rgba(72,80,99,1) 50%, rgba(65,75,98,1) 97%, rgba(52,59,77,1) 100%);padding-bottom:15%;">
    

    <div class="pc container" >
    <h1 class="letter2" style="text-align:center;font-size:45px;color:white;padding-top:10%;letter-spacing:1px;"> Explora as nossas societies</h1>
    <div class="row mx-auto" style="padding-top:10%;padding-left:-10px;">

        <div class="col-lg-2 share mx-auto ">

            <a href="{{ url('/CS') }}"> <img class="entity1" src="{{asset('img/cslogo.png')}}" style="width:95%;margin-top:-40px;margin-bottom:-40px;"> </a>
        </div>
        <div class="col-lg-2 share mx-auto ">
            <a href="{{ url('/MAE') }}"> <img class="entity1" src="{{asset('img/MAE.png')}}" style="width:85%;margin-top:-40px;margin-bottom:-40px;"> </a>
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
        <a href="{{ url('/MAE') }}"><img class="entity1" src="{{asset('img/MAE.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;"></a>
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
    <div class="member">
      <img class="pc member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033344/itc-web-course-flexbox/richard.png">
      <img class="mobile member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033344/itc-web-course-flexbox/richard.png">
      <h2 class="member-name">Richard Hendricks</h2>
      <span class="member-role">Founder & CEO</span>
    </div>
    <div class="member">
      <img  class="pc member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033285/itc-web-course-flexbox/dinesh.png">
      <img  class="mobile member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033285/itc-web-course-flexbox/dinesh.png">
      <h2 class="member-name">Dinesh Chugtai</h2>
      <span class="member-role">Senior Programmer</span>
    </div>
    <div class="member">
      <img  class="pc member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033357/itc-web-course-flexbox/gilfoyle.png">
      <img  class="mobile member-image " src="https://res.cloudinary.com/mlshv/image/upload/v1544033357/itc-web-course-flexbox/gilfoyle.png">
      <h2 class="member-name">Bertram Gilfoyle</h2>
      <span class="member-role">Chief Systems Architect</span>
    </div>
    <div class="member">
        <img  class="pc member-image"  src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/jared.png">
        <img  class="mobile member-image "  src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/jared.png">
      <h2 class="member-name">Jared Dunn</h2>
      <span class="member-role">Chief Operating Officer</span>
    </div>
    <div class="member">
      <img  class="pc member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/monica.png">
      <img  class="mobile member-image " src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/monica.png">
      <h2 class="member-name">Monica Hall</h2>
      <span class="member-role">Chief Financial Officer</span>
    </div>
    <div class="member">
      <img  class="pc member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033300/itc-web-course-flexbox/big-head.png">
      <img  class="mobile member-image " src="https://res.cloudinary.com/mlshv/image/upload/v1544033300/itc-web-course-flexbox/big-head.png">
      <h2 class="member-name">Nelson Bighetti</h2>
      <span class="member-role">Majority Investor</span>

    </div>
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
  font-family:'font-letter4';
  letter-spacing:1px;overflow:hidden;
}
</style>
@endsection
