@extends('layouts.nav')

@section('content')

<section id="section1" style="margin-top:5%;margin-bottom:10%;">

            <img class="societylogo"src="{{asset('img/wielogo2.png')}}" />
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


<section class="py-5 section-3">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Demo section 3</h2>
                <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 section-4">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>Demo section 4</h2>
                <p class="text-muted lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
            </div>
        </div>
    </div>
</section>
<style>

.mission-row {
        text-align: center;
        overflow:hidden;
        font-size: 120%;
        color:dimgrey;
        overflow:hidden;
        margin-bottom: 1%;
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
    margin-top: 0;
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
        margin-left:auto;
        overflow:hidden;
        margin-right: auto;
    }


}
</style>

@endsection
