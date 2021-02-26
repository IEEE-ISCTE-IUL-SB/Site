@extends('layouts.nav')

@section('content')

<section id="result-section">
    <div class="container row title-row">
        <div class="result-title col-12 col-lg-7"> Resultados da procura por "asdasdasd": </div>
        <div class="justify-content-center col-12 col-lg-5">
            <form class="search-form">
                <div class="input-group search-group-align">
                    <input type="text" class="search-input" id="search" placeholder="Workshops..." autocomplete="off">
                    <label class="search-label" for="search"><i class="fa fa-search" style="margin-left:-160%;margin-top:20%;"></i></label>
                </div>
            </form>
        </div>
    </div>

    <div class="container event-container row justify-content-center mx-auto">

        <div class="card-wrapper mx-auto col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
            <div class="event-card mx-auto">
                <img class="event-card-img-top event-img" src="{{asset('img/ieee1.jpg')}}">
                <div class="card-ellipse">
                </div>
                <div class="event-card-body">
                    <div class="event-card-body-title">
                        Event1
                    </div>
                    <div class="event-card-body-caption">
                        Event1 caption
                    </div>
                    <div class="event-card-body-seemore">
                        See more ⇀
                    </div>
                </div>
            </div>
        </div>

        <div class="card-wrapper mx-auto col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
            <div class="event-card mx-auto">
                <img class="event-card-img-top event-img" src="{{asset('img/ieee1.jpg')}}">
                <div class="card-ellipse">
                </div>
                <div class="event-card-body">
                    <div class="event-card-body-title">
                        Event1
                    </div>
                    <div class="event-card-body-caption">
                        Event1 caption
                    </div>
                    <div class="event-card-body-seemore">
                        See more ⇀
                    </div>
                </div>
            </div>
        </div>
        <div class="card-wrapper mx-auto col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
            <div class="event-card mx-auto">
                <img class="event-card-img-top event-img" src="{{asset('img/ieee1.jpg')}}">
                <div class="card-ellipse">
                </div>
                <div class="event-card-body">
                    <div class="event-card-body-title">
                        Event1
                    </div>
                    <div class="event-card-body-caption">
                        Event1 caption
                    </div>
                    <div class="event-card-body-seemore">
                        See more ⇀
                    </div>
                </div>
            </div>
        </div>
        <div class="card-wrapper mx-auto col-12 col-sm-10 col-md-6 col-lg-4 col-xl-3">
            <div class="event-card mx-auto">
                <img class="event-card-img-top event-img" src="{{asset('img/ieee1.jpg')}}">
                <div class="card-ellipse">
                </div>
                <div class="event-card-body">
                    <div class="event-card-body-title">
                        Event1
                    </div>
                    <div class="event-card-body-caption">
                        Event1 caption
                    </div>
                    <div class="event-card-body-seemore">
                        See more ⇀
                    </div>
                </div>
            </div>
        </div>


    </div>


</section>

<style>

    #result-section {
        background: linear-gradient(white, whitesmoke);
        min-height: 86.3vh;
    }

    .title-row {
        margin: auto;
        padding-top: 8vh;
        margin-bottom: 4vh;
        max-width: 78%;
    }

    .result-title {
        font-size: 30px;
        font-weight: bold;
        text-align: left;
    }

    .search-form {
        position: relative;
        margin-top: -0.5rem;
    }

    .search-label {
        position: absolute;
        right: 2%;
        top: 50%;
        transform: translatey(-50%);
        color: #A7A8A7;
        transition: all 0.2s ease;
    }

    .search-input {
        width: 100%;
        padding: 8px 30px 8px 12px;
        border: 2px solid rgba(0, 0, 0, 0.01);
        outline: none;
        font-size: 16px;
        -webkit-box-shadow: 0px 0px 16px 2px rgba(0,0,0,0.35);
        box-shadow: 0px 0px 16px 2px rgba(0,0,0,0.35);
        color: #A7A8A7;
        font-weight: bold;
        letter-spacing: 0.5px;
        border-radius: 40px;
        transition: all 0.2s ease;
        padding-left:5%;
    }

    .search-input:focus {
        border-color:white;
    }

    .search-input:focus + label {
        transform: scale(1.05) translatey(-50%);
        color: :#7e7e7e;
    }

    .search-input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #7e7e7e;
        opacity: 1; /* Firefox */
    }

    .search-group-align {
        margin-left: auto;
        margin-right:0;
        position:relative;
        width:100%;
        height:50px;
        margin-bottom:auto;
    }

    .event-container {
        max-width: 78%;
        display: flex;
        align-content: center;
        margin: auto;
    }

    .card-wrapper {
        padding: 3% 1%;
    }

    .event-card {
        overflow: hidden;
        padding: 0;
        height:24rem;
        transition:0.6s;
        border-radius:1px;
        position:relative;
        display:inline-block;
        outline: none;
        -webkit-box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.2);
        box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.2);
        width:100%;
    }

    .event-card:hover {
        -webkit-box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.4);
        box-shadow: 0px 0px 15px 5px rgba(0,0,0,0.4);
    }

    .event-card:hover > .event-card-body{
        transition: .3s;
        height:45%;
    }

    .event-card:hover > .card-ellipse{
        transition: .3s;
        height:53%;
    }

    .event-card:hover > .event-img{
        transition: .3s;
        transform:translateY(-30px);
        transform:scale(1.1, 1.1);
        filter:brightness(50%);
    }

    .event-card:hover > .event-card-body > .event-card-body-description{
        transition: .3s;
        transform:translateY(-50px);
        opacity:1;
    }

    .card-ellipse {
        position: absolute;
        transition: .3s;
        background-color: white;
        clip-path: ellipse(90% 56% at 49% 57%);
        /*clip-path: polygon(13% 0%, 100% 0, 100% 100%, 0 100%, 0% 18%);*/
        height: 45%;
        width: 100%;
        bottom: 0;
        -webkit-box-shadow: -10px 0 30px 5px #222;
        box-shadow: -10px 0 30px 5px #222;
    }

    .event-card:hover > .event-card-body > .event-card-body-caption{
        transition: .3s;
        transform:translateY(-0.5rem);
        opacity:1;
    }

    .event-card:hover > .event-card-body > .event-card-body-seemore{
        transition: .3s;
        padding-right: 3%;
        opacity:1;
    }

    .event-img {
        object-fit: cover;
        transition: .3s;
        height:65%;
    }

    .event-card-body {
        background:transparent;
        color: black;
        transition: .3s;
        height:35%;
        width:95%;
        padding-left:2rem;
        position:absolute;
        bottom:0;
    }

    .event-card-body-title {
        text-align: left;
        font-size: 40px;
        font-weight: bold;
    }

    .event-card-body-caption {
        text-align: left;
        font-size: 25px;
        padding-bottom: 0.5rem;
        padding-top: 1.5rem;
        opacity:0;
        transition: .3s;
        -webkit-line-clamp: 2;
        text-overflow: ellipsis;
        overflow : hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }

    .event-card-body-seemore {
        text-align: right;
        font-size: 18px;
        margin-bottom: 1rem;
        padding-top: 2rem;
        border-bottom: 1px solid black;
        padding-bottom: 1px;
        opacity:0;
        transition: .3s;
        -webkit-line-clamp: 2;
        overflow : hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    @media (max-width: 1700px) {

        .event-container, .title-row{
            max-width: 85%;
        }
    }

    @media (max-width: 1500px) {

        .event-container, .title-row{
            max-width: 90%;
        }
    }

    @media (min-width: 1200px) and (max-width: 1350px) {

        .event-container, .title-row{
            max-width: 95%;
        }
    }

    @media (max-width: 1200px) {

        .event-container, .title-row{
            max-width:85%;
        }

        .card-wrapper {
            padding: 3% 2%;
        }
    }

    @media (max-width: 992px) {

        .result-title {
            text-align: center;
        }

        .search-form {
            margin-top: 2rem;
        }

        .card-wrapper {
            padding: 3%;
        }

    }

    @media (max-width: 768px) {

        .event-container, .title-row{
            max-width:65%;
        }
    }

    @media (max-width: 460px) {

        .event-container, .title-row{
            max-width:75%;
        }
    }

    @media (max-width: 420px) {

        .event-container, .title-row{
            max-width:95%;
        }

        .result-title {
            font-size: 20px;
        }
    }

</style>
@endsection
