@extends('layouts.nav')

@section('content')




<!-- Form Name -->
<section style="padding-top:3vh;border:5px solid white;background-color:white;padding-bottom:6vh;">
<h1 style="margin-top:6%;text-align:center;color:#333333;margin-bottom:4%;margin-left:auto;margin-right:auto;font-size:3vw;font-family:'font-letter2';"> Candidatura IEEE ISCTE-IUL Student Branch</h1>
<div style="margin-top:2vh;margin-bottom:10vh;width:60%;margin:auto;text-align:center;justify-content:center;">
<h1 style="line-height:3vh;font-size:1.7vh;text-align:center;justify-content:center;">

Parabéns!

Deste o primeiro passo desta que pode muito bem ser a tua melhor aventura de sempre!

Responde às perguntas que se seguem e espera por um contacto nosso.

Depois de falarmos um bocadinho, daremos a notícia se conseguiste entrar neste núcleo de estudantes.

Preparado/a?

</h1>

</div>
</section>

<section style="justify-content:center;background-color:#616877;padding-top:4%;-webkit-box-shadow: inset 0px 19px 25px -5px rgba(0,0,0,0.3);box-shadow: inset 0px 19px 25px -5px rgba(0,0,0,0.3);">
<!-- Text input-->
<form style="width:100%;padding-bottom:20vh;" action={{url("/memberapplication")}} method="post">
    @csrf
    <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-bottom:1%;">
      <div class="col-md-6" style="margin:auto;text-align:center;justify-content:center;">
      <input id="" name="member_name" class="inputstyle"style="color:white;text-decoration-line:none;border:0px;border-radius:0px;border-bottom: 3px solid white;"type="text" placeholder="Nome Completo">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;" >
      <input id="" name="phone_number" class="inputstyle" style="border:0px;border-radius:0px;border-bottom: 3px solid white;" type="text" placeholder="Nº de telemóvel" >

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
      <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid white;" name="email" type="text" placeholder="Email" class="inputstyle">

      </div>
    </div>


    <!-- Text input-->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
      <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid white;" name="student_number" type="text" placeholder="Número de Aluno" class="inputstyle">

      </div>
    </div>

    <!-- Text input-->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
      <input id="" name="student_degree" style="border:0px;border-radius:0px;border-bottom: 3px solid white;"type="text" placeholder="Curso que frequentas atualmente" class="inputstyle">

      </div>
    </div>



    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Em poucas palavras, descreve-nos o que é para ti o IEEE.</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="what_is_ieee" >Escreve aqui</textarea>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Como tiveste conhecimento do nosso núcleo de estudantes do IEEE?</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="how_did_you_find_us">Escreve aqui</textarea>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Porque gostarias de fazer parte desta organização? O que gostarias de fazer connosco?</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="reason_to_join">Escreve aqui</textarea>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Qual a tua disponibilidade semanal para te dedicares ao IEEE ISCTE-IUL SB?</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="availability">Escreve aqui</textarea>
      </div>
    </div>


    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Onde sentes que poderás acrescentar valor?</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="value_add">Escreve aqui</textarea>
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
      <label class="col-md-6 control-label" style="color:white;font-size:2.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Quando estarias pronto/a para começar?</label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <textarea class="txtarea" id="textarea" name="when_to_start">Escreve aqui</textarea>
      </div>
    </div>



    <!-- Button -->
    <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
      <label class="col-md-6 control-label" style="margin:auto;text-align:center;justify-content:center;"for="singlebutton"></label>
      <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
        <input type="submit" id="singlebutton" value="Submit" name="submitbutton" style="width:90%;" class="butpro">
      </div>
    </div>

</form>

</section>


<style>
 .inputstyle {
    border-style: none none outset none;
    border-color: whitesmoke;
    font-size: 2.1vh;
    color:white;
    width: 100%;
    padding-bottom: 2vh;
    outline: none;
    background-color:#616877;
}

.txtarea{
    border: 2px solid  white;
    outline: none;
    font-size: 20px;
    width: 100%;
    color:white;
    background-color:#616877;
    border-style: none none outset none;
    overflow: auto;
    padding-bottom: 5%;
}


::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: white;
  background-color:#616877;
}
::-moz-placeholder { /* Firefox 19+ */
  color: white;
  background-color:#616877;
}
:-ms-input-placeholder { /* IE 10+ */
  color: white;
  background-color:#616877;
}
:-moz-placeholder { /* Firefox 18- */
  color: white;
  background-color:#616877;
}


.butpro:hover, .butpro:active{

        font-size: 17px;
        transition:0.2s;
        outline:none;
      background:white;
 color:#616877; border:2px solid white;
}

    .butpro{
        margin-top: 30px;
        -webkit-background-clip: text;
        background-size: cover;background-position: center;
        font-size: 17px;
        font-family:'font-letter2';
        width: 10pc;
        padding-left:1vw;
        padding-right:1vw;
        padding-top: 1.3vh;
        padding-bottom: 1.3vh;
        text-align:center;

        color: white;
          border:2px solid white;
        outline:none;
        transition:0.2s;
  background-color:#616877;
}

</style>

@endsection
