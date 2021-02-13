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

        <div class="row">
            <div class="col-lg-8 mx-auto">
           
                <p class="text-muted lead sections-description" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
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
