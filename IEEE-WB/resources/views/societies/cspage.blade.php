@extends('layouts.nav')

@section('content')

<section id="societylogosection">
    <img src="{{asset('img/csblack.png')}}" class="societylogo">
</section>

<section id="missionsection">
    <div class="row mission-row">
        <div class="col-sm col-lg col-xl">
            Missão
        </div>
        <div class="col-sm col-lg col-xl">
            Missão
        </div>
        <div class="col-sm col-lg col-xl">
            Missão
        </div>
    </div>
</section>

<section id="bannersection">
    <img src="{{asset('img/csocietybackground.jpg')}}" class="banner">
</section>

<style>
    #societylogosection {
        position: relative;
        min-width: 100%;
        padding-top: 3%;
        margin-bottom: 5%;
    }

    .societylogo {
        max-width: 500px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .mission-row {
        text-align: center;
        font-size: 35px;
        color:dimgrey;
        font-weight: bolder;
    }

    .banner {
        width:100%;
    }
</style>

@endsection
