@extends('layouts.nav')

@section('content')






<section id="societylogosection">
    <img src="{{asset('img/raslogo2.png')}}" class="societylogo">
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

 
    <div class="row" style="overflow:hidden;">
    <div class="column side1" >
            
                <div style="border-radius:10px;margin-left:4.5%;margin-right:2%;margin-top:1%;padding:center;height:96%;
                -webkit-box-shadow:2px 2px 50px -23px rgba(0,0,0,0.45);
                        box-shadow:2px 2px 50px -23px rgba(0,0,0,0.45);
                        background-color:white;justify-content:center;">
                        <div style="padding-top: 23%; text-align:center;">
                        <h1 class="letter2" style="color:#333333;font-size: 250%" > kfkifviodksoskcdo</h1>
                        <h1 class="letter2" style="color:#333333;font-size: 130%"> olal</h1>
                </div>
         
        </div>
        </div>
        <div class="column side2" >
            <img src="{{asset('img/rasSplash.jpg')}}" style="-webkit-box-shadow: 0px 0px 16px 4px rgba(0,0,0,0.24);
                box-shadow:0px 0px 16px 4px rgba(0,0,0,0.24);height:auto;width:100%">
        </div>
    </div>
   


    

  
  
</section>
<section id="section2" class="py-5 section-2"><h2 class="letter2 sections-title" >Quem Somos?</h2>
    <div class="container py-5 text-center">

        <div class="row">
            <div class="col-lg-8 mx-auto">
           
                <p class="text-muted lead sections-description ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
    </div>
</section>
<section id="section2" class="py-5 section-2"><h2 class="letter2 sections-title" >Workshops</h2>
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

<style>
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
    #societylogosection {
        position: relative;
        min-width: 40%;
        padding-top: 10%;
        padding-bottom: 10%;
        overflow:hidden;
        margin-bottom: 1%;
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
 
    

    @media only screen and (max-width: 900px) {
  .showw {
    display : none;
    overflow:hidden;
  }

  .societylogo {
        max-width: 60%;
        width:100%;
        display: block;
        margin-left:auto;
        overflow:hidden;
        margin-top:10%;
        margin-right: auto;
    }

    .sections-title{
        overflow:hidden;text-align:center;font-size:220%;
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
    margin-top: 2rem;
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
        max-width: 40%;
        width:20%;
        display: block;
        margin-left:7%;
        overflow:hidden;
        margin-right: auto;
    }


}
</style>



@endsection
