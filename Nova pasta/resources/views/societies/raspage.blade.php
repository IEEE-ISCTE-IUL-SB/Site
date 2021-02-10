@extends('layouts.nav')

@section('content')

<section id="societylogosection">
    <img src="{{asset('img/raslogo2.png')}}" class="societylogo">
</section>

<section id="missionsection">
    <div class="row mission-row">
        <div class="col">
            Missão
        </div>
        <div class="col">
            Missão
        </div>
        <div class="col">
            Missão
        </div>
    </div>
</section>

<section id="bannersection" style="overflow:hidden;">
    <div class="row">
        <div class="col" style="background-color:red;">
            <h1>jnjnjnjvn</h1>
        </div>
        <div class="col">
            <img src="{{asset('img/rasSplash.jpg')}}" class="banner">
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

    #missionsection {
        margin-top: 2rem;
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .societylogo {
        max-width: 40%;
        width:20%;
        display: block;
        margin-left:7%;
        overflow:hidden;
        margin-right: auto;
    }

 

    .mission-row {
        text-align: center;
        overflow:hidden;
        font-size: 35px;
        color:dimgrey;
        overflow:hidden;
        font-weight: bolder;
        margin-bottom: 3%;
    }

    .banner {
        width:120%;
        overflow:hidden;

   
    }
</style>

@endsection
