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
                       padding-top:30%;padding-bottom:10%;
                            padding-left:5%;padding-right:5%;font-size:290%;margin-left:0%;-webkit-background-clip: text;
                        background-color: white;text-align:center;">
                                            <h1 style="margin-bottom:10%;opacity:60%;">Advancing Technology for Humanity</h1>
                                            <a href="/candidatura" style=" text-decoration: none;text-align:center !important;margin:auto !important;"><p href="{{ url('/') }}"style="text-align:center !important;margin:auto !important;" class="butpro">Junta-te a nós</p></a>
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
                            padding-left:5%;padding-right:5%;font-size:290%;margin-left:0%;-webkit-background-clip: text;
                        background-color: white;text-align:center;">
                                            <h1 style="margin-bottom:10%;opacity:60%;">Advancing Technology for Humanity</h1>
                                            <a href="/candidatura" style=" text-decoration: none;text-align:center !important;margin:auto !important;"><p href="{{ url('/') }}"style="text-align:center !important;margin:auto !important;" class="butpro">Junta-te a nós</p></a>
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


    @media  (min-width: 1000px){

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






<div class="container" style="margin-bottom:10%; ">
    <h2 class="member-title">Team</h2>
    <div class="members">

        @foreach($members as $member)
        <a href="{{$member->linkedin_url}}" class="mx-auto no-hover">
            <div class="member">
                <img class="pc member-image" src="{{Voyager::image($member->image)}}" >
                <img class="mobile member-image" src="{{Voyager::image($member->image)}}" >
                <h2 class="member-name">{{$member->member_name}}</h2>
                <span class="member-role">{{$member->member_role}}</span>
            </div>
        </a>
        @endforeach


    </div>
</div>




<section id="section1" style="

background-image: linear-gradient(to top, #4b5262, #4b5367, #4c536c, #4d5470, #4f5475, #525779, #55597d, #585c81, #5c6286, #5f678b, #636d8f, #677394);

padding-bottom:15%;
-webkit-box-shadow: 0px 29px 5px -9px rgba(0,0,0,0.6); 
box-shadow: 0px 29px 5px -9px rgba(0,0,0,0.6);padding-bottom:16%;
">


    <div class="pc container" >
    <h1 class="letter2" style="text-align:center;font-size:45px;color:white;padding-top:10%;letter-spacing:1px;"> Explore our societies</h1>
    <div class="row mx-auto" style="padding-top:10%;padding-left:-10px;">

        <div class="col-lg-2 share mx-auto ">

            <a href="{{ url('/CS') }}"> <img class="entity" src="{{asset('img/cslogo.png')}}" style="width:95%;margin-top:-40px;margin-bottom:-40px;"> </a>
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
    <h1 class="letter2" style="text-align:center;font-size:250%;color:white;padding-top:20%;letter-spacing:1px;"> Explora as nossas societies</h1>
    <div class="row mx-auto" style="padding-top:10%;text-align:center;">

        <div class="col-lg-2 share mx-auto">
        <a href="{{ url('/CS') }}"> <img class="entity" src="{{asset('img/cslogo.png')}}" style="text-align:center;width:50%;margin-top:10%;margin-bottom:10%;"></a>
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
  margin:auto;
  text-align: center;

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

.member-image {
    transition: .2s;
}

.no-hover:hover {
    text-decoration: none;
    color:initial;
}

.no-hover:hover > .member > .member-image {
    transform: scale(1.1);
    transition: .2s;
}
</style>
@endsection
