@extends('layouts.nav')

@section('content')


<section id="section1" style="background:white;padding-bottom:10%;padding-top:10%;">
        <div  style="color:white;width:70%;margin-right:auto;margin-left:auto;">
                <h2 class="about-us-title" style="font-family:'font-letter2';letter-spacing:0.1px;color:rgb(78 81 97);">About us</h2>
                <p class="text-muted lad " >
                    With over 400,000 members worldwide, the IEEE is the largest association in the world of engineering. A world in which students, researchers and professionals collaborate for a common goal, technological advancement for humanity.
                    Founded on the 31st August 2012, the IEEE ISCTE-IUL Student Branch has developed an important role in the promotion and dissemination of DCTI and ISTA courses, serving as leverage for the technical and professional development of students of the department.
                    In past years, the student branch was represented in various international meetings and it was responsible for the organization of more than a dozen events and technical workshops, putting the ISCTE at the forefront of technology.
                </p>

        </div>

        <img class="pc"  src="{{asset('img/ieee2.jpg')}}" style="width:60%;margin-left:20%;margin-top:10%;">
        <img class="mobile" src="{{asset('img/ieee2.jpg')}}" style="margin-top:10%;width:100%">


</section>

<div class="container faq-w">
    <div class="faq-header">Frequently Asked Questions</div>
        <div class="faq-content">
        <div class="faq-question">
            <input id="q1" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q1" class="panel-title">How can i become a member?</label>
            <div class="panel-content">Easy, just <button onClick="{{ url('/') }}"> apply! </button> </div>
        </div>

        <div class="faq-question">
            <input id="q2" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q2" class="panel-title">What are the benefits of being a member?</label>
            <div class="panel-content"></div>
        </div>

        <div class="faq-question">
            <input id="q3" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q3" class="panel-title">Do student branches usually meet?</label>
            <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
        </div>
        <div class="faq-question">
            <input id="q4" type="checkbox" class="panel">
            <div class="plus">+</div>
            <label for="q4" class="panel-title">How often do they meet?</label>
            <div class="panel-content">Certain questions are better left &nbsp; <a href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a></div>
        </div>
    </div>
</div>

<section id="section2">
    <div class="container" style="margin-top:16%;margin-bottom:10%;">
        <h2 class="about-us-title" style="font-family:'font-letter2';letter-spacing:0.1px;color:rgb(78 81 97);text-align:center;margin-bottom:10%;margin-top:10%;">Collaborators</h2>
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
                <h2 class="about-us-title" style="text-align: center;font-family:'font-letter2';letter-spacing:0.1px;color:rgb(78 81 97);margin-bottom:10%;">Student Branches in Portugal</h2>
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

        .faq-header{
  font-size: 43px;
    }

        .faq-w{
            width:50%;
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


    .faq-header{
  font-size: 28px;
  margin:auto;
  text-align:center;
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
            font-size: 50px;
        }
    }

    @media (max-width: 568px) {
        .about-us-title {
            font-size: 38px;
        }
    }

    .faq-header{

  color:rgb(58 63 86);
  border-bottom: 1px dotted #ccc;
  padding: 24px;
  font-family:'font-letter2';
}

.faq-content {
  margin: 0 auto;

}

.faq-question {
  padding: 20px 0;
  border-bottom: 1px dotted #ccc;
}

.panel-title {
 color:rgb(66 70 90);
  font-size: 20px;
  font-family:'font-letter2';
  width: 100%;
  position: relative;
  margin: 0;
  padding: 10px 10px 0 48px;
  display: block;
  cursor: pointer;
}

.panel-content {
  font-size: 17px;
  padding: 0px 14px;
  margin: 0 40px;
  height: 0;
  color:#5b5d7a;
  overflow: hidden;
  
  position: relative;
  opacity: 0;
  font-family:'font-letter2';
  -webkit-transition: .4s ease;
  -moz-transition: .4s ease;
  -o-transition: .4s ease;
  transition: .4s ease;
}

.panel:checked ~ .panel-content{
  height: auto;
  opacity: 1;
  padding: 14px;
}

.plus {
    color:rgb(58 63 86);
  position: absolute;
  margin-left: 20px;
  margin-top: 2px;
  z-index: 5;
  font-size: 30px;
  line-height: 100%;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  -webkit-transition: .2s ease;
  -moz-transition: .2s ease;
  -o-transition: .2s ease;
  transition: .2s ease;
}

.panel:checked ~ .plus {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.panel {
  display: none;
}
</style>

<script>

    function studentBranchLink(branch_link) {
        window.location.href = (branch_link)
    }

</script>







@endsection
