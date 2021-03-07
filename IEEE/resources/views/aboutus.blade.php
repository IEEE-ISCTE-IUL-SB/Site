@extends('layouts.nav')

@section('content')


<section id="section1" style="background:white;padding-bottom:20%;padding-top:10%;">
        <div  style="color:white;width:70%;margin-right:auto;margin-left:auto;">
                <h2 class="about-us-title" style="font-family:'font-letter2';letter-spacing:0.1px;color:rgb(78 81 97);">Sobre Nós</h2>
                <p class="text-muted lad " >
                Com mais de 400.000 membros em todo o mundo, o IEEE é a maior associação de engenharia do mundo. Um mundo no qual estudantes, pesquisadores e profissionais colaboram para um objetivo comum, o avanço tecnológico para a humanidade.
Fundado a 31 de agosto de 2012, o Branch de Estudantes do IEEE ISCTE-IUL tem desempenhado um importante papel na promoção e divulgação dos cursos do DCTI e do ISTA, servindo de alavanca para o desenvolvimento técnico e profissional dos alunos do escola.
Nos últimos anos, o student branch esteve representado em vários encontros internacionais e foi responsável pela organização de mais de uma dezena de eventos e workshops técnicos, colocando o ISCTE na vanguarda da tecnologia.
                </p>

        </div>

        <img class="pc"  src="{{asset('img/ieee2.jpg')}}" style="width:60%;margin-left:20%;margin-top:10%;">
        <img class="mobile" src="{{asset('img/ieee2.jpg')}}" style="margin-top:10%;width:100%">


</section>

<section id="section2">
    <div class="container" style="margin-bottom:10%;">
        <h2 class="about-us-title" style="font-family:'font-letter2';letter-spacing:0.1px;color:rgb(78 81 97);text-align:center;margin-bottom:10%;margin-top:10%;">Colaboradores</h2>
        <div class="members">
            @foreach($members as $member)
            <a href="{{$member->linkedin_url}}" class="mx-auto no-hover">
                <div class="member">
                    <img class="pc member-image" src="{{Voyager::image($member->image)}}" >
                    <img class="mobile member-image" src="{{Voyager::image($member->image)}}" >
                    <h2 class="member-name">{{$member->member_name}}</h2>
                    <span class="member-role">{{$member->member_role}}</span>
                </div>
            </a>
        @endforeach
        </div>
    </div>
</section>

<section id="section3" style="background:white;margin-bottom:20%;padding-top:10%;">

        <div  style="color:white;width:80%;;margin-right:auto;margin-left:auto;">
                <h2 class="about-us-title" style="text-align: center;font-family:'font-letter2';letter-spacing:0.1px;color:rgb(78 81 97);margin-bottom:10%;">Student Branches em Portugal</h2>
                <div class="branches m-auto">
                    <div class="row mx-auto" style="align-content: center">

                        @foreach($branches as $branch)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 m-auto rhombus-wrapper" style="width:50%;text-align:center;align-content:center;">
                            <div class="card branch mx-auto" onclick="studentBranchLink('{{$branch->branch_url}}')" >
                                <h1 class="branch-text letter2"> {{$branch->university_name}} </h1>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
        </div>

</section>





<style>
    .branches {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      text-align:center;

    }

    .rhombus-wrapper {
        padding-right: 3vw;
        padding-left: 3vw;
    }

    .branch {
        -webkit-box-shadow: 0px 0px 20px -3px rgba(0,0,0,0.4), inset 0px 0px 20px -3px rgba(0,0,0,0.4), 0px 0px 20px -3px rgba(0,0,0,0.4);
        box-shadow: 0px 0px 20px -3px rgba(0,0,0,0.4), inset 0px 0px 20px -3px rgba(0,0,0,0.4), 0px 0px 20px -3px rgba(0,0,0,0.4);
        text-align: center;
        width:11pc;
        height:11pc;
        box-sizing: border-box;
        margin-bottom: 30px;
        margin-left:2pc;
        margin-right:2pc;
        margin-top:5pc;
        margin-bottom:1pc;
        transform: rotate(-45deg);
        text-align: center;
        cursor: pointer;
        background-color: #36496d;
    }

    .branch-text {
        transform: rotate(45deg);
        color: white;
        font-size: 24px;
        margin: auto;
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
        transition: .2s;
    }

    .about-us-title {
        font-size: 60px;
    }

    .no-hover:hover {
        text-decoration: none;
        color:initial;
    }

    .no-hover:hover > .member > .member-image {
        transform: scale(1.1);
        transition: .2s;
    }

    @media  (min-width: 1000px){

        .pc {
            display: block;
        }
        .mobile {
            display: none;
        }


        .member-image{
            width: 10pc;

        }

        .lad{
            letter-spacing:0.1px;line-height:1.6pc;font-family:'font-letter1';width:95%;margin-top:10%;
            font-size:2vh;
        }
    }

    @media (max-width: 1000px) {

        .pc {
            display: none;

        }
        .lad{
            letter-spacing:0.1px;line-height:1.6pc;font-family:'font-letter1';width:95%;margin-top:10%;
            font-size:2vh;
        }
        .mobile {
            display: block;
        }
        .member-image{
            width: 9pc;
        }

        .about-us-title {
            font-size: 44px;
        }
    }

    @media (max-width: 568px) {
        .about-us-title {
            font-size: 32px;
        }
    }
</style>

<script>

    function studentBranchLink(branch_link) {
        window.location.href = (branch_link)
    }

</script>







@endsection
