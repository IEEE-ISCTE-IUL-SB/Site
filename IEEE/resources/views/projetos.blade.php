@extends('layouts.nav')

@section('content')

<section id="section1" style="
margin-top:10%;margin-bottom:20%;">


        
        <div class="project-title">
                <h2 style="font-family:'font-letter2';letter-spacing:0.1px;">Projetos</h2>
        </div>


</section>

<section id="section1" style="text-align:center;background: rgb(111,115,139);background: linear-gradient(0deg, rgba(111,115,139,1) 0%, rgba(97,100,121,1) 4%, rgba(88,92,111,1) 8%, rgba(78,84,100,1) 15%, rgba(72,78,92,1) 23%, rgba(71,77,90,1) 35%, rgba(71,76,88,1) 42%, rgba(70,73,82,1) 66%, rgba(65,67,75,1) 81%);padding-bottom:40%;padding-top:10%;margin-top: 23%;">

        <div class="" style="clip-path: ellipse(68% 56% at 49% 97%);margin-top: -26.5%;padding-top: 26%;padding-bottom: -2%;background: linear-gradient( rgba(71,77,90,1) 35%, rgba(71,76,88,1) 42%, rgba(70,73,82,1) 66%, rgba(65,67,75,1) 81%);">
        </div>

        <div class="pc">
            <div style="color:white;position: relative;padding-top: 11%;margin-bottom: 5%;">
                    <h2 style="margin-left: -2%;font-family:'font-letter2';font-size:270%;letter-spacing:1px;margin-top: -20%;text-align:center;position: relative;margin-bottom: -17%;">Descobre o que temos para ti</h2>
            </div>
        </div>
        <div class="mobile">
        <div style="color:white;position: relative;padding-top: 11%;margin-bottom: 5%;">
                <h2 style="margin-left: %;font-family:'font-letter2';font-size:210%;letter-spacing:1px;margin-top: -10%;text-align:center;position: relative;margin-bottom: -7%;">Descobre o que temos para ti</h2>
        </div>
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

                background-image: url('{{Voyager::image($project->image_card)}}');  "></div>
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





    @media  (min-width: 1000px){

    .pc {
        display: block;
    }
    .mobile {
        display: none;
    }

    .project-title {
        color:rgb(78 81 97);
        margin-left:10%;
        font-size:370%;
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


        .project-title {
          margin-left:auto;
          margin-right:auto;
          text-align:center;
          color:rgb(78 81 97);
          font-size:310%;
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




</section>


<section id="section1" style="    margin-top: -125%;
    background: white;
    padding-bottom: 20%;
    padding-top: 107%;
    clip-path: ellipse(99% 16% at 49% 100%);">


</section>

<section id="section3">
    <div class="pc">
        <div  style="color:white;margin-left:0%;margin-top:-10%;position: relative; ">
                    <h2 style="font-family:'font-letter2';font-size:2pc;text-align:center;letter-spacing:0.1px;color:rgb(78 81 97);">Tens alguma proposta ? <span style="color:#5E666E;font-size:1.8pc;padding-left:2vw;">   Envia mail para ieee@iscte-iul.pt </span></h2>
                    <p class="text-muted lead" style="margin-top:10%;"></p>

            </div>
    </div>

    <div class="mobile">
        <div style="color:white;margin-top:-5%;position: relative;justify-content:center;margin-left:5%;margin-right:5%; ">
                    <h2 style="font-family:'font-letter2';font-size:140%;text-align:center;letter-spacing:0.1px;color:rgb(78 81 97);">Tens alguma proposta ? </h2>
                    <h2 style="font-family:'font-letter2';color:grey;font-size:140%;text-align:center;letter-spacing:0.1px;justify-content:center;margin-top:10%;margin-bottom:10%;">Envia um mail para</h2>
                    <h2 style="font-family:'font-letter1';color:#5E666E;font-size:190%;text-align:center;letter-spacing:0.1px;justify-content:center;margin-top:0%;margin-bottom:10%;">ieee@iscte-iul.pt </h2>
            </div>
    </div>
</section>




@endsection
