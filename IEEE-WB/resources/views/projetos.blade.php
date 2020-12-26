@extends('layouts.nav')

@section('content')

<section id="section1" style="
margin-top:10%;margin-bottom:20%;">

        <div
      style="color:rgb(78 81 97);margin-left:10%;">
                <h2 style="font-family:'font-letter2';font-size:4pc;letter-spacing:0.1px;">Projetos</h2>
        </div>
     

</section>

<section id="section1" style="background: rgb(111,115,139);background: linear-gradient(0deg, rgba(111,115,139,1) 0%, rgba(97,100,121,1) 4%, rgba(88,92,111,1) 8%, rgba(78,84,100,1) 15%, rgba(72,78,92,1) 23%, rgba(71,77,90,1) 35%, rgba(71,76,88,1) 42%, rgba(70,73,82,1) 66%, rgba(65,67,75,1) 81%);padding-bottom:40%;padding-top:10%;margin-top: 23%;">
        
        <div class="" style="clip-path: ellipse(68% 56% at 49% 97%);margin-top: -26.5%;padding-top: 26%;padding-bottom: -2%;background: linear-gradient( rgba(71,77,90,1) 35%, rgba(71,76,88,1) 42%, rgba(70,73,82,1) 66%, rgba(65,67,75,1) 81%);">
        </div>
        
        <div style="color:white;position: relative;padding-top: 11%;margin-bottom: 10%;">
                <h2 style="margin-left: -2%;font-family:'font-letter2';font-size:3pc;letter-spacing:1px;margin-top: -20%;text-align:center;position: relative;margin-bottom: -17%;">Descobre o que temos para ti</h2>
        </div>
       
            
        <div class="container mx-auto" style="
            position:relative; margin-top: -18%;
        ">
            <div class="row mx-auto">
                <div class="col-sm-4" style="margin-left: 24%;width:72%;"> 
                    <button id="t1" style="background-color: transparent; color: rgba(210, 210, 210, 0.67); outline: none; margin-top: auto; margin-right: 0%; font-size: 153%;" onclick="myFunction1()">Sala Inteligente</button>
                </div>
                <div class="col-sm-4" style="margin-left:-10%;width:72%;"> 
                    <button id="t2" style="background-color: transparent; color: white; outline: none; margin-top: auto; font-size: 184%;" onclick="myFunction2()">Condução Inteligente</button> 
                </div>
            </div>
            
                <div class="" style="margin-top:10%;">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-6 " id="project1" style="display: none;">
                        <h1 style="color:white;">Articles</h1>
                        <br>
                        <a href="display:none;" style="
                            margin-top: auto;
                        "> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1564033829/Restaurant/img-6.jpg" style="
                            justify-content: center;
                            text-align: center;
                            
                            width: 100%;
                        
                        "></a>
                    </div>
                    <div class="  col-lg-4 col-md-4 col-sm-4 col-xs-6 " id="project2" style="display: block;">
                        <h1 style="color:white;
                        ">Articles</h1>
                        <br>
                            <a href="display:none;" style="
                            justify-content: center;
                            text-align: center;
                            margin-top: auto;"> 
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1564033829/Restaurant/img-6.jpg" style="
                            justify-content: center;
                            text-align: center;
                            width: 100%;"></a> 


                        <h1 style="color:white;">Inside Members</h1>
                        <br>
                            <a href="display:none;" style="
                            justify-content: center;
                            text-align: center;
                            margin-top: auto;"> 
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1564033829/Restaurant/img-6.jpg" style="
                            justify-content: center;
                            text-align: center;
                            width: 100%;"></a> 


                        <h1 style="color:white;">Extras</h1>
                        <br>
                            <a href="display:none;" style="
                            justify-content: center;
                            text-align: center;
                            margin-top: auto;"> 
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1564033829/Restaurant/img-6.jpg" style="
                            justify-content: center;
                            text-align: center;
                            width: 100%;"></a> 
                    </div>
                   
                    
                </div>
          
  
        </div>

<style>




 </style>

 <script>

 function myFunction1(){

    var x = document.getElementById("project1");
    var y = document.getElementById("project2");
    var t1 = document.getElementById("t1");
    var t2 = document.getElementById("t2");
    if (x.style.display === "block") {
        x.style.display = "block";
        y.style.display = "none";
        t1.style.fontSize="184%" 
        t2.style.fontSize="153%" 
        t2.style.color = "#d2d2d2ab";
        t1.style.color = "white";
        
    }
    else{
        x.style.display = "block";
        y.style.display = "none";
        t1.style.fontSize="184%" 
        t2.style.fontSize="153%" 
        t2.style.color = "#d2d2d2ab";
        t1.style.color = "white";
    }

}
function myFunction2(){

    var a = document.getElementById("project1");
    var b = document.getElementById("project2");
    var t1 = document.getElementById("t1");
    var t2 = document.getElementById("t2");
    if (b.style.display === "block") {
        a.style.display = "none";
        t1.style.color = "#d2d2d2ab";
        t2.style.color = "white";
        b.style.display = "block";
        t1.style.fontSize="153%" 
        t2.style.fontSize="184%" 
    }
    else{
        a.style.display = "none";
        b.style.display = "block";
        t1.style.fontSize="153%" 
        t2.style.color = "white";
        t1.style.color = "#d2d2d2ab";
        t2.style.fontSize="184%" 
    }

    
}



 
 </script>
 
</section>


<section id="section1" style="    margin-top: -125%;
    background: white;
    padding-bottom: 20%;
    padding-top: 107%;
    clip-path: ellipse(99% 16% at 49% 100%);">
      
    
</section>

<section id="section3">
      <div  style="color:white;margin-left:10%;margin-top:-10%;position: relative; ">
                <h2 style="font-family:'font-letter2';font-size:4pc;letter-spacing:0.1px;color:rgb(78 81 97);">Ajuda</h2>
                <p class="text-muted lead" style="margin-top:10%;"></p>
         
        </div>
    
</section>




@endsection
