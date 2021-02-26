@extends('layouts.nav')

@section('content')

<section id="section1" style="
margin-top:10%;margin-bottom:20%;">

        <div
      style="color:rgb(78 81 97);margin-left:10%;">
                <h2 style="font-family:'font-letter2';font-size:370%;letter-spacing:0.1px;">Projetos</h2>
        </div>
<<<<<<< HEAD
     

</section>

<section id="section1" style="background: rgb(111,115,139);background: linear-gradient(0deg, rgba(111,115,139,1) 0%, rgba(97,100,121,1) 4%, rgba(88,92,111,1) 8%, rgba(78,84,100,1) 15%, rgba(72,78,92,1) 23%, rgba(71,77,90,1) 35%, rgba(71,76,88,1) 42%, rgba(70,73,82,1) 66%, rgba(65,67,75,1) 81%);padding-bottom:40%;padding-top:10%;margin-top: 23%;">
        
        <div class="" style="clip-path: ellipse(68% 56% at 49% 97%);margin-top: -26.5%;padding-top: 26%;padding-bottom: -2%;background: linear-gradient( rgba(71,77,90,1) 35%, rgba(71,76,88,1) 42%, rgba(70,73,82,1) 66%, rgba(65,67,75,1) 81%);">
        </div>
        
        <div style="color:white;position: relative;padding-top: 11%;margin-bottom: 10%;">
                <h2 style="margin-left: -2%;font-family:'font-letter2';font-size:270%;letter-spacing:1px;margin-top: -20%;text-align:center;position: relative;margin-bottom: -17%;">Descobre o que temos para ti</h2>
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
 
=======


</section>

<section id="section1" style="text-align:center;background: rgb(111,115,139);background: linear-gradient(0deg, rgba(111,115,139,1) 0%, rgba(97,100,121,1) 4%, rgba(88,92,111,1) 8%, rgba(78,84,100,1) 15%, rgba(72,78,92,1) 23%, rgba(71,77,90,1) 35%, rgba(71,76,88,1) 42%, rgba(70,73,82,1) 66%, rgba(65,67,75,1) 81%);padding-bottom:40%;padding-top:10%;margin-top: 23%;">

        <div class="" style="clip-path: ellipse(68% 56% at 49% 97%);margin-top: -26.5%;padding-top: 26%;padding-bottom: -2%;background: linear-gradient( rgba(71,77,90,1) 35%, rgba(71,76,88,1) 42%, rgba(70,73,82,1) 66%, rgba(65,67,75,1) 81%);">
        </div>

        <div style="color:white;position: relative;padding-top: 11%;margin-bottom: 5%;">
                <h2 style="margin-left: -2%;font-family:'font-letter2';font-size:270%;letter-spacing:1px;margin-top: -20%;text-align:center;position: relative;margin-bottom: -17%;">Descobre o que temos para ti</h2>
        </div>
        <div class="container" style="text-align:center;justify-content:center;margin-top:0%;margin-bottom:10%; ">

    <div class="projects">

    @foreach($projects as $project)
        <a  class="card project" href="{{ route('single', $project->id )}}" >
            <div class="row mx-auto" >
                <div id="wrapper">
                    <div style="
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                overflow:hidden;

                -webkit-filter: blur(3px);
                -moz-filter: blur(3px);
                -o-filter: blur(3px);
                -ms-filter: blur(3px);
                justify-content:center;
                box-sizing: border-box;

                width:15pc;
                height:12pc;
                filter: blur(3px) brightness(0.6) saturate(1.3);

                background-size: cover;

                background-image: url('{{asset($project->image_card)}}');  "></div>
                    <h2 class="card project-name" style="">{{$project->project_name}}</h2>
                </div>
            </div>
        </a>
    @endforeach

    </div>

</div>

<style>

.projects {
  display: flex;
  flex-wrap: wrap;
  margin:auto;
  text-align: center;
  overflow:hidden;
  justify-content:center;

}
a{}

.project {
background-color:transparent;
        margin:auto;
  justify-content:center;
  margin:3%;text-align: center;


}

 #wrapper{
        -webkit-box-shadow: 0px 0px 17px 5px rgba(0,0,0,0.26); overflow:hidden;
box-shadow: 0px 0px 17px 5px rgba(0,0,0,0.26);
border-radius:10px;
transition:0.3s;

}

#wrapper:hover, #wrapper:focus{
-webkit-box-shadow: 0px 0px 17px 5px rgba(0,0,0,0.45); overflow:hidden;
box-shadow: 0px 0px 17px 5px rgba(0,0,0,0.45);
border-radius:10px;
transition:0.3s;
}


.project-name  {
        margin-left:1px;margin-right:1px;
        font-size:120%;font-weight:600;letter-spacing:2px;
        font-family:'font-letter1';border-color:transparent;
        justify-content:center;height:2.5pc;background-color:transparent;width:100%;position:absolute;color:white;margin-top:-7.5pc;
}





    @media  (min-width: 100px){

    .pc {
        display: block;
    }
    .mobile {
        display: none;
    }




        .project {



        }
    }

    @media (max-width: 1000px) {

        .pc {
            display: none;

        }
        .mobile {
            display: block;
        }

        .projects {
          margin-top:27%;
        }


        .project {

        }
    }


.project-role {
  font-style: normal;
  font-size: 20px;
  color: white;
  font-family:'font-letter4';
  letter-spacing:1px;;

}
</style>
</div>




>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
</section>


<section id="section1" style="    margin-top: -125%;
    background: white;
    padding-bottom: 20%;
    padding-top: 107%;
    clip-path: ellipse(99% 16% at 49% 100%);">
<<<<<<< HEAD
      
    
</section>

<section id="section3">
      <div  style="color:white;margin-left:10%;margin-top:-10%;position: relative; ">
                <h2 style="font-family:'font-letter2';font-size:4pc;letter-spacing:0.1px;color:rgb(78 81 97);">Ajuda</h2>
                <p class="text-muted lead" style="margin-top:10%;"></p>
         
        </div>
    
=======


</section>

<section id="section3">
      <div  style="color:white;margin-left:0%;margin-top:-10%;position: relative; ">
                <h2 style="font-family:'font-letter2';font-size:2pc;text-align:center;letter-spacing:0.1px;color:rgb(78 81 97);">Tens alguma proposta ? <span style="color:#5E666E;font-size:1.8pc;padding-left:2vw;">   Envia mail para ieee@iscte-iul.pt </span></h2>
                <p class="text-muted lead" style="margin-top:10%;"></p>

        </div>

>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
</section>




@endsection
