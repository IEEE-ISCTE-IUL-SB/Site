@extends('layouts.nav')

@section('content')


<section id="section1" style="background:white;padding-bottom:20%;padding-top:10%;">
        <div  style="color:white;width:70%;margin-right:auto;margin-left:auto;">
                <h2 style="font-family:'font-letter2';font-size:4pc;letter-spacing:0.1px;color:rgb(78 81 97);">Sobre Nós</h2>
                <p class="text-muted lead" style="letter-spacing:0.1px;line-height:1.6pc;font-family:'font-letter1';width:95%;margin-top:10%;">
                Com mais de 400.000 membros em todo o mundo, o IEEE é a maior associação de engenharia do mundo. Um mundo no qual estudantes, pesquisadores e profissionais colaboram para um objetivo comum, o avanço tecnológico para a humanidade.
Fundado a 31 de agosto de 2012, o Branch de Estudantes do IEEE ISCTE-IUL tem desempenhado um importante papel na promoção e divulgação dos cursos do DCTI e do ISTA, servindo de alavanca para o desenvolvimento técnico e profissional dos alunos do escola.
Nos últimos anos, o student branch esteve representado em vários encontros internacionais e foi responsável pela organização de mais de uma dezena de eventos e workshops técnicos, colocando o ISCTE na vanguarda da tecnologia.
                </p>
         
        </div>

        <img  src="{{asset('img/ieee2.jpg')}}" style="width:60%;margin-left:20%;margin-top:10%;">

 
</section>


<section id="section2" style="background:white;padding-bottom:20%;padding-top:10%;">
        <div  style="color:white;width:80%;;margin-right:auto;margin-left:auto;">
                <h2 style="margin-left:auto;margin-right:auto;font-family:'font-letter2';font-size:4pc;letter-spacing:0.1px;color:rgb(78 81 97);margin-bottom:10%;">Sobre Nós</h2>
                <div class="members m-auto">
               <div class="row mx-auto">
               <div class="col m-auto " style="width:50%;padding:0px;text-align:center;justify-content:center;">
                  <div class="card branch">
                    <h1>Hello</h1>
                  </div>
               </div>   
               <div class="col m-auto" style="padding:0px;text-align:center;justify-content:center;">
                  <div class="card branch">
                    <h1>Hello</h1>
                  </div>
               </div>   
               <div class="col m-auto" style="padding:0px;text-align:center;justify-content:center;">
                  <div class="card branch" >
                    <h1>Hello</h1>
                  </div>
               </div>   
               <div class="col m-auto" style="padding:0px;text-align:center;justify-content:center;">
                  <div class="card branch" >
                    <h1>Hello</h1>
                  </div>
               </div>   
              </div>
         
        </div>

        </div>

 
</section>




<div class="container" style="margin-bottom:10%;">
<h2 style="font-family:'font-letter2';font-size:3.5pc;letter-spacing:0.1px;color:rgb(78 81 97);text-align:center;margin-bottom:10%;margin-top:10%;">Membros</h2>
  <div class="members">
    <div class="member">
      <img class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033344/itc-web-course-flexbox/richard.png">
      <h2 class="member-name">Richard Hendricks</h2>
      <span class="member-role">Founder & CEO</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033285/itc-web-course-flexbox/dinesh.png">
      <h2 class="member-name">Dinesh Chugtai</h2>
      <span class="member-role">Senior Programmer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033357/itc-web-course-flexbox/gilfoyle.png">
      <h2 class="member-name">Bertram Gilfoyle</h2>
      <span class="member-role">Chief Systems Architect</span>
    </div>
    <div class="member"><img  class="member-image"  src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/jared.png">
      <h2 class="member-name">Jared Dunn</h2>
      <span class="member-role">Chief Operating Officer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033291/itc-web-course-flexbox/monica.png">
      <h2 class="member-name">Monica Hall</h2>
      <span class="member-role">Chief Financial Officer</span>
    </div>
    <div class="member">
      <img  class="member-image" src="https://res.cloudinary.com/mlshv/image/upload/v1544033300/itc-web-course-flexbox/big-head.png">
      <h2 class="member-name">Nelson Bighetti</h2>
      <span class="member-role">Majority Investor</span>

    </div>
  </div>
</div>

<style>
.branches {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  text-align:center;
 
}

.branch {
  -webkit-box-shadow: 0px 0px 33px -3px rgba(0,0,0,0.38); 
box-shadow: 0px 0px 33px -3px rgba(0,0,0,0.38);
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
}


.members {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
}

.member-image{
    box-shadow: 0 0 black;
    border-radius:100px;
}

.member {
  text-align: center;
  flex-basis: 25%;
  padding: 24px;
  box-sizing: border-box;
  margin-bottom: 30px;
}

.member-name {
  margin: 0;
  margin-top: 18px;
  font-weight: 600;
  font-size: 20px;
  color: #333333;
  font-family:'font-letter4';
  letter-spacing:1px;
}

.member-role {
  font-style: normal;
  font-size: 18px;
  font-family:'font-letter4';
  letter-spacing:1px;
}
</style>









@endsection
