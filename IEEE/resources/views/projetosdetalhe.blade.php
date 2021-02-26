@extends('layouts.nav')

@section('content')

<section id="section1" style="
margin-top:10%;margin-bottom:10%;height:100%;">

        <div class="project-title-wrapper">
                <h2 class="project-title">{{$project->project_name}}</h2>
        </div>


</section>

<style>

    .project-title-wrapper {
        color:rgb(78 81 97);
        margin-left:auto;
        margin-right:auto;
        text-align:center;
    }

    .project-title {
        font-family:'font-letter2';
        font-size:380%;
        letter-spacing:0.1px;
    }

    .soc3{
        color:#333333;
        transition:0.4s;
        text-decoration-line: none;
    }

    .soc3:hover, .soc3:active{
        color:#616171;
        transition:0.4s;
        text-decoration-line: none;
    }
</style>

<section id="section1" style="
margin-top:5%;margin-bottom:0%;height:100%;margin-left:5%;margin-right:5%;">
<div class="row">
                <div style="width:20%;margin-left:6.5%;margin-right:2%;">
                <div style="padding-top:10%;padding-bottom:5%;border-bottom: 1px solid #e6e6e6;border-top: 1px solid #e6e6e6;">
                       <h2 class="card"style="margin-bottom:5.5%;margin-top:2%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;">Visão</h2>
                        <a class="soc3" href="#fases-section"><h2 class="card" style="margin-bottom:5.5%;margin-top:2%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;">Fases</h2></a>
                        <a class="soc3" href="#colaboradores-section"><h2 class="card"style="margin-bottom:5%;margin-top:1%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;">Colaboradores</h2></a>
                </div>
                <div style="padding-top:10%;padding-bottom:5%;">
                        <h2 class="card"style="color:#4D5965;margin-bottom:2%;margin-top:2%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:100%;letter-spacing:0.1px;">Informações</h2>
                        <a class="info-link" href="{{$project->github}}"><h2 class="card info-text">Github</h2></a>
                        <a class="info-link" href="mailto: {{$project->email}}"><h2 class="card info-text">{{$project->email}}</h2></a>
                </div>
                </div>
                <div style="width:60%;">
                        <div style="color:rgb(78 81 97);margin-bottom:3%;margin-left:5%;margin-right:25%;">
                        <h2 class="card"style="margin-bottom:5%;margin-top:1%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:144%;letter-spacing:0.1px;">Visão</h2>
                        <h2 class="card"style="margin-bottom:2%;margin-top:1%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:120%;letter-spacing:0.1px;">Introdução</h2>
                                <h2 class="card"style="color:grey;font-family:'font-letter1';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;line-height:1.5pc;">
                                {{$project->introduction}}
                                </h2>

                        <h2 class="card"style="margin-bottom:2%;margin-top:6%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:120%;letter-spacing:0.1px;">Objetivo</h2>
                                <h2 class="card"style="color:grey;font-family:'font-letter1';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;line-height:1.5pc;">
                                {{$project->goals}}
                                </h2>
                        </div>
                </div>
 </div>

</section>

<section id="fases-section" style="
padding-top:10%;margin-bottom:5%;height:100%;margin-left:5%;margin-right:5%;">

<div class="row">
    <div style="width:20%;margin-left:6.5%;margin-right:2%;"> </div>
    <div style="width:60%;">
        <div style="color:rgb(78 81 97);margin-bottom:3%;margin-left:5%;margin-right:25%;">
        <h2 class="card"  style="margin-bottom:5%;margin-top:1%;font-family:'font-letter2';justify-content:center;border:none;text-align:justify;font-size:130%;letter-spacing:0.1px;">Fases</h2>

              @foreach($project->fases as $fase)
                        <h2 class="card"style="   display: list-item;
        list-style-type: disc;
        list-style-position: inside;color:grey;font-family:'font-letter1';justify-content:center;border:none;text-align:justify;font-size:120%;letter-spacing:0.1px;line-height:1.5pc;">
                            {{$fase->fase_description}}
                        </h2>
              @endforeach

        </div>
    </div>
</div>



</section>
<div id="colaboradores-section"class="container" style="margin-bottom:10%;padding-top:10% ">
    <h2 class="member-title">Colaboradores</h2>
    <div class="members">

        @foreach($project->members as $member)
        <div class="member">
            <img class="pc member-image" src="{{asset($member->image)}}">
            <img class="mobile member-image" src="{{asset($member->image)}}">
            <h2 class="member-name"> {{$member->member_name}} </h2>
            <span class="member-role"> {{$member->member_role}} </span>
        </div>
        @endforeach

    </div>
</div>

<style>

    .info-text {
        color:grey;
        margin-bottom:2%;
        margin-top:4%;
        font-family:'font-letter2';
        justify-content:center;
        border:none;
        text-align:justify;
        font-size:95%;
        letter-spacing:0.1px;
    }

    .info-text:hover {
        color: #5a5a5a;
        transition: 0.1s;
    }

    .info-link:hover {
        text-decoration: none;
    }

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
