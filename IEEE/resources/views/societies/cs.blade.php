@extends('layouts.nav')

@section('content')

<section id="societylogosection">
    <img src="{{asset('img/csblack.png')}}" class="societylogo">
</section>


<section id="bannersection" class="banner-bg">
<!--    <img src="{{asset('img/csocietybackgroundbackup.jpg')}}" class="banner">-->
</section>

<section id="missionsection">
    <div class="row mission-row" >
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

<section id="descriptionsection">
    <div class="description-title">
        Sobre a Sociedade
    </div>
    <div class="description-group">
        <div class="row justify-content-center description-row">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae velit imperdiet magna molestie malesuada. Etiam eu congue nisi, vel vulputate velit. Sed luctus augue at lacus consectetur sollicitudin. Nullam dolor ipsum, consequat at metus sed, ultricies malesuada arcu. Pellentesque magna ex, tempus et feugiat eget, tempus ut magna. Ut mi augue, pharetra id dapibus non, tempor quis ex.
            </div>
        </div>
        <div class="row justify-content-center description-row">
            <div class="col-lg-6 col-md-8 col-sm-10 col-12">
                 <button type="button" class="btn btn-csociety">Junta-te a nós</button>
            </div>
        </div>
    </div>
</section>

<style>
    #societylogosection {
        position: relative;
        min-width: 100%;
        margin-bottom: 3.5%;
        margin-top: 2.5%;
    }

    #bannersection {
        background-position: 50% 35%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-image: url('{{asset('img/csocietybackground.jpg')}}');
        filter: brightness(0.5) saturate(1.3);
        height: 53vh;
    }

    #missionsection {
        margin-top: 2rem;
        overflow: hidden;
        margin-bottom: 2rem;
    }

    #descriptionsection {
        padding: 1rem 4rem;
        font-size: 18px;
    }

    .societylogo {
        max-width: 480px;
        width: 25%;
        min-width:200px;
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

    .description-title {
        color: black;
        font-weight: bolder;
        text-align: center;
        margin-bottom: 0.5rem;
    }

    .description-group {
        text-align: center;
        color: black;
    }

    .description-row {
        overflow: hidden;
        margin-top: 1rem;
    }

    .btn-csociety {
        color: #fff;
        background-color: #faa41a;
        border-color: #faa41a;
        font-weight: bold;
        letter-spacing: 0.05em;
        border-radius: 0.3rem;
    }

    .btn-csociety:hover,
    .btn-csociety:active,
    .btn-csociety:focus,
    .btn-csociety.active {
        background: #d28504;
        color: #ffffff;
        border-color: #d28504;
    }

    @media (max-width:1200px) {
        .mission-row {
            font-size: 30px;
        }
    }
    @media (max-width: 1024px) {
        .mission-row {
            font-size: 26px;
        }
    }

    @media (max-width: 768px) {
        .mission-row {
            font-size: 22px;
        }
    }

    @media (max-width: 480px) {
        .mission-row {
            font-size: 18px;
        }
    }
</style>

@endsection
