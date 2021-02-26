@extends('layouts.nav')

@section('content')

<section id="description-section">
    <div class="container">
        <div class="event-title letter3">
<<<<<<< HEAD
            Workshop Git/Github
        </div>
        <div class="event-tag-row row">
            <btn class="event-tag-button wedge-tag" href=""> CS </btn>
            <btn class="event-tag-button wedge-tag"> Workshop </btn>
            <btn class="event-tag-button wedge-tag"> Git </btn>
        </div>
        <div class="event-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut lobortis libero. Sed sodales faucibus diam, ut tristique urna pulvinar consequat. Mauris dui purus, gravida id urna in, pharetra sagittis ante. Quisque congue quam diam, vitae pharetra arcu eleifend quis. Vestibulum aliquam justo a tincidunt aliquam. Nullam porttitor nisi et elit dictum gravida. Cras feugiat, ex in varius sagittis, odio purus lobortis elit, eu rhoncus nunc tellus vel libero. Donec eleifend quam ut neque tristique iaculis. Duis nec tincidunt nisl. Proin id blandit odio. Vestibulum ullamcorper lorem in arcu bibendum tincidunt.
=======
            {{$event->event_name}}
        </div>
        <div class="event-tag-row row">
            @foreach ($event->tags as $tag)
               <a class="event-tag-button wedge-tag" href="/search/{{$tag->tag_name}}">{{$tag->tag_name}}</a>
            @endforeach
        </div>
        <div class="event-description"> {{$event->event_description}}
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
        </div>
    </div>
</section>

<<<<<<< HEAD
<section id="detail-section">
    <div class="detail-row row">
        <div class="detail-col col">
            <div class="row" style="justify-content: center">
                <div class="detail-title">
                    <i class="fa fa-calendar-o"></i>
                </div>
                <div class="detail-info">
                    Data1
                </div>
            </div>
        </div>
        <div class="detail-col col">
            <div class="row" style="justify-content: center">
                <div class="detail-title">
                    <i class="fa fa-map icon"> </i>
                </div>
                <div class="detail-info">
                    Localização
=======
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
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
                </div>
            </div>
        </div>
    </div>
</section>

<section id="banner-section">
<<<<<<< HEAD
    <div class="container">
        <div>
            <div class="col-xs-12">
                <ul class="slider slider-ul">
                    <li class="slider-item">
                        <div class=" vertical">
                            <div class="col-xs-12 col-md-12 slider-item-col">
                                <div class="image-holder">
                                    <img class="slider-img" src="{{asset('img/ieee2.jpg')}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples.</p>
=======
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
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
<<<<<<< HEAD
                    <li class="slider-item active">
                        <div class=" vertical">
                            <div class="col-xs-12 col-md-12 slider-item-col">
                                <div class="image-holder">
                                    <img class="slider-img" src="{{asset('img/ieee1.jpg')}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">Kyoto is famous for its numerous classical Buddhist temples, gardens, imperial palaces, Shinto shrines and traditional wooden houses.</p>
=======
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
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
<<<<<<< HEAD
=======
                    @endif
                    @if(!is_null($event->image3))
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
                    <li class="slider-item">
                        <div class="vertical">
                            <div class="col-xs-12 col-md-12 slider-item-col">
                                <div class="image-holder">
<<<<<<< HEAD
                                    <img class="slider-img" src="{{asset('img/ieee3.jpg')}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">Osaka is a large port city and commercial center known for its modern architecture, nightlife and hearty street food.</p>
=======
                                    <img class="slider-img" src="{{asset($event->image3)}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">{{$event->image1_description}}</p>
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
<<<<<<< HEAD
=======
                    @endif
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
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
<<<<<<< HEAD
    }

    #detail-section {
        background: whitesmoke;
        padding: 1rem 15%;
=======
        overflow: hidden;
    }

    #detail-section {
        margin-top: 1rem;
        overflow: hidden;
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
    }

    #banner-section {
        height: auto;
<<<<<<< HEAD
        background: whitesmoke;
        padding-bottom: 1rem;
=======
        padding-bottom: 1rem;
        overflow: hidden;
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
    }

    .event-title {
        font-size:60px;
        font-weight: bolder;
        text-align: left;
        color: #333;
        margin-bottom: 1rem;
    }

    .event-tag-row {
<<<<<<< HEAD
        margin-bottom: 1.5rem;
=======
        margin-bottom: 3rem;
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
        padding-left: 1rem;
    }

    .event-tag-button {
        border-radius: 1px;
        padding: .5rem .6rem;
        margin: .3rem;
        color:white;
<<<<<<< HEAD
        background: #ecac44;
        transition: .2s;
    }

    .event-tag-button:hover {
        background: #cf9740;
=======
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
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
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

<<<<<<< HEAD
=======
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

>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
    .detail-col {
        font-size: 18px;
    }

<<<<<<< HEAD
    .detail-title {
        font-size: 120%;
        margin-right: .5rem;
        transition: .2s;
=======
    .detail-info {
        text-align: center;
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
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
<<<<<<< HEAD
=======
        background-color: whitesmoke;
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
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
<<<<<<< HEAD
        margin: 1rem 0 0 0;
=======
        margin: 1rem 0 0 1rem;
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
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

<<<<<<< HEAD
=======
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

>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
    @media (max-width: 768px) {

        .slider-controls {
            margin: 0 1rem 0 0;
        }

    }


<<<<<<< HEAD
=======

>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
</style>

<script>
    const items = document.querySelectorAll('.slider-item');
    const itemCount = items.length;
    const nextItem = document.querySelector('.slider-next');
    const previousItem = document.querySelector('.slider-previous');
<<<<<<< HEAD
    var count;
    setTimeout( function() { let count = 0; }, 10);
=======
    var count = 0;
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")

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

<<<<<<< HEAD
=======
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

>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")

</script>

@endsection
