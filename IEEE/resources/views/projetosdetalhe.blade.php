@extends('layouts.nav')

@section('content')

<section id="section1" style="
margin-top:10%;margin-bottom:10%;height:100%;">

        <div
      style="color:rgb(78 81 97);margin-left:auto;margin-right:auto;text-align:center;">
                <h2 style="font-family:'font-letter2';font-size:380%;letter-spacing:0.1px;">{{$project->name}}</h2>
        </div>
     

</section>


<section id="section1" style="
margin-top:5%;margin-bottom:0%;height:100%;margin-left:5%;margin-right:5%;">
<div class="row">
                <div style="width:20%;margin-left:6.5%;margin-right:2%;"> 
                <div style="padding-top:10%;padding-bottom:5%;border-bottom: 1px solid #e6e6e6;border-top: 1px solid #e6e6e6;"> 
                        <h2 class="card"style="margin-bottom:5.5%;margin-top:2%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;">Visão</h2>
                        <a href="#fases-section"><h2 class="card" style="margin-bottom:5.5%;margin-top:2%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;">Fases</h2></a>
                        <h2 class="card"style="margin-bottom:5%;margin-top:1%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;">Colaboradores</h2>
                </div>
                <div style="padding-top:10%;padding-bottom:5%;"> 
                        <h2 class="card"style="color:grey;margin-bottom:2%;margin-top:2%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:100%;letter-spacing:0.1px;">Contacto</h2>
                </div>
                </div>
                <div style="width:60%;">
                        <div style="color:rgb(78 81 97);margin-bottom:3%;margin-left:5%;margin-right:25%;">
                        <h2 class="card"style="margin-bottom:5%;margin-top:1%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:144%;letter-spacing:0.1px;">Visão</h2>
                        <h2 class="card"style="margin-bottom:2%;margin-top:1%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:120%;letter-spacing:0.1px;">Introdução</h2>
                                <h2 class="card"style="color:grey;font-family:'font-letter1';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;line-height:1.5pc;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                              
                                </h2>
      
                        <h2 class="card"style="margin-bottom:2%;margin-top:6%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:120%;letter-spacing:0.1px;">Objetivo</h2>
                                <h2 class="card"style="color:grey;font-family:'font-letter1';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;line-height:1.5pc;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.

                                </h2>
                        </div>
                </div>
 </div>

</section>

<section id="fases-section" style="
padding-top:15%;margin-bottom:20%;height:100%;margin-left:5%;margin-right:5%;">

<div class="row">
                <div style="width:20%;margin-left:6.5%;margin-right:2%;"> 
                </div>
                <div style="width:60%;">
                        <div style="color:rgb(78 81 97);margin-bottom:3%;margin-left:5%;margin-right:25%;">
                        <h2 class="card"  style="margin-bottom:5%;margin-top:1%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;">Fases</h2>
                                <h2 class="card"style="   display: list-item;                                       
    list-style-type: disc;       
    list-style-position: inside;color:grey;font-family:'font-letter1';justify-content:center;border:none;text-align:justify;font-size:120%;letter-spacing:0.1px;line-height:1.5pc;">
                                Lorem ipsum dolor sit amet,modo consequat.  
                                </h2>

                                <h2 class="card"style="   display: list-item;                                       
    list-style-type: disc;       
    list-style-position: inside;color:grey;font-family:'font-letter1';justify-content:center;border:none;text-align:justify;font-size:120%;letter-spacing:0.1px;line-height:1.5pc;">
                              Lorem ipsum dolor sit amet,modo consequat. 
                        </div>
                </div>
 </div>

     

</section>
<div class="container" style="margin-bottom:10%; ">
<h2 class="member-title">Colaboradores</h2>
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


html{
  scroll-behavior:smooth;
}


</style>

@endsection
