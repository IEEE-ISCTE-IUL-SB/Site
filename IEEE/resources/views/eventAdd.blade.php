@extends('layouts.nav')

@section('content')

<div style="background-color:#8d8c81;padding-bottom:10%;">
<form style="width:100%;background-color:#8d8c81;">


<!-- Form Name -->
<section style="background-color:white;padding-bottom:3vh;margin-bottom:10vh;-webkit-box-shadow: 0px 24px 27px -3px rgba(0,0,0,0.3); 
box-shadow: 0px 24px 27px -3px rgba(0,0,0,0.3);">
<h1 class="criar-title">Cria um evento</h1>
<div class="roulette-wrapper">

<h1 class="roulette"><span id="menjase"><span> Queres divulgar uma nova linguagem de programação através de um workshop?<span></span></h1>

  
</div>
</section>
<style>

@media  (min-width: 1000px){

.criar-title {
  margin-top:7vw;text-align:center;color:#333333;margin-bottom:2vh;margin-left:auto;margin-right:auto;font-size:4vw;font-family:'font-letter2';
}

.roulette-wrapper {
  margin-top:2.1vh;margin-bottom:7vh;width:70vw;height:20vh;margin:auto;text-align:center;justify-content:center;
}
.roulette {
  position:relative;font-size:2vw;color:#555555;font-family:'font-letter2';
}
}


@media  (max-width: 1000px){

.criar-title {
  margin-top:10vw;text-align:center;color:#333333;margin-bottom:5vw;margin-left:auto;margin-right:auto;font-size:10vw;font-family:'font-letter2';
}
.roulette-wrapper {
  margin-top:6vw;margin-bottom:10vw;padding-bottom:28vw;width:80vw;height:15vh;margin:auto;text-align:center;justify-content:center;
}

.roulette {
  position:relative;font-size:5vw;color:#555555;font-family:'font-letter2';
}

}
</style>



<section style="justify-content:center;">
<!-- Text input-->
<div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:2%;margin-bottom:1%;">
  <div class="col-md-6" style="margin:auto;text-align:center;justify-content:center;">
  <input id="" name="" class="inputstyle"style="color:white;text-decoration-line:none;border:0px;border-radius:0px;border-bottom: 3px solid white;"type="text" placeholder="Nome Próprio">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">
  
  <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;" >
  <input id="" name="" class="inputstyle" style="color:white;border:0px;border-radius:0px;border-bottom: 3px solid white;" type="text" placeholder="Nº de telemóvel" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">
  
  <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
  <input id="textinput" style="color:white;border:0px;border-radius:0px;border-bottom: 3px solid white;" name="textinput" type="text" placeholder="Email" class="inputstyle">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:4%;margin-bottom:4%;">
  
  <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
  <input id="" name="" style="color:white;border:0px;border-radius:0px;border-bottom: 3px solid white;"type="text" placeholder="Organização" class="inputstyle">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:9%;margin-bottom:10%;">
  <label class="col-md-6 control-label" style="color:white;font-size:3.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="selectbasic">Tema do evento</label>
  <div class="col-md-6" style="margin:auto;text-align:center;justify-content:center;">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group"style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
  <label class="col-md-6 control-label" style="color:white;font-size:3.5vh;margin:auto;text-align:left;justify-content:center;margin-bottom:2%;"for="textarea">Descrição do evento</label>
  <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">                     
    <textarea class="txtarea" id="textarea" style="background-color:#8d8c81;color:white"name="textarea">default text</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group" style="margin:auto;text-align:center;justify-content:center;margin-top:8%;margin-bottom:8%;">
  <label class="col-md-6 control-label" style="margin:auto;text-align:center;justify-content:center;"for="singlebutton"></label>
  <div class="col-md-6"style="margin:auto;text-align:center;justify-content:center;">
    <button id="singlebutton" name="singlebutton" style="width:90%;"class="butpro">Submit</button>
  </div>
</div>
</section>

</form>

<style>
 .inputstyle {
    border-style: none none outset none;
    border-color: white;
    font-size: 2.1vh;
    width: 100%;
    padding-bottom: 2vh;
    outline: none;
    background-color:#8d8c81;
}

.txtarea{
    border: 2px solid white;
    outline: none;
    font-size: 20px;
    width: 100%;
    border-style: none none outset none;
    overflow: auto;
    padding-bottom: 5%;
}


::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: white;
  background-color:#8d8c81;
}
::-moz-placeholder { /* Firefox 19+ */
  color: white;
  background-color:#8d8c81;
}
:-ms-input-placeholder { /* IE 10+ */
  color: white;
  background-color:#8d8c81;
}
:-moz-placeholder { /* Firefox 18- */
  color: white;
  background-color:#8d8c81;
}


.butpro:hover, .butpro:active{
        border:2px solid white;
        background:  white;
        color: #8d8c81;font-size: 17px;
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
        border:2px solid white;
        background:transparent;
        color:white;
        outline:none;
        transition:0.2s;



}
</style>

<script>

/*
 * Slogan Roulette
 *
 * @author Dmitri Chapkine 2016
 * @usage https://github.com/dchapkine/slogan-roulette
 */
(function($) {

function animate(el, x, cb) {
    //var oldclass = el.attr("class");
    el.addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
        function() {
            $(this).removeClass(x + ' animated');
            cb();
        });
};

function nextClaim(el, settings) {
    var autoplay = settings.autoplay;
    var repeat = settings.repeat;
    var interval = settings.interval;
    var outClass = settings.outClass;
    var inClass = settings.inClass;
    var slogans = settings.slogans;

    var i = ~~(el.attr("data-claim-id"));
    var theend = i >= slogans.length;
    var claim = theend ? slogans[0] : slogans[i];
    el.attr("data-claim-id", !theend ? i + 1 : (repeat == true ? 1 : i));

    if (!theend || repeat == true) {
        animate(el, outClass, function() {
            el.find("span").html(claim);
            animate(el, inClass, function() {
                if (autoplay === true) {
                    setTimeout(function() {
                        nextClaim(el, settings);
                    }, interval);
                }
            });
        });
    }
}

$.fn.sloganRoulette = function(options) {

    $(this).each(function() {

        var el = this;
        options = options || {};

        var settings = $.extend({
            autoplay: true,
            repeat: true,
            startDelay: 200,
            interval: 7000,
            outClass: "fadeOutDown",
            inClass: "fadeInDown",
            slogans: ["one", "two", "three"]
        }, options);

        $(el).css("display", "inline-block");

        if (settings.startDelay > 0) {
            setTimeout(function() {

                nextClaim($(el), settings);

            }, settings.startDelay);
        } else {
            nextClaim($(el), settings);
        }

    });

    return this;
};

}(jQuery));


(function($) {
$(document).ready(function() {
    $('#menjase').sloganRoulette({
        slogans: [" Queres fazer uma palestra sobre o teu projeto? ", " Queres divulgar uma nova linguagem de programação através de um workshop?"]
    });
})

})(jQuery);

</script>

</div>
@endsection
