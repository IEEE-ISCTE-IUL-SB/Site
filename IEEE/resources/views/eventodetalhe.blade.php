@extends('layouts.nav')

@section('content')

<section id="description-section">
    <div class="container">
        <div class="event-title letter3">
            Workshop Git/Github
        </div>
        <div class="event-tag-row row">
            <btn class="event-tag-button wedge-tag" href=""> CS </btn>
            <btn class="event-tag-button wedge-tag"> Workshop </btn>
            <btn class="event-tag-button wedge-tag"> Git </btn>
        </div>
        <div class="event-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut lobortis libero. Sed sodales faucibus diam, ut tristique urna pulvinar consequat. Mauris dui purus, gravida id urna in, pharetra sagittis ante. Quisque congue quam diam, vitae pharetra arcu eleifend quis. Vestibulum aliquam justo a tincidunt aliquam. Nullam porttitor nisi et elit dictum gravida. Cras feugiat, ex in varius sagittis, odio purus lobortis elit, eu rhoncus nunc tellus vel libero. Donec eleifend quam ut neque tristique iaculis. Duis nec tincidunt nisl. Proin id blandit odio. Vestibulum ullamcorper lorem in arcu bibendum tincidunt.
        </div>
    </div>
</section>

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
                </div>
            </div>
        </div>
    </div>
</section>

<section id="banner-section">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="slider-item active">
                        <div class=" vertical">
                            <div class="col-xs-12 col-md-12 slider-item-col">
                                <div class="image-holder">
                                    <img class="slider-img" src="{{asset('img/ieee1.jpg')}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">Kyoto is famous for its numerous classical Buddhist temples, gardens, imperial palaces, Shinto shrines and traditional wooden houses.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="slider-item">
                        <div class="vertical">
                            <div class="col-xs-12 col-md-12 slider-item-col">
                                <div class="image-holder">
                                    <img class="slider-img" src="{{asset('img/ieee3.jpg')}}">
                                </div>
                                <div>
                                    <div class="col-xs-9 col-md-9">
                                        <p class="slider-description">Osaka is a large port city and commercial center known for its modern architecture, nightlife and hearty street food.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
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
    }

    #detail-section {
        background: whitesmoke;
        padding: 1rem 15%;
    }

    #banner-section {
        height: auto;
        background: whitesmoke;
        padding-bottom: 1rem;
    }

    .event-title {
        font-size:60px;
        font-weight: bolder;
        text-align: left;
        color: #333;
        margin-bottom: 1rem;
    }

    .event-tag-row {
        margin-bottom: 1.5rem;
        padding-left: 1rem;
    }

    .event-tag-button {
        border-radius: 1px;
        padding: .5rem .6rem;
        margin: .3rem;
        color:white;
        background: #ecac44;
        transition: .2s;
    }

    .event-tag-button:hover {
        background: #cf9740;
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

    .detail-col {
        font-size: 18px;
    }

    .detail-title {
        font-size: 120%;
        margin-right: .5rem;
        transition: .2s;
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
        height: 10vh;
        z-index: 1;
        font-size: 1rem;
        opacity: 0;
        animation: fadeInLeft 0.8s cubic-bezier(0.23,1,0.75,1) forwards;
    }

    .slider-item-col {
        padding: 0;
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
        height: 43vh;
        object-fit: cover;
    }

    .slider-description {
        font-size: 1.25rem;
        margin: 1rem 0 0 0;
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


</style>

<script>
    const items = document.querySelectorAll('.slider-item');
    const itemCount = items.length;
    const nextItem = document.querySelector('.slider-next');
    const previousItem = document.querySelector('.slider-previous');
    var count;
    setTimeout( function() { let count = 0; }, 10);

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

        console.log(count);
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


</script>

@endsection
