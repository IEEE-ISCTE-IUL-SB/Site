@extends('layouts.nav')

@section('content')

<section id="description-section">
    <div class="container">
        <div class="event-title letter3">
            {{$event->event_name}}
        </div>
        <div class="event-tag-row row">
            @foreach ($event->tags as $tag)
               <a class="event-tag-button wedge-tag" href="/search/{{$tag->tag_name}}">{{$tag->tag_name}}</a>
            @endforeach
        </div>
        <div class="event-description"> {{$event->event_description}}
        </div>
    </div>
</section>

<section id="detail-section" >
    <div class="container"  >
        <div class="detail-row row" id="detail-row" >
            <div class="detail-col col-12 col-lg-3">
                <div class="row" style="justify-content: center">

                    <div class="detail-info">
                        <i class="fas fa-clock"></i>
                        {{ date('H:i', strtotime($event->event_time)) }} GMT

                    </div>
                </div>
            </div>
            <div class="detail-col col-12 col-lg-3">
                <div class="row" style="justify-content: center">
                    <div class="detail-info">
                        <i class="far fa-calendar"></i>
                        {{ date('d/m/y', strtotime($event->event_date)) }}
                    </div>
                </div>
            </div>
            <div class="detail-col col-12 col-lg-6">
                <div class="row" style="justify-content: center">
                    <div class="detail-info">
                        <i class="fas @if(strcasecmp($event->event_location, 'Online') != 0) fa-map-marker-alt @else fa-globe @endif icon"> </i>
                        {{$event->event_location}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="banner-section">
    <div class="container" >
        <div>
            <div class="col-xs-12" >
                <ul class="slider slider-ul">
                    <li class="slider-item active">
                        <div class=" vertical">
                            <div class="col-xs-12 col-md-12 slider-item-col">
                                <div class="image-holder">
                                    <img class="slider-img" src="{{asset($event->image1)}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">{{$event->image1_description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @if(!is_null($event->image2))
                    <li class="slider-item">
                        <div class=" vertical">
                            <div class="col-xs-12 col-md-12 slider-item-col">
                                <div class="image-holder">
                                    <img class="slider-img" src="{{asset($event->image2)}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">{{$event->image2_description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    @if(!is_null($event->image3))
                    <li class="slider-item">
                        <div class="vertical">
                            <div class="col-xs-12 col-md-12 slider-item-col">
                                <div class="image-holder">
                                    <img class="slider-img" src="{{asset($event->image3)}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">{{$event->image1_description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                </ul>

                <div class="row justify-content-end" style="margin: 0">
                    <div class="col-xs-3">
                        <div class="slider-controls">
                            <button class="slider-previous slider-button">
                                <span class="visually-hidden">Previous</span>
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                            </button>
                            <button class="slider-next slider-button">
                                <span class="visually-hidden">Next</span>
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>

    #description-section {
        padding: 3% 15px 0;
        overflow: hidden;
    }

    #detail-section {
        margin-top: 1rem;
        overflow: hidden;
    }

    #banner-section {
        height: auto;
        padding-bottom: 1rem;
        overflow: hidden;
    }

    .event-title {
        font-size:60px;
        font-weight: bolder;
        text-align: left;
        color: #333;
        margin-bottom: 1rem;
    }

    .event-tag-row {
        margin-bottom: 3rem;
        padding-left: 1rem;
    }

    .event-tag-button {
        border-radius: 1px;
        padding: .5rem .6rem;
        margin: .3rem;
        color:white;
        background-color: #00629B;
        transition: .2s;
    }

    a.event-tag-button{
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        text-decoration: none;
        color: white;
    }

    .event-tag-button:hover {
        font-weight: bold;
        transition: .2s;
    }

    .event-description {
        font-size: 19px;
        font-weight: bold;
        line-height: 130%;
        color: #757575;
        margin-bottom: 1.5rem;
    }

    .detail-row {
        color: white;
        align-content: center;
        padding: .8rem 0;
        margin-left: 0;
        margin-right: 0;
        height: 100%;
        -webkit-clip-path: polygon(calc(100% - 15px) 0, 100% 0, 100% 100% , 0 100%,  100% 15px);
        clip-path: polygon(15px 0, 100% 0, 100% 100% , 0 100%, 0 15px);
    }

    .detail-col {
        font-size: 18px;
    }

    .detail-info {
        text-align: center;
    }

    .wedge-tag {
        -webkit-clip-path: polygon(calc(100% - 10px) 0, 100% 0, 100% 100% , 0 100%,  100% 10px);
        clip-path: polygon(10px 0, 100% 0, 100% 100% , 0 100%, 0 10px);
    }

    .slider-ul {
        line-height: 2.2;
        display: flex;
        justify-content: flex-start;
        color: black;
    }

    .slider-ul li {
        margin: 0 0 0.325rem 0;
    }

    .vertical {
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .slider-description {
        position: relative;
        min-height: 10vh;
        z-index: 1;
        font-size: 1rem;
        opacity: 0;
        animation: fadeInLeft 0.8s cubic-bezier(0.23,1,0.75,1) forwards;
    }

    .slider-item-col {
        padding: 0;
        background-color: whitesmoke;
    }

    .slider-item {
        display: none;
    }

    .slider-item.active {
        display: block;
    }

    .slider-button {
        position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        background: transparent;
        margin: 0;
        padding: 0 1rem;
        font-size: 100%;
        font: inherit;
        font-size: inherit;
        width: 55px;
        height: 55px;
    }

    .slider-button:focus {
        outline: none;
    }

    .slider-controls {
        position: relative;
        z-index: 1;
        display: flex;
        top:0
        justify-content: flex-end;
        padding: 0.25rem 0.25rem 0.25rem 0;
        margin: calc(-10vh + 0.6rem) 1rem 0 0;
    }

    .slider-previous, .slider-next {
        display: flex;
        align-content: center;
        justify-content: center;
        flex-basis: 15%;
        font-size: 3rem;
    }

    .slider-next {
        margin-left: 1rem;
    }

    .slider-previous:hover .fa, .slider-next:hover .fa {
        transform: scale(1.2);
    }

    .slider-previous .fa, .slider-next .fa {
        transition: transform 0.1s ease;
    }

    .image-holder {
        transform-origin: 100% 50%;
        animation: fadeInLeft 0.8s cubic-bezier(0.23,1,0.75,1) forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes fadeInLeft {
        0% {
            opacity: 0;
            transform: translateX(20%);
        }
        100% {
            opacity: 1;
            transform: translate(0);
        }
    }


    .slider-img {
        width: 100%;
        height: 55vh;
        object-fit: cover;
    }

    .slider-description {
        font-size: 1.25rem;
        margin: 1rem 0 0 1rem;
    }

    .slider-previous, .slider-next {
        flex-basis: 8.33%;
    }

    .visually-hidden {
        clip: rect(0 0 0 0);
        clip-path: inset(50%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        white-space: nowrap;
        width: 1px;
    }

    .CS {
        background-color: #F1B759;
    }

    a.CS:hover {
        background-color: #F1B759;
    }

    .RAS {
        background-color: #548195;
    }

    a.RAS:hover {
        background-color: #548195;
    }

    .IMS {
        background-color: #914249;
    }

    a.IMS:hover {
        background-color: #83161f;
    }

    .WIE {
        background-color: #593f73;
    }

    a.WIE:hover {
        background-color: #422d54;
    }

    .MAE {
        background-color: #001fb0;
    }

    a.MAE:hover {
        background-color: #00178a;
    }

    .defaultSociety {
        background-color: #00629B;
    }

    a.defaultSociety:hover {
        background-color: #004970;
    }

    @media (max-width: 992px) {

        .detail-info {
            margin-top: .5rem
        }

    }

    @media (max-width: 768px) {

        .slider-controls {
            margin: 0 1rem 0 0;
        }

    }



</style>

<script>
    const items = document.querySelectorAll('.slider-item');
    const itemCount = items.length;
    const nextItem = document.querySelector('.slider-next');
    const previousItem = document.querySelector('.slider-previous');
    var count = 0;

    nextItem.addEventListener('click', showNextItem);
    previousItem.addEventListener('click', showPreviousItem);

    function showNextItem() {
        items.forEach(x => {
            x.classList.remove('active')
        });

        if(count < itemCount - 1) {
            count++;
        } else {
            count = 0;
        }

        items[count].classList.add('active');
    }

    function showPreviousItem() {
        items.forEach(x => {
            x.classList.remove('active')
        });

        if(count > 0) {
            count--;
        } else {
            count = itemCount - 1;
        }

        items[count].classList.add('active');
    }

    $(document).ready(function() {
        const items = document.querySelectorAll('.event-tag-button');
        var societyColor = "defaultSociety";
        items.forEach(item => {
            switch (item.textContent) {
                case "CS":
                    societyColor = "CS";
                    break;
                case "RAS":
                    societyColor = "RAS";
                    break;
                case "IMS":
                    societyColor = "IMS";
                    break;
                case "WIE":
                    societyColor = "WIE";
                    break;
                case "MAE":
                    societyColor = "MAE";
                    break;
            }
        });
        items.forEach(item => {
            item.classList.add(societyColor);
        });
        document.getElementById("detail-row").classList.add(societyColor)
    })


</script>

@endsection
