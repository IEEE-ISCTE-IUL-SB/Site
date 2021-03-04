@extends('layouts.nav')

@section('content')




<!-- Form Name -->
<section style="background-color:white;padding-bottom:3vh;margin-bottom:8vh;-webkit-box-shadow: 0px 24px 27px -3px rgba(0,0,0,0.3);
box-shadow: 0px 24px 27px -3px rgba(0,0,0,0.3);">
<h1 style="margin-top:6%;text-align:center;color:#333333;margin-bottom:4%;margin-left:auto;margin-right:auto;font-size:4vw;font-family:'font-letter2';"> Inscrição em {{$event->event_name}}</h1>
<div style="margin-top:2vh;margin-bottom:5vh;width:60%;margin:auto;text-align:center;justify-content:center;">
<h1 style="line-height:3vh;font-size:1.7vh;text-align:center;justify-content:center;">

    {{$event->event_description}}
    <br> {{$event->event_registration_description}}
*Obrigatório

</h1>
  <div class="row" style="margin-top:4vh;margin-bottom:3vh;">
  <div style="width:50%;">
      <h1 style="font-family:'font-letter2';font-size:4vh;">{{ date('H:i', strtotime($event->event_time)) }} GMT</h1>
    </div>
    <div style="width:50%;">
      <h1 style="font-family:'font-letter2';font-size:4vh;">{{ date('d/m/y', strtotime($event->event_date)) }}</h1>
    </div>
  </div>
</div>
</section>

<section style="justify-content:center;">
<!-- Text input-->
    <form style="width:100%;" action={{url("/eventregistration/" . $event->id)}} method="post">
        @csrf
        <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:2%;margin-bottom:1%;">
          <div class="col-md-6" style="margin:auto;text-align:center;justify-content:center;">
          <input id="" name="insc_name" class="inputstyle"style="color:#333333;text-decoration-line:none;border:0px;border-radius:0px;border-bottom: 3px solid #333333;"type="text" placeholder="Nome Completo">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

          <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
          <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid #333333;" name="insc_email" type="text" placeholder="Email" class="inputstyle">

          </div>
        </div>

        <!-- Text input-->
        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

          <div class="col-md-6"style="margin:auto;text-align:left;justify-content:center;">
              <label for="group1" class="radio-group-label">És de que Universidade?</label>
              <fieldset id="group1" class="inputstyle">
                  <div class="row radio-row">
                    <input type="radio" value="Iscte" name="insc_uni" id="radio1-1" class="radio-item"><label for="radio1-1">Iscte</label>
                  </div>
                  <div class="row radio-row">
                      <input type="radio" value="" name="insc_uni" id="radio1-2" class="radio-item">
                      <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid #333333;" name="insc_uni_other" type="text" placeholder="Outra..." class="inputstyle radio-other-text-field">
                  </div>
              </fieldset>
          </div>
        </div>

        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

            <div class="col-md-6"style="margin:auto;text-align:left;justify-content:center;">
                <label for="group1" class="radio-group-label">Em que curso estás?</label>
                <fieldset id="group1" class="inputstyle">
                    <div class="row radio-row">
                        <input type="radio" value="LEI" name="insc_degree" id="radio2-1" class="radio-item"><label for="radio2-1">LEI</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="MEI" name="insc_degree" id="radio2-2" class="radio-item"><label for="radio2-2">MEI</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="LETI" name="insc_degree" id="radio2-3" class="radio-item"><label for="radio2-3">LETI</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="METI" name="insc_degree" id="radio2-4" class="radio-item"><label for="radio2-4">METI</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="LIGE" name="insc_degree" id="radio2-5" class="radio-item"><label for="radio2-5">LIGE</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="MIG" name="insc_degree" id="radio2-6" class="radio-item"><label for="radio2-6">MIG</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="LCD" name="insc_degree" id="radio2-7" class="radio-item"><label for="radio2-7">LCD</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="" name="insc_degree" id="radio2-8" class="radio-item">
                        <input id="textinput" style="border:0px;border-radius:0px;border-bottom: 3px solid #333333;" name="insc_degree_other" type="text" placeholder="Outra..." class="inputstyle radio-other-text-field">
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">

            <div class="col-md-6"style="margin:auto;text-align:left;justify-content:center;">
                <label for="group1" class="radio-group-label">Em que ano estás?</label>
                <fieldset id="group1" class="inputstyle">
                    <div class="row radio-row">
                        <input type="radio" value="1Ano" name="insc_year" id="radio3-1" class="radio-item"><label for="radio3-1">1º Ano</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="2Ano" name="insc_year" id="radio3-2" class="radio-item"><label for="radio3-2">2º Ano</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="3Ano" name="insc_year" id="radio3-3" class="radio-item"><label for="radio3-3">3º Ano</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="4Ano" name="insc_year" id="radio3-4" class="radio-item"><label for="radio3-4">4º Ano</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="5Ano" name="insc_year" id="radio3-5" class="radio-item"><label for="radio3-5">5º Ano</label>
                    </div>
                    <div class="row radio-row">
                        <input type="radio" value="NA" name="insc_year" id="radio3-6" class="radio-item"><label for="radio3-6">Não Aplicável</label>
                    </div>
                </fieldset>
            </div>
        </div>

        <!-- Select Basic -->

        <!-- Button -->
        <div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
          <label class="col-md-6 control-label" style="margin:auto;text-align:center;justify-content:center;"for="singlebutton"></label>
          <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
            <input type="submit" id="singlebutton" name="singlebutton" style="width:90%;"class="butpro">
          </div>
        </div>
    </form>
</section>


<style>
 .inputstyle {
    border-style: none none outset none;
    border-color: whitesmoke;
    font-size: 2.1vh;
    width: 100%;
    padding-bottom: 1rem;
    outline: none;
}

 .radio-group-label {
     margin-bottom: 1.5rem;
     font-size: 2.1vh;
 }

 .radio-other-text-field {
     width: auto;
     padding-bottom: 0.5rem;
 }

 .radio-row {
     margin-bottom: 1.3rem;
     margin-left: 0.1rem;
 }

 .radio-item {
     margin: auto 1rem;
 }

 .radio-item:after {
     width: 15px;
     height: 15px;
     border-radius: 15px;
     top: -2px;
     left: -1px;
     position: relative;
     border: solid white 3px;
     box-shadow: 0 0 0 2pt #2b2b2b;
     background-color: white;
     content: '';
     display: inline-block;
     visibility: visible;
     transition: .2s;
 }

 .radio-item:checked:after {
     width: 15px;
     height: 15px;
     border-radius: 15px;
     top: -2px;
     left: -1px;
     position: relative;
     background-color: #380e99;
     border: solid white 3px;
     box-shadow: 0 0 0 2pt #2b2b2b;
     content: '';
     display: inline-block;
     visibility: visible;
     transition: .2s;
 }



.txtarea{
    border: 2px solid  #333333;
    outline: none;
    font-size: 20px;
    width: 100%;
    border-style: none none outset none;
    overflow: auto;
    padding-bottom: 5%;
}


::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #333333;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #333333;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #333333;
}
:-moz-placeholder { /* Firefox 18- */
  color: #333333;
}


.butpro:hover, .butpro:active{
        border:2px solid  #333333;
        background:  #333333;
        color: white;font-size: 17px;
        transition:0.2s;
        outline:none;

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
        border:2px solid #585A5C;
        background:transparent;
        color:#333333;
        outline:none;
        transition:0.2s;



}
</style>

@endsection
