@extends('layouts.app')

@section('content')
<script>
    function getFile() {
  document.getElementById("upfile").click();
}

function sub(obj) {
  var file = obj.value;
  var fileName = file.split("\\");
  document.getElementById("yourBtn").innerHTML = fileName[fileName.length - 1];
  document.myForm.submit();
  event.preventDefault();
}
</script>
<style>

/******

.view{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
 ************/
</style>
<section>
 
    <div class="title" style="border-bottom:1px solid rgb(247, 247, 247);padding-top:30px;">
        <div class="row">
            <div class="col-4" style="float:right;">
            <img id="riscos" src="{{asset('img/lines.png')}}" alt="">
            </div>
            <div class="col-4" style="font-family: 'Open Sans'; color:black;">
            <h3 style="font-weight: bold;">Submit</h3>
            </div>
             <div class="col-4" style="float:left;">
             <img id="riscos" src="{{asset('img/lines.png')}}" alt="">
            </div>
        </div>       
    </div>
    @if(session('sucess'))
    <div class="alert alert-success">
       {{session('sucess')}}
    </div>
    @endif
<div class="container" style="padding-top:20px;">
<div class="row">
<div class="col">
<form action="/article" method="POST" enctype="multipart/form-data">
   {{csrf_field()}}
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Alex Pine">
    @error('name')
       <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@is.pt">
    @error('email')
       <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Theme of your article</label>
    <select name="theme" class="form-control @error('theme') is-invalid @enderror">
      <option disabled selected>Select Theme</option>
      <option>Finance</option>
      <option>National and International Finance</option>
      <option>Financial Markets</option>
      <option>Economic and financial history</option>
      <option>State finances and social concerns</option>
      <option>Economy</option>
      <option>National and International Politics</option>
      <option>Economic Sustainability</option>
      <option>Environmental Sustainability</option>
      <option>State finances and social concerns</option>
      <option>Bolsa de valores</option>
    </select>
    @error('theme')
       <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
  <div class="form-group">
      <div id="yourBtn"  onclick="getFile()">Click to upload a file</div>
      <div style='height: 0px;width: 0px; overflow:hidden;'><input id="upfile" classe="button @error('file') is-invalid @enderror" type="file" value="upload" name="file" onchange="sub(this)" /></div>
      @error('file')
       <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="4"></textarea>
  </div>
  <div class="g-recaptcha " name="captcha" style="margin-bottom:10px; " data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
  <input type="submit"  class="button" value="Submit">
</form>
</div>
<div class="col-5">
    <div>
        <img src="{{asset('img/regras.png')}}" alt="" style="height:500px; width:450px;">
        <input type="submit"  class="button view" value="View">
    </div>
</div>
</div>
</div>
</section>


@endsection