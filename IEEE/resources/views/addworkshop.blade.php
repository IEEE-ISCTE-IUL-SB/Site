@extends('layouts.nav')

@section('content')


<form style="width:100%;">


<!-- Form Name -->
<h1 style="margin-top:10%;text-align:center;margin-bottom:10%;margin-left:auto;margin-right:auto;font-size:4vw;font-family:'font-letter2';"> Fazer um evento</h1>
<section style="justify-content:center;">
<!-- Text input-->
<div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:5%;margin-bottom:5%;">
  <label class="col-md-4 control-label" style="margin:auto;text-align:center;justify-content:center;"for=""></label>  
  <div class="col-md-4" style="margin:auto;text-align:center;justify-content:center;">
  <input id="" name="" type="text" placeholder="Nome Próprio" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:5%;margin-bottom:5%;">
  <label class="col-md-4 control-label" style="margin:auto;text-align:center;justify-content:center;"for=""></label>  
  <div class="col-md-4"style="margin:auto;text-align:center;justify-content:center;" >
  <input id="" name="" type="text" placeholder="Nº de telemóvel" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:5%;margin-bottom:5%;">
  <label class="col-md-4 control-label" style="margin:auto;text-align:center;justify-content:center;"for="textinput"></label>  
  <div class="col-md-4"style="margin:auto;text-align:center;justify-content:center;">
  <input id="textinput" name="textinput" type="text" placeholder="Email" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:5%;margin-bottom:5%;">
  <label class="col-md-4 control-label" style="margin:auto;text-align:center;justify-content:center;"for=""></label>  
  <div class="col-md-4"style="margin:auto;text-align:center;justify-content:center;">
  <input id="" name="" type="text" placeholder="Organização" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:5%;margin-bottom:5%;">
  <label class="col-md-4 control-label" style="margin:auto;text-align:center;justify-content:center;"for="selectbasic">Tema do evento</label>
  <div class="col-md-4"style="margin:auto;text-align:center;justify-content:center;">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:5%;margin-bottom:5%;">
  <label class="col-md-4 control-label" style="margin:auto;text-align:center;justify-content:center;"for="textarea">Descrição do evento</label>
  <div class="col-md-4"style="margin:auto;text-align:center;justify-content:center;">                     
    <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:5%;margin-bottom:5%;">
  <label class="col-md-4 control-label" style="margin:auto;text-align:center;justify-content:center;"for="singlebutton"></label>
  <div class="col-md-4"style="margin:auto;text-align:center;justify-content:center;">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
</div>
</section>

</form>



@endsection
